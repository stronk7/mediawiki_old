<?php /// One simple mediawiki extension that processes all
      /// the references to bugs in the tracker, linking to them
      /// all you need is add this to your LocalSettings.php script:
      /// require_once('extensions/TrackerLinks.php');
      /// Eloy Lafuente (stronk7) - 20080522
function processTrackerLinks(&$parser, &$text, &$strip_state) {
    $url='http://tracker.moodle.org/browse';
    $title='Link to Moodle Tracker';
/// Process MDL|MDLSITE|MDLQA|CONTRIB-links
/// Using same regexp than the one in moodlelinks filter in moodle.org (Tim's spiffy new regexp) B-)
    $regexp = '#' .
              '([^\[\/])' . // Prevent expressions starting with square brackets (mediawiki links) and slashes (part of URL) to be processed
              '((?:MDL|MDLSITE|MDLQA|CONTRIB|MOBILE)-\d+)' . // The basic pattern we are trying to match (\d is any digit).
              '\b' . // At the end of a word, That is, we don't want to match MDL-123xyz, but we don't care if we are followed by a space, punctionation or ...
              '(?![^\'"<>]*[\'"]\s*(?:\w+=[\'"][^\'"]*[\'"])*\\\?>)' . // Try to avoid matching if we are inside a HTML attribute. relies on having moderately well-formed HTML.
              '(?![^<]*</a>)' . // Try to avoid matching inside another link. Can be fooled by HTML like: <a href="..."><b>MDL-123</b></a>.
              '#';
    $text = preg_replace($regexp, "\\1[{$url}/\\2 \\2]", $text);
    return true;
}
$wgHooks['InternalParseBeforeLinks'][] = 'processTrackerLinks'; ///Moved from original ParserAfterStrip hook because
                                                                ///that hook wasn't being processed in template inclusion
                                                                ///See https://bugzilla.wikimedia.org/show_bug.cgi?id=3438
?>
