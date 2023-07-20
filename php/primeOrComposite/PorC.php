<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2022503011-php3</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
        <form action="" method="post">
            <h2>Prime or Composite checker</h2>
            <label >Enter a Number: </label><input type="number"  name = "num" required><br>
            <input type="submit" value="Submit">
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                        $number = $_POST["num"];
                        $count = 0 ;
                        $i = 1 ;  
                        for( ; $i  <= $number ; $i++ ){
                            if($number % $i == 0 ){
                                $count++ ; 
                            }
                        }
                        if($count == 2){
                            echo "<h3 class = 'result'>The given number is PRIME</h3>";
                        }else{
                            echo "<h3 class = 'result'>The given number is COMPOSITE</h3>";
                        }
                        
            }
            ?>
        </form>
    
</body>
</html>



