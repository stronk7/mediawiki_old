HOWTO UPGRADE docs.moodle.org TO A NEW DEPLOY BRANCH
====================================================

Disclaimer: This is just a collection of some notes that document David's
steps when he was upgrading from REL1\_17 to REL1\_21. Do not just blindly
follow it, make sure you know what you are doing.

As a root, fix permission so that you can update the PHP files. The Apache
user should still stay owner of mediawiki/cache/ and mediawiki/??images/

Put the site into the maintenance mode via rewriting rules in conf files under
/etc/httpd/conf. Do not do it via .htaccess as we are going to replace it in
the next step.

	RewriteEngine on
	RewriteCond %{REQUEST_URI} !^/upgradeinprogress.php
	RewriteCond %{REQUEST_URI} !^/moodle-logo.png
	RewriteRule ^(.*) /upgradeinprogress.php [L]

Now fetch and checkout the new branch.

	$ git fetch origin
	$ git checkout -b REL1_21_deploy origin/REL1_21_deploy

Modify the .htaccess to keep the site in the maintenance mode and revert the change
in the main Apache conf files.

Make a backup of databases. Modify and execute:

	$ tools/dump-all-docs.sh

Make sure tables in all databases use InnoDB engine (if possible). Otherwise
they do not work well in our multi-master cluster (Galera).

	$ tools/convert-docs-to-innodb.sh

Upgrade all wiki databases:

	$ tools/upgrade-all-docs.sh

And finally restart the memcache daemon to invalidate all its caches:

	$ sudo /etc/init.d/memcached restart
