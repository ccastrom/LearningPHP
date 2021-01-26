
<html>
    <head>
        <meta charset="windows-1252">
        <title>Login</title>
        <script type="text/javascript" src="../js/validate.js"></script>
    </head>
    <body>
       
        
        <h2>Welcome</h2>
        <form action="../controller/register.php" method="POST" id="form" name="form">
            <input type="text" id="txtName" name="txtName"  placeholder="Name">
            <br>
            <input type="text" id="txtPassword" name="txtPassword"  placeholder="Password">
            <br>
            <input type="submit" name="Login" id="Login" value="Login" onclick="return validate();">     
        </form>
        <div id="msg">
            <?php
            if (isset($_GET['m'])) {
                $m = $_GET['m'];
                if ($m == 1) {
                    echo"you can't access";
                }
            }
                ?>

        </div>
    </body>
</html>
