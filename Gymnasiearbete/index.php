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
                <?php
                    
                    $loginform = "<form name='loginform' action='' method='post' id='LogIn' style='height: 100%'>
                        <table id='tbllogin'>
                            <tr>
                                <td>
                                    <input type='text' name='em' placeholder='E-post' onfocus='this.placeholder = ''' onblur='this.placeholder='E-post''>
                                    <input type='password' name='pword' placeholder='Lösenord' onfocus='this.placeholder = ''' onblur='this.placeholder='Lösenord''>
                                    <input type='submit' value='Logga in' class='button' id='Login' name='loginbtn'/>
                                    <input type='submit' value='Registera dig här' class='button' id='Reg' name='regbtn'/>                                                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a id='ForgotPassword' href='recoveraccount.php'>Glömt ditt lösenord?</a>                    
                                </td>
                            </tr>   
                        </table>
                    </form>";

                     if ($_POST['regbtn']) {
                        header('Location: reg.php');   
                     }
                     if ($_POST['loginbtn']) {
                         $email = $_POST['em'];
                         $password= $_POST['pword'];
                            if ($email) {
                                if ($password){
                                    require("connect.php");
                                    $password = md5(md5("ssdgdfhn".$password."445yhfdsfe"));  
                                    $query= mysql_query ("SELECT * FROM user WHERE email = '$email'");
                                    $numrows = mysql_num_rows($query);
                                    if ($numrows === 1)
                                        $row = mysql_fetch_assoc($query);
                                        $dbid = $row['id'];
                                        $dbemail = $row['email'];
                                        $dbpass = $row['lösenord'];
                                        if ($password === $dbpass){
                                           $_SESSION['id'] = $dbid;
                                           $_SESSION['email'] = $dbemail;
                                           header('Location: lists.php'); 
                                           exit;
                                        }
                                        else  {
                                            echo $loginform;
                                        }
                                    mysql_close();
                                }
                            }
                            else {
                                echo $loginform;
                            }
                     }
                     else {
                         echo $loginform;
                     }
                     if ($password=== "" && $email !== ""){
                        echo $loginform;
                     }
                 ?>
                <input class="iptftr" type="submit" value="Har du några frågor? Klicka här!" name="questions" onClick="window.location.href='questions.php'"></input>           
            </article>                
        </div>
    </body>
</html>
