
totalprk = parseInt(document.querySelector("#totalprk").textContent);


availSpace = 3;
const availEndValue = parseInt((availSpace / totalprk) * 100);
const speed = 20;

// Animation function
function animateProgress(startValue, endValue) {
  let spaceCircle = document.querySelector("#circular-prgress4");
  progressElement = document.querySelector("#progress-value4");
  console.log(startValue)
  console.log(endValue)
  console.log(progressElement)
  console.log(spaceCircle)
  let startValue = startValue
  const interval = setInterval(() => {
    startValue++;
    progressElement.textContent = '3';
    spaceCircle.style.background = `conic-gradient(rgb(63, 193, 80) ${startValue * 3.6}deg, white 0deg)`;
    if (startValue == endValue) {
      clearInterval(interval);
    }
  }, speed);
}


animateProgress(0, 3);
