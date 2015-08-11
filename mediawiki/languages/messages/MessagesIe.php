<?php
/** Interlingue (Interlingue)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Special',
	NS_TALK             => 'Discussion',
	NS_USER             => 'Usator',
	NS_USER_TALK        => 'Usator_Discussion',
	NS_PROJECT_TALK     => '$1_Discussion',
	NS_FILE             => 'File',
	NS_FILE_TALK        => 'File_Discussion',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_Discussion',
	NS_TEMPLATE         => 'Avise',
	NS_TEMPLATE_TALK    => 'Avise_Discussion',
	NS_HELP             => 'Auxilie',
	NS_HELP_TALK        => 'Auxilie_Discussion',
	NS_CATEGORY         => 'Categorie',
	NS_CATEGORY_TALK    => 'Categorie_Discussion',
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Usatores_activ' ),
	'Allmessages'               => array( 'Omni_li_missages' ),
	'Allpages'                  => array( 'Omni_li_págines' ),
	'Ancientpages'              => array( 'Págines_antiqui' ),
	'Blankpage'                 => array( 'Págine_in_blanc' ),
	'Block'                     => array( 'Blocar', 'Blocar_IP', 'Blocar_usator' ),
	'Booksources'               => array( 'Fontes_de_libres' ),
	'BrokenRedirects'           => array( 'Redirectionmentes_ínperfect' ),
	'ChangePassword'            => array( 'Change_parol-clave' ),
	'ComparePages'              => array( 'Comparar_págines' ),
	'Confirmemail'              => array( 'Confirmar_email' ),
	'Contributions'             => array( 'Contributiones' ),
	'CreateAccount'             => array( 'Crear_conto' ),
	'Deadendpages'              => array( 'Págines_moderat' ),
	'DeletedContributions'      => array( 'Contributiones_deletet' ),
	'DoubleRedirects'           => array( 'Redirectionmentes_duplic' ),
	'EditWatchlist'             => array( 'Redacter_liste_de_págines_vigilat' ),
	'Emailuser'                 => array( 'Email_de_usator' ),
	'Export'                    => array( 'Exportar' ),
	'Fewestrevisions'           => array( 'Revisiones_max_poc' ),
	'FileDuplicateSearch'       => array( 'Sercha_de_file_duplicat' ),
	'Filepath'                  => array( 'Viette_de_file' ),
	'Import'                    => array( 'Importar' ),
	'Invalidateemail'           => array( 'Email_ínvalid' ),
	'BlockList'                 => array( 'Liste_de_bloc', 'Liste_de_bloces', 'Liste_de_bloc_de_IP' ),
	'LinkSearch'                => array( 'Sercha_de_catenun' ),
	'Listadmins'                => array( 'Liste_de_administratores' ),
	'Listbots'                  => array( 'Liste_de_machines' ),
	'Listfiles'                 => array( 'Liste_de_files', 'Liste_de_file', 'Liste_de_figura' ),
	'Listgrouprights'           => array( 'Jures_de_gruppe_de_liste', 'Jures_de_gruppe_de_usator' ),
	'Listredirects'             => array( 'Liste_de_redirectionmentes' ),
	'Listusers'                 => array( 'Liste_de_usatores', 'Liste_de_usator' ),
	'Lockdb'                    => array( 'Serrar_DB' ),
	'Log'                       => array( 'Diarium', 'Diariumes' ),
	'Lonelypages'               => array( 'Págines_solitari', 'Págines_orfan' ),
	'Longpages'                 => array( 'Págines_long' ),
	'MergeHistory'              => array( 'Historie_de_fusion' ),
	'MIMEsearch'                => array( 'Serchar_MIME' ),
	'Mostcategories'            => array( 'Plu_categories' ),
	'Mostimages'                => array( 'Files_max_ligat', 'Plu_files', 'Plu_figuras' ),
	'Mostlinked'                => array( 'Págines_max_ligat', 'Max_ligat' ),
	'Mostlinkedcategories'      => array( 'Categories_max_ligat', 'Categories_max_usat' ),
	'Mostlinkedtemplates'       => array( 'Avises_max_ligat', 'Avises_max_usat' ),
	'Mostrevisions'             => array( 'Plu_revisiones' ),
	'Movepage'                  => array( 'Mover_págine' ),
	'Mycontributions'           => array( 'Mi_contributiones' ),
	'Mypage'                    => array( 'Mi_págine' ),
	'Mytalk'                    => array( 'Mi_discussion' ),
	'Myuploads'                 => array( 'Mi_cargamentes' ),
	'Newimages'                 => array( 'Nov_files', 'Nov_figuras' ),
	'Newpages'                  => array( 'Nov_págines' ),
	'PasswordReset'             => array( 'Recomensar_parol-clave' ),
	'PermanentLink'             => array( 'Catenun_permanen' ),

	'Preferences'               => array( 'Preferenties' ),
	'Prefixindex'               => array( 'Index_de_prefixe' ),
	'Protectedpages'            => array( 'Págines_gardat' ),
	'Protectedtitles'           => array( 'Titules_gardat' ),
	'Randompage'                => array( 'Sporadic', 'Págine_sporadic' ),
	'Randomredirect'            => array( 'Redirectionmente_sporadic' ),
	'Recentchanges'             => array( 'Nov_changes' ),
	'Recentchangeslinked'       => array( 'Changes_referet', 'Changes_relatet' ),
	'Revisiondelete'            => array( 'Deleter_revision' ),
	'Search'                    => array( 'Serchar' ),
	'Shortpages'                => array( 'Págines_curt' ),
	'Specialpages'              => array( 'Págines_special' ),
	'Statistics'                => array( 'Statistica' ),
	'Tags'                      => array( 'Puntales' ),
	'Unblock'                   => array( 'Desblocar' ),
	'Uncategorizedcategories'   => array( 'Categories_íncategorizet' ),
	'Uncategorizedimages'       => array( 'Files_íncategorizet', 'Figuras_íncategorizet' ),
	'Uncategorizedpages'        => array( 'Págines_íncategorizet' ),
	'Uncategorizedtemplates'    => array( 'Avises_íncategorizet' ),
	'Undelete'                  => array( 'Restaurar' ),
	'Unlockdb'                  => array( 'Disserrar_DB' ),
	'Unusedcategories'          => array( 'Categories_sin_use' ),
	'Unusedimages'              => array( 'Files_sin_use', 'Figuras_sin_use' ),
	'Unusedtemplates'           => array( 'Avises_sin_use' ),
	'Unwatchedpages'            => array( 'Págines_desvigilat' ),
	'Upload'                    => array( 'Cargar_file' ),
	'UploadStash'               => array( 'Cargamente_stash_de_file' ),
	'Userlogin'                 => array( 'Intrar' ),
	'Userlogout'                => array( 'Surtida' ),
	'Userrights'                => array( 'Jures_de_usator', 'Crear_administrator', 'Crear_machine' ),
	'Wantedcategories'          => array( 'Categories_carit' ),
	'Wantedfiles'               => array( 'Files_carit' ),
	'Wantedpages'               => array( 'Págines_carit', 'Catenunes_ínperfect' ),
	'Wantedtemplates'           => array( 'Avises_carit' ),
	'Watchlist'                 => array( 'Liste_de_págines_vigilat' ),
	'Whatlinkshere'             => array( 'Quo_catenunes_ci' ),
	'Withoutinterwiki'          => array( 'Sin_interwiki' ),
);

