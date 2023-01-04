<div class="col-md-12 col-sm-12" id="datapaging">
    <div class="container">
        <div id="carousel-job" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        @if (!empty($listAll))
                        @foreach ($listAll as $key => $item)
                        <div class="col-md-4 col-sm-6 feature-job job-ta">
                            <div class="feature-job-item">
                                <div class="cvo-flex"><a href="/ap/detail-job/{{ $item->id }}" target="_blank" tabindex="-1">
                                        <div class="box-company-logo"><img title="" id="image-logo" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{asset('/img/logo/' .$item->image)}}" class="img-responsive"></div>
                                    </a>
                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="/ap/detail-job/{{ $item->id }}" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                            <strong class="underline-box-job" id="jobname" style="font-weight: bold;">{{ $item->title }}</strong>
                                        </a> <a href="/ap/detail-job/{{ $item->id }}" data-toggle="tooltip" title="" id="businessname" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">{{ $item->nameBusiness }}</a>
                                    </div>
                                    <div class="col-like"><button onclick="addfvr(this.id)" id="{{$item->id}}" class="addtofvr" data-id="69610" tabindex="-1" style="font-size: 12px;"><span id="{{ $item->id }}">Lưu</span></button>
                                    </div>
                                </div>
                                <div class="col-job-info">
                                    <div class="salary text_ellipsis"> <i class="fa-solid fa-coins"></i> <strong id="jobsalary">{{ $item->wage }} {{$item->currency}} </strong>
                                    </div>
                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                        <i class="fa-solid fa-location-pin"></i> <strong id="jobarea">{{ $item->area }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
            {!! $listAll->withQueryString()->links() !!}

        </div>
    </div>
</div>