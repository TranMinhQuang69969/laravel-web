<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
        <section class="vh-100 bg-image bg-light">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Chỉnh sửa người dùng</h2>

                    <form method="POST" >
                        @csrf
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger text-center ">
                                <p>{{ $errors }}</p>
                            </div>
                        
                        @else @if (isset($thongbao))
                                <div class="alert alert-danger text-center">                                          
                                    <p>{{ $thongbao }}</p>
                                </div>    
                            @endif
                                   
                         
                        @endif --}}
                        @if ($errors->any())
                            <div class="alert alert-danger text-center ">
                                {{-- @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                                    
                                @endforeach --}}
                                <p>{{ $thongbao }}</p>
                            </div>
                        
                  
                                   
                         
                        @endif
                        @if (!empty($data))
                            @foreach ($data as $value)
                                
                            @endforeach
                        
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1cg">Tên người dùng </label>
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="ten" value="{{ $value->ten }}"/>
                        @error('ten')
                            <span class=" "style="color: red">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg"> Email</label>
                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" value="{{ $value->email }} "/>
                        @error('email')
                        <span class=" "style="color: red">{{ $message }}</span>
                        @enderror
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg"> Số điện thoại</label>
                        <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="sdt"value="{{ $value->sdt }}"/>
                        @error('sdt')
                        <span class=" "style="color: red">{{ $message }}</span>
                        @enderror
                        </div>
                      

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4cg">Địa chỉ</label>
                        <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="diachi" value="{{ $value->diachi }}"/>
                        
                        </div>

                        <div class="d-flex justify-content-center mt-3">
                        <input type="submit"
                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="Lưu" >
                        </div>
           
                        @endif
                    </form>

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        
</body>
</html>