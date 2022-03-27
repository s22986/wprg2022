<?php
    $text = "The quick brown fox jumps over the lazy dog";
    $text = str_replace(" ", "", $text);
    $text = strtolower($text);
    $alphabet = range('a', 'z');

    if(strlen($text) < 26) {
        echo("false");
    } else {
        for($i=0; $i < 26; $i++) {
            if(strpos($text, $alphabet[$i])<0) {
                echo("false");
            }
        }
        echo("true");
    }
?>