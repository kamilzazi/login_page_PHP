<html>
    <head>
        <meta http-equiv='content-type' content="text/html" charset="UTF-8"/>
        <title>Strona odbierająca dane</title>
    </head>
    <body>
        <?php
            if (isset($_POST['login']) && isset($_POST['haslo']))
            {
                if (!empty($_POST['login']) && !empty($_POST['haslo']))
                {
                    $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
                    $haslo = filter_var($_POST['haslo'], FILTER_SANITIZE_STRING);
                    
                    if ($login == 'admin' && $haslo == '123')
                    {
                        echo "Gratulacje, zalogowałeś się jako ".$login."<br>";
                        echo "PANEL ADMINISTRACYJNY";
                        echo "<br><a href='index.php'><input type='submit' value='Wyloguj'></a>";
                        
                    }   
                    else
                        echo "Nieprawidłowy login lub hasło. Spróbuj ponownie : <a href='index.php'>tutaj</a>";
                }
                else
                    echo "Brak loginu lub hasła, spróbuj ponownie tutaj: <a href='index.php'>tutaj</a>";
            }
            else
                echo "Nie podałeś loginu lub hasla. Spróbuj ponownie <a href='index.php'>tutaj</a>";
        
           
            
        ?>
    
    </body>
</html>