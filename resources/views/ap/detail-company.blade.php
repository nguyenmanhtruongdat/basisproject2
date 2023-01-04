<html>

<head>
    <meta charset="utf-8">
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

        .nav {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .img-responsive {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="preloading">
    </div>

    @include('ap.navbar')
    <div id="main">
        <div id="breadcrumb" class="breadcrumb">
            <div class="container">
                <ul class="nav d-flex">
                    <li class="nav-item">
                        <a class="text-highlight bold" href="/ap/company">Danh sách Công ty</a>
                    </li>
                    <li class="nav-item">Thông tin công ty &amp; tin tuyển dụng từ {{ $detail[0]->nameBusiness}} </li>
                </ul>
            </div>
        </div>
        <div class="company-cover">
            <div class="container">
                <div class="cover-wrapper">
                    <img src="{{asset('/img/cover/' .$detail[0]->cover)}}" width="100%" height="236px" class="img-responsive cover-img">
                </div>
                <div class="company-detail-overview">
                    <div id="company-logo">
                        <div class="company-image-logo">
                            <img src="{{asset('/img/logo/' .$detail[0]->image)}}" alt="CÔNG TY TNHH TECHWORLD VIỆT NAM" class="img-responsive">
                        </div>
                    </div>
                    <div class="company-info">
                        <h1 class="company-detail-name text-highlight">{{ $detail[0]->nameBusiness}}</h1>
                        <div class="d-flex">
                            <p class="company-size">
                                <i class="fa-solid fa-people-group"></i>
                                {{ $detail[0]->personnelSize}} nhân viên
                            </p>
                        </div>
                    </div>
                    <div class="box-follow">
                        <a href="https://www.topcv.vn/cong-ty/theo-doi/68222" class="btn btn-follow btn-primary-hover">Theo dõi công ty</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="company-info box-white">
                            <h4 class="title">Giới thiệu công ty</h4>
                            <div class="box-body">
                                <p>{{ $detail[0]->introduceBusiness }}</p>
                            </div>
                        </div>
                        <div class="job-listing box-white">
                            <h4 class="title">Tuyển dụng</h4>
                            <div class="box-body">

                                @if (!empty($detailrecruitment))
                                @foreach ($detailrecruitment as $key => $item)
                                <div class="job-item  bg-highlight  job-ta result-job-hover" data-job-id="886513" data-job-position="1" data-box="BoxSearchResult" id="datapaging">
                                    <div class="avatar">
                                        <a target="_blank" href="/ap/detail-job/{{ $item->id }}" class="company-logo" rel="nooppener noreferrer">
                                            <img src="{{asset('/img/logo/' .$item->image)}}" class="w-100" alt="CÔNG TY TNHH KCC (VIỆT NAM NHƠN TRẠCH" title="Nhân Viên Kỹ Thuật Bảo Trì Điện">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <div class="ml">
                                                <h3 class="title">
                                                    <a target="_blank" class="underline-box-job" href="/ap/detail-job/{{ $item->id }}" rel="nooppener noreferrer">
                                                        <span class="bold transform-job-title" data-toggle="tooltip" title="" data-placement="top" data-container="body" data-original-title="">{{ $item->title }}</span>
                                                    </a>
                                                </h3>
                                                <p class="company underline-box-job">
                                                    <a href="/ap/detail-job/{{ $item->id }}" data-toggle="tooltip" title="" data-placement="top" data-container="body" target="_blank" rel="nooppener noreferrer" data-original-title="CÔNG TY TNHH KCC (VIỆT NAM NHƠN TRẠCH">{{ $item->nameBusiness }}</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="label-content">
                                                <label class="salary">{{ $item->wage }} {{ $item->currency }} </label>
                                                <label class="address" data-toggle="tooltip" data-html="true" title="" data-placement="top" data-container="body" data-original-title="<p style='text-align: left'">{{ $item->area }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="empty">Hiện không có tin tuyển dụng</div>
                                @endif

                                <!-- <div class="text-center">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-address box-white">
                            <h4 class="title">Khu vực công ty</h4>
                            <div class="box-body">
                                <p class="text-dark-gray">
                                    <i class="icons8-map-pin text-highlight"></i>{{ $detail[0]->location }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="{{ url('js/app.js') }}"></script>

    @if(Session::has('alertSuccess'))
    <script>
        var alertSuccess = '{{Session::get('
        alertSuccess ')}}';
        alert(alertSuccess);
    </script>
    @endif
    {{-- <script>
        var msg = '{{Session::get('alertSuccess')}}';
    var exist = '{{Session::has('alertSuccess')}}';
    if(exist){
    alert(msg);
    }
    </script> --}}
</body>

</html>