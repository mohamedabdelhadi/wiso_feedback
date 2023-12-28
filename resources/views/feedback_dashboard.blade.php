<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/sass.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/layets.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/feedbackstyle.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{url('frontend/css/loader.css')}}">
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
        <div class="loader text-center hide " id="loader" style="">
            <svg class="svg-calLoader" xmlns="http://www.w3.org/2000/svg" width="230" height="230"><path class="cal-loader__path" d="M86.429 40c63.616-20.04 101.511 25.08 107.265 61.93 6.487 41.54-18.593 76.99-50.6 87.643-59.46 19.791-101.262-23.577-107.142-62.616C29.398 83.441 59.945 48.343 86.43 40z" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="10 10 10 10 10 10 10 432" stroke-dashoffset="77"/><path class="cal-loader__plane" d="M141.493 37.93c-1.087-.927-2.942-2.002-4.32-2.501-2.259-.824-3.252-.955-9.293-1.172-4.017-.146-5.197-.23-5.47-.37-.766-.407-1.526-1.448-7.114-9.773-4.8-7.145-5.344-7.914-6.327-8.976-1.214-1.306-1.396-1.378-3.79-1.473-1.036-.04-2-.043-2.153-.002-.353.1-.87.586-1 .952-.139.399-.076.71.431 2.22.241.72 1.029 3.386 1.742 5.918 1.644 5.844 2.378 8.343 2.863 9.705.206.601.33 1.1.275 1.125-.24.097-10.56 1.066-11.014 1.032a3.532 3.532 0 0 1-1.002-.276l-.487-.246-2.044-2.613c-2.234-2.87-2.228-2.864-3.35-3.309-.717-.287-2.82-.386-3.276-.163-.457.237-.727.644-.737 1.152-.018.39.167.805 1.916 4.373 1.06 2.166 1.964 4.083 1.998 4.27.04.179.004.521-.076.75-.093.228-1.109 2.064-2.269 4.088-1.921 3.34-2.11 3.711-2.123 4.107-.008.25.061.557.168.725.328.512.72.644 1.966.676 1.32.029 2.352-.236 3.05-.762.222-.171 1.275-1.313 2.412-2.611 1.918-2.185 2.048-2.32 2.45-2.505.241-.111.601-.232.82-.271.267-.058 2.213.201 5.912.8 3.036.48 5.525.894 5.518.914 0 .026-.121.306-.27.638-.54 1.198-1.515 3.842-3.35 9.021-1.029 2.913-2.107 5.897-2.4 6.62-.703 1.748-.725 1.833-.594 2.286.137.46.45.833.872 1.012.41.177 3.823.24 4.37.085.852-.25 1.44-.688 2.312-1.724 1.166-1.39 3.169-3.948 6.771-8.661 5.8-7.583 6.561-8.49 7.387-8.702.233-.065 2.828-.056 5.784.011 5.827.138 6.64.09 8.62-.5 2.24-.67 4.035-1.65 5.517-3.016 1.136-1.054 1.135-1.014.207-1.962-.357-.38-.767-.777-.902-.893z" class="cal-loader__plane" fill="#DBD8DB"/></svg>
          
        </div>
        <!-- Navabr Start-->

        <div class="header-container fixed-top ">
            <header class="header navbar navbar-expands-sm expand-header shadow-lg">
                  <div class="header-left d-flex  bthlgo">
                      <div class="logo">
                      <a class="navbar-brand" href="#">
                        <img src="{{url('img/mcit/logo.png')}}" class="img-fluid" alt="" id="dsa">
                      </a>
                      </div>

                  </div>
                  <ul class="navbar-item flex-row umpl2">
                      <ul class="navbar-item flex-row">
                          <div class="pt-2">
                            <h6 class="text-white">{{session()->get('name')}} </h6>
                            <p class="text-white" style="line-height:11px">{{session()->get('email')}}</p>
                           
                       </div>
                      </ul>
                      <li class="nav-item dropdown user-profile-dropdown upml">
                        <a href="#" class="nav-link user" id="notify" data-bs-toggle="dropdown">
                          <img src="{{url('frontend/img/kkiaLogo.png')}}" alt="" class="icon rounded-circle">
                          
                        </a>
                        <div class="dropdown-menu p_detail">

                          <div class="dp-main-menu pfl-txt2">
                            <div class="user-profile-section">
                              <div class="media">
                                  <img src="{{url('frontend/img/kkiaLogo.png')}}" alt="" class="img-fluid rounded-circle">
                                  <div class="media-body pt-3">
                                  @if(session()->has('name'))
                    
                                  @else
                                      <script>window.location = "https://qltyss.com/matarat_feedback";</script>
                                  @endif
                                  </div>
                              </div>
                            </div>

                            <a href="https://qltyss.com/matarat_feedback/logout" class="dropdown-item  fd"><i class="fa fa-sign-out"></i> Logout</a>


                          </div>
                        </div>
                      </li>


                  </ul>
            </header>
          </div>

            <!-- ==========end header=========== -->

        <!-- Modal Start Here-->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Export PDF</h5>
                        <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="root">

                        <!-- pdf section start -->
                        <div class="row pt-2" id="root2">
                            <hr>
                            <div class="col-lg-12 col-sm-12 col-12 col-md-12 text-center py-5">
                                <img src="{{ url('img/kkia.png') }}" class="img-fluid" alt="" style="width:15rem;">
                                
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-4 col-xl-3 col-3  pdfSection p-4 stat chngsze ">
                                <ul class="list-group">
                                    <li> Good <span class="l-4"id="h"></span>%</li>
                                    <li> Average <span id="sa"></span>%</li>
                                    <li> Bad <span id="n"></span>%</li>

                                </ul>

                            </div>
                            <div
                                class="col-lg-7 col-sm-7 col-md-8 col-xl-7 col-sm-12 col-12 d-flex align-items-center  justify-content-center chngechrt">
                                <canvas id="myChart2" class="text-center vbg"></canvas>
                            </div>
                            <hr>
                            <p class="text-center">All rights reserved to the King Khalid int'l Airport
                                Technology 2023 ©</p>
                            <p class="text-center"> Powered By <b>QSS</b> :<span class="dtenw"><span></p>
                        </div>
                        <!-- pdf section end -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm text-white"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn bg-wm btn-sm" id="pdfSve">Save To PDF</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End Here -->
        <!-- ==========Main content Start=========== -->

        <div class="content-wrapper togglesidebar">
            <section class="dashboard-top-sec">
                <div class="container-fluid">
                    {{-- main sectin start --}}
                    <div class="row pt-3 justify-content-between" >
                        <div class="col-lg-3 bg-control1 bg-shodows box " >
                            <div class="row p-3 ">
                                <div class="col-lg-6 col-sm-12  text-center ">
                                       
                                        <img src="{{url('/img/t1.png')}}" class="img-fluid " style="width:7.5rem;">
                                </div>
                                
                                <div class="col-lg-6 col-sm-12 text-center  d-flex flex-column justify-content-between align-items-end " style="">
                                    <div>
                                        <button class=" btn-kkia btn-sm getGenderbtn text-white px-4 dshbtn mtpbm toggle-shadow fetchId fw-bold" style="font-size: 1rem;" id="tabletOne">Tablet One</button>
                                    </div>
                                    <div>
                                        <h4 id="total_tabone"></h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 bg-control2 bg-shodows box" >
                                <div class="row p-3 ">
                                    <div class="col-lg-6 col-sm-12  text-center ">
                                           
                                            <img src="{{url('/img/t2.png')}}" class="img-fluid " style="width:7.5rem;">
                                    </div>
                                    
                                    <div class="col-lg-6 col-sm-12 text-center  d-flex flex-column justify-content-between align-items-end" style="">
                                        <div>
                                            <button class=" btn-kkia btn-sm getGenderbtn text-white px-4 dshbtn mtpbm toggle-shadow fetchId fw-bold" style="font-size:1rem;" id="tabletTwo">Tablet Two</button>
                                        </div>
                                        <div>
                                            <h4 id="total_tabtwo"></h4>
                                        </div>
                                    </div>

                                </div>
                        </div>
                        <div class="col-lg-3 bg-control3 bg-shodows box">
                                <div class="row p-3 ">
                                    <div class="col-lg-6 col-sm-12  text-center ">
                                    <img src="{{url('/img/t3.png')}}" class="img-fluid " style="width:7.5rem;">
                                    </div>
                                   
                                    <div class="col-lg-6 col-sm-12 text-center  d-flex flex-column justify-content-between align-items-end" style="">
                                        <div>
                                            <button class=" btn-kkia text-white dshbtn btn-sm getGenderbtn px-4 mtpbm toggle-shadow fetchId fw-bold" style="font-size:1rem;" id="tabletThree">Tablet Three</button>
                                        </div>
                                        <div>
                                            <h4 id="total_tabthree"></h4>
                                        </div>
                                    </div>

                                </div>
                        </div>

                        <div class="col-lg-3 bg-control4 bg-shodows box bg-shadows">
                                <div class="row p-3">
                                    <div class="col-lg-6  col-sm-12  text-center">
                                        <img src="{{url('/img/totalbg.png')}}" class="img-fluid " style="width:7.5rem;">
                                    </div>
                                   
                                    <div class="col-lg-6 col-sm-12 text-center  d-flex flex-column justify-content-between align-items-end" style="">
                                        <div>
                                            <button class=" btn-kkia text-white btn-sm getGenderbtn px-3 myactive dshbtn mtpbm toggle-shadow fw-bold" style="font-size:1rem;" id="totaldata">Total Summary</button>
                                        </div>
                                        <div>
                                            <h4 id="total_summary"></h4>
                                        </div>
                                    </div>

                                </div>
                        </div>


                </div>
                    {{-- main section end --}}


                    <!--chat section start here  -->
                    <div class="row ">
                        <div class="col-lg-3 ">
                            <div class="row" id="stastics"  style="height: 63vh !important;">
                                
                                <div class="col-lg-12 bg-control box2  d-flex flex-column justify-content-center">
                                    <div class="row p-2">
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12  d-flex justify-content-center align-items-center"  style="height:13vh">
                                            <i class="fa  p-3 rounded-circle bg-light" aria-hidden="true"  style="box-shadow:2px 2px 15px rgba(126, 214, 62, 0.7)"> <img src="{{url('/img/tu.png')}}"></i>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center  d-flex justify-content-center align-items-center" style="border-left:1px dashed rgb(177, 172, 172)">
                                            <div>
                                                <h4 class="pt-2">Good</h4>
                                                <h5 class="text-white counter" id="Happy">0</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 bg-control box2   d-flex flex-column justify-content-center">
                                    <div class="row p-2">
                                       


                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12  d-flex justify-content-center align-items-center"  style="height:13vh">
                                            <i class="fa  p-1 rounded-circle bg-light" aria-hidden="true"   style="box-shadow:2px 2px 15px rgba(214, 193, 82, 0.7)"> <img src="{{url('/img/tud.png')}}" class=""></i>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center  d-flex justify-content-center align-items-center" style="border-left:1px dashed rgb(177, 172, 172)">
                                            <div>
                                                <h4 class="pt-2"> Average</h4>
                                                <h5 class="text-white counter" id="Neutral">0</h5>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-12 bg-control box2   d-flex flex-column justify-content-center">
                                    <div class="row p-2">
                                       

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12  d-flex justify-content-center align-items-center"  style="height:13vh">
                                            <i class="fa  p-3 rounded-circle bg-light" aria-hidden="true"  style="box-shadow:2px 2px 2rem rgba(253, 8, 64, 0.7)"> <img src="{{url('/img/td.png')}}" class=""></i>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-center  d-flex justify-content-center align-items-center" style="border-left:1px dashed rgb(177, 172, 172)">
                                            <div>
                                                <h4 class="pt-2  "> Bad</h4>
                                                <h5 class="text-white  counter" id="Sad">0</h5>
                                            </div>
                                        </div>


                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="col-lg-6 chrtbx " style="height: 63vh !important; overflow:hidden;">
                            <div class="row bg-control box3">

                                <div class="col-lg-12">
                                    <div class="row">
                                        <h5 class="text-white text-center pt-5 hide" id="nodataFound"> No data found in the response.</h5>
                                        <div class="col-lg-12  col-md-12 col-sm-12 col-12 pb-2 d-flex align-items-center justify-content-center pt-4">
                                            <canvas id="myChart" class="vbg"  style="height: 6vh;"></canvas>
                                        </div>
                                       
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 "  style="height: 63vh !important;">
                            <div class="row bg-control   d-flex  justify-content-center box3"  style="height: 50%;">
                               
                                    <h5 class="pt-3">Filter By Date</h5>
                                
                                <div class="col-lg-5">
                                    <label for="exampleColorInput" class="form-label fw-bold">Start Date</label>
                                    <input type="date" class="form-control form-control-sm getdate"
                                        placeholder="From date" id="startDate">
                                </div>
                                <div class="col-lg-5 " >
                                    <label for="exampleColorInput" class="form-label fw-bold">End Date</label>
                                    <input type="date" class="form-control form-control-sm getdate"
                                        placeholder="To date" id="endDate">
                                </div>
                            </div>
                            <div class="row bg-control justify-content-center  box3"  style="height: 50%;">
                                <h5 class="pt-3 ">Operational Panel</h5>
                                <div class="col-lg-10 pt-4 d-flex align-items-center justify-content-center">
                                   
                                    <div class="row ">
                                       
                                        <div class="col-lg-6 col-sm-6 col-md-6 pb-2 col-6 text-center">
                                            <h5 class=" bg-success  p-2 rounded" id="reset" aria-hidden="true" style="width:8rem"><span>Reset</span></h5>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6 pb-3 col-6 text-center" id="exptPdf">
                                            <h5 class=" bg-warning  p-2  rounded" ria-hidden="true" style="width:8rem"><span>Export</span></h5>
                                        </div>
           

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
        </div>


    </div>
    </section>
    </div>

    <!-- ==========Main content End=========== -->
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
    <script src="{{ url('js/mataratdashboard.js') }}"></script>
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
    });
    </script> 

</body>

</html>
