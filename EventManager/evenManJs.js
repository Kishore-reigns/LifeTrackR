var notes = 0 ; 
var isSetOpen = 0 ; 
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

    //creating delete button 
    var del = document.createElement("button");
    del.setAttribute("class","deletebutton");
    del.setAttribute("name","form"+notes);
    del.innerHTML = "Delete";


    //creating starred button
    var star = document.createElement("button");
    star.setAttribute("class","starbutton");
    star.setAttribute("name","form"+notes);
    star.innerHTML = "Star Note";
  


    //appending everything to form 
    form.appendChild(title);
    form.appendChild(textarea);
    form.appendChild(del);
    form.appendChild(star);
    
    //appending form to div block ; 
    document.getElementById("notesDiv").appendChild(form);
    return false ; 
}

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