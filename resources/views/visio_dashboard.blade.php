<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/wiso_sass.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/wiso_layets.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/wiso_style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/wiso_responsive.css') }}">
    <link rel="stylesheet" href="{{url('frontend/css/loader.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/wiso.css')}}">
    <title>QSS Solution To All Problems</title>
    <style>
        .content-wrapper {
       height: 90vh; 
        overflow: auto; 

    }
    </style>
</head>

<body>


    <div class="main-wrapper">
        {{-- loader start --}}
        <div class="loader text-center hide " id="loader" style="">
            <svg class="svg-calLoader" xmlns="http://www.w3.org/2000/svg" width="230" height="230"><path class="cal-loader__path" d="M86.429 40c63.616-20.04 101.511 25.08 107.265 61.93 6.487 41.54-18.593 76.99-50.6 87.643-59.46 19.791-101.262-23.577-107.142-62.616C29.398 83.441 59.945 48.343 86.43 40z" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="10 10 10 10 10 10 10 432" stroke-dashoffset="77"/><path class="cal-loader__plane" d="M141.493 37.93c-1.087-.927-2.942-2.002-4.32-2.501-2.259-.824-3.252-.955-9.293-1.172-4.017-.146-5.197-.23-5.47-.37-.766-.407-1.526-1.448-7.114-9.773-4.8-7.145-5.344-7.914-6.327-8.976-1.214-1.306-1.396-1.378-3.79-1.473-1.036-.04-2-.043-2.153-.002-.353.1-.87.586-1 .952-.139.399-.076.71.431 2.22.241.72 1.029 3.386 1.742 5.918 1.644 5.844 2.378 8.343 2.863 9.705.206.601.33 1.1.275 1.125-.24.097-10.56 1.066-11.014 1.032a3.532 3.532 0 0 1-1.002-.276l-.487-.246-2.044-2.613c-2.234-2.87-2.228-2.864-3.35-3.309-.717-.287-2.82-.386-3.276-.163-.457.237-.727.644-.737 1.152-.018.39.167.805 1.916 4.373 1.06 2.166 1.964 4.083 1.998 4.27.04.179.004.521-.076.75-.093.228-1.109 2.064-2.269 4.088-1.921 3.34-2.11 3.711-2.123 4.107-.008.25.061.557.168.725.328.512.72.644 1.966.676 1.32.029 2.352-.236 3.05-.762.222-.171 1.275-1.313 2.412-2.611 1.918-2.185 2.048-2.32 2.45-2.505.241-.111.601-.232.82-.271.267-.058 2.213.201 5.912.8 3.036.48 5.525.894 5.518.914 0 .026-.121.306-.27.638-.54 1.198-1.515 3.842-3.35 9.021-1.029 2.913-2.107 5.897-2.4 6.62-.703 1.748-.725 1.833-.594 2.286.137.46.45.833.872 1.012.41.177 3.823.24 4.37.085.852-.25 1.44-.688 2.312-1.724 1.166-1.39 3.169-3.948 6.771-8.661 5.8-7.583 6.561-8.49 7.387-8.702.233-.065 2.828-.056 5.784.011 5.827.138 6.64.09 8.62-.5 2.24-.67 4.035-1.65 5.517-3.016 1.136-1.054 1.135-1.014.207-1.962-.357-.38-.767-.777-.902-.893z" class="cal-loader__plane" fill="#DBD8DB"/></svg>
          
        </div>
        {{-- loader end --}}
        <!-- Navabr Start-->

        <div class="header-container">
            <header class="header navbar navbar-expands-sm expand-header shadow-sm">
                  <div class="header-left d-flex  bthlgo">
                      <div class="logo">
                      <a class="navbar-brand" href="#">
                        <img src="{{url('img/kkia2.png')}}" class="img-fluid" alt="" id="dsa">
                      </a>
                      </div>

                  </div>
                  <ul class="navbar-item flex-row umpl2">
                      <ul class="navbar-item flex-row">
                          <div class="">
                            <h6 class="kkia_color">{{session()->get('name')}} </h6>
                            <p class="kkia_color" style="line-height:11px">{{session()->get('email')}}</p>
                           
                          </div>
                      </ul>
                      <li class="nav-item dropdown user-profile-dropdown upml">
                        <a href="#" class="nav-link user" id="notify" data-bs-toggle="dropdown">
                          <img src="{{url('frontend/img/kl.png')}}" alt="" class="icon rounded logoborder">
                          
                        </a>
                        <div class="dropdown-menu p_detail">

                          <div class="dp-main-menu pfl-txt2">
                            <div class="user-profile-section">
                              <div class="media">
                                  <img src="{{url('frontend/img/kl.png')}}" alt="" class="img-fluid rounded-circle ">
                                  <div class="media-body pt-3">
                                  @if(session()->has('name'))
                    
                                  @else
                                      <script>window.location = "https://qltyss.com/wiso_feedback";</script>
                                  @endif
                                  </div>
                              </div>
                            </div>

                            <a href="https://qltyss.com/wiso_feedback/logout" class="dropdown-item  fd"><i class="fa fa-sign-out"></i> Logout</a>


                          </div>
                        </div>
                      </li>


                  </ul>
            </header>
          </div>

            <!-- ==========end header=========== -->
            <!-- ==========Main Body stary=========== -->
            <div class="row m-1">
                {{-- first col start--}}
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 box" >
                        <div class="row ">
                            {{-- Robot Usage start --}}
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 " style="background:#fff;">
                                <div class="row  d-flex justify-content-center ">
                                    <div class="col-lg-10 py-2">
                                        <h5 class="kkia_color">Robot Usage</h5>
                                    </div>
                                    <div class="col-lg-2 p-2">
                                        <h5 class="bg-kkia p-2  text-center text-white rounded" id="wiso_usage">...</h5>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-12 text-center hide" id="robo_nodata">
                                        <h5>No Data Available Here....</h5>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-12" >
                                        <canvas id="WisoUsageChart" class="vbg"></canvas>
                                    </div>
                                    
                                    {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                        <div class="row p-4 ">
                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12  py-3   ">
                                                    <div class="leftborder">
                                                        <h5 class="kkia_color">Arabic<br>75% </h5>                                                  
                                                    </div>
                                            </div>
                                            
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  p-1 pt-3">
                                                <img src="{{url('/img/ar.png')}}" class="img-fluid p-2 bg-control1 rounded" style="">
                                                
                                            </div>
                                            <hr class="wiso_hr">
                                           
                                        
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="row p-4 ">
                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12  py-3   ">
                                                    <div class="leftborder">
                                                        <h5 class="kkia_color">English <br>15% </h5>                                                  
                                                    </div>
                                            </div>
                                            
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  p-1 pt-3">
                                                <img src="{{url('/img/en.png')}}" class="img-fluid p-2 bg-control2 rounded" style="">
                                            </div>
                                            <hr class="wiso_hr">
                                           
                                        
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            {{-- Robot Usage end --}}


                            {{-- Total Usage of wiso start --}}
                            {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"   style="background:#fff;">
                                <div class="row p-4 ">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12  py-3   ">
                                            <div class="leftborder">
                                                <h5 class="kkia_color">Total<br>Usage</h5>                                                  
                                            </div>
                                    </div>
                                    
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  p-4 pt-2">
                                        <img src="{{url('/img/all.png')}}" class="img-fluid p-3 bg-kkia rounded" style="">
                                    </div>
                                    <hr class="wiso_hr">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-kkia p-2 rounded">
                                        <h5 class="text-light">140</h5>
                                    </div>
                                   
                                </div>
                            </div> --}}
                            {{-- Total Usage of wiso end --}}


                            {{-- main wiso section start --}}
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                                <div class="row ">
                                    {{-- first row start --}}
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style=" ">
                                        <div class="row">
                                            {{-- take me start--}}
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  mybox"   style="background:#fff;">
                                                <div class="row p-4 ">
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12  py-3   ">
                                                            <div class="leftborder">
                                                                <h5 class="kkia_color">Take<br>ME</h5>                                                  
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  p-1 pt-3">
                                                        <img src="{{url('/img/location.png')}}" class="img-fluid p-2 bg-control1 rounded" style="">
                                                    </div>
                                                    <hr class="wiso_hr">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-control1 p-2 rounded">
                                                        <h6 class="text-light" id="Take_me">...</h6>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                            {{-- Take me end --}}
                                            {{--support start --}}
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mybox "   style="background:#fff;">
                                                <div class="row p-4 ">
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12  py-3   ">
                                                            <div class="leftborder">
                                                                <h5 class="kkia_color">Call<br>Support</h5>                                                  
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  p-1 pt-3">
                                                        <img src="{{url('/img/support.png')}}" class="img-fluid p-2 bg-control2 rounded" style="">
                                                    </div>
                                                    <hr class="wiso_hr">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-control2 p-2 rounded">
                                                        <h6 class="text-light" id="Support">...</h6>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                            {{--support end --}}
                                           
                                        </div>
                                    </div>
                                    {{-- first row start --}}
                                    {{-- second row start --}}
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            {{-- wifi-start --}}
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  mybox"   style="background:#fff;">
                                                <div class="row p-4 ">
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12  py-3   ">
                                                            <div class="leftborder">
                                                                <h5 class="kkia_color">Free<br>Wifi</h5>                                                  
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  p-1 pt-3">
                                                        <img src="{{url('/img/wifi.png')}}" class="img-fluid p-2 bg-control4 rounded" style="">
                                                    </div>
                                                    <hr class="wiso_hr">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-control4 p-2 rounded">
                                                        <h6 class="text-light" id="Free_Wifi">...</h6>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            {{-- wifi-end --}}
                                            {{-- Airport Guide start--}}
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mybox"   style="background:#fff;">
                                                <div class="row p-4 ">
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12  py-3   ">
                                                            <div class="leftborder">
                                                                <h5 class="kkia_color">Airport<br>Guide</h5>                                                  
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  p-1 pt-3">
                                                        <img src="{{url('/img/signpost.png')}}" class="img-fluid p-2 bg-control3 rounded" style="">
                                                    </div>
                                                    <hr class="wiso_hr">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-control3 p-2 rounded">
                                                        <h6 class="text-light" id="Airport_Guide">...</h6>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            {{-- Airport Guide end--}}
                                        </div>
                                    </div>
                                    {{-- second row end --}}
                                </div>
                            </div>
                            {{-- main wiso section end --}}

                        </div>
                    </div>
                {{-- first col end--}} 
                {{-- second col start--}} 
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 box" >
                    <div class="row">

                        {{-- robo usage chart start --}}
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mybox" style="background:#fff;">
                            <div class="row  ">
                                <div class="col-lg-10 py-1 ">
                                    <h5 class="kkia_color pt-3">Flight Information</h5>
                                </div>
                                <div class="col-lg-2  py-1 text-center  ">
                                    <h5 class="text-white p-2 rounded bg-kkia" id="finfoData">...</h5>
                                    <p class="qrdata" data-num="" id="" style="display: none;">
                                        <p class="inputdata" data-num="" id="" style="display: none;">
                                </div>
                                <div class="col-lg-12">
                                    <div class="row d-flex justify-content-center">
                                        
                                        <h5 class="text-center hide" id="flightinfo_nodata"> No data found in this response.</h5>
                                      
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 pb-2">
                                           
                                            <canvas id="flightChart" class="vbg "  style=""></canvas>
                                        </div>
                                    </div>
                                   
                                </div>
                                
                            </div>
                        </div>
                        {{-- robo usage chart end --}}
                        {{-- syrvey start --}}
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mybox" style="background:#fff;">
                            <div class="row  ">
                                <div class="col-lg-10 py-1 ">
                                    <h5 class="kkia_color pt-3">Survey</h5>
                                </div>
                                <div class="col-lg-2  py-1  ">
                                   
                                    <h5 class="bg-kkia p-2  text-center text-white rounded" id="surveyData">...</h5>
                                    <p class="satis_data"  id="" style="display: none;">
                                    <p class="unsatis_data"  id="" style="display: none;">
                                </div>
                                <div class="col-lg-12">
                                    <div class="row d-flex justify-content-center">
                                        
                                        <h5 class="text-center  hide" id="survey_nodata"> No data found in this response.</h5>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12  py-4">
                                            <canvas id="surveyChart" class="vbg "></canvas>
                                        </div>
                                    </div>
                                   
                                </div>


                                {{-- <div class="col-lg-12 py-3">
                                    <div class="skill-container p-3 ">
                                        <div class="skill">
                                            <div class="outer">
                                                <div class="inner text-center">
                                                    <div class="number" data-num="" id="satisFied">
                                                    </div>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                                                <defs>
                                                    <linearGradient id="GradientColor">
                                                        <stop offset="0%" stop-color="#e91e63" />
                                                        <stop offset="100%" stop-color="#673ab7" />
                                                    </linearGradient>
                                                </defs>
                                                <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                                            </svg>
                                        </div>
                                        <div class="skill">
                                            <div class="outer">
                                                <div class="inner  text-center">
                                                    <div class="number" data-num="" id="unsatisFied">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                                                <defs>
                                                    <linearGradient id="GradientColor">
                                                        <stop offset="0%" stop-color="#e91e63" />
                                                        <stop offset="100%" stop-color="#673ab7" />
                                                    </linearGradient>
                                                </defs>
                                                <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                                            </svg>
                                        </div>
                                    
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                        {{-- servey end --}}
                    </div>
                </div>
                {{-- second  col end--}} 
                {{-- third  col start--}} 
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 box" >
                    <div class="row">

                        
                        {{-- kkia usage start --}}
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mybox" style="background:#04615C;">
                            {{-- <div class="row d-flex justify-content-center">
                                
                                
                                <div class="col-lg-12 text-center ">
                                    <img src="{{url('/img/airport_logo.png')}}" class="img-fluid pt-3" style="">
                                </div>
                                <div class="col-lg-12 text-center ">
                                    <img src="{{url('/img/plane.png')}}" class="img-fluid " style="">
                                </div>
                                
                                
                            </div> --}}
                            <div class="row  d-flex  justify-content-center mybox" style="background:#04615C; height:13rem">
                               
                                <h5 class="pt-3 text-white">Filter By Date</h5>
                            
                                <div class="col-lg-5">
                                    <label for="exampleColorInput" class="form-label fw-bold text-white">Start Date</label>
                                    <input type="date" class="form-control form-control-sm getdate" placeholder="From date" id="startDate">
                                </div>
                                <div class="col-lg-5 " >
                                    <label for="exampleColorInput" class="form-label fw-bold text-white">End Date</label>
                                    <input type="date" class="form-control form-control-sm getdate" paceholder="To date" id="endDate">
                                </div>
                                <div class="col-lg-10 col-sm-10 col-md-10 pb-1 col-12 d-flex justify-content-end align-items-center " id="exptExcel" style="cursor: pointer">
                                    <h6 class=" bg-warning float-end text-center p-2 text-white rounded" ria-hidden="true" style="width:5rem"><span>Export</span></h6>
                                </div>
                            </div>
                            
                        </div>
                        {{-- kkia usage end --}}
                        {{-- language usage start --}}
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-4 mybox" style="background:#fff;">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-9 text-start">
                                    <h5 class="kkia_color">Language Usage</h5>
                                </div>
                               
                                <div class="col-lg-3 text-center">
                                   
                                    <h5 class="bg-kkia p-1  text-white rounded" id="langData">...</h5>
                                    <p class="arabic_data" data-num="" id="" style="display: none;">
                                        <p class="english_data" data-num="" id="" style="display: none;">
                                </div>
                                <h5 class="text-center  hide" id="lang_nodata"> No data found in this response.</h5>
                                <div class="col-lg-12 pt-3">
                                   
                                    <canvas id="langChart" class="vbg w-110 h-100"></canvas>
                                </div>

                               
                                        
                                
                            </div>
                            
                        </div>
                        {{-- language usage end --}}
                    </div>
                </div>
                {{-- third  col end--}} 
                
        </div>
            <!-- ==========Main Body End=========== -->
          


    </div>
   

    
   



    <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ url('frontend/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
        integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js"
        integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ url('js/visiodashboard.js') }}"></script>
    <script src="{{ url('js/pai2.js') }}"></script>
    <script src="{{ url('js/moment.min.js') }}"></script>
    <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script src="{{ url('js/html2canvas.min.js') }}"></script>
    <!--<script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script>-->
    <script src="{{ url('js/tooltip.js') }}"></script>
    <script src="{{ url('js/ourscript.js') }}"></script>
    <script src="{{ url('js/html2pdf.bundle.js') }}"></script>
    <script src="{{ url('frontend/js/main.js') }}"></script>
    <script src="{{ url('frontend/js/controls.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.0/xlsx.full.min.js"></script>

   <script>
    $(document).ready(function () {
        $(".toggle-shadow").click(function() {

          $(".box").addClass("revert-transform");
          $(".box").removeClass("bg-shadows");
          $(this).closest(".box").removeClass("revert-transform");
          $(this).closest(".box").addClass("bg-shadows");
     
       });
       const numbers = document.querySelectorAll('.number');
        const svgEl = document.querySelectorAll('svg circle');
        const counters = Array(numbers.length);
        const intervals = Array(counters.length);
        counters.fill(0);

        numbers.forEach((number, index) => {
            intervals[index] = setInterval(() => {
                if(counters[index] === parseInt(number.dataset.num)){
                    clearInterval(counters[index]);
                }else{
                   if(index == 0){
                    number.innerHTML = "Satisfied <br>"+counters[index] + "%";
                   }else if(index == 1){
                    number.innerHTML = "Unsatisfied <br>"+counters[index] + "%";
                   }
                  
                    counters[index] += 1;
                    svgEl[index].style.strokeDashoffset = Math.floor(472 - 440 * parseFloat(number.dataset.num / 100));
                }
            }, 20);
        });
    });
    </script> 

</body>

</html>
