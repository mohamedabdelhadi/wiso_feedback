<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/signin2.css')}}">
    <title>QSS: Solution To All Problems</title>
  </head>
  <body>



        <div class="container-fluid ">
                <div class="row ">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="row justify-content-center pt-5">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 sgn-portn">
                                <div class="row justify-content-center">
                                    <div class="col-md-8  sgnIn-form">

                                            <form>
                                            @csrf
                                            <h6 class="fw-bold">Sign in to MCIT Smart Mirror Portal</h6>
                                            <label class="form-check-label text-danger" id="error" for="invalidCheck3">
                                                
                                            </label>

                                            <div class="form-group form-input">
                                                <input type="email" name="email" class="fldsty" id="email" value="" placeholder="Email Here...." required/>

                                            </div>
                                            <div class="form-group form-input pt-4">
                                                <input type="password" name="password" class="fldsty" id="password" value=""  placeholder="**********" required />

                                            </div>

                                            <div class="form-submit">
                                                <!-- <input type="submit" value="Demo Account" class="submit1" id="submit1" name="submit1" /> -->
                                                <button type="submit" class="submit2 signbtn">SignIn</button>
                                            </div>
                                            <!-- <a href="/frogetPassword" class="forget-password text-right">Forget Password ?</a> -->
                                        </form>

                                    </div>
                                    <div class="col-md-8 trmsrv">
                                        <p class="pt-3">Protected By reCAPTCHA and subject to the <b> QSS Privacy Policy</b> and <b> Terms of Services</b>.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <img src="{{url('frontend/img/signin/34.png')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7 qss_logo  align-items-end">
                              

                            </div>
                        </div>

                    </div>
                </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>
<script>
$(document).ready(function(){

            $('.signbtn').on('click', function(e){

                e.preventDefault();

                var email=$('#email').val();
                var password=$('#password').val();
                var token=$('input[name="_token"]').val();
                 if( email == "" || password == ""){
                                    $('#error').text("Please Enter Your Correct Credentials");
                 }else{
                    $('#error').text("");
                    $.ajax({
    
                        url:'{{ route("login")}}',
                        type:'post',
                        data:{
                            '_token':token,
                            'email':email,
                            'password':password,
                        },
                        success:function(res){
    
                            console.log(res);
                            if(res.error){
                                $('#error').text(res.error);
                                $('#email').val("");
                                $('#password').val("");
                            }else{
    
                                window.location.href = "http://localhost:8080/kkia_dashboard/dashboard";
                            }
    
                        }
                    })

              }
            })
});
</script>