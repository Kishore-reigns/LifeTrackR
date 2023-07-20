var newexpcount=0;
var newinccount=0;
function openpopup(skeletonID){
    document.getElementById("blursheet").style.display="block";

    if(skeletonID=="skeleton_income"){
    document.getElementById("exppopup").style.display="none";
    document.getElementById("incpopup").style.display="block";
    }
    else{
        document.getElementById("exppopup").style.display="block";
        document.getElementById("incpopup").style.display="none";
    }
    var pl=document.getElementById("amt");
     
    //     document.getElementById("exppopuptitle").innerHTML="Add Income";
    //     pl.placeholder="Amount Received";
    //     document.getElementById('addbutton').setAttribute( "onClick", "closepopup_n_ADD('skeleton_income');" );
      

}
function closepopup_n_ADD(skeletonID){
     create_new_element(skeletonID);

    document.getElementById("exppopup").style.display="none";
    document.getElementById("blursheet").style.display="none";
    return true;
}

function closepopups(){
   document.getElementById("exppopup").style.display="none";
   document.getElementById("incpopup").style.display="none";
   document.getElementById("blursheet").style.display="none";
   return true;
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
    document.getElementById("skeleton_graph").style.display="none";
    document.getElementById("skeleton_graph_inc").style.display="none";
    document.getElementById(divID).style.display="block";
}
function opengraph(){
    document.getElementById("skeleton_income").style.display="none";
    document.getElementById("skeleton_expense").style.display="none";
    document.getElementById("skeleton_recommendations").style.display="none";
    document.getElementById("skeleton_graph_inc").style.display="block";
    document.getElementById("skeleton_graph").style.display="block";
}