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
                <h1>Gymnasiearbete</h1>            </header>            <form>            <div class=additem> 
                        <label class="lblform">Namn på lista*:</label>
                        <input type="text" class="inpttxt" id="namninpttxt" name="Namn" maxlength="25" value="">
                    </div>
                    <div class=additem>
                        <label class="lblform">Kategori*:</label>
                        <select class="select addsct" id="Kategori" name="Kaegori">
                            <option value="" disabled selected>Kategori</option>
                            <option value="1">Sport</option>                            <option value="2">Mat</option>                            <option value="3">Film</option>                            <option value="4">Böcker</option>                        </select>
                        <script type="text/javascript">
                            document.getElementById('Kategori').value = "";
                        </script>
                    </div>
                    <div class=additem>
                        <label>Listan*:</label>
                        <br>
                        <span>1.    </span><input type="text">
                        <br>
                        <input type="submit" value="Ny">
                    </div>
                    <input type="submit" name="addbtn" value="Lägg till">
                </form>
        </div>
    </body>
</html>
