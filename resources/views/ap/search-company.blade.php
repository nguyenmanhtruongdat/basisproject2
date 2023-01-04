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
    @include('ap.navbar');
    <section id="box-search-job">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <br>
                    <div class="form-search">
                        <form id="frm-search-job" method="GET" action="{{ route('ap.searchcompany') }}" target="_blank">
                            <div class="box-search">
                                <div class="col-input">
                                    <input name="keyword" id="keyword" required class="form-control input-search ui-autocomplete-input border-hover" value="" placeholder="Nhập tên công ty" id="keyword" autocomplete="off" onfocus="show()" required>
                                </div>
                                <div class="col-button">
                                    <button type="submit" class="btn btn-search-job"><span>Tìm kiếm</span></button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="box-result-search-companies">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                <div class="job-header">
                    <span>Tìm thấy <b class="text-highlight">{{ $listAll->total() }}</b> công ty</span>
                </div>
                <br>

                    <div class=" box-result box-white">
                        <div class="">
                            <div class="result-search-companies">
                                @if (!empty($listAll))
                                @foreach ($listAll as $key => $item)
                                <div class="result-search-company item-hover">
                                
                                    <a href="/ap/detail-company/{{ $item->id}}" class="logo" style="margin-left: 10px; margin-right: 10px;">
                                        <img src="{{asset('/img/logo/' .$item->image)}}" alt="Vietcombank cardif" class="img-responsive">
                                    </a>
                                    <div class="result-search-company-info">
                                        <div class="title">
                                            <strong><a class="company-name" href="/ap/detail-company/{{ $item->id}}" target="_blank">{{ $item->nameBusiness }}</a></strong>
                                        </div>
                                        <div class="company-address d-flex">
                                        <i class="fa-solid fa-location-pin"></i> &nbsp; {{ $item->location }}
                                        </div>
                                        <div class="company-intro d-flex">
                                            <p class="text-limit"><i class="fa-solid fa-circle-info"></i> {{ $item->introduceBusiness }}</p>
                                        </div>
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="text-center"></div>
                    </div>
                    {!! $listAll->withQueryString()->links() !!}

                </div>
                <div class="col-md-3 ">
                    <div class="box-white box-featured-companie">
                        <div class="box-featured-company-img">
                            <div class="featured-company-img">

                                <img class="img-responsive" style="width: 100%;" src="{{asset('/img/banner-doc1.png')}}" alt="Công ty Cổ Phần Đầu tư Giáo dục Và Phát triển Nguồn Lực Quốc Tế Pasal - TopCV" title="Công ty Cổ Phần Đầu tư Giáo dục Và Phát triển Nguồn Lực Quốc Tế Pasal">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ url('js/app.js') }}"></script>

</html>