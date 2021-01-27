
<html>
    <head>
        <meta charset="windows-1252">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script type="text/javascript" src="../js/validate.js"></script>
         <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
       
        
        <div class="login-container d-flex align-items-center justify-content-center ">
            <form class="login-form text-center" action="../controller/register.php" method="POST" id="form" name="form">
                <h1 class="mb-5 font-weight-light text-uppercase">Login</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="txtName" name="txtName"  placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="txtPassword" name="txtPassword"  placeholder="Password" placeholder="password">
                </div>
                <input type="submit" class="btn btn-primary btn-block" name="Login" id="Login" value="Login" onclick="return validate();"   >
                
            </form>
            
            </div>
        

<!--        <form action="../controller/register.php" method="POST" id="form" name="form">
            <input type="text" id="txtName" name="txtName"  placeholder="Name">
            <br>
            <input type="text" id="txtPassword" name="txtPassword"  placeholder="Password">
            <br>
            <input class="btn btn-primary" type="submit" name="Login" id="Login" value="Login" onclick="return validate();">     
        </form>
        <div id="msg">-->
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
