<?php

$conn = mysqli_connect('localhost','root','','college');

if($conn && $_SERVER["REQUEST_METHOD"]=="POST"){

    $NAME = $_POST["name"];
    $REGNO = $_POST["id"];
    $ADDRESS = $_POST["address"];
    $EMAIL = $_POST["mail"];
    $GPA = $_POST["gpa"];


    $sql = "INSERT INTO details VALUES('$NAME',$REGNO,'$ADDRESS','$EMAIL',$GPA);";

    $res = mysqli_query($conn , $sql);

    if($res){
        header('Location:student.html');

    }else{
        echo "error in inserting values ";
    }

}else{
    echo "DB NOT CONNECTED or error in request ";
}

?>