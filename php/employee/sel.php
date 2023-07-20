<?php


$conn = mysqli_connect('localhost','root','','employee');

if($conn){

    echo "<style> table,tr,td,th{ border :2px solid black ; border-collapse : collapse ; padding : 5px ; } </style>";

    $sql = "SELECT * FROM empdetails" ;
    $res = mysqli_query($conn , $sql);
    echo "<table><tr><th>NAME</th><th>ID</th><th>salary</th></tr>";
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr><td>". $row['name'] . "</td><td>" . $row['id'] . "</td><td>" . $row['salary'] . "</td></tr>" ;
    }
    echo "</table>" ;

}else{
    echo " error in connecting database "; 
}


mysqli_close($conn);












?>