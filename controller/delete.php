<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $conn = mysqli_connect("localhost", "root", "123456");
    $bd = mysqli_select_db($conn, "testUser");
    $insert = "DELETE FROM userCred WHERE id='$id';";
    mysqli_query($conn, $insert);
    mysqli_close($conn);
    header("location: ../view/menu.php");
}

