<?php
if(isset($_POST['UPDATE'])){
    $id=$_POST['txtid'];
    $userName=$_POST['txtUpdateName'];
    $Password=$_POST['txtUpdatePassword'];
    
    $conn = mysqli_connect("localhost", "root", "123456");
    $bd = mysqli_select_db($conn, "testUser");
    $update = "UPDATE userCred SET userName= '$userName', pass='$Password'"
            . "WHERE id='$id' ;";
    mysqli_query($conn, $update);
    mysqli_close($conn);
    header("location: ../view/menu.php");
   
}
?>
