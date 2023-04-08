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
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">
    <!-- <script src="./js/new.js"></script> -->

    {{-- <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home</title>

</head>

<body>
    <?php
    // include('connect.php');
    // session_start();
?>
    <!-- HEADER -->
    @include('client.block.header')


    <!-- SLIDER -->
    <section class="slider owl-carousel owl-theme">
        <div class="slider-item slider-item-1">
            <div class="wraper">
                <div class="slider-item-text">
                    <p class="price"><span style="font-weight: bold; font-size: 30px;">1.500.000</span> <sup>đ</sup>/1
                        Tháng</p>
                    <p class="title-1">Tận Hưởng Không Gian Tuyệt Vời</p>
                    <p class="title-2">Toạ lạc tại vị trí đắc địa với không gian xịn xò bậc nhất</p>
                    <br>
                    <p><button class="btn btn-primary">Xem chi tiết</button></p>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================SEARCH========================================= -->
    @yield('search')
    

    <!----------------------------Product-rent--------------------------- -->
    <!--------------------FEATURDE----------------------->
    @yield('productList')
    

    <!-- ---------------------------- -->

    <section class="about">
        <div class="wraper container">
            <div class="title-section">
                <h2 class="title">Chúng tôi là ai ?</h2>
                <span class="border-icon">
                    <span class="title-icon"></span>
                </span>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center" style="font-size: 17px;">
                        <p style="font-size: 17px; margin-bottom: 10px;">Với quy mô hệ thống trên 110 tòa nhà tại Hà Nội
                            - BẢN ĐÔN tự tin là đơn vị vận hành đầu tiên & tốt nhất áp dụng công nghệ 4.0 vào quản lý
                            chung cư mini & nhà trọ.

                            Là thương hiệu hàng đầu, chúng tôi có đội ngũ chuyên gia giàu kinh nghiệm, luôn giữ trách
                            nghiệm cùng sự nhiệt huyết trong công việc.</p>

                        <p style="font-size: 17px">Chúng tôi luôn sẵn sàng phục vụ nhu cầu "<b>tìm nhà trọ, tìm phòng
                                trọ, chung cư mini, căn hộ mini</b>" cho mọi khách hàng, với mong muốn "Xây dựng những
                            căn phòng ĐẸP - Tạo dựng môi trường sống TỐT - Đảm bảo sự MINH BẠCH" cũng như QUYỀN LỢI cho
                            người thuê phòng và cả cộng đồng.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Iconbox top -->
    <section class="flat-row pad-bottom70px">
        <div class="container">
            <div class="title-section">
                <h2 class="title">CÓ GÌ Ở HOUSEEK ?</h2>
                <span class="border-icon">
                    <span class="title-icon"></span>
                </span>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="flat-iconbox">
                        <div class="icon">
                            <img src="{{ asset('assets/client/image/icon-server-01.png') }}" alt="images">
                            
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">CĂN HỘ</a></div>
                            <p>Vệ sinh sạch sẽ, không gian thoáng mát, đầy đủ nội thất lắp đặt mới. </p>
                        </div>
                    </div><!-- /.flat-iconbox -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="flat-iconbox">
                        <div class="icon">
                            <img src="{{ asset('assets/client/image/icon-server-02.png') }}" alt="images">
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">GIÁ ĐIỆN</a></div>
                            <p>Người thuê phòng sẽ được "trả tiền điện" theo đúng "khung giá nhà nước". </p>
                        </div>
                    </div><!-- /.flat-iconbox -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="flat-iconbox">
                        <div class="icon">
                            <img src="{{ asset('assets/client/image/icon-server-03.png') }}" alt="images">
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">NƯỚC SINH HOẠT</a></div>
                            <p>Người thuê phòng không phải lo "thiếu nước sạch" hay "giá tiền nước cao". </p>
                        </div>
                    </div><!-- /.flat-iconbox -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-4">
                    <div class="flat-iconbox">
                        <div class="icon">
                            <img src="{{ asset('assets/client/image/icon-server-04.png') }}" alt="images">
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">AN NINH</a></div>
                            <p>Hệ thống an ninh đảm bảo an toàn từ "camera giám sát" đến "bảo mật vân tay". </p>
                        </div>
                    </div><!-- /.flat-iconbox -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="flat-iconbox">
                        <div class="icon">
                            <img src="{{ asset('assets/client/image/icon-server-05.png') }}" alt="images">
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">VĂN HÓA</a></div>
                            <p>Nếp sống văn hóa lành mạnh, thân thiện & gần gũi trong khu nhà trọ. </p>
                        </div>
                    </div><!-- /.flat-iconbox -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="flat-iconbox">
                        <div class="icon">
                            <img src="{{ asset('assets/client/image/icon-server-06.png') }}" alt="images">
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">HỖ TRỢ 24H</a></div>
                            <p>Đội ngũ vận hành hỗ trợ 24h, xử lý mọi vấn đề cho người thuê phòng. </p>
                        </div>
                    </div><!-- /.flat-iconbox -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- ------------------------------REVIEW--------------------------------- -->
    <section id="review" class="review">
        <div class="container">
            <div class="title-section">
                <h2 class="title">PHẢN HỒI TỪ KHÁCH HÀNG</h2>
                <span class="border-icon">
                    <span class="title-icon"></span>
                </span>
            </div>
            <div class="review-content row">
                <div class="review-item">
                    <div class="review-item-text">
                        <img src="{{ asset('assets/client/image/messenger1.png') }}" alt="">
                        <p><span>&ldquo;</span><span>Phòng trọ rất đẹp cảnh quan nhìn từ phòng rất tuyệt vời, nội thất
                                đầy đủ tiện nghi cao cấp, không gian rộng rãi thoáng đãng, bà chủ thân thiện. Nhất định
                                sẽ quay lại lần sau</span><span>&ldquo;</span></p>
                    </div>
                    <div class="review-item-img row">
                        <img src="{{ asset('assets/client/image/user.png') }}" alt="">
                        <div class="review-item-img-text">
                            <h2>Từ Anh Đài</h2>
                            <p>Ngày 19/5/2022</p>
                        </div>
                    </div>
                </div>

                <div class="review-item">
                    <div class="review-item-text">
                        <img src="{{ asset('assets/client/image/messenger1.png') }}" alt="">
                        <p><span>&ldquo;</span><span>Thật tuyệt vời khi được đến đây. Người dân rất thân thiện, lễ tân
                                cực kỳ vui tính và tốt bụng. Cảnh quan tuyệt vời. Hãy đến nơi đây một lần, bạn không hối
                                tiếc về điều đó</span><span>&ldquo;</span></p>
                    </div>
                    <div class="review-item-img row">
                        <img src="{{ asset('assets/client/image/user2.png') }}" alt="">
                        <div class="review-item-img-text">
                            <h2>Trần Minh Quang</h2>
                            <p>Ngày 22/5/2022</p>
                        </div>
                    </div>
                </div>

                <div class="review-item">
                    <div class="review-item-text">
                        <img src="{{ asset('assets/client/image/messenger1.png') }}" alt="">
                        <p><span>&ldquo;</span><span>Chủ nhà và mọi người rất tốt bụng và thân thiện. Địa điểm ngay
                                trung tâm, thuận lợi di chuyển, ăn uống vui chơi. Phòng rất sạch sẽ, đầy đủ tiện
                                nghi</span><span>&ldquo;</span></p>
                    </div>
                    <div class="review-item-img row">
                        <img src="{{ asset('assets/client/image/user3.png') }}" alt="">
                        <div class="review-item-img-text">
                            <h2>Doãn Chí Bình</h2>
                            <p>Ngày 24/5/2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- --------------FOOTER-START--------------- -->
    <section id="footer">
        <footer>
            <div class="row container-ft">
                <div class="column">
                    <h1 style="font-size: 18px;"><b>THÔNG TIN</b></h1>
                    <br>
                    <p>Công ty Cổ phần ABC với số đăng ký kinh doanh: 01237617326</p> <br>
                    <p class="add">Địa chỉ đăng ký: 19/41 Lê Quý Đôn, Phường 2, Tx Quảng Trị, Tỉnh Quảng trị, Việt Nam
                    </p> <br>
                    <p>SĐT: 0981 147 346</p>
                    <img class="congthuong" src="{{ asset('assets/client/image/congthuong-logo.png') }}" alt="">

                </div>

                <div class="column">
                    <div class="info">
                        <h2><b>LIÊN LẠC</b></h2>
                        <br>
                        <p>Từ Anh Đài - 21IT267</p>
                        <p>Trần Minh Quang - 21IT228</p>
                        <br>
                        <p class="school">Sinh viên Công Nghệ thông tin - Đại học Công nghệ thông tin và Truyền thông
                            Việt - Hàn</p>
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
                            <a href=""><img src="{{ asset('assets/client/image/appstore.png') }}" class="app"></a>
                        </div>
                        <div class="dowload-2">
                            <a href=""><img src="{{ asset('assets/client/image/googleplay.png') }}" class="app"></a>
                        </div>

                    </div>

                </div>
            </div>
        </footer>
    </section>

    <button id="myBtn" title="Back to homepage"><i class="fa-solid fa-arrow-up"></i></button>
</body>


{{-- <script src="https://kit.fontawesome.com/ba36f54e69.js" crossorigin="anonymous" async></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
{{-- <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script> --}}

{{-- <script>
$(document).ready(function() {
    $(".owl-carousel").owlCarousel();
});


</script> --}}
{{-- <script src="./js/menu-bar.js"></script> --}}
<script src="{{ asset('assets/client/js/menu-bar.js') }}"></script>
<script src="{{ asset('assets/client/js/script.js') }}"></script>

{{-- <script src="./js/script.js"></script> --}}

</html>