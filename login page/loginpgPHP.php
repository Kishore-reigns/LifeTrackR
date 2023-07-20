<?php session_start();
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "logindb";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the query
$stmt = $conn->prepare("SELECT * FROM register WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    echo $row['password'] ;
    if ($password== $row['password']) {
        // echo "<sript> window.alert('Login successful!')</script>";
        $_SESSION['username'] = $username;
        header("Location: ../home page/homeIndex.php");
        // Redirect to the user's profile page or any other page you want
    }
     else {

        header("Location: login page.php?error=Incorrect Password");
	    exit();
        // echo "Incorrect password!";
    }
} else {
    
    header("Location: login page.php?error=User Not Found");
    exit();
    // echo "User not found!";
}

$stmt->close();
$conn->close();
?>
