<nav class="navbar navbar-expand-lg sticky-top navbar-light">
    <a class="navbar-brand" href="/bs"><span class="logo-text">EZCV <sup>for Business</sup></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/bs">Trang chủ<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tuyển dụng
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/bs/create-new-job">Đăng tin tuyển dụng</a>
                    <a class="dropdown-item" href="/bs/manage-recruitment">Quản tí tin tuyển dụng</a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ap">Version for applicants</a>
            </li>
        </ul>

        <ul class="nav_menu_right">
            @if (session()->has('nameSessionBs'))
            <li>
                <div class="alert alert-info" role="alert">
                    Xin chào: {{ Session::get('nameSessionBs') }}
                </div>
            </li>
            <li>
                <a class="dangxuat" href="/bs/signout">Đăng Xuất
                </a>
            </li>
            @else
            <li><a class="dangnhap" style="color: #df3e39;" href="/bs/signin">
                    Đăng nhập
                </a></li>
            <li> <a class="dangky" style="color: #ffff;" href="/bs/signup">
                    Đăng ký
                </a></li>
            @endif
        </ul>

    </div>
</nav>