<?php
include('../config.php');
// Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $title = $_POST['inctitle'];
    $date = $_POST['incdate'];
    $amount = $_POST['incamount'];
    $place = $_POST['incplace'];

    // Insert the values into the finance table
    $query = "INSERT INTO finance (title, date, amount, place) VALUES ('$title', '$date', '$amount', '$place')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location:finance.php");
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
// }

// Closing the database conn
mysqli_close($conn);
?>
