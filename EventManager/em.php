<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EventManager</title>
    <link id="PageTheme" rel="stylesheet" href="eventManagerCss.css" />
    <script src="evenManJs.js"></script>
    <script>
      function convertToBullet(event) {
        if (event.keyCode === 13) {
          // Check if Enter key is pressed
          event.preventDefault(); // Prevent default behavior of Enter key

          var textarea = event.target;
          var text = textarea.value.trim();
          var bullet = "\u2022 "; // Bullet character

          if (text.length > 0) {
            textarea.value += "\n" + bullet; // Add new bullet on a new line
          }
        }
      }
      function open_todo_pop(){
        document.getElementById("TodoPopup").style.display="block";
        document.getElementById("blursheet").style.display="block";
      }
</script>
            
  </head>
  <body>
    <div class="header">
      <div class="siteName" style="width:40%;" >
        <h2 style="margin-left:30px">EventManager</h2>
        <div style="margin-left:380px;display:flex;justify-content:center;width:70%;">
      <button class="addNotesbutton" onclick="openpopup()">Add Notes</button>
      <input type="button" style="" class="addNotesbutton" onclick="open_todo_pop()" value="Add List" >
      </div>
    </div>
      <div class="headerRight">
        <img src="images_eventmanager/LogoDark.jpg" class="nameIndex">
        <p class="userName">LifetrackR</p>
      </div>
    </div>

    <div class="leftTabs">
      <button
        class="NotesMain"
        name="NotesButton"
        value="NotesButton"
        onclick="openNotes()"
      >
        Notes and Todo 
      </button>


      <button class="calender" value="calender" onclick="openCalender()">
        Calender
      </button>
      <!-- <button
        class="settings"
        id="settings"
        value="settings"
        onclick="openSettings()"
      >
        Settings
      </button>
      <div class="subSettings" id="subSettings" value="subSettings">
        <button class="theme" id="theme" onclick="openTheme()">Theme</button>
        <div class="subtheme" id="subtheme">
          <button
            class="light"
            value="light"
            id="light"
            value="1"
            onclick="setTheme(0)"
          >
            Light
          </button>
          <button
            class="dark"
            vlaue="dark"
            id="dark"
            value="0"
            onclick="setTheme(1)"
          >
            Dark
          </button>
        </div>
      </div> -->

      <button
        class="hub"
        value="hub"
        onclick="window.location.href = '../home page/homeIndex.php'"
      >
        Hub
      </button>
    </div>

    <!-- Main : notes container-->
<div style="display:flex;" class="thebigcontainer">
    <div class="main" id="main">
      <div class="headAndAdd" style="margin:auto">
        <h2 class="" style="text-align:center;color:white;margin-left:230px">Your Notes</h2>

      </div>
      

            <?php
            include("../config.php");

            $sql = "SELECT title, note FROM eventmanager_note";
            $result = mysqli_query($conn, $sql);

            // Check if there are any rows returned
            if (mysqli_num_rows($result) > 0) {
              
              while ($row = mysqli_fetch_assoc($result)) {

                $title = $row['title'];
                $note = $row['note'];

                echo '<div class="notedisplay" style="margin:auto;margin-bottom:20px" >';
                echo '<div class="title" style="text-align: center; color: white;"><h2 style="padding-top:10px">' . $title . '</h2></div>';
                echo '<div class="thenoteitself"><p>' . $note . '</p></div>';
                echo '</div>';

                // if ($count % 2 === 0) {
                //   echo '</div><div class="row">'; // Close the current row and start a new row after every two elements
                // }
              }

              echo '</div>'; // Close the last row container
            } else {
              echo 'No notes found.';
            }

            ?>
      
    </div>

        <!-- todo list container-->

      <div class="TodoMainBox" id="TodoMainBox">
        <div class="headAndAdd">
          <h2 class="" style="text-align:center;color:white;margin-left:230px">Your Lists</h2>
          <!-- <button class="addNotesbutton" onclick="TodoOpenPopup()">Add List</button> -->
          <!-- <button class="addNotesbutton" onclick="TodoOpenPopup()">Add List</button> -->
          <!-- <input type="button" style="" class="" onclick="open_todo_pop()" value="Add List" > -->
        </div>

        <?php

          $sql = "SELECT date, todo FROM eventmanager_todo order by date desc";
          $result = mysqli_query($conn, $sql);

          // Check if there are any rows returned
          if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

              $title = $row['date'];
              $note = $row['todo'];
              $note = str_replace("\u2022 ", '<br>'."\u2022 ", $note); // Replace '\u2022 ' with '<br>'
              
              echo '<div class="notedisplay" style="margin:auto;margin-bottom:20px">';
              echo '<div class="title" style="text-align: center; color: white;border-radius:20px;"><h2 style="padding-top:10px">' . $title . '</h2></div>';
              echo '<div class="thenoteitself"><pre>' . $note . '</pre></div>';
              echo '</div>';
            }
          }
          ?>


        <!-- <div id="ListDIv"></div> -->
    </div>
</div>

    <!--------------------POPUP------------------------>
    <form action="addnote.php" id="notesPopup" style="display: none" method="POST">
      <h2 style="text-align: center; font-family: Arial, Helvetica, sans-serif">
        ADD NOTE
      </h2>
      <div class="inputbox">
        <input type="text" name="title" placeholder="Title" class="textinput" />
      </div>
      <br />
      <h2 for="" id="color:white">Craft Your Note:</h2>
      <textarea name="note" id="" class="TXTarea"></textarea>
      <input style="" type="submit" class="submitnote" />
    </form>

    <!--------------------POPUPtodo------------------------>
    <form class="popupTodo" style="display: none" method="post" action="insert_todo.php" id="TodoPopup">
    <h2 style="text-align: center; font-family: Arial, Helvetica, sans-serif" >
        ADD To-Do
      </h2>
      <h3 for="date">Date:</h3>
      <div class="inputbox">
      <input type="date" id="date" class="textinput" name="date" required /><br />
      </div>

      <label for="notes">Notes:</label>
      <textarea
      class="TXTarea"
        id="notes"
        name="note"
        rows="5"
        onkeydown="convertToBullet(event)"
      >
&#8226;</textarea
      >

      <input type="submit" value="Submit" class="submitnote">
    </form>

    <!-- calender container-->

    <div class="calenderBox" id="calenderBox">
      <div class="calenderContainer" id="calenderContainer">
        <iframe
          src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=UTC&src=OGE0NzEzMzU1YWFjMjM4YjViZGY2NDhlMTc3NGY2YjE2NmI0ZTc5Njg4YTA4NGZmODJmNjQzYmU1ODkzNzhlOUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23EF6C00"
          style="border: solid 1px #777"
          width="800"
          height="600"
          frameborder="0"
          scrolling="no"
        ></iframe>
      </div>
    </div>
    <!------------------------------------------------------------------------------->
    <div id="blursheet" onclick="closepopup()"></div>
    <!------------------------------------------------------------------------------->
  </body>
</html>
<?php
mysqli_close($conn);
?>