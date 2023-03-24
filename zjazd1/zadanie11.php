<?php
function inPanagram($text)
{
    $letters = range('a', 'z');
    $string = strtolower($text);
    foreach ($letters as $char) {
        if (strpos($string, $char) === false) {
            echo (" nie jest panagramem ");
            return false;
        }
    }
    echo (" jest panagramem ");
    return true;
}

$text1 = "The quick brown fox jumps over the lazy dog";

inPanagram($text1);
?>