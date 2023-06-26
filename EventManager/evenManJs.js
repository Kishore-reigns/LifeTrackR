//notes
var notes = 0 ;

//to do 
var todo = 0 ; 

//settings
var isSetOpen = 0 ; 

//themes
var isThemeOpen = 0 ; 
var Light = 1 ; 



function addNotes(){
    var r = Math.random() * 256;
    var g = Math.random() * 256;   // to genereate random colors 
    var b = Math.random() * 256;

    notes += 1 ; 
    console.log(notes);

    // creating forms 
    var form = document.createElement("form");
    form.name = "form"+notes;
    //creating textarea
    var textarea = document.createElement("textarea");
    textarea.setAttribute("class","notesTextarea");
    textarea.setAttribute("name","form" + notes );
    textarea.id = "form"+notes;
    textarea.cols = 30;
    textarea.rows = 10;
    //creating title for textarea
    var title = document.createElement("input");
    title.setAttribute("type","text")
    title.setAttribute("class","notesTitle");
    title.setAttribute("placeholder","Title");
    title.style.backgroundColor = "rgb("+r+","+g+","+b+")";
    title.name = "form"+notes ;

    // delete button 
    var del = document.createElement("button");
    del.setAttribute("class","deletebutton");
    del.setAttribute("name","form"+notes);
    del.innerHTML = "Delete";

    del.addEventListener("click",function(event){
        event.preventDefault();
        return false ; 
    })


    // starred button
    var star = document.createElement("button");
    star.setAttribute("class","starbutton");
    star.setAttribute("name","form"+notes);
    star.innerHTML = "Star Note";
  
    
    star.addEventListener("click",function(event){
        event.preventDefault();
        return false ; 
    })


    //appending everything to form : THIS FORM CONTAINS INPUT , TEXTAREA , 2 BUTTONS - DELETE AND STAR 
    form.appendChild(title);
    form.appendChild(textarea);
    form.appendChild(del);
    form.appendChild(star);
    
    //appending form to div block ; 
    document.getElementById("notesDiv").appendChild(form);
    return false ; 
}

// TO do LIST 

function addLists(){
    todo += 1 ; 

    //creating form 
    var form = document.createElement("form");
    form.name = "todoform"+todo;
    form.setAttribute("class","todoForm");

    //creating add button
    var add =  document.createElement("button");
    add.setAttribute("class","todoadd");
    add.innerHTML = "Add Task"

    add.addEventListener("click",function(event){
        event.preventDefault();
        return false ; 
    })

    //creating delete button 
    var star = document.createElement("button");
    star.setAttribute("class","starbuttonTodo");
    star.setAttribute("name","todo"+todo);
    star.innerHTML = "Star List";
  
    
    star.addEventListener("click",function(event){
        event.preventDefault();
        return false ; 
    })

    //cerating title 
    var title = document.createElement("input");
    title.setAttribute("type","text")
    title.setAttribute("class","todoTitle");
    title.setAttribute("placeholder","Title");

    // appending to the form 
    form.appendChild(title);
    form.appendChild(add);
    form.appendChild(star);

    document.getElementById("ListDIv").appendChild(form);


}


// --------------------------------------
// switches 
// --------------------------------------
function openSettings(){
    if(!isSetOpen){
        document.getElementById("subSettings").style.display = "block";
        isSetOpen = 1 ; 
    }else{
        document.getElementById("subSettings").style.display = "none";
        isSetOpen = 0 ; 
    }
    
}

function openTheme(){
    if(!isThemeOpen){
        document.getElementById("subtheme").style.display = "block";
        isThemeOpen = 1 ; 
    }else{
        document.getElementById("subtheme").style.display = "none";
        isThemeOpen = 0 ; 
    }
    
}

function lightDark(){
    if(light == 1){

    }
}
function openNotes(){
    document.getElementById("main").style.display = "block" ; 
    document.getElementById("TodoMainBox").style.display = "none" ;
}
function openToDo(){
    document.getElementById("main").style.display = "none" ; 
    document.getElementById("TodoMainBox").style.display = "block" ;
}