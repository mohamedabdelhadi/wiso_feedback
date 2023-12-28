$(document).ready(function() {
  
    // openCam()
    const drop = $("#dropPanel");
    const wholediv = $("#WholeDiv");
    const homePanel = $("#homePanel");


    
    $('.language').on('click', () => {
      
        homePanel.removeClass('centerElements');
        drop.removeClass('show').addClass('hide');
        wholediv.removeClass('hide').addClass('show');
      
        openCam()
      });

      $('#home').on('click', () => {
        homePanel.addClass('centerElements');
        drop.removeClass('hide').addClass('show');
        wholediv.removeClass('show').addClass('hide');
    });



    
      function openCam() {
        const webcamStream = document.getElementById("webcamStream");
        // Check if the getUserMedia API is supported
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function(stream) {
                    // Assign the stream to the video element
                    webcamStream.srcObject = stream;
                    
                    // Show the camBase element
                    $("#cambase").removeClass("hide");
                    $("#framesDiv").removeClass("hide");
                })
                .catch(function(error) {
                    console.error("Error accessing webcam:", error);
                });
        } else {
            console.error("getUserMedia not supported on this browser");
        }
    }
    const videoElement = document.getElementById("webcamStream");
    const frameSections = document.querySelectorAll(".frameSection");
    const webcamStreamPanel = document.getElementById("webcamStreamPanel");
    let currentFrameElement = null;
  
    frameSections.forEach(frameSection => {
      frameSection.addEventListener("click", () => {
        const frameUrl = frameSection.getAttribute("data-frame-url");
        clearCurrentFrame();
        applyFrameToVideo(videoElement, frameUrl);
      });
    });
  
    function clearCurrentFrame() {
      if (currentFrameElement) {
        webcamStreamPanel.removeChild(currentFrameElement);
        currentFrameElement = null;
      }
    }
  
    function applyFrameToVideo(video, frameUrl) {
      const frameImage = new Image();
      frameImage.src = frameUrl;
      frameImage.onload = function () {
        const videoWidth = video.clientWidth;
        const videoHeight = video.clientHeight;
        const frameWidth = frameImage.width;
        const frameHeight = frameImage.height;
  
        const scaleFactor = Math.min(videoWidth / frameWidth, videoHeight / frameHeight);
        
        const frameStyle = `
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);

          pointer-events: none;
        `;
        
        const frameElement = document.createElement("img");
        frameElement.src = frameUrl;
        frameElement.style = frameStyle;
  
        webcamStreamPanel.appendChild(frameElement);
        currentFrameElement = frameElement;
      };
    }
  });
  
  

