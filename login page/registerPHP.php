
<?php
// Get the user details from the signup form
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$recovery = $_POST['recovery'];


$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "logindb";

$conn1 = new mysqli($servername, $db_username, $db_password, $db_name); //to insert
$conn = new mysqli($servername, $db_username, $db_password); //to create db

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($conn1->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create a new database for the user
$new_db_name = $username; 
$sql_create_db = "CREATE DATABASE $new_db_name";

if ($conn->query($sql_create_db) === TRUE) {
    echo "New database created successfully for user: $username";
} else {
    echo "Error creating database: " . $conn->error;
}
$stmt = $conn1->prepare("INSERT INTO register (username, password , email, recovery ) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $password, $email, $recovery);
if ($stmt->execute()) {
     header("Location: login page.php");
} else {
    echo "Error: " . $stmt->error;
}

$conn_new_user=new mysqli($servername, $db_username, $db_password,$new_db_name);
$conn_new_user->query("CREATE TABLE `fitness` (`rno` INT(4) NOT NULL AUTO_INCREMENT , `height` INT(4) NOT NULL , `weight` INT(4) NOT NULL , `bmi` FLOAT(5) NOT NULL , PRIMARY KEY (`rno`));");
$conn_new_user->query("CREATE TABLE `fitness_progress` (`day` INT NOT NULL AUTO_INCREMENT , `weight` INT NOT NULL , `time` INT NOT NULL , `isWork` INT NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`day`), UNIQUE (`date`));");
$conn_new_user->query("CREATE TABLE `finance` (`title` VARCHAR(40) NOT NULL , `date` DATE NOT NULL , `place` VARCHAR(50) NOT NULL , `amount` INT(8) NOT NULL , `rno` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`rno`));");
$conn_new_user->query("CREATE TABLE `eventmanager_note` (`rno` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(50) NOT NULL , `note` TEXT NOT NULL , PRIMARY KEY (`rno`))");
$conn_new_user->query("CREATE TABLE `eventmanager_todo` (`date` DATE NOT NULL , `todo` TEXT NOT NULL , `rno` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`rno`));");


$conn_new_user->close();
$stmt->close();
$conn1->close();
$conn->close();
?>