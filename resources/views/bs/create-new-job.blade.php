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
            <h2 class="h2">????ng tin tuy???n d???ng m???i</h2>
            @if (session('msg'))
            <div class="alert alert-success">{{ session('msg') }}</div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">????ng tuy???n kh??ng th??nh c??ng</div>
            @endif

            <div class="row">
                <div class="col-md-9">
                    <form action="/bs/postRecruitment" method="POST" enctype='multipart/form-data'>
                        <div class="form-group">
                            <label for="name" class="title">T??n chi???n d???ch tuy???n d???ng</label>
                            <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="VD: Tuy???n d???ng nh??n vi??n Design th??ng 12">
                            @error('name')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="role" class="title">V??? tr?? tuy???n d???ng</label>
                            <input value="{{ old('position') }}" name="position" type="text" class="form-control" id="role" placeholder="VD: Nh??n vi??n Marketing, Designer, Sales">
                            @error('position')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="platform" class="title">Khu v???c l??m vi???c</label> <br>
                            <select name="area" id="tinhthanh" class="form-control">
                                <option value="An Giang">An Giang
                                <option value="B?? R???a - V??ng T??u">B?? R???a - V??ng T??u
                                <option value="B???c Giang">B???c Giang
                                <option value="B???c K???n">B???c K???n
                                <option value="B???c Li??u">B???c Li??u
                                <option value="B???c Ninh">B???c Ninh
                                <option value="B???n Tre">B???n Tre
                                <option value="B??nh ?????nh">B??nh ?????nh
                                <option value="B??nh D????ng">B??nh D????ng
                                <option value="B??nh Ph?????c">B??nh Ph?????c
                                <option value="B??nh Thu???n">B??nh Thu???n
                                <option value="B??nh Thu???n">B??nh Thu???n
                                <option value="C?? Mau">C?? Mau
                                <option value="Cao B???ng">Cao B???ng
                                <option value="?????k L???k">?????k L???k
                                <option value="?????k N??ng">?????k N??ng
                                <option value="??i???n Bi??n">??i???n Bi??n
                                <option value="?????ng Nai">?????ng Nai
                                <option value="?????ng Th??p">?????ng Th??p
                                <option value="?????ng Th??p">?????ng Th??p
                                <option value="Gia Lai">Gia Lai
                                <option value="H?? Giang">H?? Giang
                                <option value="H?? Nam">H?? Nam
                                <option value="H?? T??nh">H?? T??nh
                                <option value="H???i D????ng">H???i D????ng
                                <option value="H???u Giang">H???u Giang
                                <option value="H??a B??nh">H??a B??nh
                                <option value="H??ng Y??n">H??ng Y??n
                                <option value="Kh??nh H??a">Kh??nh H??a
                                <option value="Ki??n Giang">Ki??n Giang
                                <option value="Kon Tum">Kon Tum
                                <option value="Lai Ch??u">Lai Ch??u
                                <option value="L??m ?????ng">L??m ?????ng
                                <option value="L???ng S??n">L???ng S??n
                                <option value="L??o Cai">L??o Cai
                                <option value="Long An">Long An
                                <option value="Nam ?????nh">Nam ?????nh
                                <option value="Ngh??? An">Ngh??? An
                                <option value="Ninh B??nh">Ninh B??nh
                                <option value="Ninh Thu???n">Ninh Thu???n
                                <option value="Ph?? Th???">Ph?? Th???
                                <option value="Qu???ng B??nh">Qu???ng B??nh
                                <option value="Qu???ng B??nh">Qu???ng B??nh
                                <option value="Qu???ng Ng??i">Qu???ng Ng??i
                                <option value="Qu???ng Ninh">Qu???ng Ninh
                                <option value="Qu???ng Tr???">Qu???ng Tr???
                                <option value="S??c Tr??ng">S??c Tr??ng
                                <option value="S??n La">S??n La
                                <option value="T??y Ninh">T??y Ninh
                                <option value="Th??i B??nh">Th??i B??nh
                                <option value="Th??i Nguy??n">Th??i Nguy??n
                                <option value="Thanh H??a">Thanh H??a
                                <option value="Th???a Thi??n Hu???">Th???a Thi??n Hu???
                                <option value="Ti???n Giang">Ti???n Giang
                                <option value="Tr?? Vinh">Tr?? Vinh
                                <option value="Tuy??n Quang">Tuy??n Quang
                                <option value="V??nh Long">V??nh Long
                                <option value="V??nh Ph??c">V??nh Ph??c
                                <option value="Y??n B??i">Y??n B??i
                                <option value="Ph?? Y??n">Ph?? Y??n
                                <option value="Tp.C???n Th??">Tp.C???n Th??
                                <option value="Tp.???? N???ng">Tp.???? N???ng
                                <option value="Tp.H???i Ph??ng">Tp.H???i Ph??ng
                                <option value="Tp.H?? N???i">Tp.H?? N???i
                                <option value="TP  HCM">TP HCM
                            </select>
                            @error('area')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <h3 class="h3">Th??ng tin ????ng tuy???n chi ti???t</h3>
                        <div class="form-group">
                                        <label for="email" class="mb-1">???nh hi???n th??? tin</label>
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
                            <label for="title" class="title">Ti??u ????? tin tuy???n d???ng</label>
                            <input value="{{ old('title') }}" name="title" type="text" class="form-control" id="title" placeholder="VD: Nh??n vi??n kinh doanh">
                            @error('title')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="career" class="title">Ng??nh ngh??? & l??nh v???c</label> <br>
                            <select name="major" id="major" class="form-control">
                                <option value="Kinh doanh / B??n h??ng">Kinh doanh / B??n h??ng</option>
                                <option value="Bi??n / Phi??n d???ch">Bi??n / Phi??n d???ch</option>
                                <option value="B??o ch?? / Truy???n h??nh">B??o ch?? / Truy???n h??nh</option>
                                <option value="B??u ch??nh - Vi???n th??ng">B??u ch??nh - Vi???n th??ng</option>
                                <option value="B???o hi???m">B???o hi???m</option>
                                <option value="B???t ?????ng s???n">B???t ?????ng s???n</option>
                                <option value="Ch???ng kho??n / V??ng / Ngo???i t???">Ch???ng kho??n / V??ng / Ngo???i t???</option>
                                <option value="IT Ph???n c???ng / M???ng">IT Ph???n c???ng / M???ng</option>
                                <option value="IT ph???n m???m">IT ph???n m???m</option>
                                <option value="Th?? k?? / Tr??? l??">Th?? k?? / Tr??? l??</option>
                                <option value="Phi ch??nh ph??? / Phi l???i nhu???n">Phi ch??nh ph??? / Phi l???i nhu???n</option>
                                <option value="C??ng ngh??? ?? t??">C??ng ngh??? ?? t??</option>
                                <option value="Qu???n l?? ??i???u h??nh">Qu???n l?? ??i???u h??nh</option>
                                <option value="M??? thu???t / Ngh??? thu???t / ??i???n ???nh">M??? thu???t / Ngh??? thu???t / ??i???n ???nh
                                <option value="Ki???n tr??c">Ki???n tr??c</option>
                                <option value="Logistics">Logistics</option>
                                <option value="Lu???t/Ph??p l??">Lu???t/Ph??p l??</option>
                                <option value="X??y d???ng">X??y d???ng</option>
                                <option value="Xu???t nh???p kh???u">Xu???t nh???p kh???u</option>
                                <option value="Y t??? / D?????c">Y t??? / D?????c</option>
                                </option>
                            </select>
                            @error('major')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <h3 class="h3">Th??ng tin chung</h3>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="title">Lo???i c??ng vi???c</label> <br>
                            <select name="type" class="form-control" id="type">
                                <option value="To??n th???i gian">To??n th???i gian</option>
                                <option value="B??n th???i gian">B??n th???i gian</option>
                                <option value="Th???c t???p">Th???c t???p</option>
                                <option value="Remote - L??m vi???c t??? xa">Remote - L??m vi???c t??? xa</option>
                            </select>
                            @error('type')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">

                            <label for="exampleInputPassword1" class="title">Gi???i t??nh</label> <br>
                            <select class="form-control" name="gender" id="gt">
                                <option value="Nam">Nam</option>
                                <option value="N???">N???</option>
                                <option value="Kh??ng y??u c???u gi???i t??nh c??? th???">Kh??ng y??u c???u gi???i t??nh c??? th???</option>
                            </select>
                            @error('gender')
                            <span style="color: red">{{ $message }}</span>
                            @enderror

                            <label for="exampleInputPassword1" class="title">C???p b???c</label> <br>
                            <select class="form-control" name="rank" id="capbac">
                                <option value="Tr?????ng chi nh??nh">Tr?????ng chi nh??nh</option>
                                <option value="Tr?????ng ph??ng">Tr?????ng ph??ng</option>
                                <option value="Gi??m ?????c">Gi??m ?????c</option>
                                <option value="Ph?? gi??m ?????c">Ph?? gi??m ?????c</option>
                                <option value="Th???c t???p sinh">Th???c t???p sinh</option>
                                <option value="Nh??n vi??n">Nh??n vi??n</option>
                            </select>
                            @error('rank')
                            <span style="color: red">{{ $message }}</span>
                            @enderror

                            <label for="exampleInputPassword1" class="title">Kinh nghi???m</label> <br>
                            <select class="form-control" name="exp" id="kinhnghiem">
                                <option value="Ch??a c?? kinh nghi???m">Kh??ng y??u c???u kinh nghi???m</option>
                                <option value="D?????i 1 n??m kinh nghi???m">D?????i 1 n??m kinh nghi???m</option>
                                <option value="1 n??m kinh nghi???m">1 n??m kinh nghi???m</option>
                                <option value="2 n??m kinh nghi???m">2 n??m kinh nghi???m</option>
                                <option value="3 n??m kinh nghi???m">3 n??m kinh nghi???m</option>
                                <option value="4 n??m kinh nghi???m">4 n??m kinh nghi???m</option>
                                <option value="5 n??m kinh nghi???m">5 n??m kinh nghi???m</option>
                                <option value="Tr??n 5 n??m kinh nghi???m">Tr??n 5 n??m kinh nghi???m</option>
                            </select>
                            @error('exp')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <h5 class="title">M???c l????ng</h5>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="title">Lo???i ti???n t???</label> <br>
                            <select class="form-control" name="currency" id="loaitiente">
                                <option value="USD">USD</option>
                                <option value="VND">VND</option>
                            </select>
                            @error('currency')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                            <label for="exampleInputPassword1" class="title">L????ng</label> <br>
                            <input value="{{ old('wage') }}" name="wage" class="form-control" type="text">
                            @error('wage')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div> <br>
                        <h3 class="h3">N???i dung ????ng tuy???n chi ti???t</h3>
                        <div class="form-group">
                            <label for="name" class="title">M?? t??? c??ng vi???c</label> <br>
                            <textarea class="form-control" id="des" placeholder="Nh???p n???i dung m?? t??? c??ng vi???c" name="detail" rows="4" cols="140">{{ old('detail') }}</textarea>
                            @error('detail')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name" class="title">Y??u c???u ???ng vi??n</label> <br>
                            <textarea class="form-control" id="des" placeholder="Nh???p n???i dung y??u c???u ???ng tuy???n" name="require" rows="4" cols="140">{{ old('require') }}</textarea>
                            @error('require')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name" class="title">Quy???n l???i c???a ???ng vi??n</label> <br>
                            <textarea class="form-control" id="des" placeholder="Nh???p n???i dung quy???n l???i c???a ???ng vi??n" name="benefit" rows="4" cols="140">{{ old('benefit') }}</textarea>
                            @error('benefit')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <h3 class="h3">Th??ng tin nh???n CV</h3> --}}
                        {{-- <div class="form-group">
                            <label for="name" class="title">H???n ch??t nh???n CV</label> <br>
                            <input name="date" type="date" class="form-control" id="datepicker">
                        </div> --}}

                        <br>
                        <div class="form-group">
                            <!-- <p class="agree-term">
                                B???ng vi???c ????ng k?? t??i kho???n, b???n ???? ?????ng ?? v???i <span class="text-highlight">??i???u kho???n d???ch v???</span> v?? <span class="text-highlight">Ch??nh s??ch b???o
                                    m???t</span> c???a ch??ng t??i
                            </p> -->
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2">
                                    <button type="reset" class="btn btn-reset btn-block mb-4">Nh???p l???i</button>
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Ho??n t???t</button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>

                <div class="col-md-3">
                <div class="image">
                        <a target="_blank" href="" rel="nooppener noreferrer"><img src="{{asset('img/banner-bsn1.png')}}" alt="Apply vi???c g?? c??ng d???" class="w-100"></a>
                    </div>
                    <div class="image">
                        <a target="_blank" href="" rel="nooppener noreferrer"><img src="{{asset('img/banner-bsn2.png')}}" alt="Apply vi???c g?? c??ng d???" class="w-100"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ url('js/app.js') }}"></script>

</body>

</html>