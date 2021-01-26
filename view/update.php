
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $userName = $_GET['userName'];
            $PassWord = $_GET['pass'];
        }
        ?>
        <h1>Update</h1>
        <form action="../controller/updateUser.php" method="POST">
            <input type="text" id="txtid" name="txtid"value='<?php echo $id?>'readonly>
             <br>
            <input type="text" id="txtUpdateName" name="txtUpdateName"value='<?php echo $userName ?>' >
            <br>
            <input type="text" id="txtUpdatePassword" name="txtUpdatePassword" value='<?php echo $PassWord ?>'>
            <br>
            <input type="submit" name="UPDATE" id="UPDATE" value="Update">   

        </form>



    </body>
</html>
