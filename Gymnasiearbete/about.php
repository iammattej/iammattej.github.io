<?php
    error_reporting (E_ALL ^ E_NOTICE ^ E_DEPRECATED);     
    session_start();
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    if (isset($_SESSION['email'])){
        header('Location: lists.php');
    }
?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>Gymnasiearbete</title>
        <link href="StyleSheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="storbox" class="indexpage">
            <header>
                <h1>Gymnasiearbete</h1>
            </header>
            <article>
                <p>
                    
                </p>
                <input class="iptftr" type="submit" value="Om denna hemsida" name="about" onClick="window.location.href='about.php'"></input>
                <input class="iptftr" type="submit" value="Frågor?" name="questions" onClick="window.location.href='questions.php'"></input>           
            </article>                
        </div>
    </body>
</html>
