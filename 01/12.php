<?php
    $macierz = array(
        array(6,2),
        array(95, 89),
        array(100, 10),
        array(77, 19),
        array(94, 59),
        array(2, 91),
        array(11, 90)
    );

    $m_l = count($macierz);

    for($i=0; $i< $m_l; $i++){
        echo ($macierz[$i][0] . " ");
    }

    echo("<br/>");

    for($i=0; $i< $m_l; $i++){
        echo ($macierz[$i][1] . " ");
    }
?>