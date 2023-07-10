var newexpcount=0;

function openpopup(){
    document.getElementById("popup").style.display="block";
    document.getElementById("blursheet").style.display="block";
    create_new_element();
}
function create_new_element(){
    newexpcount++;
    const exp=document.createElement("div");
    exp.setAttribute("class","expense");
    exp.setAttribute("id","exp"+newexpcount);
    document.getElementById("exp"+newexpcount).innerHTML="AAAAAAAAA";
}