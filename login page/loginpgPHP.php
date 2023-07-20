<?php
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Database connection
$servername = "localhost";
$db_username = "root";
$db_password = "abc";
$db_name = "lifetrackr";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the query
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Login successful!";
        header("Location: ../home page/homeIndex.html");
        // Redirect to the user's profile page or any other page you want
    } else {
        echo "Incorrect password!";
    }
} else {
    echo "User not found!";
}

$stmt->close();
$conn->close();
?>
