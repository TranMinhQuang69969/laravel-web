<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('assets/client/css/login.css') }}">
</head>
<body>
    <section class="vh-100">      
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="{{ asset('assets/client/image/pexels-jeffrey-czum-2501965.jpg') }}" class="img-fluid" alt="Sample image">>
                    
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="POST">
                        
                        
                        @csrf
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">ĐĂNG NHẬP</p>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger text-center ">
                                <p>{{ $errorMessage }}</p>
                            </div>
                        
                        @else @if (isset($thongbao))
                                <div class="alert alert-danger text-center">                                          
                                    <p>{{ $thongbao }}</p>
                                </div>    
                            @endif
                        @endif

                    <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1cg">Tên người dùng</label>
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="username" value="{{ old('username') }}"/>  
                            @error('username')
                                <span class=" "style="color: red">{{ $message }}</span>
                            @enderror
                        </div>

                    <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example1cg">Tên người dùng</label>
                            <input type="password" id="form3Example1cg" class="form-control form-control-lg" name="pass" />
                            @error('pass')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>

                    

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản? <a href="{{ route('showFormRegister') }}"
                                class="link-danger">Đăng kí </a></p>
                        </div>
   
                    </form>
                </div>
            </div>
        </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
                <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
                Copyright © 2020. All rights reserved.
    </div>
                
</div>
            


</section>
    
</body>
</html>