<?php
/**
 * Aliases for the special pages of the Storyboard extension.
 *
 * @file Storyboard.alias.php
 * @ingroup Storyboard
 *
 * @author Jeroen De Dauw
 */

$specialPageAliases = array();

/** English (English) */
$specialPageAliases['en'] = array(
	'StoryReview' => array( 'StoryReview' ),
	'Story' => array( 'Story' ),
	'StorySubmission' => array( 'StorySubmission' ),
);

/** Arabic (العربية) */
$specialPageAliases['ar'] = array(
	'StoryReview' => array( 'مراجعة_القصة' ),
	'Story' => array( 'قصة' ),
	'StorySubmission' => array( 'إرسال_القصة' ),
);

/** Breton (Brezhoneg) */
$specialPageAliases['br'] = array(
	'Story' => array( 'Istor' ),
);

/** Persian (فارسی) */
$specialPageAliases['fa'] = array(
	'StoryReview' => array( 'بازبینی_داستان' ),
	'Story' => array( 'داستان' ),
);

/** Finnish (Suomi) */
$specialPageAliases['fi'] = array(
	'Story' => array( 'Tarina' ),
	'StorySubmission' => array( 'Tarinan_lisäys' ),
);

/** Haitian (Kreyòl ayisyen) */
$specialPageAliases['ht'] = array(
	'StoryReview' => array( 'RevizyonIstwa' ),
	'Story' => array( 'Istwa' ),
	'StorySubmission' => array( 'SoumètIstwa' ),
);

/** Interlingua (Interlingua) */
$specialPageAliases['ia'] = array(
	'StoryReview' => array( 'Revision_de_historia' ),
	'Story' => array( 'Historia' ),
	'StorySubmission' => array( 'Submission_de_historia' ),
);

/** Luxembourgish (Lëtzebuergesch) */
$specialPageAliases['lb'] = array(
	'StoryReview' => array( 'Annekdot_nokucken' ),
	'Story' => array( 'Annekdot' ),
	'StorySubmission' => array( 'Annekdot_aschécken' ),
);

/** Macedonian (Македонски) */
$specialPageAliases['mk'] = array(
	'StoryReview' => array( 'ОценувањеНаПриказна' ),
	'Story' => array( 'Приказна' ),
	'StorySubmission' => array( 'ПоднесувањеНаПриказна' ),
);

/** Malayalam (മലയാളം) */
$specialPageAliases['ml'] = array(
	'StoryReview' => array( 'കഥസംശോധനം' ),
	'Story' => array( 'കഥ' ),
	'StorySubmission' => array( 'കഥസമർപ്പിക്കൽ' ),
);

/** Dutch (Nederlands) */
$specialPageAliases['nl'] = array(
	'StoryReview' => array( 'Verhaalcontrole' ),
	'Story' => array( 'Verhaal' ),
	'StorySubmission' => array( 'VerhaalInzenden' ),
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬) */
$specialPageAliases['no'] = array(
	'Story' => array( 'Historie' ),
);

/** Simplified Chinese (‪中文(简体)‬) */
$specialPageAliases['zh-hans'] = array(
	'Story' => array( '故事' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;