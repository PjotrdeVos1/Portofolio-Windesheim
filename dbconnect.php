<?php
$servername = "localhost";
$username = "root";
$password = "secret";
$conn = null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=testDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>




