//notes
var notes = 0 ;

//to do
var todo = 0 ;

//settings
var isSetOpen = 0 ;

//theme
var isThemeOpen = 0 ;

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
    document.getElementById("TodoMainBox").style.display = "block" ;
    document.getElementById("calenderBox").style.display = "none" ;
}

function openCalender(){
    document.getElementById("main").style.display = "none" ;
    document.getElementById("TodoMainBox").style.display = "none" ;
    document.getElementById("calenderBox").style.display = "block" ;

}


function openpopup(){
    // document.getElementById("main").style.display = "block" ;
   // document.getElementById("TodoMainBox").style.display = "none" ;
    //document.getElementById("calenderBox").style.display = "none" ;
    document.getElementById("notesPopup").style.display = "block" ;
    document.getElementById("blursheet").style.display = "block" ;
   // document.getElementById("TodoPopup").style.display = "none" ;

}

// document.addEventListener("click", function(event) {
//     var addButton = event.target.closest(".addNotesbutton");
//     var todoButton = event.target.closest(".popupTodo .addNotesbutton");
//     if (addButton) {
//       TodoOpenPopup();
//     } else if (todoButton) {
//       TodoOpenPopup();
//     }
//   });

function TodoOpenPopup() {
    // Hide other popups if they were open
    document.getElementById("notesPopup").style.display = "none";
    // ...

    // Show the Todo popup and blur sheet
    document.getElementById("TodoPopup").style.display = "block";
    document.getElementById("blursheet").style.display = "block";
}

function closepopup(){
    // document.getElementById("main").style.display = "block" ;
     document.getElementById("TodoMainBox").style.display = "block" ;
    document.getElementById("calenderBox").style.display = "none" ;
    document.getElementById("notesPopup").style.display = "none" ;
    document.getElementById("blursheet").style.display = "none" ;
    document.getElementById("TodoPopup").style.display = "none" ;
    document.getElementById("main").style.display = "block" ;


}


////////////////
//Themes
///////////////

function setTheme(n){
    var themes = ["eventManagerCss.css","eventManagerDark.css"]
    document.getElementById("PageTheme").href = themes[n];
}