<!DOCTYPE html>
<html>
  <head>
  <title>2022503509_ex5.3_gradepoint</title>
  <style>
      form
       {
        background-color: #c6d5c2;
        border-radius: 5px;
        padding: 10px;
        margin: auto;
        width: 700px;
        margin-bottom: 10px;
        position: relative;
      }
    </style>
  </head>
  <body>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
      <h1>Gradepoint Calculator:</h1>
      <label for="gr">
        Enter Marks: <input type="number" id="gr" name="num" max="100" min="0" />
      </label>
      <input type="submit" name="subb" value="Result" />
      <h4 id="display"></h4>
    </form>
  </body>
  <?php 
    if(isset($_POST['subb'])){
      $a=$_POST['num'];
        if ($a >= 91 && $a <= 100) {
        echo "Grade &rarr; O";
      } else if ($a >= 81 && $a <= 90) {
        echo "Grade &rarr; A+";
      } else if ($a >= 71 && $a <= 80) {
        echo "Grade &rarr; A";
      } else if ($a >= 61 && $a <= 70) {
        echo "Grade &rarr; B+";
      } else if ($a >= 51 && $a <= 60) {
        echo "Grade &rarr; B";
      } else if ($a > 100 || $a < 0) {
        echo
          "Please Enter Valid Mark";
      } else {
        echo "Grade &rarr; U (FAIL)";
      }
    }
  ?>
  </html>
