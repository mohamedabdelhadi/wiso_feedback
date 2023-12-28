// let circlularProgressqtyz = document.querySelector("#circular-prgress6");
//     progressValueqtyz = document.querySelector("#progress-value6");

//     let progressStartValueqtyz=0;
//         progressEndValueqtyz=parseInt((60/100)*100);
//         speedqtyz = 20;

// let progressqtyz = setInterval(()=>{
//     progressStartValueqtyz++
//     progressValueqtyz.textContent = `60`;
//     circlularProgressqtyz.style.background = `conic-gradient(rgb(0, 134, 206) ${progressStartValueqtyz * 3.6}deg, white 0deg)`;
//     if(progressStartValueqtyz ==  progressEndValueqtyz){
//         clearInterval(progressqtyz);
//     }
// },speedqtyz);
//Available-Space Circle
let availSpaceCircle = document.querySelector("#circular-prgress4");
    availProgress = document.querySelector("#progress-value4");
    totalprk = document.querySelector("#totalprk").textContent;
    availSpace = 1

    let availStartValue=0;
        availEndValue=parseInt((availSpace/totalprk)*100);
        availspeed = 20;

let availprogress = setInterval(()=>{
    availStartValue++
    availProgress.textContent = availSpace;
    availSpaceCircle.style.background = `conic-gradient(rgb(63, 193, 80) ${availStartValue * 3.6}deg, white 0deg)`;
    if(availStartValue ==  availEndValue){
        clearInterval(availprogress);
    }
},availspeed);


//Unavailable-Space Circle
    let unavailSpaceCircle = document.querySelector("#circular-prgress5");
    unavailProgress = document.querySelector("#progress-value5");
   
    
    totalprk = document.querySelector("#totalprk").textContent;
  
    let unavailStartValue=0;
        remaingSpace = totalprk - availSpace
        unavailEndValue=parseInt((remaingSpace/totalprk)*100);
        unavailspeed = 20;

    let unavailprogress = setInterval(()=>{
        unavailStartValue++
        unavailProgress.textContent = remaingSpace;
        unavailSpaceCircle.style.background = `conic-gradient(rgb(252, 196, 34) ${unavailStartValue * 3.6}deg, white 0deg)`;
        if(unavailStartValue ==  unavailEndValue){
            clearInterval(unavailprogress);
        }
    },unavailspeed);

//In-Vichle Circle
let inVichleCircle  = document.querySelector("#circular-prgress6");
inVichleProgress = document.querySelector("#progress-value6");
    totalIn = document.querySelector("#totalIn").textContent;
    inVichle = 35

    let inVichleStartValue=0;
    inVichleEndValue=parseInt((inVichle/totalIn)*100);
        inVichlespeed = 20;

let inVichleprogress = setInterval(()=>{
    inVichleStartValue++
    inVichleProgress.textContent = inVichle;
    inVichleCircle.style.background = `conic-gradient(rgb(0, 134, 206) ${inVichleStartValue * 3.6}deg, white 0deg)`;
    if(inVichleStartValue ==  inVichleEndValue){
        clearInterval(inVichleprogress);
    }
},inVichlespeed);


//In-Vichle Circle
let outVichleCircle  = document.querySelector("#circular-prgress7");
outVichleProgress = document.querySelector("#progress-value7");
    totalIn = document.querySelector("#totalIn").textContent;
    outVichle = totalIn - inVichle

    let outVichleStartValue=0;
    outVichleEndValue=parseInt((outVichle/totalIn)*100);
    outVichlespeed = 20;

let outVichleprogress = setInterval(()=>{
    outVichleStartValue++
    outVichleProgress.textContent = outVichle;
    outVichleCircle.style.background = `conic-gradient(rgb(132, 124, 203) ${outVichleStartValue * 3.6}deg, white 0deg)`;
    if(outVichleStartValue ==  outVichleEndValue){
        clearInterval(outVichleprogress);
    }
},inVichlespeed);