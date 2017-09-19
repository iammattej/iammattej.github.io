<?php
    error_reporting (E_ALL ^ E_NOTICE^ E_DEPRECATED);
    session_start();
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
 /*   if (!isset($_SESSION['email']))
    {
        header('Location: index.php');
        exit();
    }
    require("connect.php");
    $sql = mysql_query("SELECT `namn` FROM users WHERE id ='$id' limit 1");
    $namn = mysql_result($sql,1);*/
?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>Gymnasiearbete</title>
        <script src="JavaScript.js"></script>
        <link href="StyleSheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="storbox" class="indexpage">
            <header>
                <h1>Gymnasiearbete</h1>            </header>            <div id="search">                <input type="text" placeholder="Sök">                <input type="submit" value="Sök">            </div>            <div id="sort">                <select>                    <option value="0">Alla</option>                    <option value="1">Sport</option>                    <option value="2">Mat</option>                    <option value="3">Film</option>                    <option value="4">Böcker</option>                </select>                <input type="submit" value="Sortera">            </div>            <div>                <input type="button" value="Lägg till" onclick="window.location.href='Add.php'">            </div>            <div id="main">            </div>        </div>
    </body>
</html>
