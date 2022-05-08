<html>
    <body>
        <title>01 - Kalkulator</title>
        <meta charset="UTF-8" />
    </body>

    <head>
        <form action="01.php" method="get">
            <label for="al">Pierwsza Liczba:</label><br>
            <input type="number" id="al" name="al" required><br>

            <label for="bl">Druga Liczba:</label><br>
            <input type="number" id="bl" name="bl" required><br>

            <label for="dzialanie">Działanie:</label><br>
            <select id="dzialanie" name="dzialanie">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
            </select><br><br>

            <input type="submit" value="Wykonaj">
        </form>
        
        <?php
            if(!empty($_GET['al'])) {
                $wynik = 0;
                switch($_GET['dzialanie']) {
                    case '+': {
                        $wynik = $_GET['al'] + $_GET['bl'];
                        break;
                    }

                    case '-': {
                        $wynik = $_GET['al'] - $_GET['bl'];
                        break;
                    }

                    case '/': {
                        $wynik = $_GET['al'] / $_GET['bl'];
                        break;
                    }

                    case '*': {
                        $wynik = $_GET['al'] * $_GET['bl'];
                        break;
                    }
                }
                echo  "<h2><b>" . $_GET['al'] . " " . $_GET['dzialanie'] . " " . $_GET['bl'] . " = " . $wynik . "</b></h2><br>";
                
                if (!file_exists('./txt')) {
                    mkdir('./txt', 0777, true);
                }

                if($file = fopen('txt/dzialania.txt', 'a')) {
                    $str = $_GET['al'] . " " . $_GET['dzialanie'] . " " . $_GET['bl'] . " = " . $wynik;
                    $str = chr(hexdec('EF')).chr(hexdec('BB')).chr(hexdec('BF')) . $str . PHP_EOL;

                    fwrite($file, $str);
                    fclose($file);
                }
            }
        ?>
    </head>
</html>