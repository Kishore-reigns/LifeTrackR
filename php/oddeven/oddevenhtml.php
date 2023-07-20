<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2022503011-php1</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
        <form action="" method="post">
            <h2>Odd or even checker</h2>
            <label >Enter a Number: </label><input type="number"  name = "num" required><br>
            <input type="submit" value="Submit">
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                        $number = $_POST["num"];
                        if($number%2 == 0 ){
                            $result =  $number ." is a even number" ;

                        }else {
                        $result =  $number ." is a odd number" ;
                        }
                        echo "<h3 class = 'result'>$result</h3>";
            }
            ?>
        </form>
    
</body>
</html>



