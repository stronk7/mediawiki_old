# Portions Copyright (c) 2010 OpenStack, LLC.
# Everything else Copyright (c) 2011 Wikimedia Foundation, Inc.
# all of it licensed under the Apache Software License, included by reference.

# unit test is in test_rewrite.py. Tests are referenced by numbered comments.

import webob
import webob.exc
import re
from eventlet.green import urllib2
import wmf.client
import time

# the auth system turns our login and key into an account / token pair.
# the account remains valid forever, but the token times out.
account = 'AUTH_dea4a45c-a80b-43b5-8e8b-e452f0dc778f'

class Copy2(object):
    """
    Given an open file and a Swift object, we hand back an iterator which reads from the file,
    writes a copy into a Swift object, and returns what it read.
    """
    token = 'AUTH_tk95804b3cb6a44cfd994c28742cd3333f'
    token = None

    def __init__(self, conn, app, url, container, obj, authurl, login, key, content_type=None, modified=None):
        self.app = app
        self.conn = conn
        if self.token is None:
            (account, self.token) = wmf.client.get_auth(authurl, login, key)
        if modified is not None:
            h = {'!Migration-Timestamp!': '%s' % modified}
        else:
            h = {}
        self.copyconn = wmf.client.Put_object_chunked(url, self.token,
                container, obj, content_type=content_type, headers=h)

    def __iter__(self):
        return self

    def next(self):
        data = self.conn.read(4096)
        if not data:
            # if we get a 401 error, it's okay, but we should re-auth.
            try:
                self.copyconn.close() #06 or #04 if it fails.
            except wmf.client.ClientException,err:
                self.app.logger.warn( "PUT Status: %d" % err.http_status)
                if err.http_status == 401:
                    # not worth retrying the write.
                    self.token = None
                else:
                    raise
            raise StopIteration
        self.copyconn.write(data)
        return data

class ObjectController(object):

    def __init__(self):
        self.response_args = []

    def do_start_response(self, *args):
        """ Remember our arguments but do nothing with them """
        self.response_args.extend(args)

class WMFRewrite(object):
    """
    Rewrite Media Store URLs so that swift knows how to deal.

    Mostly it's a question of inserting the AUTH_ string, and escaping the %2F's in the container section.
    """

    def __init__(self, app, conf):
        self.app = app
        self.account = account
        self.authurl = conf['url'].strip()
        self.login = conf['login'].strip()
        self.key = conf['key'].strip()

    def __call__(self, env, start_response):
      #try:
        req = webob.Request(env)
        if req.method == 'PUT':
            return self.app(env, start_response)
        reqorig = req.copy()
        # http://upload.wikimedia.org/wikipedia/commons/a/aa/000_Finlanda_harta.PNG
        # http://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/000_Finlanda_harta.PNG/75px-000_Finlanda_harta.PNG
        match = re.match(r'/(.*?)/(.*?)/(.*)', req.path)
        if req.path.startswith('/auth') or req.path.find('AUTH') >= 0:
            # if it already has AUTH, presume that it's good. #07
            return self.app(env, start_response)
        elif match:
            # https://alsted.wikimedia.org:8080/v1/AUTH_6790933748e741268babd69804c6298b/wikipedia%252Fen/2/25/Machinesmith.png
            container = match.group(2) #02
            obj = match.group(3)
            # include the thumb in the container.
            if obj.startswith("thumb/"): #03
                container += "%2Fthumb"
                obj = obj[len("thumb/"):]
            # quote slashes in the container name
            container = "%s%%2F%s" % (match.group(1), container)

            if not obj:
                # don't let them list the container (it's really FRICKING huge) #08
                return webob.exc.HTTPForbidden('No container listing')(env, start_response)

            # save a url with just the account name in it.
            req.path_info = "/v1/%s" % (self.account)
            req.host = '127.0.0.1'
            url = req.url[:]
            # Create a path to our object's name.
            req.path_info = "/v1/%s/%s/%s" % (self.account, container, urllib2.unquote(obj))

            controller = ObjectController()
            # do_start_response just remembers what it got called with, because we may want to generate a different response.
            app_iter = self.app(env, controller.do_start_response) #01
            status = int(controller.response_args[0].split()[0])
            headers = dict(controller.response_args[1])
            #self.app.logger.warn( "Status: %d" % status)

            if 200 <= status < 300 or status == 304:
                # We have it! Just return it as usual.
                #headers['X-Swift-Proxy']= `headers`
                if 'etag' in headers: del headers['etag']
                return webob.Response(status=status, headers=headers ,
                        app_iter=app_iter)(env, start_response) #01a
            elif status == 404: #4
                # go to the thumb media store for unknown files
                reqorig.host = 'ms5.pmtpa.wmnet'
                # upload doesn't like our User-agent, otherwise we could call it using urllib2.url()
                opener = urllib2.build_opener()
                opener.addheaders = [('User-agent', 'Mozilla/5.0')]
                upcopy = opener.open(reqorig.url)
                # get the Content-Type.
                uinfo = upcopy.info()
                c_t = uinfo.gettype()
                last_modified = time.mktime(uinfo.getdate('Last-Modified'))
                # Fetch from upload, write into the cluster, and return it to them.
                resp = webob.Response(app_iter=Copy2(upcopy, self.app, url,
                    urllib2.quote(container), obj, self.authurl, self.login,
                    self.key, content_type=c_t, modified=last_modified), content_type=c_t)
                resp.headers.add('Things', "%s %s %s %s %s %s %s %s" % (url, urllib2.quote(container), obj, self.authurl, self.login, self.key, c_t, last_modified))
                resp.headers.add('Last-Modified', uinfo.getheader('Last-Modified'))
                return resp(env, start_response)
            elif status == 401:
                # if the Storage URL is invalid or has expired we'll get this error.
                return webob.exc.HTTPUnauthorized('Token may have timed out')(env, start_response) #05
            else:
                return webob.exc.HTTPNotImplemented('Unknown Status: %s' % (status))(env, start_response) #10
        else:
            return webob.exc.HTTPBadRequest('Regexp failed: "%s"' % (req.path))(env, start_response) #11
      #except:
        #return webob.exc.HTTPNotFound('Internal error')(env, start_response)

def filter_factory(global_conf, **local_conf):
    conf = global_conf.copy()
    conf.update(local_conf)
    def wmfrewrite_filter(app):
        return WMFRewrite(app, conf)
    return wmfrewrite_filter

