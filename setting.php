<!Doctype html>
<html>
    <body>
    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "Session_ctrl"; 

        $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
               die("Connection failed: " . mysqli_connect_error());
    }
    ?>
    </body>
</html>
