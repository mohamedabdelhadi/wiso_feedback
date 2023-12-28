$(document).ready(function() {
    $('.langBtn').on('click', function() {
      $("#btnDiv").hide(); // Hide the button div
      $("#welcomeMsgdiv").hide(); // Hide the button div
      openCam();
    });


    $('#streamDiv').on('click', '#captureBtn', function(event) {
      event.stopPropagation();
      countdown = 3;
      cameraImg.style.display = "none";
      countdownText.style.display = "block";
      outerCircle.classList.add("pulseAnimation"); // Add the pulse animation class
      pulseAnimationActive = true;
      // updateCountdown();
      interval = setInterval(updateCountdown, 1000);
      // $('#captureBtn').addClass('hide'); // Hide the button div
      // $("#likedisBtn").removeClass("hide");
    });


const cameraImg = document.getElementById("cameraImg");
const countdownText = document.getElementById("countdownText");

const outerCircle = document.querySelector(".outer-circle");
let pulseAnimationActive = false;
let countdown = 3;
let interval;

function updateCountdown() {
  if (countdown >= 0) {
    if (countdown === 0) {
      countdownText.textContent = "Cheese";
      outerCircle.classList.remove("pulseAnimation");
    } else {
      countdownText.textContent = countdown;
    }
    countdown--;

    if (countdown < 0) {
      clearInterval(interval);
      console.log("Countdown reached zero!");
      countdownText.textContent = "";
      cameraImg.style.display = "block";
      countdownText.style.display = "none";
      return;
    }
  }
}







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
            selectedFrame.id="selfieFrame";
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
  
  
  
  
  
        //     document.addEventListener('DOMContentLoaded', () => {
        //     const video = document.getElementById('camera-stream');
        //     const snapshots = document.querySelectorAll('.snapshot');
        //     const videoContainer = document.getElementById('video-container');

        //     snapshots.forEach(snapshot => {
        //         snapshot.addEventListener('click', () => {
        //             const selectedSnapshot = document.createElement('img');
        //             selectedSnapshot.src = snapshot.src;
        //             selectedSnapshot.alt = snapshot.alt;
        //             selectedSnapshot.classList.add('selected-snapshot');

        //             // Clear previous snapshots
        //             const existingSnapshot = videoContainer.querySelector('.selected-snapshot');
        //             if (existingSnapshot) {
        //                 existingSnapshot.remove();
        //             }

        //             videoContainer.appendChild(selectedSnapshot);
        //         });
        //     });
        // });

    document.addEventListener('DOMContentLoaded', () => {
            const snapshotGallery = document.getElementById('snapshot-gallery');
            let isDragging = false;
            let startX;
            let scrollLeft;

            snapshotGallery.addEventListener('mousedown', (event) => {
                isDragging = true;
                startX = event.clientX;
                scrollLeft = snapshotGallery.scrollLeft;
                snapshotGallery.style.cursor = 'grabbing';
            });

            snapshotGallery.addEventListener('mousemove', (event) => {
                if (!isDragging) return;
                const x = event.clientX - startX;
                snapshotGallery.scrollLeft = scrollLeft - x;
            });

            snapshotGallery.addEventListener('mouseup', () => {
                isDragging = false;
                snapshotGallery.style.cursor = 'grab';
            });

            snapshotGallery.addEventListener('mouseleave', () => {
                if (!isDragging) return;
                isDragging = false;
                snapshotGallery.style.cursor = 'grab';
            });
    });
