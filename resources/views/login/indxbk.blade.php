<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/mcitstyle.css">
    <link rel="stylesheet" href="./css/pai.css">

    <title>MCIT-FaceDetection </title>
</head>
<body>
    <!-- navbar start here -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="./img/mcit-logo.png" alt="..." height="50">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link" href="#"> <img src="./img/profile.png" width="40" height="40" class="rounded-circle border-dark border" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Admin" ></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> <img src="./img/logout.png" width="40" height="40" class="img-fluid"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Logout" ></a>
                            </li>

                            </ul>
                        </div>
                    </div>
            </nav>
        <!-- navbar end here -->
        <div class="container-fluid paiMainDiv">
          
        <!-- main-content start here  -->
     
            <div class="row py-4">
                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                    <div class="row chart-area ">
                            <div class="col-lg-3 col-md-3 col-xl-3 col-sm-12 fclnotes p-5 ">
                                <div class="row">

                                    <div class="col-lg-12  d-flex justify-content-evenly">
                                     <!-- Start the gender Icons here -->
                                     <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12  gender male bg-none d-flex align-items-center justify-content-center">
                                            <div class="card border-none" style="width: 11rem;">
                                                <img src="../img/total.png" class="card-img-top " alt="...">
                                                <div class="card-body">
                                                <a href="#" class="btn btn-gender btn-male px-4">Total</a>
                                                </div>
                                            </div>
                                        </div>
                                  
                                  
                                        <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12  gender female bg-none py-2 d-flex align-items-center justify-content-center">
                                            <div class="card border-none" style="width: 11rem;">
                                                <img src="../img/woman.png" class="card-img-top rounded-circle" alt="...">
                                                <div class="card-body">
                                                <a href="#" class="btn btn-gender btn-female">Women Details</a>
                                                </div>
                                            </div>
                                        </div>
                                  

                                        <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12  gender male bg-none d-flex align-items-center justify-content-center">
                                            <div class="card border-none" style="width: 11rem;">
                                                <img src="../img/man.png" class="card-img-top rounded-circle" alt="...">
                                                <div class="card-body">
                                                <a href="#" class="btn btn-gender btn-male px-4">Men Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        

                                     <!-- End of gender Icons here -->
                                    </div>
                                </div>
                                

                            </div>

                            <!-- <div class="col-lg-2  col-md-6 col-xl-2 col-sm-12">
                                <h5 class="py-4 text-center mt-5">Gender Emotions</h5>
                                <ul class="list-group list-group-flush  gap-3">
                                    <li class="list-group-item  text-center"><b>Total =</b> <span class="fw-bold">100%</span> </li>
                                    <li class="list-group-item btn-happy">Happy <span class="badge pcolr rounded-pill float-end mt-1">25%</span></li>
                                    <li class="list-group-item btn-neutral">Neutral  <span class="badge pcolr rounded-pill float-end mt-1">15%</span></li>
                                    <li class="list-group-item btn-surprise">Surprise  <span class="badge pcolr rounded-pill float-end mt-1">25%</span></li>
                                    <li class="list-group-item btn-digust">Disgust  <span class="badge pcolr rounded-pill float-end mt-1">5%</span></li>
                                    <li class="list-group-item btn-angry">Angry  <span class="badge pcolr rounded-pill float-end mt-1">12%</span></li>
                                    <li class="list-group-item btn-sad">Sad  <span class="badge pcolr rounded-pill float-end mt-1">8%</span></li>
                                    <li class="list-group-item btn-black">Fear  <span class="badge pcolr rounded-pill float-end mt-1">10%</span></li>

                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-6 col-xl-5 pt-5">
                                <div class="row justify-content-center pt-5" >
                                    <div class="col-lg-4 col-md-4 col-xl-4 col-sm-12">
                                        <label for="startDate" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" id="startDate"> 
                                        
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xl-4 col-sm-12 ">
                                        <label for="endDate" class="form-label">End Date</label>
                                        <input type="date" class="form-control" id="endDate"> 
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12  d-flex align-items-center justify-content-center pt-5">
                                         <canvas id="myChart"></canvas>
                                </div>
                                
                            </div> -->

                    </div>
                </div>
                <!-- main-content end here -->               
                
            </div>
            <!-- <div class="row">
                    <div class="col-lg-12 footer">            
                        <p class="pt-2">Quality Support Solutions Co.Ltd.<span>© 2022. All Rights Reserved.</span></p>
                        <hr>
                    </div> 
            </div> -->

        </div>

</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/pai.js"></script>
    <script src="../js/tooltip.js"></script>
</html>