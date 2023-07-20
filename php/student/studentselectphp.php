<?php

$conn = mysqli_connect('localhost','root','','college');

if($conn && $_SERVER["REQUEST_METHOD"]=="POST"){

   
    $REGNO = $_POST["id"];
 


    $sql = "SELECT * FROM details WHERE id = '$REGNO'";

    $res = mysqli_query($conn , $sql);

    if($row = mysqli_fetch_assoc($res)){

        echo "<h1>Name :".$row['name']."<br></h1>";
        echo "<h1>register number :".$row['id']."<br></h1>";
        echo "<h1>Address :".$row['address']."<br></h1>";
        echo "<h1>Mail :".$row['email']."<br></h1>";
        echo "<h1>Gpa :".$row['gpa']."<br></h1>";
        

    }else{
        echo "error in displaying values  values ";
    }

}else{
    echo "DB NOT CONNECTED or error in request ";
}

?>