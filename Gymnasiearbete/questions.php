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
                <h1>Lund Superbowl</h1>
            </header>
            <article>
                <form>
                    <table id="qtbl">
                        <tr>
                            <th>Namn:</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <th>E-post:</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <th>Vad gäller detta?</th>
                        </tr>
                        <tr>
                            <td>
                                <select>
                                    <option value="" disabled selected>Subject</option>
                                    <option value="Info">Info</option>
                                    <option value="Request">Request</option>
                                    <option value="Other">Other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Fråga:</th>
                        </tr>
                        <tr>
                            <td>
                                <textarea class="text_message" rows="2" cols="40" maxlength="500" onkeyup="countChar(this)" name="Message"><?php if (isset($_POST['Message']) === true){echo $_POST['Message'];}?></textarea>                        
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="sndbtn">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="button" value="Tillbaka" onClick="window.location.href='index.html'" style="margin-top: 5%;">
                            </td>
                        </tr>
                    </table>
                </form>
            </article>
        </div>
    </body>
</html>
