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
                        <h2 class="label-search"> &nbsp; <i class="fa-solid fa-magnifying-glass"></i> Khám phá 100.000+ công ty nổi bật </h2>
                        <h6 class="label-search"> Tra cứu thông tin công ty và tìm kiếm nơi làm việc tốt nhất dành cho bạn </h6>
                        <div class="form-search">
                            <form id="frm-search-job" method="GET" action="{{ route('ap.searchcompany') }}" target="_blank">
                                <div class="box-search">
                                    <div class="col-input">
                                        <input name="keyword" id="keyword" required class="form-control input-search ui-autocomplete-input border-hover" value="" placeholder="Nhập tên công ty" id="keyword" autocomplete="off" onfocus="show()" required>
                                    </div>
                                    <div class="col-button">
                                        <button type="submit" class="btn btn-search-job"><span>Tìm kiếm</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 box-search-job-image">
                    <img src="{{ url('img/search-company.png') }}" title="Nhân viên tuyển dụng tại EzCV" alt="Nhan vien tuyen dung tai EzCV" class="img-home">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="featured-companies">
        <div class="company-header text-center">
            <h2 class="title">DANH SÁCH CÁC CÔNG TY NỔI BẬT</h2>
        </div>
        <div class="container">
            <div class="row">
            @if (!empty($listAll))
            @foreach ($listAll as $key => $item)
                <div class="col-md-4 col-sm-6">
                    <div class="box-company item-hover">
                        <div class="company-banner">
                            <a href="/ap/detail-company/{{ $item->id }}">
                                <div class="cover-wraper">
                                    <img src="{{asset('/img/cover/' .$item->cover)}}" alt="Công ty Cổ phần Giáo dục &amp; Đào tạo IMAP Việt Nam" class="img-fluid">
                                </div>
                            </a>
                            <div class="company-logo">
                                <a href="/ap/detail-company/{{ $item->id }}">
                                    <img class="img-fluid" src="{{asset('/img/logo/' .$item->image)}}" alt="Công ty Cổ phần Giáo dục &amp; Đào tạo IMAP Việt Nam">
                                </a>
                            </div>
                        </div>
                        <div class="company-info">
                            <h3>
                                <a href="/ap/detail-company/{{ $item->id }}" class="company-name" target="_blank">{{ $item->nameBusiness }}</a>
                            </h3>
                            <div class="company-description">
                                <p>{{ $item->introduceBusiness }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('js/app.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>