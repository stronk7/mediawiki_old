#!/bin/bash

DBUSER=docs
DBPASSWD=bhfd674b34hfd

MYFULLPATH=$(readlink -f "$0")
MYDIR=$(dirname "$MYFULLPATH")
BASEDIR=$(dirname "$MYDIR")
TARGET=$BASEDIR/backups/$(date +%Y-%m-%d-%H-%M)

DBS=$(mysql -u $DBUSER -p$DBPASSWD --skip-column-names --execute="SELECT GROUP_CONCAT(schema_name SEPARATOR ' ') FROM information_schema.schemata WHERE schema_name LIKE '%docs_%'" --batch)

echo "Following databases will be dumped into $TARGET:"
echo
echo $DBS
echo

read -p "Press y to continue" -n 1 -r
echo

if [[ $REPLY =~ ^[Yy]$ ]]; then
	mkdir -p $TARGET
	for DB in $DBS; do
		echo "Dumping $DB"
		mysqldump -u $DBUSER -p$DBPASSWD $DB > $TARGET/$DB.sql
	done
fi
