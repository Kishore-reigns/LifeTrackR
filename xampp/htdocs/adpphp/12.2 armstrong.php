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
    $temp=$num;
    $len=0;
    $sum=0;
    while($temp!=0){
        $temp=floor($temp/10);
        $len++;
    }
    $temp=$num;
    while($num!=0){
        $rem=floor($num%10);
        $sum+=pow( $rem,$len);
        $num=floor($num/10);
    }
    if($temp==$sum){
        echo "<h1>Armstrong</h1>";
    }
    else{
        echo "<h1>Not Armstrong</h1>";
    }
}
?>
<style>
      input {
        margin: 10px;
        padding: 5px;
      }
      form {
        background-color: #b783c0a6;
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