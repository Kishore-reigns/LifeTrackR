<?php
include("../config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $date = $_POST['date'];
  $note = $_POST['note'];

  $sql = "INSERT INTO eventmanager_todo (date, todo) VALUES (?, ?)";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ss", $date, $note);

  if (mysqli_stmt_execute($stmt)) {
    header("Location:em.php");
  } else {
    echo "Error adding note: " . mysqli_stmt_error($stmt);
  }

  mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
