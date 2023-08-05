<!DOCTYPE html>
<html>
<head>
    <title>Student CGPA Calculator</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="reg_no">Registration Number:</label>
        <input type="text" name="reg_no" required><br>

        <h2>Marks for each subject (out of 100)</h2>
        <label for="subject1">Subject 1:</label>
        <input type="number" name="subject1" required><br>

        <label for="subject2">Subject 2:</label>
        <input type="number" name="subject2" required><br>

        <label for="subject3">Subject 3:</label>
        <input type="number" name="subject3" required><br>

        <label for="subject4">Subject 4:</label>
        <input type="number" name="subject4" required><br>

        <label for="subject5">Subject 5:</label>
        <input type="number" name="subject5" required><br>

        <label for="subject6">Subject 6:</label>
        <input type="number" name="subject6" required><br>

        <input type="submit" value="Calculate CGPA" name="subb">
    </form>
</body>
</html>
<?php

$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "adp";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);


if (isset($_POST['subb'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $reg_no = $_POST["reg_no"];

    $marks = [
        $_POST["subject1"],
        $_POST["subject2"],
        $_POST["subject3"],
        $_POST["subject4"],
        $_POST["subject5"],
        $_POST["subject6"]
    ];

    $total_marks = array_sum($marks);
    $total_subjects = count($marks);
    $cgpa = $total_marks / ($total_subjects * 10);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO student (name, email, register_no, subject1, subject2, subject3, subject4, subject5, subject6)
            VALUES ('$name', '$email', '$reg_no', $marks[0], $marks[1], $marks[2], $marks[3], $marks[4], $marks[5])";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>CGPA Calculation Result</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Registration Number: $reg_no</p>";
        echo "<p>Total Marks: $total_marks</p>";
        echo "<p>CGPA: $cgpa</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<style>
    input {
      border: none;
      border-bottom: 1px solid rgb(204, 202, 202);
      padding: 5px;
      margin: 5px;
      width: 700px;
      resize: vertical;
    }
    textarea {
      resize: none;
      height: 130px;
      width: 700px;
    }
      form {
        background-color: aliceblue;
        border-radius: 5px;
        padding: 10px;
        margin: auto;
        width: 700px;
        margin-bottom: 10px;
        position: relative;
      }
      h1 {
        text-align: center;
      }
</style>