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
    </style>
</head>

<body>

    <div class="preloading">
    </div>

    @include('ap.navbar')

    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="/ap/submitted">
                    <div class="modal-header">
                        <h5 class="modal-title bold" id="exampleModalLongTitle"><span class="text-highlight">Th??ng
                                tin ???ng tuy???n</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="frm-upload">
                        <div class="form-group">
                                <label>H??? v?? t??n<span class="text-danger">*</span> :</label>
                                <input disabled type="text" value="{{ Session::get('sessionAccount')[0]->name }}"
                                    placeholder="H??? t??n hi???n th??? v???i Nh?? tuy???n d???ng" name="fullname"
                                    class="form-control input-sm" style="font-size: 12px">
                                <p class="text-small text-danger italic" id="fullnameErrorMessage"
                                    style="margin-top: 5px; display: none"></p>
                            </div>
                            <input hidden type="text" value="{{ $detail[0]->id }}" placeholder=""
                                    name="jobid" class="form-control input-sm" style="font-size: 12px">
                                <input hidden type="text" value="{{ $detailbusiness[0]->id }}" placeholder=""
                                    name="businessid" class="form-control input-sm" style="font-size: 12px">

                                    <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Email<span class="text-danger">*</span> :</label>
                                        <input required disabled type="text"
                                            value="{{ Session::get('sessionAccount')[0]->email }}"
                                            placeholder="Email hi???n th??? v???i Nh?? tuy???n d???ng" name="email"
                                            class="form-control input-sm" style="font-size: 12px">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>S??? ??i???n tho???i<span class="text-danger">*</span> :</label>
                                        <input required type="text" value=""
                                            placeholder="S??? ??i???n tho???i hi???n th??? v???i Nh?? tuy???n d???ng" name="phone"
                                            class="form-control input-sm" style="font-size: 12px">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>H???c v???n<span class="text-danger">*</span> :</label>
                                        <textarea required type="text" value="" placeholder="H???c v???n" name="edu" class="form-control input-sm"
                                            style="font-size: 12px"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>Kinh nghi???m<span class="text-danger">*</span> :</label>
                                        <textarea required type="text" value="" placeholder="Kinh nghi???m l??m vi???c c???a b???n" name="exp"
                                            class="form-control input-sm" style="font-size: 12px"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>K??? n??ng<span class="text-danger">*</span> :</label>
                                        <textarea required type="text" value="" placeholder="K??? n??ng" name="skill" class="form-control input-sm"
                                            style="font-size: 12px"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>M???c ti??u ngh??? nghi???p<span class="text-danger">*</span> :</label>
                                        <textarea required type="text" value="" placeholder="M???c ti??u ngh??? nghi???p c???a b???n" name="obj"
                                            class="form-control input-sm" style="font-size: 12px"></textarea>
                                    </div>
                                </div>
                                @csrf
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-cancel btn-sm" data-dismiss="modal">????ng l???i</button>
                        <button type="submit" class="btn btn-primary btn-sm" id="btn-apply">N???p</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="main">
        <div class="job-detail-page-wraper">
            <div class="search-job">
                <div class="header">
                    <div class="container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Trang ch???</a></li>
                                <li class="breadcrumb-item"><a href="#">T??m vi???c l??m</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chi ti???t</li>
                            </ol>
                        </nav>
                        <div class="box-white box-detail-job">
                            <div class="box-header">
                                <a href="" title="C??ng ty C??? ph???n MISA" class="company-logo">
                                    <div class="box-company-logo">
                                        <img id="image-logo" src="{{asset('/img/logo/' .$detailbusiness[0]->image)}}" alt="C??ng ty C??? ph???n MISA" class="img-responsive">
                                    </div>
                                </a>
                                <div class="box-info-job">
                                    <h1 class="job-title text-highlight bold" id="jobname" style="overflow-wrap:break-word;">
                                        {{ $detail[0]->title }}
                                        <span class="icon-verified-employer level-five">
                                            <i class="fa-solid fa-circle-check" data-toggle="tooltip" data-html="true" title="" data-placement="top" data-original-title="
  <b>Nh?? tuy???n d???ng</b><span> ???? ???????c x??c th???c:</span><br>
  <span><i class='fa-solid fa-circle-check color-green'></i> ???? x??c th???c email t??n mi???n c??ng ty</span><br>
  <span><i class='fa-solid fa-circle-check color-green'></i> ???? x??c th???c s??? ??i???n tho???i</span><br>
  <span><i class='fa-solid fa-circle-check color-green'></i> ???? ???????c duy???t Gi???y ph??p kinh doanh</span><br>
  <span><i class='fa-solid fa-circle-check color-green'></i> T??i kho???n NTD ???????c t???o t???i thi???u 6 th??ng</span><br>
  <span><i class='fa-solid fa-circle-check color-green'></i> Ch??a c?? l???ch s??? b??? b??o c??o tin ????ng</span><br>"></i></span>
                                    </h1>
                                    <div class="company-title">
                                        <a href="" class="text-dark-blue" id="businessname">{{ $detailbusiness[0]->nameBusiness }}</a>
                                    </div>

                                    <div class="job-deadline">
                                        <i class="fa-regular fa-clock"></i> Ng??nh ngh??? & l??nh v???c:
                                        {{ $detail[0]->major }}
                                    </div>
                                </div>
                                <div class="box-apply-current">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                            <i class="fa-regular fa-paper-plane"></i> ???NG TUY???N NGAY
                                        </button>

                                        <button type="button" onclick="addfvr(this.id)" id="{{$detail[0]->id}}" class="btn btn-save">
                                            <i class="fa-regular fa-heart"></i> L??U TIN
                                        </button>
                                    </div>
                                </div>
                                <div class="box-apply-success">
                                    <div class="text-center">
                                        <p><a href="#" class="btn btn-topcv-primary btn-primary-hover open-apply-modal" data-toggle="modal"><i class="fa-solid fa-arrow-rotate-right"></i> ???NG
                                                TUY???N L???I</a></p>
                                        <p><a target="_blank" href="http://candidate.topcvconnect.com/conversations/new/10649" class="btn btn-connect btn-outline-hover"><i class="fa-solid fa-comments"></i> NH???N TIN</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="tab-company" class="container">
            <ul class="nav nav-pills">
                <li class="active"><a href="#tab-info" data-toggle="tab">Tin tuy???n d???ng</a></li>
                <li class=""><a href="#tab-info-company">Th??ng tin c??ng ty</a></li>
            </ul>
        </div> -->
        <div class="container" id="tab-info">
            <div class="box-info-job box-white">
                <h2 class="box-title">Chi ti???t tin tuy???n d???ng</h2>
                <div class="row" style="background-color: #ffff;">
                    <div class="col-md-8">
                        <div class="box-info">
                            <p>Th??ng tin chung</p>
                            <div class="box-main">
                                <div class="box-item">
                                    <i class="fa-solid fa-coins"></i>
                                    <div>
                                        <strong>M???c l????ng </strong> <br>
                                        <span id="jobsalary">
                                            {{ $detail[0]->wage }}
                                        </span> {{ $detail[0]->currency }}
                                    </div>
                                </div>
                                <div class="box-item">
                                    <i class="fa-solid fa-map-marker"></i>
                                    <div>
                                        <strong>Khu v???c</strong> <br>
                                        <span id="jobarea">{{ $detail[0]->area }}</span>
                                    </div>
                                </div>
                                <div class="box-item">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <div>
                                        <strong>H??nh th???c l??m vi???c </strong> <br>
                                        <span>{{ $detail[0]->type }}</span>
                                    </div>
                                </div>
                                <div class="box-item">
                                    <i class="fa-solid fa-medal"></i>
                                    <div>
                                        <strong>C???p b???c </strong> <br>
                                        <span>{{ $detail[0]->rank }}</span>
                                    </div>
                                </div>
                                <div class="box-item">
                                    <i class="fa-solid fa-venus-mars"></i>
                                    <div>
                                        <strong>Gi???i t??nh </strong> <br>
                                        <span>{{ $detail[0]->gender }}</span>
                                    </div>
                                </div>
                                <div class="box-item">
                                    <i class="fa-solid fa-ranking-star"></i>
                                    <div>
                                        <strong>Kinh nghi???m </strong> <br>
                                        <span>{{ $detail[0]->exp }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="box-address">
                            <p>?????a ??i???m l??m vi???c</p>
                            <div>
                                <div style="margin-bottom: 10px">- Qu???ng Nam: Ti??n Ph?????c</div>
                                <div style="margin-bottom: 10px">- H??? Ch?? Minh: C??? Chi</div>
                                <div style="margin-bottom: 10px">- Long An: ?????c Ho??</div>
                                <div id="more-job-addresses" style="display: none">
                                    <div style="margin-bottom: 10px">- B???c Li??u: ????ng H???i</div>
                                    <div style="margin-bottom: 10px">- C?? Mau: TP C?? Mau</div>
                                </div>
                                <div style="margin-bottom: 10px">
                                    <a id="toggle-more-job-addresses" href="#toggle-more-job-addresses" style="color: #00b14f">
                                        <span class="show-more-job-addresses">...v?? 2 ?????a ??i???m kh??c</span>
                                        <span class="show-less-job-addresses" style="display: none">Thu g???n</span>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                        <div class="job-data">
                            <h3>M?? t??? c??ng vi???c</h3>
                            <div class="content-tab">
                                <p>{{ $detail[0]->detail }}</p>
                            </div>
                            <h3>Y??u c???u ???ng vi??n</h3>
                            <div class="content-tab">
                                <p>{{ $detail[0]->require }}</p>
                            </div>
                            <h3>Quy???n l???i</h3>
                            <div class="content-tab">
                                <p>{{ $detail[0]->benefit }}</p>
                            </div>
                            <h3>C??ch th???c ???ng tuy???n</h3>
                            <div class="box-how-to-apply">
                                <p>???ng vi??n n???p h??? s?? tr???c tuy???n b???ng c??ch b???m <strong class="text-highlight">???ng tuy???n
                                        ngay</strong> d?????i ????y.</p>
                                <div class="">
                                    <div class="">
                                        <div class="d-flex box-btn">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                                <i class="fa-regular fa-paper-plane"></i> ???NG TUY???N NGAY
                                            </button>
                                        </div>
                                        {{-- <p>H???n n???p h??? s??: 12/12/2022</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 col-box-right">
                        <div class="box-share-job">
                            <h3>Chia s??? tin tuy???n d???ng</h3>
                            <p>Sao ch??p ???????ng d???n</p>
                            <div class="box-copy">
                                <div class="url-copy"></div>
                                <div class="btn-copy">
                                    <button class="btn-secondary-hover" onclick="copyToClipboard('.url-copy')"><i class="fa-regular fa-copy"></i></button>
                                </div>
                            </div>
                            <p>Chia s??? qua m???ng x?? h???i</p>
                        </div>
                        <div class="box-share-job">
                            <h3>Chia s??? tin tuy???n d???ng</h3>
                            <p>Sao ch??p ???????ng d???n</p>
                            <div class="box-copy">
                                <div class="url-copy"></div>
                                <div class="btn-copy">
                                    <button class="btn-secondary-hover" onclick="copyToClipboard('.url-copy')"><i class="fa-regular fa-copy"></i></button>
                                </div>
                            </div>
                            <p>Chia s??? qua m???ng x?? h???i</p>
                        </div>
                        <div class="box-share-job">
                            <h3>Chia s??? tin tuy???n d???ng</h3>
                            <p>Sao ch??p ???????ng d???n</p>
                            <div class="box-copy">
                                <div class="url-copy"></div>
                                <div class="btn-copy">
                                    <button class="btn-secondary-hover" onclick="copyToClipboard('.url-copy')"><i class="fa-regular fa-copy"></i></button>
                                </div>
                            </div>
                            <p>Chia s??? qua m???ng x?? h???i</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="container  mt-16" id="tab-info-company">
            <div class="box-info-company box-white">
                <div class="box-title">
                    <h2 class="box-name">{{ $detailbusiness[0]->nameBusiness }}</h2>
                </div>
                <div class="box-info">
                    <div class="box-item">
                        <i class="fa-solid fa-building"></i>
                        <div>
                            <p class="title">Gi???i thi???u</p>
                            <span class="content">
                                <p>{{ $detailbusiness[0]->introduceBusiness }}</p>
                            </span>
                        </div>
                    </div>
                    <div class="box-item">
                        <i class="fa-solid fa-people-group"></i>
                        <div>
                            <p class="title">Quy m??</p>
                            <span class="content">{{ $detailbusiness[0]->personnelSize }}</span>
                        </div>
                    </div>
                    <div class="box-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <div>
                            <p class="title">?????a ??i???m</p>
                            <span class="content">{{ $detailbusiness[0]->location }}</span>
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
        var alertSuccess = '{{Session::get('alertSuccess')}}';
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