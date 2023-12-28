<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   
   <link rel="stylesheet" href="{{url('frontend/css/bootstrap/bootstrap.min.css')}}">
</head>
<body>

            <div class="container-fluid border border-primary d-flex align-items-center justify-content-center">
                <div class="row" id="root">
                    <div class="col-lg-12">
                        <h4>Quality Support Solutions</h4>
                    </div>
                    <div class="col-lg-6">
                           <ul>
                            <li> Happy     <script>$('#Happy').text(); </script></li>
                            <li> Sad       <script>$('#Sad').text(); </script></li>
                            <li> Neutral   <script>$('#Neutral').text(); </script></li>
                            <li> Angry     <script>$('#Angry').text(); </script></li>
                            <li> Surprise  <script>$('#Surprise').text(); </script></li>
                            <li> Fear      <script>$('#Fear').text(); </script></li>
                           </ul>
                           
                    </div>
                    <div class="col-lg-6" >
                            <canvas id="myChart2"></canvas>
                    </div>
                    <button id="od">pdf</button>
                </div>
            </div>
        
        














<script src="{{url('frontend/js/jquery.min.js')}}" ></script>
    <script src="{{url('frontend/js/bootstrap/bootstrap.bundle.min.js')}}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jspdf@1.5.3/dist/jspdf.min.js"></script>
   
    <script src="{{url('js/pai2.js')}}"></script>
    <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>
    <script src="{{url('js/tooltip.js')}}"></script>
    <script src="{{url('js/html2pdf.bundle.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}" ></script>
    <script src="{{url('frontend/js/controls.js')}}" ></script>
    <script>
        sndchart();
        $('#od').click(function(){

            var element = document.getElementById('root');

            // Generate the PDF.
            html2pdf().from(element).set({
            margin: 1,
            filename: 'test.pdf',
            html2canvas: { scale: 2 },
            jsPDF: {orientation: 'portrait', unit: 'in', format: 'letter', compressPDF: true}
            }).save();
        });
    </script>
</body>

</html>