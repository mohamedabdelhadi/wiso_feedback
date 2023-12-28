<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="{{url('frontend/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/sass.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/layets.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/smallImagesSlider.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/alert.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/loader.css')}}">
    <title>QSS Solution To All Problems</title>
    <style>
      
    </style>
  </head>
  <body>
    <div class="loader text-center hide" id="loader">
      <img src="{{url('img/kkia.gif')}}" alt="Loading..." class="w-25">
  </div>
    <!-- alert box code start-->
    <div id="messageBox" class="alert-box">
      <div class="row ">
        <div class="col-xl-2 col-lg-2 col-md-2">
          <div class="alertMSgicon" ><i id="msgIconcol" class="fas fa-check-circle" style=""></i></div>
          
        </div>
        <div class="col-xl-10 col-lg-10 col-md-10">
          <h5 class="text-dark" id="msgStatus"></h5>
          <p class=""><span id="detectPerson"></span> </p>
        </div>
      </div>
  </div>
  
    <!-- alert box code end -->
<!-- frame MAnagement  Model start -->
<div class="modal fade" id="fmanagementModal" tabindex="-1" aria-labelledby="sectionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content modelSectionDiv"  style="background:#05615C;">
        <div class="modal-header" style="border:none !important">
          <h5 class="modal-title text-white pt-2" id="sectionModalLabel" >Frame Management</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">

              <!-- frame MAnagement panel start -->
              <div class="col-md-12 col-lg-12 col-xl-12 " id="SecMang">
                
                <div class="row pt-2 d-flex justify-content-center">
                                   
                  <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12">
                    <div class="row">
                        <h5 class="text-white"></h5>
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 " id="FrameManagementlist"  style="max-height: 40vh; overflow-y: auto;">
                        
                        <table class="table  ">
                          <thead class="camTitle text-center text-white">
                            <tr>
                              <th scope="col">Sr.No</th>
                              <th scope="col">Frame</th>                              
                              <th scope="col">Status</th>
                              <th scope="col">Delete</th>
                             
                            </tr>
                          </thead>
                          <tbody class="bodyTitle text-center text-white" id="framelist_table"></tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- frame MAnagement panel end -->

              
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- frame MAnagement Model End -->
 <!-- Section Model start -->
 <div class="modal fade" id="sectionModal" tabindex="-1" aria-labelledby="sectionModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content modelSectionDiv" style="background:#05615C;">
          <div class="modal-header" style="border:none !important">
            <h5 class="modal-title text-white" id="sectionModalLabel">King Khalid Int'l Airport</h5>
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body  d-flex justify-content-center">
         
              <div class="row">

                <!-- sectionMang panel  -->
                <div class="col-md-12 col-lg-12 col-xl-12 ">
                  
                  <div class="row pt-2">
                    <h5 class="text-center service-title py-4 text-white">Frame Management</h5>
                   
                    <form id="imageUploadForm" enctype="multipart/form-data">
                        @csrf

      
                      <div class="my-3 col-xl-12 col-md-12 col-lg-12 py-4 ">                    
                        <div class="input-group mb-3 ">
                         
                          <input type="file" class="form-control InputField" id="image" name="image"   placeholder=".Jpg, .Png, .Gif">
                        </div>
                      </div>

                      <div class="mb-3 col-xl-12 col-md-12 col-lg-12 ">
                        <button type="submit" class="btn btn-success float-end" id="submitButton">Upload Frame</button>
                      </div>
                    </form>
                   <div class="text-center text-white" id="preview"></div>
                  </div>
                </div>
                <!-- sectionMang panel end -->
                
 
       


                
              </div>
          
          </div>

        </div>
      </div>
    </div>
    <!-- Section Model End -->


    
      <div class="main-wrapper">

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
                                <div class="logo">
                                   <a class="navbar-brand" href="#">
                                    <img src="{{url('img/qsslogo/qw.png')}}" class="img-fluid pt-2" alt="">
                                     </a>
                             </div>
                            </ul>
                            <li class="nav-item dropdown user-profile-dropdown upml">
                              <a href="#" class="nav-link user" id="notify" data-bs-toggle="dropdown">
                                <img src="{{url('/img/user.png')}}" alt="" class="icon">
                                
                              </a>
                              <div class="dropdown-menu p_detail">

                                <div class="dp-main-menu pfl-txt2">
                                  <div class="user-profile-section">
                                    <div class="media">
                                        <img src="{{url('img/mcit/mcitp.svg')}}" alt="" class="img-fluid rounded-circle">
                                        <div class="media-body pt-3">
                                        {{-- @if(session()->has('name'))
                                          <h5 class="">{{session()->get('name')}} </h5>
                                          <p class="">{{session()->get('email')}}</p>
                                        @else
                                            <script>window.location = "http://localhost:8080/kkia_dashboard/dashboard";</script>
                                        @endif --}}
                                        </div>
                                    </div>
                                  </div>

                                  <a href="http://localhost:8080/kkia_dashboard/dashboard/logout" class="dropdown-item  fd"><i class="fa fa-sign-out"></i> Logout</a>


                                </div>
                              </div>
                            </li>


                        </ul>
                  </header>
                </div>

                  <!-- ==========end header=========== -->

                    <!-- Modal Start Here-->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Export PDF</h5>
                            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="root">

                                <!-- pdf section start -->
                                    <div class="row pt-2"   id="root2" >
                                        <hr>
                                        <div class="col-lg-12 col-sm-12 col-12 col-md-12 text-center py-5">
                                            <img src="{{url('img/7.png')}}" class="img-fluid" alt="">
                                            <h4>Quality Support Solutions</h4>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 col-md-4 col-xl-3 col-3  pdfSection p-4 stat chngsze " >
                                            <ul  class="list-group">
                                                <li > Happy <span class="l-4"id="h"></span>%</li>
                                                <li> Sad <span id="sa"></span>%</li>
                                                <li> Neutral <span id="n"></span>%</li>
                                                <li> Angry <span id="a"></span>%</li>
                                                <li> Surprise <span id="s"></span>%</li>
                                                <li> Fear <span id="f"></span>%</li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-7 col-sm-7 col-md-8 col-xl-7 col-sm-12 col-12 d-flex align-items-center  justify-content-center chngechrt">
                                                <canvas id="myChart2" class="text-center vbg"></canvas>
                                        </div>
                                        <hr>
                                         <p class="text-center">All rights reserved to the King Khalid int'l airport 2024 ©</p>
                                        <p class="text-center"> Powered By <b>QSS</b> :<span class="dtenw"><span></p>
                                    </div>
                            <!-- pdf section end -->

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm text-white" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn bg-wm btn-sm" id="pdfSve">Save To PDF</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Modal End Here -->
                  <!-- ==========Main content Start=========== -->

                  <div class="content-wrapper togglesidebar main-content ">
                    <section class="dashboard-top-sec">
                      <div class="container-fluid">
                            <div class="row pt-4 justify-content-between">


                                    <div class="col-lg-3 bg-control1 bg-shodows box" >
                                            <div class="row p-3 ">
                                                <div class="col-lg-6 col-sm-12  text-center ">
                                                       
                                                        <div id='slider-container'>
                                                                <div id="slider">

                                                                </div>
                                                                <button id="prev"><i class="fas fa-chevron-left fa-2x"></i></button>
                                                                <button id="next"><i class="fas fa-chevron-right fa-2x"></i></button>
                                                        </div>
                                                           
                                                </div>
                                                <div class="col-lg-2 col-sm-12 text-center ">

                                                    <button class="btn btn-primary btn-sm getGenderbtn px-4 dshbtn mtpbm" id="filters">Filters</button>
                                                    <p id="filter_count"></p>
                                                </div>

                                            </div>
                                    </div>

                                    <div class="col-lg-3 bg-control2 bg-shodows box" >
                                            <div class="row p-3 ">
                                                <div class="col-lg-6 col-sm-12  text-center ">
                                                       
                                                        <img src="{{url('/img/man.png')}}" class="img-fluid " style="width:7.5rem;">
                                                </div>
                                                <div class="col-lg-2 col-sm-12 text-center ">

                                                    <button class="btn btn-primary btn-sm getGenderbtn text-white px-4 dshbtn mtpbm" id="Male">Men</button>
                                                </div>

                                            </div>
                                    </div>
                                    <div class="col-lg-3 bg-control3 bg-shodows box">
                                            <div class="row p-3 ">
                                                <div class="col-lg-6 col-sm-12  text-center ">
                                                <img src="{{url('/img/woman.png')}}" class="img-fluid" style="width:7.5rem;">
                                                </div>
                                                <div class="col-lg-2 col-sm-12 text-center">

                                                    <button class="btn bg-female text-white dshbtn btn-sm getGenderbtn px-4 mtpbm" id="Female">Women</button>
                                                </div>

                                            </div>
                                    </div>

                                    <div class="col-lg-3 bg-control4 bg-shodows box">
                                            <div class="row p-3">
                                                <div class="col-lg-8  col-sm-12  text-center">
                                                    <img src="{{url('/img/wm1.png')}}" class="img-fluid" style="width:14rem;">
                                                </div>
                                                <div class="col-lg-2 col-sm-12 text-center">
                                                    <!-- <h6 class="pt-2  text-end"> Men</h6> -->
                                                    <button class="btn bg-wm text-white btn-sm getGenderbtn px-4 myactive dshbtn mtpbm" id="wmdata">Total</button>

                                                </div>

                                            </div>
                                    </div>


                            </div>


                            <!--chat section start here  -->
                            <div class="row">
                              <div class="col-lg-3 ">
                                <div class="row" id="stastics" >

                                    <div class="col-lg-12  box2 " >
                                        <div class="row p-1 d-flex justify-content-around">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box2 bg-control text-center p-3 ">
                                                <i class="fa fa-smile fa-happy  fa-2x p-2 rounded" aria-hidden="true"></i>
                                                <hr class="">
                                                <h6 class="pt-2  ">  Happy <span class="text-white  counter" id="Happy">0%</span></h6>
                                                
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box2 bg-control text-center p-3 ">
                                                <i class="fa fa-frown fa-sad fa-2x p-2 rounded" aria-hidden="true"></i>
                                                <hr class="">
                                                <h6 class="pt-2 text-center">  Sad <span class="text-white  counter" id="Sad">0%</span></h6>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-12  box2 " >
                                        <div class="row p-1 d-flex justify-content-around">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box bg-control text-center p-3 ">
                                                <i class="fa fa-meh fa-neutral fa-2x p-2 rounded " aria-hidden="true"></i>
                                                <hr class="">
                                                <h6 class="pt-2  text-center">  Neutral  <span class="text-white  counter" id="Neutral">0%</span></h6>
                                               
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box bg-control text-center p-3 ">
                                                <i class="fa fa-angry fa-angry fa-2x p-2 rounded" aria-hidden="true"></i>
                                                <hr class="">
                                                <h6 class="pt-2  text-center">  Angry <span class="text-white  counter" id="Angry">0%</span></h6>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-12  box2 " >
                                        <div class="row p-1 d-flex justify-content-around">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box bg-control text-center p-3 ">
                                                <i class="fa fa-surprise  fa-2x p-2 rounded" aria-hidden="true"></i>
                                                <hr class="">
                                                <h6 class="pt-2  text-center">  Surprise <span class="text-white  counter" id="Surprise"> 0%</span></h6>
                                                
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 box bg-control text-center p-3 ">
                                                <img src="{{url('img/fear.png')}}" class="p-2 bg-surprise rounded" alt="">
                                                <hr class="">
                                                <h6 class="pt-2  text-center">  Fear <span class="text-white  counter" id="Fear">0%</span></h6>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                   

                                </div>
                              </div>
                              <div class="col-lg-6 chrtbx" >
                                      <div class="row bg-control box3">

                                            <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-12  col-md-12 col-sm-12 col-12 pt-4 pb-5">
                                                            <h6>Age  <span class="badge age1 px-3 mx-2"> 18-25</span> <span class="badge px-3 age2 mx-2">25-40</span> <span class="badge px-3 age3 mx-3">40-60</span></h6>
                                                        </div>
                                                        <div class="col-lg-12  col-md-12 col-sm-12 col-12 pb-2 d-flex align-items-center justify-content-center"  >
                                                                <canvas id="myChart" class="vbg" ></canvas>
                                                        </div>
                                                    </div>


                                            </div>
                                       </div>
                             </div>
                             <div class="col-lg-3 ">
                                            <div class="row bg-control justify-content-center  box3 p-3">
                                                <div class="col-lg-5 pt-2">
                                                    <label for="exampleColorInput" class="form-label fw-bold">Start Date</label>
                                                    <input type="date"  class="form-control form-control-sm getdate"  placeholder="From date"  id="startDate">
                                                </div>
                                                <div class="col-lg-5 pt-2 ">
                                                    <label for="exampleColorInput" class="form-label fw-bold">End Date</label>
                                                    <input type="date"  class="form-control form-control-sm getdate"  placeholder="From date" id="endDate">
                                                </div>
                                            </div> 
                                            <div class="row  bg-control box3">
                                                   <!-- Upload Frame start -->
                                                   <div class="col-lg-12">
                                                       
                                                        <div class="row ">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 pt-4">
                                                               <h5>Frames Management</h5>
                                                               <hr>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-center  pt-2"  data-bs-toggle="modal" data-bs-target="#sectionModal">
                                                                <img src="{{url('img/frame.png')}}" alt="" class="w-50 py-1 ">
                                                                <h6 class="pb-2">Upload</h6>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-center " id="framesList" data-bs-toggle="modal" data-bs-target="#fmanagementModal">
                                                                <img src="{{url('img/fsetting.png')}}" alt="" class="py-3" style="width:35%">
                                                                <h6 class="py-3">Frames List</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  <!-- Upload Frame end -->
                                            </div>
                                            <div class="row bg-control justify-content-center box3"> 
                                              
                                                   <!-- reset and pdf start -->
                                                <div class="col-lg-10 pt-4 justify-content-between ">
                                                   <div class="row">
                                                       <div class="col-lg-6 col-sm-6 col-md-6 pb-2 col-6">
                                                           <i class="fa fa-refresh bg-success fa-2x p-4 rounded" id="reset" aria-hidden="true"></i>
                                                       </div>
                                                       <div class="col-lg-6 col-sm-6 col-md-6 pb-3 col-6"  id="exptPdf" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                           <i class="fa fa-file-pdf bg-danger py-4 float-end fa-2x p-4 pdfbtn rounded" aria-hidden="true"></i>
                                                       </div>
                                                   </div>
                                                </div>
                                                  <!-- reset and pdf end -->
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



    <script src="{{url('frontend/js/jquery.min.js')}}" ></script>
    <script src="{{url('frontend/js/lightbox-plus-jquery.min.js')}}" ></script>
    {{-- <script src="{{url('frontend/js/alert.js')}}" ></script> --}}
    <script src="{{url('frontend/js/bootstrap/bootstrap.bundle.min.js')}}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{url('js/dashboard.js')}}"></script>
    <script src="{{url('js/pai2.js')}}"></script>
    <script src="{{url('js/moment.min.js')}}"></script>
    <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>  
    <script src="{{url('js/html2canvas.min.js')}}"></script>
    <!--<script src="http://html2canvas.hertzen.com/dist/html2canvas.js"></script>-->
    <script src="{{url('js/tooltip.js')}}"></script>
    <script src="{{url('js/ourscript.js')}}"></script>
    <script src="{{url('js/html2pdf.bundle.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}" ></script>
    <script src="{{url('frontend/js/controls.js')}}" ></script>
    <script src="{{url('js/smallImageSlider.js')}}"></script>

    <script>
        $(document).ready(function () {

          $('#dsa').on('click', function () {
            showAlert("asdas","Failed");
        });

  
          function showAlert(msg, status) {
            var alertBox = $("#messageBox");
            var iconcolor = $("#msgIconcol");
            $("#msgStatus").text(status);
           
            if(status == "Success"){
              alertBox.addClass("alertshow fade-in successborder");
              iconcolor.addClass("alertshow fade-in sucessMsg");
            }else{
              alertBox.addClass("alertshow fade-in failedborder");
              iconcolor.addClass("alertshow fade-in failedMsg");
            }
           
            $("#detectPerson").text(msg);
            setTimeout(function () {
                alertBox.removeClass("fade-in").addClass("fade-out");
            }, 3000);
            setTimeout(function () {
                alertBox.removeClass("alertshow fade-out");
            }, 3500);
        }

            
            $('#imageUploadForm').submit(function (e) {
                e.preventDefault();

                var formData = new FormData(this);
                console.log(formData)
                $.ajax({
                    url: '{{ route("upload-image") }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.success) {
                            $('#image').val('');
                            // console.log('response.success')
                            showAlert("Frame Successfully Uploaded","Success");
                            // $('#preview').text("Frame Successfully Uploaded..")
                        } else {
                            showAlert("Please Upload again !","Failed");
                            console.error('Image upload failed.');
                        }
                    },
                    error: function () {
                        console.error('AJAX request failed.');
                    }
                });
                
            });

            $('#framesList').on('click', () => {
               
                getFramelist()
            });
            function getFramelist() {
 
              var tbody = document.querySelector("#framelist_table");

              // Clear the existing content of tbody
              tbody.innerHTML = "";
              $.ajax({
                  type: "GET",
                  url: 'http://localhost:8080/kkia_dashboard/fetchFramelist',                 
                  success: function(data) {
                      console.log(data);
                      
                      if (Array.isArray(data.frames)) { // Assuming 'frames' is the property containing the array
                          data.frames.forEach(item => {
                              appendlistTableRow(item.f_id, item.fname, item.status);
                          });
                      } else {
                          console.error("Response data is not an array:", data);
                      }
                  },
                  error: function(error) {
                    showAlert("Error fetching Frames...Refresh Page","Failed");
                    console.error("Error fetching data:", error);
                  }
              });
            }

            
            // append black white list 
            function appendlistTableRow(id, fname, status) {

                var table = document.getElementById("framelist_table");      
                // Create a new table row element
                var newRow = document.createElement("tr");
                newRow.classList.add('centered-cell');
                var badgeClass = (status === 'visible') ? 'bg-success' : 'bg-danger';

                // Set the inner HTML content for the new row
                newRow.innerHTML = `
                <td>${table.rows.length + 1}</td>
                <td>
                <a href="facedetection1/public/filters/${fname}" data-lightbox="models" data-title="">
                  <img src="facedetection1/public/filters/${fname}" class="rounded-circle" style="width: 45px; height: 45px"/>
                </a>
                </td>
               
                <td style="align-item:center;"> <span id="${id}" class="wbstatus badge p-2 ${badgeClass}">${status}</span></td>
                <td> <img src="{{url('img/del.png')}}"  id="${id}" class="delframe w-25"/> </td>

                `;  
                // Append the new row to the table
                table.appendChild(newRow);
              }

      
      // update status start
      $(document).on('click', '.wbstatus', (event) => {
          const id = $(event.currentTarget).attr("id");
          const status = $(event.currentTarget).text().trim();
          const newStatus = (status === 'visible') ? 'invisible' : 'visible';

          const confirmed = window.confirm(`Are you sure you want to change the status to ${newStatus}?`);

          if (confirmed) {
              const csrfToken = $('meta[name="csrf-token"]').attr('content');
              $('#loader').removeClass('hide');
              $.ajax({
                  url: `http://localhost:8080/kkia_dashboard/updateFrameStatus/${id}`,
                  type: 'POST',
                  data: {
                      newStatus: newStatus,
                      _token: csrfToken
                  },
                  success: (data) => {
                    $('#loader').addClass('hide');
                      showAlert("Status Successfully Updated","Success");
                      console.log(data.message);
                      
                      $(event.currentTarget).text(newStatus)
                    
                      $(event.currentTarget).removeClass('bg-success bg-danger').addClass(newStatus === 'visible' ? 'bg-success' : 'bg-danger');
                  },
                  error: (error) => {
                    showAlert("Error updating Frame Status","Failed");
                    console.error('Error updating frame status:', error);
                  }
              });
          }
      });
      // update status end

            
      // deltet status start
      $(document).on('click', '.delframe', (event) => {

        const row = $(event.currentTarget).closest('tr');
          const id = $(event.currentTarget).attr("id");


          const confirmed = window.confirm(`Are you sure you want to Delete?`);

          if (confirmed) {
              const csrfToken = $('meta[name="csrf-token"]').attr('content');

              $.ajax({
                  url: `http://localhost:8080/kkia_dashboard/delFrame/${id}`,
                  type: 'POST',
                  data: {
                      
                      _token: csrfToken
                  },
                  success: (data) => {
                    showAlert("Frame Successfully Delete","Success");
                      console.log(data.message);
                      row.remove();
                                       },
                  error: (error) => {
                    showAlert("'Error deleting frame","Failed");
                      console.error('Error deleting frame:', error);
                  }
              });
          }
      });
      // delete status end
      
      

    });
    </script>
  
  </body>
</html>
