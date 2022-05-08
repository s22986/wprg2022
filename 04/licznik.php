<?php
    session_start();
    
    include('header.html');
    if(!isset($_COOKIE["licznik"])) {
        setcookie("licznik", 2, time() + (60 * 60 * 24 * 7));
    } else {
        setcookie("licznik", $_COOKIE["licznik"] + 1, time() + (60 * 60 * 24 * 7));
    }

    echo "<p>Odwiedziłęś strone po raz: ". $_COOKIE["licznik"]." </p> <br />";

    if(isset($_SESSION['zalogowany'])) {
        if(!isset($_SESSION['licznik'])) {
            $_SESSION['licznik'] = 1;
        } else {
            $_SESSION['licznik']++;
        }

        echo "<p><b>Jako zalogowany użytkownik odwiedziłeś tę strone po raz: ".$_SESSION['licznik']."</b></p>";
    }

    include('footer.html');
?>