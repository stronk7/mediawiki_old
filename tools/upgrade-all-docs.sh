#!/bin/bash

TARGET=/var/www/vhosts/docs.moodle.org/upgradelogs/1.21.1
DBUSER=docs
DBPASSWD=bhfd674b34hfd

DBS=$(mysql -u $DBUSER -p$DBPASSWD --skip-column-names --execute="SELECT GROUP_CONCAT(schema_name SEPARATOR ' ') FROM information_schema.schemata WHERE schema_name LIKE '%docs_%'" --batch)

echo "Following databases will be upgraded and upgrade logs will be stored into $TARGET:"
echo $DBS
echo

read -p "Press y to continue" -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]; then
	for DB in $DBS; do
		# Extract the first two characters and the part after the underscore
		GUESSMDVERSION=${DB:0:2}
		GUESSMDPATH=${DB:7}

		# The following must match the logic of LocalSettings.php
		case "$DB" in

		# /dev
		docs_development)
		MDVERSION=dev
		MDPATH=dev
		;;

		# /test
		19docs_test)
		MDVERSION=test
		MDPATH=test
		;;

		# /archive
		19docs_ar|19docs_cs|19docs_da|19docs_hu|19docs_it|19docs_ko|19docs_nl|19docs_no|19docs_pl|19docs_pt|19docs_ru|19docs_sk|19docs_zh)
		MDVERSION=archive
		MDPATH=$GUESSMDPATH
		;;

		# /all
		19docs_ca|19docs_es|19docs_fi|19docs_fr|19docs_is|19docs_eu|19docs_hr|19docs_pt_br)
		MDVERSION=all
		MDPATH=$GUESSMDPATH
		;;

		# /2x
		20docs_fr|20docs_ja)
		MDVERSION=2x
		MDPATH=$GUESSMDPATH
		;;

		# legacy wikis that were deleted and are not supported any more
		19docs_be|19docs_el|19docs_si)
		continue
		;;

		# /WX/YZ
		*)
		MDVERSION=$GUESSMDVERSION
		MDPATH=$GUESSMDPATH
		;;

		esac

		cd /var/www/vhosts/docs.moodle.org/html/mediawiki/maintenance
		sudo -u apache php update.php --mdversion $MDVERSION --mdpath $MDPATH --quick | tee $TARGET/$DB.log
	done
fi


