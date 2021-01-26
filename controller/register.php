<?php

if (isset($_POST['Login'])) {

    $userName = $_POST['txtName'];
    $passWord = $_POST['txtPassword'];
    $conn = mysqli_connect("localhost", "root", "123456");
    $bd = mysqli_select_db($conn, "testUser");
    $insert = "INSERT INTO userCred VALUES(null,'$userName','$passWord');";
    mysqli_query($conn, $insert);
    mysqli_close($conn);
    header("location: ../view/menu.php?");
} else {
    header("location: ../view/menu.php?m=1");
}
?>

