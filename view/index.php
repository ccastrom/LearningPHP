<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title>Login</title>
        <script type="text/javascript" src="../js/validate.js"></script>
    </head>
    <body>
        <h2>Welcome</h2>
        <form action="menu.php" method="POST" id="form" name="form">
            <input type="text" id="txtName" name="txtName"  placeholder="Name">
            <br>
            <input type="password" id="txtPassword" name="txtPassword"  placeholder="Password">
            <br>
            <input type="submit" name="Login" id="Login" name="Login" onclick="return validate();">     
        </form>
    </body>
</html>
