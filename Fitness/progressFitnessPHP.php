<?php

include("../config.php");
// Assuming you have already established a connection to your MySQL database
 if (isset($_GET['bmi'])) ;
 $bmi =  $_GET['bmi'];
// Get input from the user
$date = $_POST['date'];
$weight = $_POST['weight'];
$time = $_POST['time'];
$isWork = $_POST['iswork'];


$isWork = filter_var($isWork, FILTER_SANITIZE_STRING);


// Prepare the SQL statement
$sql = "INSERT INTO fitness_progress (date, weight, time, isWork) VALUES (?, ?, ?, ?)";

// Prepare and bind the parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("sdsi", $date, $weight, $time, $isWork);

// Execute the statement
if ($stmt->execute()) {
    header("Location:fitmain.php?bmi=$bmi");
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
