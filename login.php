<!Doctype html>
<html>
    <body>
        <?php
        session_start();
        require_once 'setting.php';

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Database Connection failed: " . mysqli_connect_error());
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input_username = trim($_POST['username']);
            $input_password = trim($_POST['password']);

            $query = "SELECT * FROM user WHERE username = '$input_username' AND password = '$input_password'";