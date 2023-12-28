<!DOCTYPE html>
<html>

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('static/css/kkiaairport.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/owl.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/loader.css')}}">
    <style>
      .image-scroll-container {
    display: flex;
    overflow-x: auto;
    white-space: nowrap;
}

.image-scroll-container img {
    width: 300px; /* Set the desired width for your images */
    height: auto; /* Maintain aspect ratio */
    margin-right: 10px; /* Add some space between images */
}

    </style>
</head>


<body>
    <div class="loader text-center hide " id="loader" style="">
        <svg class="svg-calLoader" xmlns="http://www.w3.org/2000/svg" width="400" height="400"><path class="cal-loader__path" d="M86.429 40c63.616-20.04 101.511 25.08 107.265 61.93 6.487 41.54-18.593 76.99-50.6 87.643-59.46 19.791-101.262-23.577-107.142-62.616C29.398 83.441 59.945 48.343 86.43 40z" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="10 10 10 10 10 10 10 432" stroke-dashoffset="77"/><path class="cal-loader__plane" d="M141.493 37.93c-1.087-.927-2.942-2.002-4.32-2.501-2.259-.824-3.252-.955-9.293-1.172-4.017-.146-5.197-.23-5.47-.37-.766-.407-1.526-1.448-7.114-9.773-4.8-7.145-5.344-7.914-6.327-8.976-1.214-1.306-1.396-1.378-3.79-1.473-1.036-.04-2-.043-2.153-.002-.353.1-.87.586-1 .952-.139.399-.076.71.431 2.22.241.72 1.029 3.386 1.742 5.918 1.644 5.844 2.378 8.343 2.863 9.705.206.601.33 1.1.275 1.125-.24.097-10.56 1.066-11.014 1.032a3.532 3.532 0 0 1-1.002-.276l-.487-.246-2.044-2.613c-2.234-2.87-2.228-2.864-3.35-3.309-.717-.287-2.82-.386-3.276-.163-.457.237-.727.644-.737 1.152-.018.39.167.805 1.916 4.373 1.06 2.166 1.964 4.083 1.998 4.27.04.179.004.521-.076.75-.093.228-1.109 2.064-2.269 4.088-1.921 3.34-2.11 3.711-2.123 4.107-.008.25.061.557.168.725.328.512.72.644 1.966.676 1.32.029 2.352-.236 3.05-.762.222-.171 1.275-1.313 2.412-2.611 1.918-2.185 2.048-2.32 2.45-2.505.241-.111.601-.232.82-.271.267-.058 2.213.201 5.912.8 3.036.48 5.525.894 5.518.914 0 .026-.121.306-.27.638-.54 1.198-1.515 3.842-3.35 9.021-1.029 2.913-2.107 5.897-2.4 6.62-.703 1.748-.725 1.833-.594 2.286.137.46.45.833.872 1.012.41.177 3.823.24 4.37.085.852-.25 1.44-.688 2.312-1.724 1.166-1.39 3.169-3.948 6.771-8.661 5.8-7.583 6.561-8.49 7.387-8.702.233-.065 2.828-.056 5.784.011 5.827.138 6.64.09 8.62-.5 2.24-.67 4.035-1.65 5.517-3.016 1.136-1.054 1.135-1.014.207-1.962-.357-.38-.767-.777-.902-.893z" class="cal-loader__plane" fill="#DBD8DB"/></svg>
      
    </div>

    <div class="container-fluid ">
        <div class="row">
            <!-- intotext start -->
            <div class="col-xl-12 col-lg-12 col-md-12 text-center  pt-5" id="welcomeMsgdiv">
                <h3 class=" welmsg">التقط لحظاتك السعيدة معنا</h3>
                <h3 class=" welmsg pt-5">Capture Happy </h3>
                <h3 class=" welmsg"> Moments</h3>
                <h3 class=" welmsg"> With Us</h3>

            </div>
            <!-- intotext end -->
            <!-- home button start-->
            <div class="col-xl-12 col-lg-12 col-md-12 pb-3 my-4" id="homeBtndiv">
                <div class="homebtn float-end p-2">
                    <a href="/"><img src="{{ url('/static/icon/home.png') }}" class="pl-2 img-hover"
                            id="home"></a>
                </div>

            </div>
            <!-- home button end -->
            <!-- content section start-->
            <div class="col-xl-12 col-lg-12 col-md-12" id="contentDiv">
                <!-- language section  start-->
                <div class="row " id="btnDiv">
                    <div class="col-xl-12 col-lg-12 col-md-12  centered-content ">

                        <div class="row  text-center">
                            <!-- <div class="col-xl-12 col-lg-12 col-md-12"> -->
                            <h5 class="welTxtHead text-white">Please Choose Language </h5>
                            <br>
                            <!-- </div> -->
                            <!-- <div class="col-xl-12 col-lg-12 col-md-12 py-4">                           -->
                            <h5 class="welTxtHead text-white py-4">الرجاء اختيار اللغة </h5>
                            <!-- </div> -->
                        </div>

                        <div class="row mt-5">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  langBtn" id="eng">
                                <div class="languageBtn enbg welTxtHead">English</div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 langBtn " id="ar">
                                <div class="languageBtn arbg welTxtHead">عربي</div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- language section  end-->
                <!-- cam streaming portion start -->
                <div class="row " id="streamDiv">
                    <div class="col-xl-12 col-lg-12 col-md-12 hide" id="camDiv">
                        <div id="video-container">
                            <video id="camera-stream" autoplay playsinline></video>


                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12  pt-3">
                        <div class="row d-flex justify-content-center">
                            <!-- circles start -->
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 " id="captureBtn">
                                <div class="outer-circle ">
                                    <div class="inner-circle p-5" id="takeSnapshot">
                                        <img src="{{ asset('/static/icon/cam.png') }}" clas="w-25" alt="Inner Image"
                                            id="cameraImg">
                                        <div id="countdownText" class="countdown-hidden"
                                            style="font-family: 'Squada One', cursive !important;">3</div>
                                    </div>
                                </div>
                            </div>
                            <!-- circles end -->
                        </div>
                    </div>
                    <!-- like dislike start -->
                    <div class="col-xl-12 col-lg-12 col-md-12 hide pt-3" id="likedisBtn">
                        <div class="row">
                            <!-- qr code div start -->
                            <div class="col-xl-12 d-flex justify-content-center">
                                <div class="text-center" id="qrcode"> </div>
                            </div>
                            <!-- qr code div end -->
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center">
                                <div class="ldBtn  welTxtTitle" id="retake">ReTake</div>

                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 pb-4 d-flex justify-content-center">
                                <div class="ldBtn  welTxtTitle" id="okSelfie">Ok</div>
                            </div>
                        </div>
                    </div>
                    <!-- like dislike end -->

                    <!-- filters start -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 hide" id="frameDiv">

                        {{-- <div id="owl-example" class="owl-carousel">
                            <div><img class="snapshot" src="{{ url('/static/filters/nofilter.png') }}" alt="Snapshot 9"> </div>
                            <div><img class="snapshot" src="{{ url('/static/filters/1.png') }}" alt="Snapshot 9"> </div>
                        </div> --}}

                        <div class="image-scroll-container" id="displayframes">
                          {{-- <img src="{{ url('/static/filters/nofilter.png')}}" alt="Image 1">
                          <img src="{{ url('/static/filters/1.png')}}" alt="Image 2">
                          <img src="{{ url('/static/filters/2.png')}}" alt="Image 3">
                          <img src="{{ url('/static/filters/3.png')}}" alt="Image 3">
                          <img src="{{ url('/static/filters/4.png')}}" alt="Image 3"> --}}
                      </div>
                    </div>
                    <!-- filters end -->
                    <!--  -->
                </div>
                <!-- cam streaming portion end -->

            </div>
            <!-- content section end -->
        </div>
    </div>



