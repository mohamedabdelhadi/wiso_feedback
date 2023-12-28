$(document).ready(function() {
  
  $('.langBtn').on('click', function() {
    $("#btnDiv").hide(); // Hide the button div
    $("#welcomeMsgdiv").hide(); // Hide the button div
    $("#camDiv").removeClass('hide'); // Hide the button div
    openCam();
  });

  $('#retake').on('click', function() {
    $("#likedisBtn").addClass("hide");
    $('#captureBtn').removeClass('hide');
    $('#frameDiv').removeClass('hide');
    const video = document.getElementById('camera-stream');

    video.play()

  });
  $('#okSelfie').on('click', function() {
    $("#likedisBtn").addClass("hide");   
    $("#qrcode").addClass("hide");   


  });

  $('#streamDiv').on('click', '#captureBtn', function(event) {
    event.stopPropagation();
    const cameraImg = document.getElementById("cameraImg");
    const countdownText = document.getElementById("countdownText");
    const outerCircle = document.querySelector(".outer-circle");
    countdownText.textContent = 3;
    let a = $('#countdownText').text();
    let countdown = 3;
    let interval;

    cameraImg.style.display = "none";
    countdownText.style.display = "block";
    outerCircle.classList.add("pulseAnimation"); // Add the pulse animation class
    
    function updateCountdown() {
      if (countdown >= 0) {
        if (countdown === 0) {
          countdownText.textContent = "Cheese";
          takeSelfie();
          $('#camDiv').addClass('imageCaptured');
          setTimeout( function(){ 
            countdownText.textContent = "";
            cameraImg.style.display = "block";
            $("#likedisBtn").removeClass("hide");
          $('#captureBtn').addClass('hide');
          $('#frameDiv').addClass('hide');
          $('#camDiv').removeClass('imageCaptured');
          }  , 1000 );
          clearInterval(interval);  
        } else {
          countdownText.textContent = countdown;
        }
        countdown--;
        
      }
      
    }
    updateCountdown()
    interval = setInterval(updateCountdown, 1000);
    
  });



   // open cam
   function openCam() {
    const webcamStream = document.getElementById("camera-stream");

    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
      navigator.mediaDevices.getUserMedia({ video: true })
        .then(function(stream) {
          webcamStream.srcObject = stream;
          $("#contentDiv").addClass('shadow'); // Show the stream div
          $("#streamDiv").show(); // Show the stream div
          $("#captureBtn").addClass("appear"); 
          $("#frameDiv").removeClass("hide"); 
         
        })
        .catch(function(error) {
          console.error("Error accessing webcam:", error);
        });
    } else {
      console.error("getUserMedia not supported on this browser");
    }
  }


});

document.addEventListener('DOMContentLoaded', () => {
  const video = document.getElementById('camera-stream');
  const frames = document.querySelectorAll('.snapshot');
  const videoContainer = document.getElementById('video-container');

  frames.forEach(snapshot => {
      snapshot.addEventListener('click', () => {
          const selectedFrame = document.createElement('img');
          selectedFrame.src = snapshot.src;
          selectedFrame.alt = snapshot.alt;
          selectedFrame.id = "selfieFrame";
          selectedFrame.classList.add('selected-snapshot');

          // Clear previous snapshots
          const existingFrame = videoContainer.querySelector('.selected-snapshot');
          if (existingFrame) {
              existingFrame.remove();
          }

          videoContainer.appendChild(selectedFrame);
      });
  });
});