// variables



// / display
// window.onload = () => {
//     document.getElementById('minutes').innerHTML = workTime;
//     document.getElementById('seconds').innerHTML = seconds;

//     workTittle.classList.add('active');
// }

// start timer
function start() {

 var workTime = document.timerform.mins.value;
workTime = parseInt(workTime);



let workTittle = document.getElementById('work');
let breakTittle = document.getElementById('break');
let breakTime = 0;


// let seconds = "00";
var seconds =  document.timerform.secs.value;
seconds = parseInt(seconds);
while(seconds>=60){
  workTime += 1 ;
  seconds -= 60 ; 
}

if(seconds == 0){
  seconds = 59 ;
  workTime -= 1 ; 
}

  console.log(workTime);
    // change button
    document.getElementById('start').style.display = "none";
    document.getElementById('reset').style.display = "block";

    // change the time
    
    console.log(seconds);

    let workMinutes = workTime ;
    let breakMinutes = breakTime - 1;

    console.log(workMinutes);
    breakCount = 0;

    // countdown
    let timerFunction = () => {
        //change the display
        document.getElementById('minutes').innerHTML = workMinutes;
        document.getElementById('seconds').innerHTML = seconds;

        // start
        seconds = seconds - 1;

        if(seconds === 0) {
            workMinutes = workMinutes - 1;
            if(workMinutes === -1 ){
                if(breakCount % 2 === 0) {
                    // start break
                    workMinutes = breakMinutes;
                    breakCount++

                    // change the painel
                    workTittle.classList.remove('active');
                    breakTittle.classList.add('active');
                }else {
                    // continue work
                    workMinutes = workTime;
                    breakCount++

                    // change the painel
                    breakTittle.classList.remove('active');
                    workTittle.classList.add('active');
                }
            }
            seconds = 59;
        }
    }

    // start countdown
    setInterval(timerFunction, 1000); // 1000 = 1s
}