<?php
$servername = "localhost";
$dbname = "Ashok_IOE";
$username = "ashok_ioe";
$password = "ashokioe123";
$conn = mysqli_connect($servername, $username, $password,$dbname);
$sql = "CREATE TABLE email_subscribe (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
$conn->query($sql);
?>
