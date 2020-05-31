<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";
// $servername = "localhost";
// $username = "id12215312_root";
// $password = "B-ommerr2121";
// $dbname = "id12215312_portfolio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>