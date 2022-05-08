<?php
    session_start();

    include('header.html');

    if(empty($_POST['login'])) {
        include('form.html');
    } else {
        $login = "las";
        $haslo = "zgasl";

        if($_POST['login'] === $login && $_POST['haslo'] === $haslo) {
            $_SESSION['zalogowany'] = "tak";
            echo('<script>window.location.replace("https://wprg.dom133.xyz/04/licznik.php");</script>');
        } else {
            echo("Login lub hasło nie prawidłowe!");
        }
    }

    include('footer.html');
?>