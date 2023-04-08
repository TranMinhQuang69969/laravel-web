<header>
    <div class="wraper">
        <div class="header-content row-container">
            <a href="">

                <div class="header-logo">
                    <img style="height: 50px; width: 50px;" src="{{ asset('assets/client/image/logo.png') }}" alt="">
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
                    <a href="{{ route('home') }}">NỔI BẬT</a>
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

                            if(isset($_SESSION['username'])) {
                                $sql_user = "SELECT * FROM user where ten = '".$_SESSION['username']."'";
                                $rs_user = mysqli_query($conn, $sql_user);
                                foreach($rs_user as $row_user);
                            }
                           
                            foreach($rs_province as $row_pro) {
                                echo '<ul>
                                <li><a href="/'.$row_pro['tentinh'].'">'.$row_pro['tentinh'].'</a></li>

                            </ul>';
                            } 
                            foreach($rs_province2 as $row_pro2) {
                                echo '<ul>
                                <li><a href="/'.$row_pro2['tentinh'].'">'.$row_pro2['tentinh'].'</a></li>
                            </ul>';
                            } 
                        ?>
                    
                    </div>
                </ul>
                <ul class="nav-opt"><a href="profile.php?id=<?php 
                // echo $row_user['id'] ?>
                #post">ĐĂNG BÀI</a></ul>
                <ul class="nav-opt"><a href="contact.php?id=<?php 
                // echo $row_user['id'] ?>
                ">LIÊN HỆ</a></ul>
                <ul class="nav-opt"><a href="">ĐẶT PHÒNG</a></ul>
                <ul class="nav-opt"><a href="{{ route('login') }}">ĐĂNG NHẬP</a></ul>
            </div>
            <div class="icons">
                <div id="menu-bars" class="fas fa-bars"></div>
                <a href="" class="fas fa-heart"></a>
                <a href="{{ route('profile') }}" class="fas fa-user"></a>
            </div>
          
            
            <?php
       
   
        ?>
        </div>
    </div>
</header>