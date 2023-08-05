<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Document</title>
  </head>
  <style>
    .tab,tr,td,th{
      padding:30px;
      border-collapse:collapse;
      border:1px solid black;
    }
  </style>
  <body>
    <form action="" method="POST">
      <label > Capital of India</label> <br> <br>
      <input name="q1" type="radio" value="a" />
      
      <label > Delhi</label> <br> <br>
      <input name="q1" type="radio" value="b" />
      
      <label > Mumbai</label> <br> <br>
      <input name="q1" type="radio" value="c" />
      
      <label > Chennai</label> <br> <br>
      <input name="q1" type="radio" value="d" />
      
      <label > Kolkata</label> <br> <br>

      <label >Financial Capital of India</label> <br> <br>
      <input name="q2" type="radio" value="a" />
      
      <label > Delhi</label> <br> <br>
      <input name="q2" type="radio" value="b" />
      
      <label > Mumbai</label> <br> <br>
      <input name="q2" type="radio" value="c" />
      
      <label > Chennai</label> <br> <br>
      <input name="q2" type="radio" value="d" />
      
      <label > Kolkata</label> <br> <br>

      <label >Cultural Capital of India</label> <br> <br>
      <input type="text" name="q3" />
       <br><br>

      <label >Gateway of south India</label> <br> <br>
      <input type="text" name="q4" />
       <br><br>

      <label >A language named after coffee</label> <br> <br>
      <select name="q5" id="">
        <option value="js">JS</option>
        <option value="php">php</option>
        <option value="php">java</option>
      </select>

      <input type="submit" name="subb"/>
      
    </form>
  </body>
</html>
<?php 
if(isset($_POST['subb'])){
  $q1=$_POST['q1'];
  $q2=$_POST['q2'];
  $q3=$_POST['q3'];
  $q4=$_POST['q4'];
  $q5=$_POST['q5'];

  $qc=['a','b','kolkata','chennai','java'];

  $q=[$_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5']];

  // print_r($q);

  $conn=new mysqli('localhost','root','','adp');
  $conn->query("insert into ceg values('$q1','$q2','$q3','$q4','$q5');");
  $conn->close();
  $i=0;
  echo "<table class='tab'>";
  echo "<tr>";
    echo "<th>Question NO";
    echo "<th>Answer submitted";
    echo "<th>Answer Expected";
    echo "<th>right wrong";
  echo "</tr>";
  while($i<5){
    echo "<tr>";
      echo "<td>$i";
      echo "<td>$q[$i]";
      echo "<td>$qc[$i]";
      if($q[$i]==$qc[$i]){
        $r1=1;
      }
      else{
        $r1=0;
      }
      echo "<td>$r1";
    echo "</tr>";
    
    $i++;
  }
  echo "</table>";
}
?>
