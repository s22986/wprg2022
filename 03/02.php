<html>
    <body>
        <title>02 - Podsumowanie rezerwacji</title>
        <meta charset="UTF-8" />
    </body>

    <head>
        <?php
            if(!empty($_POST['gLiczba'])) {
                echo "<h3><b>Podsumowani rezerwacji</b></h3>";
                echo "<p>Liczba gości: <b>" . $_POST['gLiczba'] . "</b></p>";
                echo "<p>Imie: <b>" . $_POST['imie'] . "</b></p>";
                echo "<p>Nazwisko: <b>" . $_POST['nazwisko'] . "</b></p>";
                echo "<p>Adres: <b>" . $_POST['adres'] . "</b></p>";
                echo "<p>E-mail: <b>" . $_POST['email'] . "</b></p>";
                echo "<p>Nr karty płatniczej: <b>" . $_POST['karta'] . "</b></p>";
                echo "<p>Data pobytu: <b>" . $_POST['data'] . "</b></p>";

                if(!empty($_POST['gPrzyjazdu'])) {
                    echo "<p>Godzina przyjazdu: <b>" . $_POST['gPrzyjazdu'] . "</b></p>";
                }

                
                echo "<p>Pokój dla pary z dzieckiem: <b>" .(!empty($_POST['dziecko']) ? $_POST['dziecko'] : "nie")  . "</b></p>";

                echo "<p><b>Udogodnienia:</b></p>";

                echo "<p>Klimatyzacja: <b>" .(!empty($_POST['klima']) ? $_POST['klima'] : "nie" )  . "</b></p>";
                echo "<p>Widok na morze: <b>" .(!empty($_POST['morze']) ? $_POST['morze'] : "nie" )  . "</b></p>";
                echo "<p>Możliwość rezygnacji z rezerwacji na 24h przed przyjazdem: <b>" .(!empty($_POST['rezerwacja']) ? $_POST['rezerwacja'] : "nie" )  . "</b></p>";

                if (!file_exists('./csv')) {
                    mkdir('./csv', 0777, true);
                    $dane = array (
                        array("imie", "nazwisko", "liczba_gosci", "adres"),
                        array($_POST['imie'], $_POST['nazwisko'], $_POST['gLiczba'], $_POST['adres'])
                    );
                } else {
                    $dane = array (
                        array($_POST['imie'], $_POST['nazwisko'], $_POST['gLiczba'], $_POST['adres'])
                    );
                }

                if (!file_exists('./txt')) {
                    mkdir('./txt', 0777, true);
                }

                if($file = fopen('csv/hotel.csv', 'a')) {
                    foreach ($dane as $row) {
                        fputcsv($file, $row);
                    }
                    
                    fclose($file);
                }

                if($file = fopen('txt/hotel.txt', 'a')) {
                    $str = "Email: " . $_POST['email'] . ", Nr karty płatniczej: " . $_POST['karta'] . ", Data pobytu: " . $_POST['data'] . 
                        ", Pokój dla pary z dzieckiem: " . (!empty($_POST['dziecko']) ? $_POST['dziecko'] : "nie") . ", Klimatyzacja: " .(!empty($_POST['klima']) ? $_POST['klima'] : "nie" ) .
                        ", Widok na morze: " .(!empty($_POST['morze']) ? $_POST['morze'] : "nie" ) . ", Możliwość rezygnacji z rezerwacji na 24h przed przyjazdem: " . (!empty($_POST['rezerwacja']) ? $_POST['rezerwacja'] : "nie" );
                    $str = chr(hexdec('EF')).chr(hexdec('BB')).chr(hexdec('BF')) . $str . PHP_EOL;

                    fwrite($file, $str);
                    fclose($file);
                }
            }
        ?>
    </head>
</html>