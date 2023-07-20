<?php

$host = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($host,$username,$password);

if($conn && $_SERVER["REQUEST_METHOD"] == "POST"){

    $DBNAME = $_POST["dbname"];

    $sql = "CREATE DATABASE $DBNAME";
    $res = mysqli_query($conn,$sql);
    if($res){
        header('Location:empmain.html');
        echo "$DBNAME created successfully";
    }
    else{
        echo "error in creating $DBNAME";
    }

}else{
    echo "error in creating connection";
}

mysqli_close($conn);




?>