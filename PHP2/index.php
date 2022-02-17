<?php
    session_start();

    if (isset($_SESSION['zalogowany']) && ($_SESSION['zalogowany']) == true)
    {
        header('Location: gra.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="description" content="PHP2">
    <meta name="author" content="Michał">
    <title>Zaloguj</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1> Zaloguj się do gry Osadnicy <h2>
        <form action="zaloguj.php" method="post">      

            <input type="text" name="log" id="log" placeholder="login" onclick="this.placeholder=''" onblur="this.placholder='haslo'">

            <input type="password" name="pass" id="pass" placeholder="hasło" onclick="this.placeholder=''" onblur="this.placholder='haslo'">

            <input type="submit" value="Zaloguj" class="btn">/-

            <div class="r-btn"><a href="rejestracja.php">Zarejestruj się</a></div>
<?php

            if (isset($_SESSION['blad']))
            {
                echo '<div class="blad">'.$_SESSION['blad']."</div>";
            }
    
?>
           
        </form>
    </div>  
</body>
</html>