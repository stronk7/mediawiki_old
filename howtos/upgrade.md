HOWTO UPGRADE docs.moodle.org TO A NEW DEPLOY BRANCH
====================================================

Disclaimer: This is just a collection of some notes that document David's
steps when he was upgrading from REL1\_17 to REL1\_21. Do not just blindly
follow it, make sure you know what you are doing.

As a root, fix permission so that you can update the PHP files. The Apache
user should still stay owner of mediawiki/cache/ and mediawiki/??images/

Put the site into the maintenance mode. In .htaccess, uncomment the following
lines:

	RewriteCond %{REQUEST_URI} !^/upgradeinprogress.php
	RewriteCond %{REQUEST_URI} !^/moodle.gif
	RewriteCond %{REQUEST_URI} !^/invaders.swf
	RewriteRule ^(.*) /upgradeinprogress.php [L]

and comment out the following one:

	#Redirect /upgradeinprogress.php http://docs.moodle.org/

Now fetch and checkout the new branch. It may collide with the currently
modified .htaccess so may want to try something like:

	$ git remote update
	$ git stash && git checkout -b REL1_21_deploy origin/REL1_21_deploy && git stash pop

and then quickly make sure that the .htaccess is valid again and the site is
in the maintenance mode.

Get the list of all databases:

	$ mysql -u {USER} -p{PASSWD} -h {HOST} -B -N -e "SELECT DISTINCT table_schema FROM information_schema.tables" | grep '.*docs_.*'

Make sure all databases are migrated to InnoDB engine. Otherwise they do not work well in our
multi-master cluster (Galera):

	$ echo "SELECT concat('ALTER TABLE ',TABLE_NAME,' ENGINE=InnoDB;') FROM Information_schema.TABLES  WHERE ENGINE != 'InnoDB' AND TABLE_TYPE='BASE TABLE'  AND TABLE_SCHEMA='{DATABASENAME}';" | mysql -u {USER} -p{PASSWD} -h {HOST} > convert.sql
	$ vi convert.sql # remove the first line
	$ mysql -u {USER} -p{PASSWD} -h {HOST} {DATABASENAME} < convert.sql

Upgrade the development wiki:

	$ cd /var/www/vhosts/docs.sandbox.in.moodle.com/html/mediawiki/maintenance
	$ sudo -u apache php update.php --mdversion dev --mdpath dev | tee ~/update-dev.log

Upgrade all archive wikis (e.g. ar, be, cs, da etc):

	$ sudo -u apache php update.php --mdversion archive --mdpath ar | tee ~/update-archive-ar.log

Upgrade all other wikis:

	$ sudo -u apache php update.php --mdversion 20 --mdpath de | tee ~/update-20-de.log

You should restart the memcache daemon now (I have not found any better way to invalidate its caches).
