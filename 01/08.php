<?php
    $a = 32;
    $b = 8;
    $c = 20;

    if($a>$b && $a>$c) {
        $tmp = $c;
        $c = $a;
        $a = $tmp;
    }

    if($a>$b && $a<$c) {
        $tmp = $b;
        $b = $a;
        $a = $tmp;
    }

    echo($a . " " . $b . " " . $c);
    echo("</br>");

    if($a<$b && $a<$c) {
        $tmp = $c;
        $c = $a;
        $a = $tmp;
    }

    if($a<$b && $a>$c) {
        $tmp = $b;
        $b = $a;
        $a = $tmp;
    }

    echo($a . " " . $b . " " . $c);
    echo("</br>");
?>