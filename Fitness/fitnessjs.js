var det = [0,1,2,3];


function movetoheight(){
    document.getElementById("enterweight").style.display = "block";
    document.getElementById("enterheight").style.display = "none";
 
    return false ; 
}



function validateBmi(){
    console.log("submit button pressed ");
    var h = document.fitnessform.ht.value ;
    console.log(h);;
    var w = document.fitnessform.wt.value ;
    
    h = parseInt(h);
    h /= 100  ; 
    w = parseInt(w);
    var bmi = w/(h**2);
    var description ; 
    if(isNaN(bmi)){
        console.log("error in taking value ");
    return false ;
    }
    //underweight / lightweight
    if (bmi < 18.5){
        description = "Underweight";
        document.getElementById("msgdesc").innerHTML = "Under Weight"; 
    }
    //normal weight 
    else if (18.5 >= bmi && bmi < 25){
        description = "Normal weight";
        document.getElementById("msgdesc").innerHTML = "Normal Weight"; 
    }
    //overweight
    else if (25 >= bmi && bmi < 30){
        description = "Overweight";
        document.getElementById("msgdesc").innerHTML = "Over Weight"; 
    }
    //obese
    else{
        description = "Obese";
    }
    var res = "Your BMI : "+ bmi.toFixed(3) +"<br>"+ description ; 
    document.getElementById("msgdesc").innerHTML = "Obese"; 
    console.log(res);
    return true ; 

}

function gotoProgressTracker(){

    document.getElementById("progresstracker").style.display = 'block';

    document.getElementById("lightWeight").style.display = 'none';
    document.getElementById("OverWeight").style.display = 'none';
    document.getElementById("obese").style.display = 'none';
    document.getElementById("NoramlWeight").style.display = 'none';

    document.getElementById("NoramlWeightDiet").style.display = 'none';
    document.getElementById("obeseDiet").style.display = 'none';
    document.getElementById("overWeightDiet").style.display ='none';
    document.getElementById("lightweightdiet").style.display = 'none';

    return true ; 

}

function openform(){
    document.getElementById("main").style.filter = "blur("+5+"px)";
    document.getElementById("message").style.filter = "blur("+5+"px)";
    document.getElementById("fitnessformdiv").style.display = 'block' ;
   
    document.getElementById("fitnessformdiv").style.filter = 'none';
    

}