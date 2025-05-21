<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "huajainaka";

// $servername = "localhost";
// $username = "huajaina";
// $password = ";L9pf10lC#uPP1";
// $dbname = "huajaina_huajaina";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>