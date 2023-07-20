<?php 
include("../config.php");
// Get the height and weight from the user
$height = $_POST['ht'];
$weight = $_POST['wt'];

// Calculate the BMI
$bmi = $weight / (($height / 100) ** 2);

// Prepare the SQL statement
$sql = "INSERT INTO fitness (height, weight, bmi) VALUES ('$height', '$weight', '$bmi')";

// Assuming you have a database connection established

// Retrieving the last value from a table column

// Closing the database connection


// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    header("Location:fitmain.php?bmi=$bmi");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>
