<?php // MungeEmail.php   -- Martin Dougiamas, 2 April 2006

if( !defined( 'MEDIAWIKI' ) )
    die();

function MungeEmail($text) {

/// Do a quick check using stripos to avoid unnecessary work
    if (strpos($text, '@') === false) {
        return $text;
    }

/// There might be an email in here somewhere so continue ...
    $matches = array();

/// regular expression to define a standard email string.
    $emailregex = '((?:[\w\.\-])+\@(?:(?:[a-zA-Z\d\-])+\.)+(?:[a-zA-Z\d]{2,4}))';

/// pattern to find a mailto link with the linked text.
    $pattern = '|(<a\s+href\s*=\s*[\'"]?mailto:)'.$emailregex.'([\'"]?\s*>)'.'(.*)'.'(</a>)|iU';
    $text = preg_replace_callback($pattern, 'alter_mailto', $text);

/// pattern to find any other email address in the text.
    $pattern = '/(^|\s+|>)'.$emailregex.'($|\s+|\.\s+|\.$|<)/i';
    $text = preg_replace_callback($pattern, 'alter_email', $text);

    return $text;
}


function alter_email($matches) {
    return $matches[1].obfuscate_text($matches[2]).$matches[3];
}


function alter_mailto($matches) {
    return obfuscate_mailto($matches[2], $matches[4]);
}

function obfuscate_email($email) {

    $i = 0;
    $length = strlen($email);
    $obfuscated = '';
    while ($i < $length) {
        if (rand(0,2)) {
            $obfuscated.='%'.dechex(ord($email{$i}));
        } else {
            $obfuscated.=$email{$i};
        }
        $i++;
    }
    return $obfuscated;
}

function obfuscate_text($plaintext) {

    $i=0;
    $length = strlen($plaintext);
    $obfuscated='';
    $prev_obfuscated = false;
    while ($i < $length) {
        $c = ord($plaintext{$i});
        $numerical = ($c >= ord('0')) && ($c <= ord('9'));
        if ($prev_obfuscated and $numerical ) {
            $obfuscated.='&#'.ord($plaintext{$i}).';';
        } else if (rand(0,2)) {
            $obfuscated.='&#'.ord($plaintext{$i}).';';
            $prev_obfuscated = true;
        } else {
            $obfuscated.=$plaintext{$i};
            $prev_obfuscated = false;
        }
      $i++;
    }
    return $obfuscated;
}

function obfuscate_mailto($email, $label='', $dimmed=false) {

    if (empty($label)) {
        $label = $email;
    }

    return sprintf("<a href=\"%s:%s\">%s</a>", obfuscate_text('mailto'), obfuscate_email($email), obfuscate_text($label));
}

?>
