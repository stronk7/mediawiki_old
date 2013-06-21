#!/bin/bash

DBUSER=docs
DBPASSWD=bhfd674b34hfd

DATABASES=$(echo "select distinct table_schema from information_schema.tables where engine = 'MyISAM' and table_schema != 'information_schema' and table_schema != 'mysql' and table_schema != 'performance_schema';" | mysql -u ${DBUSER} -N -p${DBPASSWD})

echo "Tables in following databases will be converted to InnoDB engine:"
echo
echo $DATABASES
echo

read -p "Press y to continue" -n 1 -r
echo

if [[ $REPLY =~ ^[Yy]$ ]]; then
	for DATABASE in ${DATABASES}; do
		TABLES=$(echo "select distinct table_name from information_schema.tables where engine = 'MyISAM' and table_schema = '${DATABASE}';" | mysql -u ${DBUSER} -N -p${DBPASSWD})
		for TABLE in ${TABLES}; do
			echo "Converting ${DATABASE}/${TABLE}"
			echo "ALTER TABLE ${TABLE} ENGINE=InnoDB;" | mysql -u ${DBUSER} -N -p${DBPASSWD} ${DATABASE}
		done
	done
	echo "Done!"
fi
