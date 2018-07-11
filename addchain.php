<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_POST['username'];
$name=$_POST["chainname"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connectione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE TABLE $name (index INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,reg_date timestamp NOT NULL,data VARCHAR(10000) NOT NULL,datavalue VARCHAR(3000) NOT NULL,previoushash VARCHAR(50),currenthash VARCHAR(50))";

if ($conn->query($sql) === TRUE) {
    header('location:user.php#test');
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>