<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form name="form1" method="POST" action="checklogin.php">
        <table width="150px" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFF">
        <tr>
            <td colspan="3"><strong>Medlems Login </strong></td>
        </tr>
        <tr>
            <td width="78">Brugernavn</td>
            <td width="6">:</td>
            <td width="294"><input name="username" type="text"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input name="password" type="password"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="LogInd" value="Login"></td>
        </tr>
        </table>
    </form>
</body>
</html>