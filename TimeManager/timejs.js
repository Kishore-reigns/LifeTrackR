// Ja// JavaScript (timejs.js)

// start timer
function start() {
  var workTime = document.timerform.mins.value || 0;
  workTime = parseInt(workTime);

  // Set default value to zero if NaN or empty
  if (isNaN(workTime) || workTime < 0) {
    workTime = 0;
  }

  let workTittle = document.getElementById('work');
  let breakTittle = document.getElementById('break');
  let breakTime = 0;

  var seconds = document.timerform.secs.value || 0;
  seconds = parseInt(seconds);

  // Set default value to zero if NaN or empty
  if (isNaN(seconds) || seconds < 0) {
    seconds = 0;
  }

  // Convert any additional seconds to minutes
  while (seconds >= 60) {
    workTime += 1;
    seconds -= 60;
  }

  if (seconds === 0 && workTime > 0) {
    seconds = 59;
    workTime -= 1;
  }

  // Set the initial timer display to "00:00"
  document.getElementById('minutes').innerHTML = workTime.toString().padStart(2, '0');
  document.getElementById('seconds').innerHTML = seconds.toString().padStart(2, '0');

  console.log(workTime);
  // change button
  document.getElementById('start').style.display = "none";
  document.getElementById('reset').style.display = "block";

  // change the time

  console.log(seconds);

  let workMinutes = workTime;
  let breakMinutes = breakTime - 1;

  console.log(workMinutes);
  let breakCount = 0;

  // countdown
  let timerFunction = () => {
    // start
    seconds = seconds - 1;

    if (seconds === -1) {
      workMinutes = workMinutes - 1;
      if (workMinutes === -1) {
        clearInterval(timerInterval); // Stop the timer
        document.getElementById('minutes').innerHTML = '00';
        document.getElementById('seconds').innerHTML = '00';
        document.getElementById('alarm').play(); // Play the alarm sound
        return;
      }
      seconds = 59;
    }

    //change the display
    document.getElementById('minutes').innerHTML = workMinutes.toString().padStart(2, '0');
    document.getElementById('seconds').innerHTML = seconds.toString().padStart(2, '0');

    if (workMinutes === -1 && seconds === 0) {
      clearInterval(timerInterval); // Stop the timer
      document.getElementById('minutes').innerHTML = '00';
      document.getElementById('seconds').innerHTML = '00';
      document.getElementById('alarm').play(); // Play the alarm sound
      return;
    }
  };

  // Start countdown and store the interval ID to clear later
  let timerInterval = setInterval(timerFunction, 1000);
}
