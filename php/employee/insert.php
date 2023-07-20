<?php

$conn = mysqli_connect('localhost','root','','employee');

if( $conn && $_SERVER["REQUEST_METHOD"]=="POST"){

    $NAME =  $_POST["empname"];
    $ID =  $_POST["empid"];
    $SAL =  $_POST["empsal"];

    $sql = "INSERT INTO empdetails VALUES('$NAME',$ID,$SAL);";
    $res = mysqli_query($conn , $sql);

    if($res){
        header('Location:empmain.html');
    }else{
        echo "Error in uploading data to the table" ;
    }



}else{
    echo "err in creating connection or in post";
}

mysqli_close($conn);



?>