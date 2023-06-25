var notes = 0 ; 
var isSetOpen = 0 ; 
var isThemeOpen = 0 ; 
var Light = 1 ; 



function addNotes(){
    notes += 1 ; 
    console.log(notes);
    var textarea = document.createElement("textarea");
    textarea.name = "notes" + notes;
    textarea.id = "notes" + notes;
    textarea.cols = 30;
    textarea.rows = 10;
    var legend = document.createElement("legend");
    legend.nodeValue = textarea.name ; 
   document.getElementById("notesDiv").appendChild(textarea);
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
    if(document.getElementById("light")){

    }
}