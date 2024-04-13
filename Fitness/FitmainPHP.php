<?php
// Connect to the MySQL databas
// Retrieve the BMI value from the 'fitness' table
include("../config.php");
$sql = "SELECT bmi FROM fitness";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the first row
    $row = $result->fetch_assoc();
    $bmi = $row["bmi"];
    header("Location: fitmain.php?bmi=$bmi");
	    exit();
} else {
    $bmi = "N/A";
}

// Close the database connection
$conn->close();
?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>BMI Display</title>
    <script src="script.js"></script>
</head>
<body>
</body>
</html> -->
