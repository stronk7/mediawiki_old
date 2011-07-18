VER=2.2.2
SUBDIR=openid-php-openid-782224d
# how to make that one predictable easily?

# http://www.mediawiki.org/wiki/Extension:OpenID
#
# This makefile automates the installation of a prerequisite for the MediaWiki OpenID extension.
#
# First download the extension which includes this makefile from
# http://www.mediawiki.org/wiki/Special:ExtensionDistributor/OpenID
#
# MediaWiki OpenID depends on the OpenIDEnabled.com PHP library for OpenID,
# which in turn depends on the OpenIDEnabled.com PHP library for YADIS.
#
# Installation:
#
#    cd $IP/extensions/OpenID
#    make
#
# The makefile downloads the openid-php library from http://www.openidenabled.com/php-openid/
# and applies a patch to avoid PHP errors because Call-time pass-by-reference is deprecated
# since PHP 5.3.x see https://github.com/openid/php-openid/issues#issue/8  and
# the patch and fork of user kost https://github.com/openid/php-openid/pull/44/files
#
# T. Gries 20110203

php-openid: Auth

Auth:	php-openid-$(VER).tar.gz
	tar -xzf php-openid-$(VER).tar.gz $(SUBDIR)/Auth
	rm -f php-openid-$(VER).tar.gz
	mv $(SUBDIR)/Auth ./
	patch -p1 -d Auth < patches/php-openid-$(VER).patch
	rmdir $(SUBDIR)

php-openid-$(VER).tar.gz:
	wget --no-check-certificate https://github.com/openid/php-openid/tarball/$(VER) -O php-openid-$(VER).tar.gz

# before starting a fresh installation or update,
# you could use "make clean" to clean up, then "make" again
clean:
	rm -rf Auth php-openid-$(VER).tar.gz
