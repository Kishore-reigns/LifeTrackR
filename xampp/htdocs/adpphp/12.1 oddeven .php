<html>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <label for="">Enter number:</label>
        <input type="number" name="num">
        <input type="submit" name="SubmitButton">
    </form>
</html>

<?php 
if(isset($_POST['SubmitButton'])){
    $n=$_POST['num'];
    if($n%2 ==0 ){
        echo "<h2>Even</h2>";
    }
    else{
        echo "<h2>Odd</h2>";
    }
}
?>

<style>
    input {
      margin: 10px;
      padding: 5px;
    }
    form {
      background-color: #c6def1;
      padding: 20px;
      margin: auto;
      width: 500px;
    }
  </style>