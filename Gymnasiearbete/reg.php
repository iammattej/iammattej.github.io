<?php
    error_reporting (E_ERROR | E_PARSE); 
    
    session_start();
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];
    if (isset($_SESSION['username'])){
        header('Location: choose.php');
    }
?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>Lund Superbowl</title>
        <link href="StyleSheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="storbox" class="indexpage">
            <header>
                <h1>Gymnasiearbete</h1>
            </header>
            <article style="height: 65%;">
                <?php
                    if ($_POST['loginbtn']) {
                        header('Location: index.php');   
                     }
                        $FullNameErr = $EmailErr = $PasswordErr = $RePasswordErr = "";
                        $FullName = $Email = $Password = $RePassword ="";
                        $ErrCount = '1';

                        if ($_POST['regbtn']) {
                            if (($_POST["FullName"]) === "") {
                                $FullNameErr = "Namn krävs";
                                $ErrCount = $ErrCount + 1;
                            }
                            else { 
                                if (!preg_match("/^[a-öA-Ö ]*$/",$FullName)){
                                    $FullNameErr = "Endast bokstäver är tillåtna";
                                    $ErrCount = $ErrCount + 1;
                                }
                                $FullName = ($_POST["FullName"]);
                            }
                          if (empty($_POST["Email"])) {
                            $EmailErr = "E-post krävs";
                            $ErrCount = $ErrCount + 1;
                          } else {
                              $Email = ($_POST["Email"]);
                            if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                              $EmailErr = "Ogilltigt e-post format"; 
                              $ErrCount = $ErrCount + 1;
                            }
                          }                            
                          if (empty($_POST["Password"])) {
                            $PasswordErr = "Lösenord krävs";
                            $ErrCount = $ErrCount + 1;
                          } else {
                            $Password = ($_POST["Password"]);
                            if (!preg_match("/[a-z0-9]+/i",$Password)) {
                              $PasswordErr = "Endast latinska bökstäver och nummer tillåts"; 
                              $ErrCount = $ErrCount + 1;
                            }
                            if (strlen($Password) < 6) {
                                $PasswordErr = "Löseordet måste vara minst 6 tecken"; 
                                $ErrCount = $ErrCount + 1;
                            }
                          }                         
                                $RePassword = ($_POST["RePassword"]);
                                $Password = ($_POST["Password"]);
                                if ($RePassword !== $Password || $RePassword === "") {
                                    $RePasswordErr = "Lösenorden är inte samma";
                                    $ErrCount = $ErrCount + 1;
                                }
                                $ErrCount = $ErrCount - 1;
                        }
                        
                        if ($ErrCount > 1) {
                            $Errmsg = 'style="display: block;"';
                        }
                        if ($ErrCount == 0) {
                               require("connect.php");
                               $query= mysql_query ("SELECT * FROM user WHERE email = '$Email'");
                               $numrows = mysql_num_rows($query);
                                if ($numrows == 0){
                                    $Password = md5(md5("ssdgdfhn".$Password."445yhfdsfe"));  
                                    $Date = date("Y-d-m");
                                    $Code = md5(rand());
                                    $result = mysql_query("SELECT * FROM user");
                                    $id_rows = mysql_num_rows($result);
                                    $id_nums = $id_rows + 1;
                                    mysql_query("INSERT INTO `user` (`id`, `namn`, `email`, `lösenord`, `code`) VALUES ('$id_nums', '$FullName', '$Email','$Password', '$Code')");
                                    $query = mysql_query ("SELECT * FROM user WHERE namn = '$FullName'");
                                    $numrows = mysql_num_rows($query);                                    if ($numrows == 1) {
                                        $_SESSION['id'] = $dbid;
                                        $_SESSION['FullName'] = $dbnamn;
                                        header('Location: main.php');
                                        exit;
                                    }                                    else {
                                        $ErrMsg = "Ett fel inträffade. Ditt konto skapades inte";
                                        $Errmsg1 = 'style="display: block;"';
                                    }                                }
                                else {
                                    $ErrMsg = "E-postadressen är redan tagen";
                                    $Errmsg1 = 'style="display: block;"';
                                }
                            }
                               mysql_close();   
                ?>
                    <form method="post" id="Login" name="login">
                    <table id="regtbl">
                   <tr>
                       <th>Namn: <?php echo $numrows?></th>
                       <td><input type="text" class="input" id="Name" name="FullName" <?php if (isset($_POST['FullName']) === true){echo 'value="', $_POST['FullName'], '"'; }?>></td>
                   </tr>
                   <tr>
                       <th>E-post:</th>
                       <td><input type="email" class="input" id="E-post" name="Email" <?php if (isset($_POST['Email']) === true){echo 'value="', $_POST['Email'], '"'; }?>></td>
                   </tr>
                   <tr>
                       <th>Lösenord:</th>
                       <td><input type="text" class="input" id="Pass" name="Password" value=""></td>
                   </tr>
                   <tr>
                       <th>Lösenord igen:</th>
                       <td><input type="text" class="input" id="Repass" name="RePassword" value=""></td>
                   </tr>
                </table>                <div class="errmsg" <?php echo $Errmsg;?>>                    <table style="margin-top: 0;">                        <tr><td><?php echo $FullNameErr?></td></tr>                        <tr><td><?php echo $EmailErr?></td></tr>                        <tr><td><?php echo $PasswordErr?></td></tr>                        <tr><td><?php echo $RePasswordErr?></td></tr>                    </table>                </div>                <div class="errmsg" <?php echo $Errmsg1;?>>                    <table style="margin-top: 0;">                        <tr><td><?php echo $ErrMsg?></td></tr>                    </table>                </div>                <table id="regbtntbl" style="margin-top: 5%;">                    <tr>    
                        <td><input type="submit" value="Registera dig" class="button" name="regbtn"></td>
                   </tr>
                   <tr>   
                        <td><input type="submit" value="Är du redan registerad? Logga in här" class="button" name="loginbtn" onclick="index.php"></td>
                   </tr>                </table>                </form>       
            </article>
        </div>
    </body>
</html>
