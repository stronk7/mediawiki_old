#!/bin/bash

TARGET=/var/www/vhosts/docs.moodle.org/backups
DBUSER=docs
DBPASSWD=bhfd674b34hfd

DBS=$(mysql -u $DBUSER -p$DBPASSWD --skip-column-names --execute="SELECT GROUP_CONCAT(schema_name SEPARATOR ' ') FROM information_schema.schemata WHERE schema_name LIKE '%docs_%'" --batch)

echo "Following databases will be dumped into $TARGET:"
echo
echo $DBS
echo

read -p "Press y to continue" -n 1 -r
echo

if [[ $REPLY =~ ^[Yy]$ ]]; then
	for DB in $DBS; do
		echo "Dumping $DB"
		mysqldump -u $DBUSER -p$DBPASSWD $DB > $TARGET/$DB.sql
	done
fi
