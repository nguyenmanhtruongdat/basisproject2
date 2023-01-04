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
</head>
<style>
    input,
    select {
        border: 1px solid #333;
        border-radius: 2px;
        box-shadow: none;
        color: #333;
        font-size: 14px;
        font-weight: 400;
        height: 40px;
        line-height: 24px;
        padding: 11px 0 11px 20px;
        resize: vertical;
        background: transparent !important;

    }

    select {
        display: inline-block;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    textarea {
        background: transparent !important;
        border: 1px solid #333;
        border-radius: 2px;
        box-shadow: none;
        color: #333;
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
        padding: 11px 0 11px 20px;
    }

    .h2 {
        color: #333 !important;
    }


    * {
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        ;
    }
</style>

<body>
    <div class="preloading"></div>
    @include('bs.navbar')
    <div class="page-wrapper chiller-theme ml-0 mt-3 bg-white">
        <div class="container">
            <h2 class="h2">Đăng tin tuyển dụng mới</h2>
            @if (session('msg'))
            <div class="alert alert-success">{{ session('msg') }}</div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">Đăng tuyển không thành công</div>
            @endif

            <div class="row">
                <div class="col-md-9">
                    <form action="/bs/postRecruitment" method="POST" enctype='multipart/form-data'>
                        <div class="form-group">
                            <label for="name" class="title">Tên chiến dịch tuyển dụng</label>
                            <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="VD: Tuyển dụng nhân viên Design tháng 12">
                            @error('name')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="role" class="title">Vị trí tuyển dụng</label>
                            <input value="{{ old('position') }}" name="position" type="text" class="form-control" id="role" placeholder="VD: Nhân viên Marketing, Designer, Sales">
                            @error('position')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="platform" class="title">Khu vực làm việc</label> <br>
                            <select name="area" id="tinhthanh" class="form-control">
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
                            @error('area')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <h3 class="h3">Thông tin đăng tuyển chi tiết</h3>
                        <div class="form-group">
                                        <label for="email" class="mb-1">Ảnh hiển thị tin</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
                                            </div>
                                            <input type="file" accept="image/*" name="image" class="form-control" required value="">
                                        </div>
                                        @error('photo')
                                        <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>

                        <div class="form-group">
                            <label for="title" class="title">Tiêu đề tin tuyển dụng</label>
                            <input value="{{ old('title') }}" name="title" type="text" class="form-control" id="title" placeholder="VD: Nhân viên kinh doanh">
                            @error('title')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="career" class="title">Ngành nghề & lĩnh vực</label> <br>
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
                            @error('major')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <h3 class="h3">Thông tin chung</h3>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="title">Loại công việc</label> <br>
                            <select name="type" class="form-control" id="type">
                                <option value="Toàn thời gian">Toàn thời gian</option>
                                <option value="Bán thời gian">Bán thời gian</option>
                                <option value="Thực tập">Thực tập</option>
                                <option value="Remote - Làm việc từ xa">Remote - Làm việc từ xa</option>
                            </select>
                            @error('type')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">

                            <label for="exampleInputPassword1" class="title">Giới tính</label> <br>
                            <select class="form-control" name="gender" id="gt">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Không yêu cầu giới tính cụ thể">Không yêu cầu giới tính cụ thể</option>
                            </select>
                            @error('gender')
                            <span style="color: red">{{ $message }}</span>
                            @enderror

                            <label for="exampleInputPassword1" class="title">Cấp bậc</label> <br>
                            <select class="form-control" name="rank" id="capbac">
                                <option value="Trưởng chi nhánh">Trưởng chi nhánh</option>
                                <option value="Trưởng phòng">Trưởng phòng</option>
                                <option value="Giám đốc">Giám đốc</option>
                                <option value="Phó giám đốc">Phó giám đốc</option>
                                <option value="Thực tập sinh">Thực tập sinh</option>
                                <option value="Nhân viên">Nhân viên</option>
                            </select>
                            @error('rank')
                            <span style="color: red">{{ $message }}</span>
                            @enderror

                            <label for="exampleInputPassword1" class="title">Kinh nghiệm</label> <br>
                            <select class="form-control" name="exp" id="kinhnghiem">
                                <option value="Chưa có kinh nghiệm">Không yêu cầu kinh nghiệm</option>
                                <option value="Dưới 1 năm kinh nghiệm">Dưới 1 năm kinh nghiệm</option>
                                <option value="1 năm kinh nghiệm">1 năm kinh nghiệm</option>
                                <option value="2 năm kinh nghiệm">2 năm kinh nghiệm</option>
                                <option value="3 năm kinh nghiệm">3 năm kinh nghiệm</option>
                                <option value="4 năm kinh nghiệm">4 năm kinh nghiệm</option>
                                <option value="5 năm kinh nghiệm">5 năm kinh nghiệm</option>
                                <option value="Trên 5 năm kinh nghiệm">Trên 5 năm kinh nghiệm</option>
                            </select>
                            @error('exp')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <h5 class="title">Mức lương</h5>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="title">Loại tiền tệ</label> <br>
                            <select class="form-control" name="currency" id="loaitiente">
                                <option value="USD">USD</option>
                                <option value="VND">VND</option>
                            </select>
                            @error('currency')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                            <label for="exampleInputPassword1" class="title">Lương</label> <br>
                            <input value="{{ old('wage') }}" name="wage" class="form-control" type="text">
                            @error('wage')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div> <br>
                        <h3 class="h3">Nội dung đăng tuyển chi tiết</h3>
                        <div class="form-group">
                            <label for="name" class="title">Mô tả công việc</label> <br>
                            <textarea class="form-control" id="des" placeholder="Nhập nội dung mô tả công việc" name="detail" rows="4" cols="140">{{ old('detail') }}</textarea>
                            @error('detail')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name" class="title">Yêu cầu ứng viên</label> <br>
                            <textarea class="form-control" id="des" placeholder="Nhập nội dung yêu cầu ứng tuyển" name="require" rows="4" cols="140">{{ old('require') }}</textarea>
                            @error('require')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name" class="title">Quyền lợi của ứng viên</label> <br>
                            <textarea class="form-control" id="des" placeholder="Nhập nội dung quyền lợi của ứng viên" name="benefit" rows="4" cols="140">{{ old('benefit') }}</textarea>
                            @error('benefit')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <h3 class="h3">Thông tin nhận CV</h3> --}}
                        {{-- <div class="form-group">
                            <label for="name" class="title">Hạn chót nhận CV</label> <br>
                            <input name="date" type="date" class="form-control" id="datepicker">
                        </div> --}}

                        <br>
                        <div class="form-group">
                            <!-- <p class="agree-term">
                                Bằng việc đăng ký tài khoản, bạn đã đồng ý với <span class="text-highlight">Điều khoản dịch vụ</span> và <span class="text-highlight">Chính sách bảo
                                    mật</span> của chúng tôi
                            </p> -->
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2">
                                    <button type="reset" class="btn btn-reset btn-block mb-4">Nhập lại</button>
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Hoàn tất</button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>

                <div class="col-md-3">
                <div class="image">
                        <a target="_blank" href="" rel="nooppener noreferrer"><img src="{{asset('img/banner-bsn1.png')}}" alt="Apply việc gì cũng dễ" class="w-100"></a>
                    </div>
                    <div class="image">
                        <a target="_blank" href="" rel="nooppener noreferrer"><img src="{{asset('img/banner-bsn2.png')}}" alt="Apply việc gì cũng dễ" class="w-100"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ url('js/app.js') }}"></script>

</body>

</html>