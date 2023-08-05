<?php


$conn = mysqli_connect('localhost','root','','adp');

if($conn){

    echo "<style> table,tr,td,th{ border :2px solid black ; border-collapse : collapse ; padding : 5px ; } </style>";

    $sql = "SELECT * FROM employee" ;
    $res = mysqli_query($conn , $sql);
    echo "<table><tr><th>NAME</th><th>ID</th><th>salary</th></tr>";
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr><td>". $row['name'] . "</td><td>" . $row['empid'] . "</td><td>" . $row['salary'] . "</td></tr>" ;
    }
    echo "</table>" ;

}else{  
    echo " error in connecting database "; 
}


mysqli_close($conn);












?>