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
                        <label class="lblform">Namn på receptet*:</label>
                        <input type="text" class="inpttxt" id="namninpttxt" name="Namn" maxlength="25" value="">
                    </div>
                    <div class=additem>
                        <label class="lblform">Antal portioner*:</label>
                        <select class="select addsct" id="Port" name="Port">
                            <option value="" disabled selected>Antal portioner</option>
                            <option>1 portion</option>
                            <option>2 portioner</option>
                            <option>3 portioner</option>
                            <option>4 portioner</option>
                            <option>5 portioner</option>
                            <option>6 portioner</option>
                            <option>7 portioner</option>
                            <option>8 portioner</option>
                        </select>
                        <script type="text/javascript">
                            document.getElementById('Port').value = "";
                        </script>
                    </div>
                    <div class=additem>
                        <label class="lblform">Tillagningstid*:</label>
                        <select class="select addsct" id="Tid" name="Tid">
                            <option value="" disabled selected>Tillagningstid</option>
                            <option>5 min</option>
                            <option>10 min</option>
                            <option>15 min</option>
                            <option>20 min</option>
                            <option>30 min</option>
                            <option>40 min</option>
                            <option>45 min</option>
                            <option>50 min</option>
                            <option>1 timme</option>
                            <option>1 timme och 30 min</option>
                            <option>2 timmar</option>
                            <option>3 timmar</option>
                            <option>4 timmar</option>
                            <option>5 timmar</option>
                            <option>6 timmar</option>
                        </select>
                        <script type="text/javascript">
                            document.getElementById('Tid').value = "";
                        </script>
                    </div>
                    <div class=additem>
                        <label class="lblform">Typ av måltid*:</label>
                        <select class="select addsct" id="Måltid" name="Måltid">
                            <option value="" disabled selected>Typ av måltid</option>
                            <option>Frukost</option>
                            <option>Lunch</option>
                            <option>Mellanmål</option>
                            <option>Förrätt</option>
                            <option>Varmrätt</option>
                            <option>Efterrätt</option>
                            <option>Smårätter</option>
                        </select>
                        <script type="text/javascript">
                            document.getElementById('Måltid').value = "";
                        </script>
                    </div>
                    <div class=additem>
                        <label class="lblform">Huvudingrediens*:</label>
                        <select class="select addsct" id="Huvudind" name="Huvudind">
                            <option value="" disabled selected>Huvudingrediens</option>
                            <option>Pasta</option>
                            <option>Fisk</option>
                            <option>Kött</option>
                            <option>Kyckling</option>
                            <option>Köttfärs</option>
                            <option>Vegetariskt</option>
                        </select>
                        <script type="text/javascript">
                            document.getElementById('Huvudind').value = "";
                        </script>
                    </div>
                    <div class=additem>
                        <label class="lblform">Typ av recept:</label>
                        <select class="select addsct" id="Typ" name="Typ">
                            <option value="">Typ av recept</option>
                            <option>Lasange</option>
                            <option>Pizza</option>
                            <option>Burgare</option>
                            <option>Sallad</option>
                            <option>Biffar</option>
                            <option>Soppa</option>
                            <option>Gratäng</option>
                            <option>Paj</option>
                            <option>Pastarätt</option>
                        </select>
                        <script type="text/javascript">
                            document.getElementById('Typ').value = "";
                        </script>
                    </div>
                    <div class=additem>
                        <label class="lblform lbltxtara">Beskrivning av receptet*:</label>
                        <textarea id="Besktxtara" maxlength="100" name="Besk"></textarea>
                    </div>
                    <div class=additem>
                        <label class="lblform lbltxtara">Ingredienser*:</label>
                        <textarea id="Indtxtara" maxlength="10000" name="Ind"></textarea>
                        <br><label class="stxt"><strong>OBS!</strong> Var vänlig och separara ingredienserna med ett kommatecken och mellanslag</label>
                    </div> 
                    <div class=additem>
                        <label class="lblform lbltxtara">Hur man gör*:</label>
                        <textarea id="Hurtxtara" maxlength="500" name="Hur"></textarea>
                    </div>
                    <label class="stxt">Genom att lägga till ett recept godkänner du våra <a href="../Terms">Användarvilkor</a></label><br>
                    <input type="submit" name="addbtn" class="Knapp bgc hvr" value="Lägg till">
                </form>
        </div>
    </body>
</html>
