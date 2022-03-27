<?php
    $s = "*";
    $l = 3;

    for($i=0; $i<$l; $i++){
        for($j=0; $j<=$i; $j++){
            echo($s);
        }
        echo("<br/>");
    }

    for($i=$l; $i>0; $i--){
        for($j=0; $j<$i; $j++){
            echo($s);
        }
        echo("<br/>");
    }

    for($i=0; $i<$l; $i++){
        for($j=0; $j<$i; $j++){
            echo("&nbsp&nbsp");
        }

        for($j=$l; $j>$i; $j--){
            echo($s);
        }
        echo("<br/>");
    }

    for($i=$l; $i>0; $i--){
        for($j=0; $j<$i; $j++){
            echo("&nbsp&nbsp");
        }
        
        for($j=$l; $j>$i-1; $j--){
            echo($s);
        }
        echo("<br/>");
    }
?>