<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
            </style>
        <title>Khu trọ FPT</title>
        <link rel="stylesheet" href="{{ asset('assets/client/css/sanpham.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="./img/logo-fpt-plaza.png">
    </head>
    <body>
        <!-- HEADER -->
        @include('client.block.header')
        <section class="product">
            <div class="product-info">
                
                @foreach ($productItem as $key => $item)
                    <div class="product-info-left">
                        <img src="{{ asset('assets/client/image/'.$item->image) }}">
                    </div>
        
                    <div class="product-info-right">
                        <div class="product-info-right-product-name">
                            <b>{{ $item->description }}</b><br>
                        </div>
            
                        <div class="product-info-right-product-price">
                            <p><i class="fa-solid fa-dollar-sign"></i>{{ $item->price }}</p><br>
                        </div>
                                                         
                        <div class="product-info-right-product-address">
                            <a href="https://www.google.com/maps/dir//%C4%90.+Nam+K%E1%BB%B3+Kh%E1%BB%9Fi+Ngh%C4%A9a,+%C4%90%C3%A0+N%E1%BA%B5ng,+Vietnam/@15.9776711,108.2418308,17.52z/data=!4m8!4m7!1m0!1m5!1m1!1s0x31421084250439e9:0x9b8e9f1a0f1a0ea0!2m2!1d108.2433075!2d15.9778024">
                                <h2><i class="fa-solid fa-location-dot"></i>'{{ $item->address }}</h2><br>
                            </a>
                            
                        </div>
            
                        <div class="product-info-right-product-note">
                            <p><i class="fa-solid fa-check"></i> Không chung chủ, giờ giấc tự do thoải mái.</p>
                            <p><i class="fa-solid fa-check"></i> Ký HĐ trực tiếp có đóng dấu công ty, pháp lý rõ ràng.</p>
                            <p><i class="fa-solid fa-check"></i> Không gian yên tĩnh, thoáng mát.</p>
                            <p><i class="fa-solid fa-check"></i> Cam kết tất cả tin đăng, hình ảnh thực tế 100%</p>
                            <br>
                        </div>
            
                        <div class="product-info-right-product-convenient">
                            <p><i class="fa-solid fa-star"></i> Tiện Nghi: </p><br>
                            <ul> 
                                <li><p><i class="fa-solid fa-check"></i> Khu vực để xe rộng rãi</p></li>
                                <li><p><i class="fa-solid fa-check"></i> Các phòng đều có cửa sổ</p></li>
                                <li><p><i class="fa-solid fa-check"></i> Thiết bị vệ sinh cao cấp: máy tắm nước nóng, vòi sen, lavabo</p></li>
                                <li><p><i class="fa-solid fa-check"></i> camera an ninh 24/24</p></li>
                                <li><p><i class="fa-solid fa-check"></i> Wifi tốc độ cao</p></li>
                            </ul>        
                        </div>
                        <br>
                        <div class="product-info-right-product-phone-number">
                            <p><h2><i class="fa-solid fa-phone"></i> 0981147346</h2></p>
                        </div>
                        <br><br>
                        
                        <div class="buttons" >
                                <div class="btn-view">
                                    <a href="./add_donhang.php?id='.$_GET["id"].'"><button class="btn">Thanh Toán</button></a>
                                </div>      
                                <div class="btn-view">
                                    <a href="add.php?id='.$_GET['id'].'"><button class="btn">Thêm vào yêu thích</button></a>
                                </div>           
                        </div>
            
                    </div>
                        
                @endforeach
            </div>
            <br><br><br>
        
        </section>
        
                
        <br><br>
        
        <ul class="product-other container">
           
        </ul>
        
        <footer>
            <div class="row container">
                <div class="column">
                    <h1 style="font-size: 18px;"> THÔNG TIN</h1>
                    <p>Công ty Cổ phần ABC với số đăng ký kinh doanh: 01237617326</p> <br>
                    <p class="add">Địa chỉ đăng ký: 19/41 Lê Quý Đôn, Phường 2, Tx Quảng Trị, Tỉnh Quảng trị, Việt Nam</p> <br>
                    <p>SĐT: 0981 147 346</p>
                  <img class="congthuong" src="./img/congthuong-logo.png" alt="">
                    
                    
                </div>
    
                <div class="column">
                    <div class="info">
                        <h2><b>LIÊN LẠC</b></h2>
                        <br>
                        <p>Từ Anh Đài - 21IT267</p>
                        <p>Trần Minh Quang - 21IT228</p>
                        <br>
                        <p class="school">Sinh viên Công Nghệ thông tin - Đại học Công nghệ thông tin và Truyền thông Việt - Hàn</p>
                        <br>
                        <p>0789 402 025</p>
                        <br>
                        <p>daita.21it@vku.udn.vn</p>
                    </div>
                    
                </div>
              
                <div class="column">
                    <div class="download">
                        <h2 class="download-tittle"><b>DOWNLOAD APP</b></h2> <br>
                        <div class="dowload-1">
                            <a href=""><img src="./img/appstore.png" class="app"></a>
                        </div>
                        <div class="dowload-2">
                            <a href=""><img src="./img/googleplay.png" class="app"></a>
                        </div>
                    </div>
                 
                </div>
              
                
              </div>
        </footer>
        
        <script src="./JavaScript/jscript.js"></script> 
    </body>
</html>