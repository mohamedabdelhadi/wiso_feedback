<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ url('frontend/img/icon.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('frontend/assets/css/new_signin.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <title>KKIA</title>
    <style>
        body{

        }
    </style>
</head>
<body>

    <div class="container-fluid">

        <div class="row d-flex align-items-center justify-content-center pt-5 ">
                <div class="col-lg-4 col-md-12 col-sm-12 FormDiv  ">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center pt-5">
                            <img src="{{url('frontend/img/kkia.png')}}"  alt="" class=" rounded w-75">
                        </div>
                        <div class="col-lg-12  col-md-12 col-sm-12 ">
                            <form class="px-5">
                                @csrf
                                <h4 class="py-2 text-center">Sign-Up To KKIA</h4>
                                <span id="success" class="text-success"></span>
                                <span id="error"class=" text-danger"></span>
                                <div class="mb-3">
                                    <label for="exampleInputname" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control inputfld" id="name" aria-describedby="nameHelp">
                                    <div id="nameHelp" class="form-text">Name Here....</div>
                                  </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                                  <input type="email" class="form-control inputfld" id="email" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                  <input type="password" class="form-control inputfld" id="password">
                                </div>
                                <div class="mb-3 pt-3">
                                    <a href="" class="btn btn-primary px-5 float-start registerbtn">Home</a>
                                    <button type="submit" class="btn btn-mcit px-5 float-end registerbtn">Register</button>
                                </div>
                                
                            </form>

                        </div>
                        
                    </div>
                </div>
                {{-- <div class="col-lg-5 mcitDiv  "> </div> --}}
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
<script>

    $(document).ready(function(){

        $('.registerbtn').on('click', function(e){

            e.preventDefault();
            var name=$('#name').val();
            var email=$('#email').val();
            var password=$('#password').val();
            var token=$('input[name="_token"]').val();

            $.ajax({

                url:'{{ route("register")}}',
                type:'post',
                data:{
                    '_token':token,
                    'name':name,
                    'email':email,
                    'password':password,
                },
                success:function(res){

                    if(res.error){
                        $('#error').text(res.error);
                    }else{
                        $('#success').text(res.success);
                    }

                }
            });


        })
    });


</script>













