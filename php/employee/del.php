<?php

$conn = mysqli_connect('localhost','root','','employee');

if($conn && $_SERVER["REQUEST_METHOD"]=="POST"){

    $ID = $_POST["delempid"];

    $sql = "DELETE FROM empdetails WHERE id = '$ID'" ; 
    $res = mysqli_query($conn,$sql);

    if($res){
        header('Location:empmain.html');
    }else{
        echo("cannot delete record and i don't know why");
    }




}else{
    echo "error in connecting server or in reqeust method" ; 
}


mysqli_close($conn);



?>