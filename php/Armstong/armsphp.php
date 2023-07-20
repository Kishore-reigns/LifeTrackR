<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["num"];
    $copy1 = $number ; 
    $copy2 = $number ; 
    $res = 0 ; 
    $count = 0 ; 

    while( $copy1 >  0 ){ 
        $copy1 = (int)$copy1 / 10 ; 
        $count = $count + 1  ; 
    }

     $count-- ; 

    while($copy2 > 0){
        $res += pow(($copy2%10),$count);
        $copy2 /= 10 ; 
    }


    if($number == $res){
        echo "<h1 style = 'color : green ; text-align : center' ; margin-top : 400px ; > The given number is armstrong</h1>" ;

    }else{
        echo "<h1 style = 'color : red ; text-align : center' ; margin-top : 400px ; > The given number is not armstrong</h1>" ;
    }


}


?>