/**
 * Russian (Русский) language functions
 */

mediaWiki.language.convertGrammar = function ( word, form ) {
	/*jshint noempty:false, onecase:true */
	var grammarForms = mediaWiki.language.getData( 'ru', 'grammarForms' );
	if ( grammarForms && grammarForms[form] ) {
		return grammarForms[form][word];
	}
	switch ( form ) {
		case 'genitive': // родительный падеж
			if ( (  word.substr( word.length - 4 ) === 'вики' ) || (  word.substr( word.length - 4 ) === 'Вики' ) ) {
			} else if ( word.substr( word.length - 1 ) === 'ь' ) {
				word = word.substr(0, word.length - 1 ) + 'я';
			} else if ( word.substr( word.length - 2 ) === 'ия' ) {
				word = word.substr(0, word.length - 2 ) + 'ии';
			} else if ( word.substr( word.length - 2 ) === 'ка' ) {
				word = word.substr(0, word.length - 2 ) + 'ки';
			} else if ( word.substr( word.length - 2 )  === 'ти' ) {
				word = word.substr(0, word.length - 2 ) + 'тей';
			} else if ( word.substr( word.length - 2 ) === 'ды' ) {
				word = word.substr(0, word.length - 2 ) + 'дов';
			} else if ( word.substr( word.length - 3 ) === 'ник' ) {
				word = word.substr(0, word.length - 3 ) + 'ника';
			}
			break;
	}
	return word;
};