</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<script src="{{ asset('static/js/webcam.js') }}" type="module"></script>
<script src="{{ asset('static/js/kk.js') }}"></script>

<script>
    // sendselfie("http://localhost:8080/kkia_dashboard/img/","1.png");
    document.addEventListener('contextmenu', function(event) {
    event.preventDefault(); // Prevent the context menu from showing up
});
document.addEventListener('DOMContentLoaded', function() {
    // Check if the document is not in fullscreen mode
    if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
        // Enter fullscreen mode
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) { // Firefox
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) { // Chrome, Safari, and Opera
            document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        } else if (document.documentElement.msRequestFullscreen) { // IE/Edge
            document.documentElement.msRequestFullscreen();
        }
    }
});


    function sendselfie(dataURL, fileName) {
        
      const data = {
        image: dataURL,
        fileName: fileName
    };
   
    $.ajax({
        url: '{{ route("send-Selfiesas") }}',
        type: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: data,
        success: function(response) {
            console.log(response);
          
            generateQR(fileName);
            $('#loader').addClass('hide');

        },
        error: function(xhr, status, error) {
            console.error(error); // Log the error
        }
    });
}

function generateQR(FileName) {

  var qrCodeElement = document.getElementById('qrcode');
  qrCodeElement.innerHTML = '';
  FileName = "http://192.168.100.20/selfies/" + FileName + ".jpeg";
  // FileName = "https://qltyss.com/matarat/" + FileName + ".png";
  var qr = new QRCode(qrCodeElement, {
    text: FileName,
    width: 228,
    height: 228,
    correctLevel: QRCode.CorrectLevel.H
  });
 
  var qrtitle = document.createElement('p');
  qrtitle.innerHTML = "! امسح الكود لتحميل صورتك";
  qrtitle.setAttribute('id', 'qrtitle')
  qrtitle.classList.add('fade-in');
  qrCodeElement.appendChild(qrtitle);


}
getFrames();




