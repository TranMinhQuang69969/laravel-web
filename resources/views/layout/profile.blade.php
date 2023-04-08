<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/client/css/profile.css') }}">
    <!-- <script src="./js/new.js"></script> -->

    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Houseek</title>

</head>

<body>

    <!-- HEADER -->
    <header>
        <div class="wraper">
            <div class="header-content row-container">
                <a href="{{ route('home') }}">

                    <div class="header-logo">
                        <img style="height: 50px; width: 50px;" src="./img/logo.png" alt="">
                        <span class="font-logo">Hou</span>
                        <p class="font-logo">S</p>
                        <p class="font-logo" style="color:black;">eek</p>
                    </div>
                </a>
                <div class="header-nav">
                    <ul class="nav-opt">
                        <a href="{{ route('home') }}">TRANG CHỦ</a>
                    </ul>
                    <ul class="nav-opt nav-search">
                        <a href="">NỔI BẬT</a>
                        <div class="nav-sub">
							<?php
							
										  	$host = "localhost";
											$account = "root";
											$pass = "";
											$database = "do_an_cs2";
											$conn = mysqli_connect($host, $account, $pass, $database);
											
										

								 $sql_province = 'SELECT * FROM province LIMIT 3 OFFSET 1';
								 $rs_province = mysqli_query($conn, $sql_province);
								 $sql_province2 = 'SELECT * FROM province LIMIT 3 OFFSET 9';
								 $rs_province2 = mysqli_query($conn, $sql_province2);
 
								
								
							
 
								 foreach($rs_province as $row_pro) {
									 echo '<ul>
									 <li><a href="noibat.php?tentinh='.$row_pro['tentinh'].'">'.$row_pro['tentinh'].'</a></li>
								 </ul>';
								 } 
								 foreach($rs_province2 as $row_pro2) {
									 echo '<ul>
									 <li><a href="noibat.php?tentinh='.$row_pro2['tentinh'].'">'.$row_pro2['tentinh'].'</a></li>
								 </ul>';
								 } 
							?>
                            
                        </div>
                    </ul>
                    <ul class="nav-opt"><a href="">ĐĂNG BÀI</a></ul>
                    <ul class="nav-opt"><a href="">LIÊN HỆ</a></ul>
                    <ul class="nav-opt"><a href="">ĐẶT PHÒNG</a></ul>
                    <ul class="nav-opt"><a href="./login.php">ĐĂNG NHẬP</a></ul>
                </div>
                 {{-- <div class="icon-cart">
                    <div class="    ">
                        <i class="fa-solid fa-cart-shopping cart"></i>
                    </div>
                </div>  --}}
                 <div class="icons">
                    <div id="menu-bars" class="fas fa-bars"></div>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="{{ route('profile') }}" class="fas fa-user"></a>
                </div> 
           
            </div>
        </div>
    </header>
   
   



<div class="container h-100 profile-body" >

	@foreach ($data as $value)
		
	@endforeach
		<div class="main-body mt-4 ">
			<div class="row">
				<div class="col-lg-4 mt-10">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4>{{ $value->ten }}</h4>
									<p class="text-secondary mb-1"> {{ $value->email }}</p>
									<p class="text-muted font-size-sm"> {{ $value->sdt }}</p>
									<a href="donhang.php?id= echo $_GET['id']?"><button class="btn btn-outline-primary">Đặt Phòng</button></a>
									<a href="signout.php"><button class="btn btn-outline-danger">Đăng xuất</button></a>
									
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
									<span class="text-secondary">https://bootdey.com</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
									<span class="text-secondary">@bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									<span class="text-secondary">bootdey</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<form action="{{ route('updateUser') }}" method="POST">
								@csrf
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 h4">Tên tài khoản</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control " value="{{ $value->ten }}" name="name">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 h4">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{ $value->email }}" name="email">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 h4">Số điện thoại</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value=" {{ $value->sdt }}" name="sdt">
								</div>
							</div>
							
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 h4">Địa chỉ</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="{{ $value->diachi }}" name="diachi">
								</div>
							</div>

	

							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<a href=""><input type="submit" class="btn btn-primary px-4" value="Chỉnh sửa thông tin" >
									</a>
								</div>
							</div>
							</form>
						</div>
						
						
					</div>

					<div class="card mt-4" id="post">
						<form action="{{ route('insertProduct') }}" method="POST" enctype="multipart/form-data">
							@csrf
						<div class="card-body">
						
							<div class="row mb-3">
								<div class="col-sm-3">
									<h3 class="mb-0 h3">Đăng Bài</h3>
								</div>
								
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 h4">Hình ảnh</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="file" class="form-control" name="hinhanh">
									<h6>@error('hinhanh')
										<span class=" "style="color: red">{{ $message }}</span>
										@enderror
									</h6>
								</div>
								
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 h4" >Mô tả</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control"  name="mota" placeholder="">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 h4">Giá</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control"  name="gia">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 h4">Địa chỉ</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="diachi">
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 h4">Số giường</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="number" class="form-control" name="giuong">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0 h4">Tỉnh/Thành phố</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<select class="form-select" aria-label="Default select example" name="tinh">
										<option selected>Chọn Tỉnh/Thành phố</option>
						
										<?php 
										  	$host = "localhost";
											$account = "root";
											$pass = "";
											$database = "do_an_cs2";
											$conn = mysqli_connect($host, $account, $pass, $database);
											$sql4 = "select * from province";
											$rs4 = mysqli_query($conn, $sql4);
											foreach ($rs4 as $row4) {
												echo '<option value="'.$row4['tentinh'].'">'.$row4['tentinh'].'</option>';
											}
										?>

									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-outline-info btn-rounded px-4" value="Đăng Bài">
								</div>
							</div>
						</div>
						
						</form>
					</div>
				
				</div>
			</div>
		</div>
</div>

<script src="https://kit.fontawesome.com/ba36f54e69.js" crossorigin="anonymous" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 1000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>

</body>
<script src="./js/script.js"></script>

</html>