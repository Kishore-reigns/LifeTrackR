
<?php
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "$username";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>