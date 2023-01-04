<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin EZCV</title>


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
        .btn{
            width: 170px;
        }
        .btn-info{
            background-color: #17a2b8;
            border: #17a2b8;
        }
        .btn-del{
            background-color: yellowgreen;
            border: yellowgreen;
        }
        .btn-edit{
            background-color: #dc3545;
            border: #dc3545;
        }
.sidebar .nav-item .nav-link[data-toggle=collapse].collapsed::after {
            content: '\21E9';
        }

        body {
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

@include('ap.navbar')

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
                            <h6 id="label-title" class="m-0 font-weight-bold text-primary">Danh sách việc làm đã ứng tuyển</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên chiến dịch</th>
                                            <th>Trạng thái</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($listAllSubmitteds))
                                        @foreach ($listAllSubmitteds as $key => $item)
                                        {{-- hidden detail form --}}
                                        <div class="modal fade" id="detail{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detail{{ $item->id }}Title" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post" action="/ap/submitted">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title bold" id="detail{{ $item->id }}Title"><span class="text-highlight">Thông
                                                                    tin chi tiết</span></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div id="frm-upload">


                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Tên doanh nghiệp<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <input disabled required type="text" value="{{ $item->nameBusiness }}" placeholder="" name="phone" class="form-control input-sm" style="font-size: 12px">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Email doanh nghiệp<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <input disabled required type="text" value="{{ $item->email }}" name="exp" class="form-control input-sm" style="font-size: 12px">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Vị trí tuyển dụng<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <input disabled required type="text" value="{{ $item->position }}" placeholder="Học vấn" name="edu" class="form-control input-sm" style="font-size: 12px">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Lĩnh vực<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <input disabled required type="text" value="{{ $item->major }}" placeholder="Kinh nghiệm làm việc của bạn" name="exp" class="form-control input-sm" style="font-size: 12px">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Kinh nghiệm yêu cầu<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <input disabled required type="text" value="{{ $item->exprequired }}" placeholder="" name="exp" class="form-control input-sm" style="font-size: 12px">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Lương<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <input disabled required type="text" value="{{ $item->wage }} {{ $item->currency }}" placeholder="" name="skill" class="form-control input-sm" style="font-size: 12px">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Loại hình<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <input disabled required type="text" value="{{ $item->type }}" name="obj" class="form-control input-sm" style="font-size: 12px">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Khu vực<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <input disabled required type="text" value="{{ $item->area }}" name="obj" class="form-control input-sm" style="font-size: 12px">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Yêu cầu giới tính<span class="text-danger">*</span> :</label>
                                                                        <input disabled required type="text" value="{{ $item->gender }}" name="obj" class="form-control input-sm" style="font-size: 12px">
                                                                    </div>
                                                                </div>
                                                                @csrf
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-cancel btn-sm" data-dismiss="modal">Đóng lại</button>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        {{-- end hidden detail form --}}

                                        {{-- hidden edit form --}}
                                        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="edit{{ $item->id }}Title" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post" action="/ap/submitted/edit">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title bold" id="edit{{ $item->id }}Title"><span class="text-highlight">Chỉnh sửa thông tin đã ứng
                                                                    tuyển</span></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div id="frm-upload">


                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Học vấn<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <textarea required type="text" value="" name="edu" class="form-control input-sm" style="font-size: 12px">{{ $item->edu }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Kinh nghiệm<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <textarea required type="text" value="" name="exp" class="form-control input-sm" style="font-size: 12px">{{ $item->exp }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Kỹ năng<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <textarea required type="text" value="" name="skill" class="form-control input-sm" style="font-size: 12px">{{ $item->skill }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="form-group">
                                                                        <label>Mục tiêu nghề nghiệp<span class="text-danger">*</span>
                                                                            :</label>
                                                                        <textarea required type="text" value="" name="obj" class="form-control input-sm" style="font-size: 12px">{{ $item->obj }}</textarea>
                                                                    </div>
                                                                </div>
                                                                <input hidden value="{{ $item->id }}" type="text" name="id" id="">
                                                                @csrf
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-cancel btn-sm" data-dismiss="modal">Đóng lại</button>
                                                            <button type="submit" class="btn btn-primary btn-sm">Hoàn
                                                                tất</button>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        {{-- end hidden edit form --}}
                            </div>
                            <tr>
                                <th class="text-limit">{{ $item->title }}  </th>

                                @if ($item->status == '2')
                                <td><a href="#" class="btn btn-success">Đã được duyệt</a></td>
                                @elseif($item->status == '1')
                                <td><a href="#" class="btn btn-warning">Đang chờ duyệt</a></td>
                                @else
                                <td><a href="#" class="btn btn-danger">Không được duyệt</a></td>
                                @endif

                                <td><a href="#" data-target="#detail{{ $item->id }}" data-toggle="modal" class="btn btn-info">Chi
                                        tiết</a>
                                    <a data-target="#edit{{ $item->id }}" data-toggle="modal" class="btn btn-edit">Sửa</a>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="/ap/submitted/delete/{{ $item->id }}" class="btn btn-del">Xóa</a>
                                </td>
                                </th>
                            </tr>
                            @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3">
                                    {!! $listAllSubmitteds->links() !!}
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