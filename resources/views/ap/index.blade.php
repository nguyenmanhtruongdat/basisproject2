<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EzCV</title>
    <!-- Icon css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="vendors/linearicons/style.css" rel="stylesheet">
    <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Rev slider css -->
    <link href="vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="vendors/animate-css/animate.css" rel="stylesheet">
    <!-- Google font -->
    <link href='https://fonts.googleapis.com/css?family=Galindo' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Extra plugin css -->
    <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
    <style>
        li {
            color: #0000;
        }

        a {
            color: #4a4a4a !important;
            text-decoration: none !important;
            background-color: transparent !important;
        }
    </style>
</head>

<body>
    <div class="preloading">
    </div>
    @include('ap.navbar')
    <div id="welcome-page">
        <section id="box-search-job">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <br>
                        <br>
                        <h2 class="label-search"> &nbsp; <i class="fa-solid fa-magnifying-glass"></i> Tìm việc phù hợp với bạn</h2>
                        <div class="form-search">
                            <form id="frm-search-job" method="GET" action="{{ route('ap.searchjob') }}" target="_blank">
                                <div class="box-search">
                                    <div class="col-input">
                                        <input name="keyword" id="keyword" required class="form-control input-search ui-autocomplete-input border-hover" value="" placeholder="Tên công việc, vị trí bạn muốn ứng tuyển" id="keyword" autocomplete="off" onfocus="show()" required>


                                        <div class="search-advanced" id="search-advanced">
                                            <div class="d-flex mt-2">
                                                <p class="title">Tìm kiếm nâng cao</p>
                                                <button type="button" class="less-content" id="hide-button"><i class="fa-light fa-arrow-up-from-dotted-line d-none"></i> Thu gọn</button>
                                            </div>
                                            <div class="d-flex">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search1" onclick="showhide(1)">
                                                        <label class="form-check-label" for="1">
                                                            Ngành nghề
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search2" onclick="showhide(2)">
                                                        <label class="form-check-label" for="2">
                                                            Khu vực
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search3" onclick="showhide(3)">
                                                        <label class="form-check-label" for="3">
                                                            Cấp bậc
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search4" onclick="showhide(4)">
                                                        <label class="form-check-label" for="4">
                                                            Hình thức làm việc
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search5" onclick="showhide(5)">
                                                        <label class="form-check-label" for="5">
                                                            Mức lương
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search6" onclick="showhide(6)">
                                                        <label class="form-check-label" for="5">
                                                            Kinh nghiệm
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group" id="form-1" style="display: none;">
                                                    <select name="major" id="major" class="form-control">
                                                        <option value="Kinh doanh / Bán hàng">Kinh doanh / Bán hàng</option>
                                                        <option value="Biên / Phiên dịch">Biên / Phiên dịch</option>
                                                        <option value="Báo chí / Truyền hình">Báo chí / Truyền hình</option>
                                                        <option value="Bưu chính - Viễn thông">Bưu chính - Viễn thông</option>
                                                        <option value="Bảo hiểm">Bảo hiểm</option>
                                                        <option value="Bất động sản">Bất động sản</option>
                                                        <option value="Chứng khoán / Vàng / Ngoại tệ">Chứng khoán / Vàng / Ngoại tệ</option>
                                                        <option value="IT Phần cứng / Mạng">IT Phần cứng / Mạng</option>
                                                        <option value="IT phần mềm">IT phần mềm</option>
                                                        <option value="Thư ký / Trợ lý">Thư ký / Trợ lý</option>
                                                        <option value="Phi chính phủ / Phi lợi nhuận">Phi chính phủ / Phi lợi nhuận</option>
                                                        <option value="Công nghệ Ô tô">Công nghệ Ô tô</option>
                                                        <option value="Quản lý điều hành">Quản lý điều hành</option>
                                                        <option value="Mỹ thuật / Nghệ thuật / Điện ảnh">Mỹ thuật / Nghệ thuật / Điện ảnh
                                                        <option value="Kiến trúc">Kiến trúc</option>
                                                        <option value="Logistics">Logistics</option>
                                                        <option value="Luật/Pháp lý">Luật/Pháp lý</option>
                                                        <option value="Xây dựng">Xây dựng</option>
                                                        <option value="Xuất nhập khẩu">Xuất nhập khẩu</option>
                                                        <option value="Y tế / Dược">Y tế / Dược</option>
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-2" style="display: none;">
                                                    <select name="area" id="area" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Tỉnh thành</option>
                                                        <option value="An Giang">An Giang
                                                        <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                                        <option value="Bắc Giang">Bắc Giang
                                                        <option value="Bắc Kạn">Bắc Kạn
                                                        <option value="Bạc Liêu">Bạc Liêu
                                                        <option value="Bắc Ninh">Bắc Ninh
                                                        <option value="Bến Tre">Bến Tre
                                                        <option value="Bình Định">Bình Định
                                                        <option value="Bình Dương">Bình Dương
                                                        <option value="Bình Phước">Bình Phước
                                                        <option value="Bình Thuận">Bình Thuận
                                                        <option value="Bình Thuận">Bình Thuận
                                                        <option value="Cà Mau">Cà Mau
                                                        <option value="Cao Bằng">Cao Bằng
                                                        <option value="Đắk Lắk">Đắk Lắk
                                                        <option value="Đắk Nông">Đắk Nông
                                                        <option value="Điện Biên">Điện Biên
                                                        <option value="Đồng Nai">Đồng Nai
                                                        <option value="Đồng Tháp">Đồng Tháp
                                                        <option value="Đồng Tháp">Đồng Tháp
                                                        <option value="Gia Lai">Gia Lai
                                                        <option value="Hà Giang">Hà Giang
                                                        <option value="Hà Nam">Hà Nam
                                                        <option value="Hà Tĩnh">Hà Tĩnh
                                                        <option value="Hải Dương">Hải Dương
                                                        <option value="Hậu Giang">Hậu Giang
                                                        <option value="Hòa Bình">Hòa Bình
                                                        <option value="Hưng Yên">Hưng Yên
                                                        <option value="Khánh Hòa">Khánh Hòa
                                                        <option value="Kiên Giang">Kiên Giang
                                                        <option value="Kon Tum">Kon Tum
                                                        <option value="Lai Châu">Lai Châu
                                                        <option value="Lâm Đồng">Lâm Đồng
                                                        <option value="Lạng Sơn">Lạng Sơn
                                                        <option value="Lào Cai">Lào Cai
                                                        <option value="Long An">Long An
                                                        <option value="Nam Định">Nam Định
                                                        <option value="Nghệ An">Nghệ An
                                                        <option value="Ninh Bình">Ninh Bình
                                                        <option value="Ninh Thuận">Ninh Thuận
                                                        <option value="Phú Thọ">Phú Thọ
                                                        <option value="Quảng Bình">Quảng Bình
                                                        <option value="Quảng Bình">Quảng Bình
                                                        <option value="Quảng Ngãi">Quảng Ngãi
                                                        <option value="Quảng Ninh">Quảng Ninh
                                                        <option value="Quảng Trị">Quảng Trị
                                                        <option value="Sóc Trăng">Sóc Trăng
                                                        <option value="Sơn La">Sơn La
                                                        <option value="Tây Ninh">Tây Ninh
                                                        <option value="Thái Bình">Thái Bình
                                                        <option value="Thái Nguyên">Thái Nguyên
                                                        <option value="Thanh Hóa">Thanh Hóa
                                                        <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                                        <option value="Tiền Giang">Tiền Giang
                                                        <option value="Trà Vinh">Trà Vinh
                                                        <option value="Tuyên Quang">Tuyên Quang
                                                        <option value="Vĩnh Long">Vĩnh Long
                                                        <option value="Vĩnh Phúc">Vĩnh Phúc
                                                        <option value="Yên Bái">Yên Bái
                                                        <option value="Phú Yên">Phú Yên
                                                        <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                                        <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                                        <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                                        <option value="Tp.Hà Nội">Tp.Hà Nội
                                                        <option value="TP  HCM">TP HCM
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-3" style="display: none;">
                                                    <select name="rank" id="rank" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Cấp bậc</option>
                                                        <option value="Trưởng chi nhánh">Trưởng chi nhánh</option>
                                                        <option value="Trưởng phòng">Trưởng phòng</option>
                                                        <option value="Giám đốc">Giám đốc</option>
                                                        <option value="Phó giám đốc">Phó giám đốc</option>
                                                        <option value="Thực tập sinh">Thực tập sinh</option>
                                                        <option value="Nhân viên">Nhân viên</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-4" style="display: none;">
                                                    <select name="type" id="type" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Hình thức làm việc</option>
                                                        <option value="Toàn thời gian">Toàn thời gian</option>
                                                        <option value="Bán thời gian">Bán thời gian</option>
                                                        <option value="Thực tập">Thực tập</option>
                                                        <option value="Remote - Làm việc từ xa">Remote - Làm việc từ xa</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-5" style="display: none;">
                                                    <select name="wage" id="wage" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Mức lương</option>
                                                        <option value="3000000">&nbsp;&nbsp;Dưới 3 triệu</option>
                                                        <option value="5000000">&nbsp;&nbsp;3 - 6 triệu</option>
                                                        <option value="7000000">&nbsp;&nbsp;6 - 9 triệu</option>
                                                        <option value="10000000">&nbsp;&nbsp;9 -12 triệu</option>
                                                        <option value="120">&nbsp;&nbsp;12 - 15 triệu</option>
                                                        <option value="6">&nbsp;&nbsp;18 - 21 triệu</option>
                                                        <option value="7">&nbsp;&nbsp;24 - 27 triệu</option>
                                                        <option value="8">&nbsp;&nbsp;27 - 30 triệu</option>
                                                        <option value="10">&nbsp;&nbsp;Trên 30 triệu</option>
                                                        <option value="Thỏa thuận">&nbsp;&nbsp;Thoả thuận</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-6" style="display: none;">
                                                    <select name="exp" id="exp" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Kinh nghiệm</option>
                                                        <option value="Chưa có kinh nghiệm">Không yêu cầu kinh nghiệm</option>
                                                        <option value="Dưới 1 năm kinh nghiệm">Dưới 1 năm kinh nghiệm</option>
                                                        <option value="1 năm kinh nghiệm">1 năm kinh nghiệm</option>
                                                        <option value="2 năm kinh nghiệm">2 năm kinh nghiệm</option>
                                                        <option value="3 năm kinh nghiệm">3 năm kinh nghiệm</option>
                                                        <option value="4 năm kinh nghiệm">4 năm kinh nghiệm</option>
                                                        <option value="5 năm kinh nghiệm">5 năm kinh nghiệm</option>
                                                        <option value="Trên 5 năm kinh nghiệm">Trên 5 năm kinh nghiệm</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-button">
                                        <button type="submit" class="btn btn-search-job"><span>Tìm việc ngay</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 box-search-job-image">
                        <img src="{{ url('img/home-removebg-preview.png') }}" title="Nhân viên tuyển dụng tại EzCV" alt="Nhan vien tuyen dung tai EzCV" class="img-home">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('/img/banner-ngang1.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/img/banner-ngang2.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/img/banner-ngang3.png')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <div class="row box-jobs mt-3">
        <div class="container" id="container">
            <div class="box-header">
                <h2 class="text_ellipsis uppercase box-title">
                    <i class="fa-solid fa-briefcase"></i> Tin tuyển dụng, việc làm tốt nhất
                </h2>
            </div>

            @include('ap.pagination')

        </div>
    </div>
    <script src="{{ url('js/app.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on("click", ".pagination a", function(event) {
                event.preventDefault();
                var page = $(this).attr("href").split("page=")[1];
                var datapaging = document.getElementById("datapaging");
                fetch_data(page);
            });

            function fetch_data(page) {
                $.ajax({
                    url: "/ap/pagination?page=" + page,
                    success: function(data) {
                        $("#container").html(data);
                    },
                });
            }
        });
    </script>
</body>

</html>