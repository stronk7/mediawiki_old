<?php

if ( !defined( 'MEDIAWIKI' ) ) {
    die();
}

$wgExtensionCredits['specialpage'][] = array(
    'path' => __FILE__,
    'name' => 'E-mail users',
    'author' => 'Liangent',
    'descriptionmsg' => 'emailusers-desc',
    'url' => 'http://www.mediawiki.org/wiki/Extension:EmailUsers',
);

$dir = dirname( __FILE__ ) . '/';

$wgAutoloadClasses['SpecialEmailUsers'] = $dir . 'SpecialEmailUsers.php';

$wgExtensionMessagesFiles['EmailUsers'] = $dir . 'EmailUsers.i18n.php';

$wgExtensionAliasesFiles['EmailUsers'] = $dir . 'EmailUsers.alias.php';

$wgSpecialPages['EmailUsers'] = 'SpecialEmailUsers';

$wgSpecialPageGroups['EmailUsers'] = 'users';

$wgAvailableRights[] = 'sendbatchemail';

$wgGroupPermissions['sysop']['sendbatchemail'] = true;

$wgEmailUsersMaxRecipients = 0;
$wgEmailUsersUseJobQueue = true;
