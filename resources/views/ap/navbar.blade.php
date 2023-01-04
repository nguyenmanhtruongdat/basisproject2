<nav class="navbar navbar-expand-lg sticky-top navbar-light">
    <a class="navbar-brand" href="/"><span class="logo-text ml-3">EZCV</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Trang chủ<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Việc làm
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <a class="dropdown-item" href="/ap/job"><i class="icon fa-light fa-radar"></i>Tìm việc làm</a> -->
                    <a class="dropdown-item" href="/ap/submitted">Việc làm đã ứng tuyển</a>
                    <a class="dropdown-item" href="/ap/favoritesjob">Việc làm đã lưu</a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
            </li>

            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Công cụ
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Tính lãi suất kép</a>
                    <a class="dropdown-item" href="#">Tính lương GROSS - NET</a>
                    <a class="dropdown-item" href="#">Lập kế hoạch tiết kiệm</a>
                    <a class="dropdown-item" href="#">Tính bảo hiểm xã hội</a>
                </div>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="/ap/company">Công ty</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="/bs">Version for bussiness</a>
            </li>
        </ul>

        <ul class="nav_menu_right">
            @if (session()->has('sessionAccount'))
                <li>
                    <div class="alert alert-info" role="alert">
                        Xin chào: {{ Session::get('sessionAccount')[0]->name }}
                        {{-- Xin chào: @foreach(Session::get('sessionAccount') as $test)
                        {{$test->name}}
                        @endforeach --}}
                    </div>
                </li>
                <li>
                    <a class="dangxuat" href="/ap/signout" >Đăng Xuất
                    </a>
                </li>
            @else
                <li><a class="dangnhap" style="color: #df3e39;" href="/ap/signin">
                        Đăng nhập
                    </a></li>
                <li> <a class="dangky" style="color: #ffff;"href="/ap/signup">
                        Đăng ký
                    </a></li>
            @endif

        </ul>

    </div>
</nav>
