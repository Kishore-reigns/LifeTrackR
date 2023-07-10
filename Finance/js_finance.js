var newexpcount=0;

function openpopup(){
    document.getElementById("popup").style.display="block";
    document.getElementById("blursheet").style.display="block";
}
function closepopup(){
    document.getElementById("popup").style.display="none";
    document.getElementById("blursheet").style.display="none";
}
function create_new_element(){
    newexpcount++;
    const exp=document.createElement("p");
    const division=document.getElementById("skeleton");
    division.appendChild(exp);
    exp.id="exp"+newexpcount;
    document.getElementById("exp"+newexpcount).innerHTML='<div class="expense"><div class="spend"><p style="font-size: 30px; margin-bottom: 0px">₹</p><p class="num">24</p></div><div><h2>Title</h2><p>date dd/mm/yy</p><p>Place</p></div></div>';
    if(newexpcount!=1 ) {document.getElementById("skeleton").style.height=(770+(newexpcount*50))+"px";}
    else {document.getElementById("skeleton").style.height="620px";}
}