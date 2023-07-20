<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'semester';

$conn = mysqli_connect($host,$username,$password,$db);

if($conn && $_SERVER["REQUEST_METHOD"] == "POST"){

    $NAME = $_POST["name"];
    $REGNO = $_POST["regno"];
    $MAIL = $_POST["mail"];
    $TAM = $_POST["tamil"];
    $ENG = $_POST["english"];
    $MATHS = $_POST["maths"];
    $PHY = $_POST["physics"];
    $CT = $_POST["ct"];
    $C = $_POST["c"];

    $array = array($TAM,$ENG,$MATHS,$PHY,$CT,$C);
    $i = 0 ; 
    $gradeAlpha = array(); ; 

    for( ; $i < 6 ; $i++){
        if($array[$i] >=90 && $array[$i]<=100){ 
            $gradeAlpha[$i] = 'O';
        }
        else if($array[$i] >=80 && $array[$i]<90){
            $gradeAlpha[$i] = "A+";
        }
        else if($array[$i] >=70 && $array[$i]<80){
            $gradeAlpha[$i] = 'A';
        }
        else if($array[$i] >=60 && $array[$i]<70){
            $gradeAlpha[$i] = "B+";
        }
        else if($array[$i] >=50 && $array[$i]<60){
            $gradeAlpha[$i] = 'B';
        }
        else if($array[$i] <50 && $array[$i]>=0){
            $gradeAlpha[$i] = "F";
        }
    }

    $sql = "INSERT INTO details VALUES(?,?,?,?,?,?,?,?,?);" ; 

    // preaparing the sql 
    $stmt = mysqli_prepare($conn,$sql);
    // bind
    mysqli_stmt_bind_param($stmt,"sisssssss",$NAME,$REGNO,$MAIL,$gradeAlpha[0],$gradeAlpha[1],$gradeAlpha[2],$gradeAlpha[3],$gradeAlpha[4],$gradeAlpha[5]);
    if(mysqli_stmt_execute($stmt)){
        echo "<h1 style = 'color:green'>The grades are added into database $db</h1>";

       }else{
        echo "<h1 style = 'color:red'>error in entering data</h1>";
    }

    mysqli_stmt_close($stmt);
}
else{
    echo "db not connected";
}

mysqli_close($conn);

?>