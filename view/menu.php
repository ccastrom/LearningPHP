
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menú</title>
    </head>
    <body>
       
            <h1>Welcome!</h1>
            <table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                </tr>

                <?php
                $conn = mysqli_connect("localhost", "root", "123456");
                $bd = mysqli_select_db($conn, "testUser");
                $insert = "SELECT * from userCred;";
                $query = mysqli_query($conn, $insert);
                while ($resulSet = mysqli_fetch_array($query)) {
                    echo"<tr>";
                    echo"<td>$resulSet[id]</td>";
                    echo"<td>$resulSet[userName]</td>";
                    echo"<td>$resulSet[pass]</td>";
                    echo"<td><a href='update.php?id=$resulSet[id]&userName=$resulSet[userName]&pass=$resulSet[pass]'>Update</a></td>";
                    echo"<td><a href='../controller/delete.php?id=$resulSet[id]'>Delete</a></td>";
                    echo"</tr>";
                }
                mysqli_close($conn);
                ?>

        </table>
        <a href="index.php">Go back</a>

    </body>
</html>
