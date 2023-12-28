







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