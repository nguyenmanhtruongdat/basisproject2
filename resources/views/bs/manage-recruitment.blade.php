<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản lý tin tuyển dụng</title>


    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=" {{ url('/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">

<style>
    .sidebar .nav-item .nav-link[data-toggle=collapse].collapsed::after {
    content: '\21E9';
}
body{
    background: transparent;
}
.sidebar .nav-item .nav-link[data-toggle=collapse]::after {
    width: 1rem;
    text-align: center;
    float: right;
    vertical-align: 0;
    border: 0;
    font-weight: 900;
    content: '\21E7';
    font-family: 'Font Awesome 5 Free';
}
</style>

</head>

@include('bs.navbar')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã tin</th>
                                            <th>Tên tin tuyển dụng</th>
                                            <th>Danh sách</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if (!empty($list))
                        @foreach ($list as $key => $item)
                        {{-- hidden edit form --}}
                        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="detail{{ $item->id }}Title" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form method="post" action="/bs/edit-recruitment">
                                        <div class="modal-header">
                                            <h5 class="modal-title bold" id="detail{{ $item->id }}Title"><span
                                                    class="text-highlight">Thông
                                                    tin chi tiết</span></h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="frm-upload">


                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label>Tên doanh nghiệp<span
                                                                class="text-danger">*</span>
                                                            :</label>
                                                        <input disabled required type="text"
                                                            value="{{ $item->nameBusiness }}" placeholder=""
                                                            name="" class="form-control input-sm"
                                                            style="font-size: 12px">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label>Email doanh nghiệp<span
                                                                class="text-danger">*</span>
                                                            :</label>
                                                        <input disabled required type="text"
                                                            value="{{ $item->email }}" name="email"
                                                            class="form-control input-sm"
                                                            style="font-size: 12px">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label>Vị trí tuyển dụng<span
                                                                class="text-danger">*</span>
                                                            :</label>
                                                        <input required type="text"
                                                            value="{{ $item->position }}"
                                                            placeholder="Học vấn" name="position"
                                                            class="form-control input-sm"
                                                            style="font-size: 12px">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label>Cấp bậc<span
                                                                class="text-danger">*</span>
                                                            :</label>
                                                            <select class="form-control" name="rank" id="capbac">
                                                                <option <?php $temp='Trưởng chi nhánh';echo $temp==$item->rank?"selected":""?> value="Trưởng chi nhánh">Trưởng chi nhánh</option>
                                                                <option <?php $temp='Trưởng phòng';echo $temp==$item->rank?"selected":""?> value="Trưởng phòng">Trưởng phòng</option>
                                                                <option <?php $temp='Giám đốc';echo $temp==$item->rank?"selected":""?> value="Giám đốc">Giám đốc</option>
                                                                <option <?php $temp='Phó giám đốc';echo $temp==$item->rank?"selected":""?> value="Phó giám đốc">Phó giám đốc</option>
                                                                <option <?php $temp='Thực tập sinh';echo $temp==$item->rank?"selected":""?> value="Thực tập sinh">Thực tập sinh</option>
                                                                <option <?php $temp='Nhân viên';echo $temp==$item->rank?"selected":""?> value="Nhân viên">Nhân viên</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label>Lĩnh vực<span class="text-danger">*</span>
                                                            :</label>
                                                            <select name="major" id="major" class="form-control">
                                                                <option <?php $temp='Kinh doanh / Bán hàng';echo $temp==$item->major?"selected":""?> value="Kinh doanh / Bán hàng">Kinh doanh / Bán hàng</option>
                                                                <option <?php $temp='Biên / Phiên dịch';echo $temp==$item->major?"selected":""?> value="Biên / Phiên dịch">Biên / Phiên dịch</option>
                                                                <option <?php $temp='Báo chí / Truyền hình';echo $temp==$item->major?"selected":""?> value="Báo chí / Truyền hình">Báo chí / Truyền hình</option>
                                                                <option <?php $temp='Bưu chính - Viễn thông';echo $temp==$item->major?"selected":""?> value="Bưu chính - Viễn thông">Bưu chính - Viễn thông</option>
                                                                <option <?php $temp='Bảo hiểm';echo $temp==$item->major?"selected":""?> value="Bảo hiểm">Bảo hiểm</option>
                                                                <option <?php $temp='Bất động sản';echo $temp==$item->major?"selected":""?> value="Bất động sản">Bất động sản</option>
                                                                <option <?php $temp='Chứng khoán / Vàng / Ngoại tệ';echo $temp==$item->major?"selected":""?> value="Chứng khoán / Vàng / Ngoại tệ">Chứng khoán / Vàng / Ngoại tệ</option>
                                                                <option <?php $temp='IT Phần cứng / Mạng';echo $temp==$item->major?"selected":""?> value="IT Phần cứng / Mạng">IT Phần cứng / Mạng</option>
                                                                <option <?php $temp='IT phần mềm';echo $temp==$item->major?"selected":""?> value="IT phần mềm">IT phần mềm</option>
                                                                <option <?php $temp='Thư ký / Trợ lý';echo $temp==$item->major?"selected":""?> value="Thư ký / Trợ lý">Thư ký / Trợ lý</option>
                                                                <option <?php $temp='Phi chính phủ / Phi lợi nhuận';echo $temp==$item->major?"selected":""?> value="Phi chính phủ / Phi lợi nhuận">Phi chính phủ / Phi lợi nhuận</option>
                                                                <option <?php $temp='Công nghệ Ô tô';echo $temp==$item->major?"selected":""?> value="Công nghệ Ô tô">Công nghệ Ô tô</option>
                                                                <option <?php $temp='Quản lý điều hành';echo $temp==$item->major?"selected":""?> value="Quản lý điều hành">Quản lý điều hành</option>
                                                                <option <?php $temp='Mỹ thuật / Nghệ thuật / Điện ảnh';echo $temp==$item->major?"selected":""?> value="Mỹ thuật / Nghệ thuật / Điện ảnh">Mỹ thuật / Nghệ thuật / Điện ảnh
                                                                <option <?php $temp='Kiến trúc';echo $temp==$item->major?"selected":""?> value="Kiến trúc">Kiến trúc</option>
                                                                <option <?php $temp='Logistics';echo $temp==$item->major?"selected":""?> value="Logistics">Logistics</option>
                                                                <option <?php $temp='Luật/Pháp lý';echo $temp==$item->major?"selected":""?> value="Luật/Pháp lý">Luật/Pháp lý</option>
                                                                <option <?php $temp='Xây dựng';echo $temp==$item->major?"selected":""?> value="Xây dựng">Xây dựng</option>
                                                                <option <?php $temp='Xuất nhập khẩu';echo $temp==$item->major?"selected":""?> value="Xuất nhập khẩu">Xuất nhập khẩu</option>
                                                                <option <?php $temp='Y tế / Dược';echo $temp==$item->major?"selected":""?> value="Y tế / Dược">Y tế / Dược</option> 
                                                                </option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label>Kinh nghiệm yêu cầu<span
                                                                class="text-danger">*</span>
                                                            :</label>
                                                            <select class="form-control" name="exp" id="kinhnghiem">
                                                                <option <?php $temp='Chưa có kinh nghiệm';echo $temp==$item->exp?"selected":""?> value="Chưa có kinh nghiệm">Không yêu cầu kinh nghiệm</option>
                                                                <option <?php $temp='Dưới 1 năm kinh nghiệm';echo $temp==$item->exp?"selected":""?> value="Dưới 1 năm kinh nghiệm">Dưới 1 năm kinh nghiệm</option>
                                                                <option <?php $temp='1 năm kinh nghiệm';echo $temp==$item->exp?"selected":""?> value="1 năm kinh nghiệm">1 năm kinh nghiệm</option>
                                                                <option <?php $temp='2 năm kinh nghiệm';echo $temp==$item->exp?"selected":""?> value="2 năm kinh nghiệm">2 năm kinh nghiệm</option>
                                                                <option <?php $temp='3 năm kinh nghiệm';echo $temp==$item->exp?"selected":""?> value="3 năm kinh nghiệm">3 năm kinh nghiệm</option>
                                                                <option <?php $temp='4 năm kinh nghiệm';echo $temp==$item->exp?"selected":""?> value="4 năm kinh nghiệm">4 năm kinh nghiệm</option>
                                                                <option <?php $temp='5 năm kinh nghiệm';echo $temp==$item->exp?"selected":""?> value="5 năm kinh nghiệm">5 năm kinh nghiệm</option>
                                                                <option <?php $temp='Trên 5 năm kinh nghiệm';echo $temp==$item->exp?"selected":""?> value="Trên 5 năm kinh nghiệm">Trên 5 năm kinh nghiệm</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label>Lương ({{ $item->currency }})<span class="text-danger">*</span>
                                                            :</label>
                                                        <input required type="text"
                                                            value="{{ $item->wage }} "
                                                            placeholder="" name="wage"
                                                            class="form-control input-sm"
                                                            style="font-size: 12px">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label>Loại hình<span class="text-danger">*</span>
                                                            :</label>
                                                            <select name="type" class="form-control" id="type">
                                                                <option <?php $temp='Toàn thời gian';echo $temp==$item->type?"selected":""?> value="Toàn thời gian">Toàn thời gian</option>
                                                                <option <?php $temp='Bán thời gian';echo $temp==$item->type?"selected":""?> value="Bán thời gian">Bán thời gian</option>
                                                                <option <?php $temp='Thực tập';echo $temp==$item->type?"selected":""?> value="Thực tập">Thực tập</option>
                                                                <option <?php $temp='Remote - Làm việc từ xa';echo $temp==$item->type?"selected":""?> value="Remote - Làm việc từ xa">Remote - Làm việc từ xa</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label>Khu vực<span class="text-danger">*</span>
                                                            :</label>
                                                            <select name="area" id="tinhthanh" class="form-control">
                                                                <option <?php $temp='An Giang';echo $temp==$item->area?"selected":""?> value="An Giang">An Giang
                                                                <option <?php $temp='Bà Rịa - Vũng Tàu';echo $temp==$item->area?"selected":""?> value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                                                <option <?php $temp='Bắc Giang';echo $temp==$item->area?"selected":""?> value="Bắc Giang">Bắc Giang
                                                                <option <?php $temp='Bắc Kạn';echo $temp==$item->area?"selected":""?> value="Bắc Kạn">Bắc Kạn
                                                                <option <?php $temp='Bạc Liêu';echo $temp==$item->area?"selected":""?> value="Bạc Liêu">Bạc Liêu
                                                                <option <?php $temp='Bắc Ninh';echo $temp==$item->area?"selected":""?> value="Bắc Ninh">Bắc Ninh
                                                                <option <?php $temp='Bến Tre';echo $temp==$item->area?"selected":""?> value="Bến Tre">Bến Tre
                                                                <option <?php $temp='Bình Định';echo $temp==$item->area?"selected":""?> value="Bình Định">Bình Định
                                                                <option <?php $temp='Bình Dương';echo $temp==$item->area?"selected":""?> value="Bình Dương">Bình Dương
                                                                <option <?php $temp='Bình Phước';echo $temp==$item->area?"selected":""?> value="Bình Phước">Bình Phước
                                                                <option <?php $temp='Bình Thuận';echo $temp==$item->area?"selected":""?> value="Bình Thuận">Bình Thuận
                                                                <option <?php $temp='Cà Mau';echo $temp==$item->area?"selected":""?> value="Cà Mau">Cà Mau
                                                                <option <?php $temp='Cao Bằng';echo $temp==$item->area?"selected":""?> value="Cao Bằng">Cao Bằng
                                                                <option <?php $temp='Đắk Lắk';echo $temp==$item->area?"selected":""?> value="Đắk Lắk">Đắk Lắk
                                                                <option <?php $temp='Đắk Nông';echo $temp==$item->area?"selected":""?> value="Đắk Nông">Đắk Nông
                                                                <option <?php $temp='Điện Biên';echo $temp==$item->area?"selected":""?> value="Điện Biên">Điện Biên
                                                                <option <?php $temp='Đồng Nai';echo $temp==$item->area?"selected":""?> value="Đồng Nai">Đồng Nai
                                                                <option <?php $temp='Đồng Tháp';echo $temp==$item->area?"selected":""?> value="Đồng Tháp">Đồng Tháp                                                                <option <?php $temp='';echo $temp==$item->area?"selected":""?> value="Gia Lai">Gia Lai
                                                                <option <?php $temp='Hà Giang';echo $temp==$item->area?"selected":""?> value="Hà Giang">Hà Giang
                                                                <option <?php $temp='Hà Nam';echo $temp==$item->area?"selected":""?> value="Hà Nam">Hà Nam
                                                                <option <?php $temp='Hà Tĩnh';echo $temp==$item->area?"selected":""?> value="Hà Tĩnh">Hà Tĩnh
                                                                <option <?php $temp='Hải Dương';echo $temp==$item->area?"selected":""?> value="Hải Dương">Hải Dương
                                                                <option <?php $temp='Hậu Giang';echo $temp==$item->area?"selected":""?> value="Hậu Giang">Hậu Giang
                                                                <option <?php $temp='Hòa Bình';echo $temp==$item->area?"selected":""?> value="Hòa Bình">Hòa Bình
                                                                <option <?php $temp='Hưng Yên';echo $temp==$item->area?"selected":""?> value="Hưng Yên">Hưng Yên
                                                                <option <?php $temp='Khánh Hòa';echo $temp==$item->area?"selected":""?> value="Khánh Hòa">Khánh Hòa
                                                                <option <?php $temp='Kiên Giang';echo $temp==$item->area?"selected":""?> value="Kiên Giang">Kiên Giang
                                                                <option <?php $temp='Kon Tum';echo $temp==$item->area?"selected":""?> value="Kon Tum">Kon Tum
                                                                <option <?php $temp='Lai Châu';echo $temp==$item->area?"selected":""?> value="Lai Châu">Lai Châu
                                                                <option <?php $temp='Lâm Đồng';echo $temp==$item->area?"selected":""?> value="Lâm Đồng">Lâm Đồng
                                                                <option <?php $temp='Lạng Sơn';echo $temp==$item->area?"selected":""?> value="Lạng Sơn">Lạng Sơn
                                                                <option <?php $temp='Lào Cai';echo $temp==$item->area?"selected":""?> value="Lào Cai">Lào Cai
                                                                <option <?php $temp='Long An';echo $temp==$item->area?"selected":""?> value="Long An">Long An
                                                                <option <?php $temp='Nam Định';echo $temp==$item->area?"selected":""?> value="Nam Định">Nam Định
                                                                <option <?php $temp='Nghệ An';echo $temp==$item->area?"selected":""?> value="Nghệ An">Nghệ An
                                                                <option <?php $temp='Ninh Bình';echo $temp==$item->area?"selected":""?> value="Ninh Bình">Ninh Bình
                                                                <option <?php $temp='Ninh Thuận';echo $temp==$item->area?"selected":""?> value="Ninh Thuận">Ninh Thuận
                                                                <option <?php $temp='Phú Thọ';echo $temp==$item->area?"selected":""?> value="Phú Thọ">Phú Thọ
                                                                <option <?php $temp='Quảng Bình';echo $temp==$item->area?"selected":""?> value="Quảng Bình">Quảng Bình
                                                                <option <?php $temp='Quảng Nam';echo $temp==$item->area?"selected":""?> value="Quảng Nam">Quảng Nam
                                                                <option <?php $temp='Quảng Ngãi';echo $temp==$item->area?"selected":""?> value="Quảng Ngãi">Quảng Ngãi
                                                                <option <?php $temp='Quảng Ninh';echo $temp==$item->area?"selected":""?> value="Quảng Ninh">Quảng Ninh
                                                                <option <?php $temp='Quảng Trị';echo $temp==$item->area?"selected":""?> value="Quảng Trị">Quảng Trị
                                                                <option <?php $temp='Sóc Trăng';echo $temp==$item->area?"selected":""?> value="Sóc Trăng">Sóc Trăng
                                                                <option <?php $temp='Sơn La';echo $temp==$item->area?"selected":""?> value="Sơn La">Sơn La
                                                                <option <?php $temp='Tây Ninh';echo $temp==$item->area?"selected":""?> value="Tây Ninh">Tây Ninh
                                                                <option <?php $temp='Thái Bình';echo $temp==$item->area?"selected":""?> value="Thái Bình">Thái Bình
                                                                <option <?php $temp='Thái Nguyên';echo $temp==$item->area?"selected":""?> value="Thái Nguyên">Thái Nguyên
                                                                <option <?php $temp='Thanh Hóa';echo $temp==$item->area?"selected":""?> value="Thanh Hóa">Thanh Hóa
                                                                <option <?php $temp='Thừa Thiên Huế';echo $temp==$item->area?"selected":""?> value="Thừa Thiên Huế">Thừa Thiên Huế
                                                                <option <?php $temp='Tiền Giang';echo $temp==$item->area?"selected":""?> value="Tiền Giang">Tiền Giang
                                                                <option <?php $temp='Trà Vinh';echo $temp==$item->area?"selected":""?> value="Trà Vinh">Trà Vinh
                                                                <option <?php $temp='Tuyên Quang';echo $temp==$item->area?"selected":""?> value="Tuyên Quang">Tuyên Quang
                                                                <option <?php $temp='Vĩnh Long';echo $temp==$item->area?"selected":""?> value="Vĩnh Long">Vĩnh Long
                                                                <option <?php $temp='Vĩnh Phúc';echo $temp==$item->area?"selected":""?> value="Vĩnh Phúc">Vĩnh Phúc
                                                                <option <?php $temp='Yên Bái';echo $temp==$item->area?"selected":""?> value="Yên Bái">Yên Bái
                                                                <option <?php $temp='Phú Yên';echo $temp==$item->area?"selected":""?> value="Phú Yên">Phú Yên
                                                                <option <?php $temp='Tp.Cần Thơ';echo $temp==$item->area?"selected":""?> value="Tp.Cần Thơ">Tp.Cần Thơ
                                                                <option <?php $temp='Tp.Đà Nẵng';echo $temp==$item->area?"selected":""?> value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                                                <option <?php $temp='Tp.Hải Phòng';echo $temp==$item->area?"selected":""?> value="Tp.Hải Phòng">Tp.Hải Phòng
                                                                <option <?php $temp='Tp.Hà Nội';echo $temp==$item->area?"selected":""?> value="Tp.Hà Nội">Tp.Hà Nội
                                                                <option <?php $temp='TP HCM';echo $temp==$item->area?"selected":""?> value="TP  HCM">TP HCM
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label>Yêu cầu giới tính<span
                                                                class="text-danger">*</span> :</label>
                                                                <select class="form-control" name="gender" id="gt">
                                                                    <option <?php $temp='Nam';echo $temp==$item->gender?"selected":""?> value="Nam">Nam</option>
                                                                    <option <?php $temp='Nữ';echo $temp==$item->gender?"selected":""?> value="Nữ">Nữ</option>
                                                                    <option <?php $temp='Không yêu cầu giới tính cụ thể';echo $temp==$item->gender?"selected":""?> value="Không yêu cầu giới tính cụ thể">Không yêu cầu giới tính cụ thể</option>
                                                                </select>
                                                    </div>
                                                </div>
                                                <input hidden value="{{ $item->id }}" type="text" name="id" id="">

                                                @csrf
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-cancel btn-sm"
                                                data-dismiss="modal">Đóng lại</button>
                                                <button type="submit" class="btn btn-primary btn-sm">Hoàn
                                                    tất</button>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        {{-- end hidden edit form --}}
                        <tr>
                            <th scope="row">{{ $item->id}}</th>
                            <td class="text-limit">{{ $item->title }}</td>
                            {{-- <td><a href="#"><i class="fa-solid fa-magnifying-glass"></i> Tìm</a></td> --}}
                            <td><a href="/bs/view-censorship/{{ $item->id }}" class="btn btn-warning">Danh sách đang chờ</a>
                                <a href="/bs/view-censorshipped/{{ $item->id }}" class="btn btn-success">Danh sách đã duyệt</a></td>
                            <td><a href="" class="btn btn-edit" data-target="#edit{{ $item->id }}"
                                data-toggle="modal" class="btn btn-edit" style="background-color: blue;">Sửa</a>
                                <a href="/bs/delete-recruitment/{{ $item->id }}" class="btn btn-del" style="background-color: red;">Xóa</a>
                            </td>
                            </th>
                        </tr>
                        @endforeach
                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4">
                                                {!! $list->links() !!}
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        // $(document).ready(function() {
        //     $(document).on("click", ".pagination a", function(event) {
        //         event.preventDefault();
        //         var page = $(this).attr("href").split("page=")[1];
        //         var datapaging = document.getElementById("datapaging");
        //         fetch_data(page);
        //     });

        //     function fetch_data(page) {
        //         $.ajax({
        //             url: "manage-recruitments?page=" + page,
        //             success: function(data) {
        //                 $("#tbody").html(data);
        //             },
        //         });
        //     }
        // });
    </script>

</body>

</html>