var newexpcount=0;
var newinccount=0;
function openpopup(skeletonID){
    document.getElementById("popup").style.display="block";
    document.getElementById("blursheet").style.display="block";
    var pl=document.getElementById("amt");
     if(skeletonID=="skeleton_income"){
        document.getElementById("popuptitle").innerHTML="Add Income";
        pl.placeholder="Amount Received";
        document.getElementById('addbutton').setAttribute( "onClick", "closepopup_n_ADD('skeleton_income');" );
     }

}
function closepopup_n_ADD(skeletonID){
    create_new_element(skeletonID);

    document.getElementById("popup").style.display="none";
    document.getElementById("blursheet").style.display="none";
}
function create_new_element(skeletonID){
    newexpcount++;
    const exp=document.createElement("p");
    const division=document.getElementById(skeletonID);
    division.appendChild(exp);
    exp.id="exp"+newexpcount;
    if(skeletonID=="skeleton_expense"){
    document.getElementById("exp"+newexpcount).innerHTML='<div class="expense"><div class="spend"><p style="font-size: 30px; margin-bottom: 0px">₹</p><p class="num">24</p></div><div><h2>Title</h2><p>date dd/mm/yy</p><p>Place</p></div></div>';
    }
    else if(skeletonID=="skeleton_income"){
        document.getElementById("exp"+newexpcount).innerHTML='<div class="expense"><div class="receive"><p style="font-size: 30px; margin-bottom: 0px">₹</p><p class="num">24</p></div><div><h2>Title</h2><p>date dd/mm/yy</p><p>Place</p></div></div>';
    }


    document.getElementById(skeletonID).style.height="auto";

}

function disp_div(divID){
    document.getElementById("skeleton_income").style.display="none";
    document.getElementById("skeleton_expense").style.display="none";
    document.getElementById("skeleton_recommendations").style.display="none";
    document.getElementById(divID).style.display="block";
}