<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{url('frontend/css/kkia_dashboard.css')}}">

    <title>QSS Solution To All Problems</title>
  </head>
  <body>


        <div class="container-fluid">
             <!-- header start -->
            <div class="row header-container shadow-lg">
                
                 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 text-xs-center  p-2">
                    <img src="{{url('img/mcit/logo.png')}}" class="w-25" alt="">
                 </div>
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-end text-xs-center  p-2">
                    <img src="{{url('img/qsslogo/qw.png')}}" class="w-25 pt-2" alt="">
                 </div>
                 <div class="col-xl-1 col-lg-1 col-md-1 col-sm-6  text-center   p-2 ">
                        <img src="{{url('/img/logout.png')}}" alt="" class="w30 rounded-circle ">
                 </div>
                 
            </div>
            <!-- header end -->
            <!-- main-content start -->
            <div class="row main-content border" >
                <!--frams section start  -->
                <div class="col-xl-12 xol-lg-12 col-md-12 col-sm-12" id="fmwt">
                    <div class="row">
                        <!-- Frame start -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12  box frame-container">
                        <div class="row  bg-control">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 text-center p-3">                                                        
                                <img src="{{url('/img/man.png')}}" class="w-50">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-center pt-1 ">
                                <button class="btn bg-filter px-3 getGenderbtn  text-white dshbtn mtpbm" id="Males">Filters</button>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  bg-control3 pt-1 "></div>
                        </div>
                        </div>
                        <!-- Frame end -->
                        <!-- men start -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12  box frame-container">
                        <div class="row  bg-control">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 text-center p-3">                                                        
                                <img src="{{url('/img/man.png')}}" class="w-50">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-center pt-1 ">
                                <button class="btn btn-primary px-3 getGenderbtn  text-white dshbtn mtpbm" id="Male">Men</button>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  bg-control2 pt-1 "></div>
                        </div>
                        </div>
                        <!-- men end -->
                        <!-- women start -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12  box frame-container">
                        <div class="row  bg-control">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 text-center p-3">                                                        
                                <img src="{{url('/img/woman.png')}}" class="w-50">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-center pt-1 ">
                                <button class="btn bg-female text-white dshbtn btn-sm getGenderbtn px-4 mtpbm" id="Female">Women</button>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  bg-control1 pt-1 "></div>

                        </div>
                        </div>
                        <!-- women end -->
                        <!-- Total start -->
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 box frame-container">
                        <div class="row  bg-control">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 text-center p-3">                                                        
                                <img src="{{url('/img/wm1.png')}}" class="w-80">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-center pt-1 ">
                                <button class="btn bg-wm text-white btn-sm getGenderbtn px-4 myactive dshbtn mtpbm" id="wmdata">Total</button>
                                
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  bg-control4 pt-1 "></div>
                        </div>
                        </div>
                        <!-- Total end -->
                        
                    </div>
                    <!--expression/char/operation section start  -->
                    <div class="col-xl-12 xol-lg-12 col-md-12 col-sm-12" id="expressDiv" style="">
                        <div class="row  ">
                            <!-- expression section start -->
                            <div class="col-xl-3 col-lg-3 col-md-3 border border-danger">
                                <div class="row" id="stastics" >

                                    <div class="col-lg-12  box2 " >
                                        <div class="row p-1 d-flex justify-content-around">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box bg-control text-center p-3 ">
                                                <i class="fa fa-smile fa-happy fa-2x p-2 rounded" aria-hidden="true"></i>
                                                <hr class="">
                                                <h6 class="pt-2 text-white ">  Happy <span class="text-white  counter" id="Happy">0%</span></h6>
                                                
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box bg-control text-center p-3 ">
                                                <i class="fa fa-frown fa-sad fa-2x p-2 rounded" aria-hidden="true"></i>
                                                <hr class="">
                                                <h6 class="pt-2 text-white  text-center">  Sad <span class="text-white  counter" id="Sad">0%</span></h6>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-12  box2 " >
                                        <div class="row p-1 d-flex justify-content-around">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box bg-control text-center p-3 ">
                                                <i class="fa fa-meh fa-neutral fa-2x p-2 rounded " aria-hidden="true"></i>
                                                <hr class="">
                                                <h6 class="pt-2 text-white  text-center">  Neutral  <span class="text-white  counter" id="Neutral">0%</span></h6>
                                            
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box bg-control text-center p-3 ">
                                                <i class="fa fa-angry fa-angry fa-2x p-2 rounded" aria-hidden="true"></i>
                                                <hr class="">
                                                <h6 class="pt-2 text-white  text-center">  Angry <span class="text-white  counter" id="Angry">0%</span></h6>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-12  box2 " >
                                        <div class="row p-1 d-flex justify-content-around">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box bg-control text-center p-3 ">
                                                <i class="fa fa-surprise  fa-2x p-2 rounded" aria-hidden="true"></i>
                                                <hr class="">
                                                <h6 class="pt-2 text-white  text-center">  Surprise <span class="text-white  counter" id="Surprise"> 0%</span></h6>
                                                
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box bg-control text-center p-3 ">
                                                <img src="{{url('img/fear.png')}}" class="p-2 bg-surprise rounded" alt="">
                                                <hr class="">
                                                <h6 class="pt-2 text-white  text-center">  Fear <span class="text-white  counter" id="Fear">0%</span></h6>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- expression section end -->
                        </div>
                    </div>
                    <!-- expression/char/operation section end -->
                </div>
                <!-- Frames section end  -->

                
            </div>
            <!-- main-content end -->
        </div>



   




  </body>
  <script src="{{url('frontend/js/jquery.min.js')}}" ></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>
