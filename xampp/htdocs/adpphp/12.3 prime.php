<html>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <label for="">Enter number:</label>
        <input type="number" name="num">
        <input type="submit" name="SubmitButton">
    </form>
</html>

<?php 
    if(isset($_POST['SubmitButton'])){
        $num=$_POST['num'];
        for($i=2;$i<$num/2;$i++){
            if($num % $i == 0){
                echo "Not Prime";
                break;
            }
        }
        if ($i >= $num / 2) {
            echo "Prime";
        }
    }
?>

<style>
      input {
        margin: 10px;
        padding: 5px;
      }
      form {
        background-color: aliceblue;
        border-radius: 5px;
        padding: 10px;
        margin: auto;
        width: 700px;
        margin-bottom: 10px;
        position: relative;
      }
      h1 {
        text-align: center;
      }
</style>