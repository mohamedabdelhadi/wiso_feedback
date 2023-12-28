<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/indexStyle.css">
    <link rel="stylesheet" href="./css/pai.css">

    <title>MCIT-FaceDetection </title>
</head>
<body>  
            <label for="">Start</label>
            <input type="date" id="startDate" class="getdate">
            <label for="">End</label>
            
            <input type="date" id="endDate"  class="getdate">
            
            <button  id="" class="btn btn-warning getall">Total</button>
            <hr>
            <button  id="women" class="btn btn-primary">Women</button>
            <button id="men" class="btn btn-info">Men</button>
            <div class="exprs">

            </div>
            <div class="col-lg-12">
            <canvas id="myChart2" class="text-center"></canvas>
            </div>
            
       
</body>
<script src="{{url('frontend/js/jquery.min.js')}}" ></script>
    <script src="{{url('frontend/js/bootstrap/bootstrap.bundle.min.js')}}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="{{url('js/pai.js')}}"></script> -->
    <script src="{{url('js/pai2.js')}}"></script>
    <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>
    <script src="{{url('js/tooltip.js')}}"></script>
    <script src="{{url('js/html2pdf.bundle.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}" ></script>
    <script src="{{url('frontend/js/controls.js')}}" ></script>

    <script>
        $( document ).ready(function() {
            $('input').blur();
            fetchdata();    
            $('.getall').on('click',function(){
                sndchart();
                
            });
           
            //change date start here
            $('.getdate').on('change', function(e){
                e.preventDefault();
                var s = $('#startDate').val();
                var e = $('#endDate').val();
                
                if(e == ""){
                    $('#endDate').focus();

                }
                if(s == ""){
                    $('#startDate').focus();

                }else if(e !="" && s!=""){
                    console.log(`${s} = ${e}`);
                    $.ajax({
                        type: "GET",
                        url: "/btwexpression",
                        data:{
                            's':s,
                            'e':e,
                        },
                        dataType: 'json',
                        success: function(response)
                            {
                               console.log(response);
                                $('.exprs').empty();
                                $.each(response.output, function(key,item){
                                    $('.exprs').append(
                                        '<h5  id='+key+'>'+item+'</h5>'
                                        
                                    );
                                    
                               });
                                   

                            }
                    });
                }
                
            });
            //change date end here
            //get women data start here
            $('#women').on('click', function(){
                
                $.ajax({
                        type: "GET",
                        url: "/womenexpression",
                        dataType: 'json',
                        success: function(response)
                            {
                               //console.log(response);
                                $('.exprs').empty();
                                $.each(response.output, function(key,item){
                                    $('.exprs').append(
                                        '<h5  id='+key+'>'+item+'</h5>'
                                        
                                    );
                                    
                               });
                               sndchart();
                                   

                            }
                    });
            });

            //get women data end here

            //get men data start here
                $('#men').on('click', function(){

                        $.ajax({
                                type: "GET",
                                url: "/menexpression",
                                dataType: 'json',
                                success: function(response)
                                    {
                                    //console.log(response);
                                        $('.exprs').empty();
                                        $.each(response.output, function(key,item){
                                            $('.exprs').append(
                                            '<h5  id='+key+'>'+item+'</h5>'
                                        
                                    );
                                            
                                    });sndchart();
                                        

                                    }
                            });
                    });

                        //get men data end here

        });
        function fetchdata(){
                 
               
                    $.ajax({
                        type: "GET",
                        url: "/getexpression",
                        dataType: 'json',
                        success: function(response)
                            {
                               //console.log(response);
                               $.each(response.output, function(key,item){
                                    $('.exprs').append(
                                        '<h5  id='+key+'>'+item+'</h5>'
                                        
                                    );
                                    // $('tbody').append('<tr>\
                                    //     <td>'+key+'</td>\
                                    //     <td>'+item+'</td>\
                                    // </tr>');
                               });

                            }
                    });
                }
    </script>
</html>