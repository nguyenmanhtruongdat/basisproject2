
                                @if (!empty($detailrecruitment))
                                @foreach ($detailrecruitment as $key => $item)
                                <div class="job-item  bg-highlight  job-ta result-job-hover" data-job-id="720155" data-job-position="1" data-box="BoxRecruitmentInCompany">
                                    <div class="avatar">
                                        <a target="_blank" href="/ap/detail-job/{{ $item->id }}" class="company-logo">
                                            <img src="{{asset('/img/logo/' .$detail[0]->image)}}" class="w-100" alt="Công ty Cổ phần Truyền thông VMARK" title="Nhân Viên Tổ Chức Sự Kiện (Marketing &amp; Truyền Thông)">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="content">
                                            <div class="ml-auto">
                                                <h3 class="title">
                                                    <a target="_blank" class="underline-box-job" href="/ap/detail-job/{{ $item->id }}"">
                                                        <span class=" bold transform-job-title" data-toggle="tooltip" title="" data-placement="top" data-container="body" data-original-title="Nhân Viên Tổ Chức Sự Kiện (Marketing &amp; Truyền Thông)">{{ $item->name }}</span>
                                                    </a>
                                                </h3>
                                                <p class="company underline-box-job">
                                                    <a href="/ap/detail-company/{{ $detail[0]->id }}" data-toggle="tooltip" title="" data-placement="top" data-container="body" target="_blank" data-original-title="Công ty Cổ phần Truyền thông VMARK">{{ $detail[0]->nameBusiness }}</a>
                                                </p>
                                            </div>
                                            <!-- <div class="mr-auto text-right">
                                                <p class="deadline">
                                                    Còn <strong>40</strong> ngày để ứng tuyển
                                                </p>
                                            </div> -->
                                        </div>
                                        <div class="d-flex">
                                            <div class="label-content ml-auto">
                                                <label class="salary">{{ $item->wage }}</label>
                                                <label class="address" data-toggle="tooltip" data-html="true" title="" data-placement="top" data-container="body" data-original-title="<p style='text-align: left'>Hà Nội: Tây Hồ</p>">{{$item->area}}</label>

                                            </div>
                                            <div class="icon mr-auto">
                                                <div id="box-save-job-720155" class="box-save-job  box-save-job-hover   job-notsave " style="width: 23px">
                                                    <a href="javascript:void(0)" class="btn-save save" data-id="720155" data-title="Nhân Viên Tổ Chức Sự Kiện (Marketing &amp; Truyền Thông)">
                                                        <span id="save-job-loading" style="display: none;">
                                                            <img src="https://www.topcv.vn/v3/images/ap-loading.gif" style="width: 20px">
                                                        </span>
                                                        <i class="fa-light fa-heart"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="btn-unsave unsave text-highlight" data-toggle="tooltip" title="" data-id="720155" data-title="Nhân Viên Tổ Chức Sự Kiện (Marketing &amp; Truyền Thông)" data-placement="top" data-container="body" data-original-title="Bỏ lưu">
                                                        <span id="unsave-job-loading" style="display: none;">
                                                            <img src="https://www.topcv.vn/v3/images/ap-loading.gif" style="width: 20px">
                                                        </span>
                                                        <i class="fa-solid fa-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="empty">Hiện không có tin tuyển dụng</div>
                                @endif