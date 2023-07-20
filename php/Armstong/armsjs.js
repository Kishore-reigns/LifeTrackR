
function Armstrong(){
    var num = document.paliform.num.value ; 
    num = parseInt(num);

    var copy1 = parseInt(num) ;
    var copy2 = parseInt(num) ; 
     var count = 0 ;  
     while(copy1 > 0 ){
        copy1 = parseInt(copy1);
     
        copy1 /= 10 ; 
        count++  ; 
     }
     count-- ; 
    console.log(count);
    
    var arms = parseInt(num) ;
    arms = 0 ;  

    while(copy2 > 0 ){
            copy2 = parseInt(copy2) ; 
            arms = arms +  (copy2%10)**(count);
            copy2 /= 10 ; 
            
    }
    
    if(arms == num){
        document.getElementById("result").innerHTML = "The Armstrong value : "+arms+"<br>" ;
        document.getElementById("result").innerHTML += "The given number is a armstong" ;
        return false ;  
    }
    else{
        document.getElementById("result").innerHTML = "The Armstrong value : "+arms+"<br>";
        document.getElementById("result").innerHTML += "The given number is not a armstong" ;
        return false ;  

    }


}