//   function getFrames(){
//             $.ajax({
//             url: '{{ route("getFrames") }}',
//             type: 'GET',
//             success: function (response) {
//                 console.log(response)
//                 var imageContainer = $('#displayframes');
//                 var counter=0;
//                 response.frames.forEach(function (image) {
//                     counter = counter + 1;
//                     var img = $('<img>').attr('src', '{{ asset("facedetection1/public/filters") }}/' + image.fname);
//                     img.attr('id',image.f_id)
//                     img.attr('alt','Snapshot 9')
//                     img.addClass('snapshot');
//                     imageContainer.append(img);
//                 });
//             },
//             error: function () {
//                 console.error('AJAX request for images failed.');
//             }
//          });
//         }
function getFrames() {
    $.ajax({
        url: '{{ route("getFrames") }}',
        type: 'GET',
        success: function (response) {
            console.log(response);
            var imageContainer = $('#displayframes');
            var counter = 0;
            response.frames.forEach(function (image) {
                counter = counter + 1;
                if(image.f_id == "0"){
                    var img = $('<img>').attr('src', '{{ asset("facedetection1/public/filters/noFrame.png") }}');
                }else{
                    var img = $('<img>').attr('src', '{{ asset("facedetection1/public/filters") }}/' + image.fname);
                }
                
                img.attr('id', image.f_id);
                img.attr('alt', 'Snapshot ' + counter); // Use a more appropriate alt text
                img.addClass('snapshot');
                imageContainer.append(img);
            });

            bindSnapshotClickEvent(); // Bind click events after images are loaded
        },
        error: function () {
            console.error('AJAX request for images failed.');
        }
    });
}

function bindSnapshotClickEvent() {
    const frames = document.querySelectorAll('.snapshot');
    const videoContainer = document.getElementById('video-container');
    
    frames.forEach(snapshot => {
        snapshot.addEventListener('click', () => {
            const selectedFrame = document.createElement('img');
            if(snapshot.id == "0"){
                selectedFrame.src = '{{ asset("facedetection1/public/filters/nofilter.png") }}'
            }else{
                selectedFrame.src = snapshot.src;
            }
            
            selectedFrame.alt = snapshot.alt;
            selectedFrame.id = "selfieFrame"; // Consider using a more unique ID
            selectedFrame.classList.add('selected-snapshot');

            // Clear previous snapshots
            const existingFrame = videoContainer.querySelector('.selected-snapshot');
            if (existingFrame) {
                existingFrame.remove();
            }

            videoContainer.appendChild(selectedFrame);
        });
    });
}

</script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="{{ asset('static/js/owl.js') }}"></script>

{{-- --}}
</html>
