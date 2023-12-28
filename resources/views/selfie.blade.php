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
    <link rel="stylesheet" href="{{ asset('static/css/kkiaairport2.css') }}">
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

    </style>
</head>


<body>


    <div class="container-fluid ">
        <div class="row">

                <!-- cam streaming portion start -->
                <div class="row ">
                    <div class="col-xl-12 col-lg-12 col-md-12 border" id="camVideo">
                        <video id="camera" autoplay></video>
                        <div id="overlay">
                            <div id="overlay-content" class="d-flex justify-content-center">
                                
                               
                                    <div class="outer-circle ">
                                        <div class="inner-circle p-5 pulseAnimation" id="takeSnapshot">
                                            <img src="{{ asset('/static/icon/cam.png') }}" clas="w-25" alt="Inner Image"
                                                id="cameraImg">
                                            <div id="countdownText" class="countdown-hidden"
                                                style="font-family: 'Squada One', cursive !important;"></div>
                                        </div>
                                    </div>
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- cam streaming portion end -->


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





 <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Your code to access the camera and set the srcObject property here
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                var video = document.getElementById('camera');
                video.srcObject = stream;
            })
            .catch(function (error) {
                console.error('Error accessing the camera:', error);
            });
    });


</script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="{{ asset('static/js/owl.js') }}"></script>

{{-- --}}
</html>
