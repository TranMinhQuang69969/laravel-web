<section class="search">
    <div class="wraper">
        <form action="{{ route('search') }}" method="post">
            @csrf
            <div class="search-content-items rw">

                <div class="search-content-item">
                    <i class="fas fa-map-marker-alt"></i>

                    <input class="input-search" type="text" value="" placeholder="Bạn muốn đi đâu ?" name="tinh">
                    <div class="autobox">
                        <li>Hà Nội</li>
                        <li>Hải Phòng</li>
                        <li>Bắc Giag</li>
                        <li>Nghệ An</li>
                        <li>Đà Nẵng</li>
                        <li>Hồ Chí Minh</li>
                    </div>
                </div>
                <div class="search-content-item">
                <i class="fa-solid fa-money-bill-trend-up"></i>
                    <input type="number" min="100000" step="100000" placeholder="₫ TỪ" name="min">
                </div>
                <div class="search-content-item">
                <i class="fa-solid fa-money-bill-trend-up"></i>
                    <input type="number" min="100000" step="100000" placeholder="₫ ĐẾN " name="max">
                </div>
                <div class="search-content-item">
                    <i class="fa-regular fa-user"></i>
                    <input class="number-people" type="text" placeholder="Số giường" name="sogiuong">
                    <div class="number-box">
                        <li>
                            <div class="number-left">
                                <p>Giường đôi</p>
                            </div>
                            <div class="number-right nguoilon">
                                <i class="fas fa-minus nguoilonMinus"></i>
                                <span>0</span>
                                <i class="fas fa-plus nguoilonPlus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="number-left ">
                                <p>Giường đơn</p>
                            </div>
                            <div class="number-right treem">
                                <i class="fas fa-minus treemMinus"></i>
                                <span>0</span>
                                <i class="fas fa-plus treemPlus"></i>
                            </div>
                        </li>
                        <li>
                            <div class="number-left">
                                <p>Trẻ sơ sinh</p>
                            </div>
                            <div class="number-right sosinh">
                                <i class="fas fa-minus sosinhMinus"></i>
                                <span>0</span>
                                <i class="fas fa-plus sosinhPlus"></i>
                            </div>
                        </li>
                        <i class="fa-solid fa-xmark number-box-close"></i>
                    </div>
                </div>
                <div class="search-content-item">
                    <button class="search-tk">Tìm kiếm</button>
                </div>
            </div>
        </form>
    </div>
</section>