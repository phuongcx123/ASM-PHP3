<div class="container">
    <div class="row align-items-center mb-40">
        <div class="col-lg-12">
            <div class="section-title-2">
                <div class="titel">
                    <h4>Bài viết phổ biến nhất</h4>
                    <div class="dash"></div>
                </div>
                <a href="#" class=" eg-btn arrow-btn-2 two">Xem tất cả t<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="sliderContainer">
                <div class="row g-lg-4 gy-5">
                    <div class="col-lg-4">
                        <div class="progressBarContainer">
                           @foreach($data['popular'] as $i => $item )
                                <div>
                                    <div class="popular-post one">
                                        <div class="sn">
                                            <h4>{{ $i < 10 ? '0'.$i+1 .'.' : $i+1 }}</h4>
                                        </div>
                                        <div class="post-title">
                                            <h5><a href="{{ route('post-show' , $item ->id ) }}">{{$item -> title}}</a></h5>
                                        </div>
                                    </div>
                                    <span data-slick-index="{{$i}}" class="progressBar"></span>
                                </div>
                           @endforeach

                        </div>
                    </div>
                    <div class="col-lg-8">

                        <div class="slider single-item">
                            @foreach($data['popular'] as $i => $item )
                                @php
                                    $date_one  = $item -> created_at ;
                                    $date_day = date('d' , strtotime($date_one)) ;
                                    $date_M = date('m' , strtotime($date_one)) ;
                                    $date_Y = date('Y' , strtotime($date_one)) ;
                                    $date = 'Ngày' .' '. $date_day . ' '.'Tháng' .' '. $date_M . ' '. 'Năm' . ' '. $date_Y ;
                                @endphp
                                <div class="slider-item">
                                    <div class="popular-post-card">
                                        <div class="post-img">
                                            <img src="{{ \Storage::url($item->thumbnail_img) }}"
                                                 alt>
                                            <div class="category">
                                                <a href="{{ route('post-show' , $item ->id ) }}">{{$item -> category -> name}}</a>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="publish-date">
                                                <a href="#">{{$date}}</a>
                                            </div>
                                            <h4><a href="{{ route('post-show' , $item ->id ) }}">{{$item -> title}}</a></h4>
                                            <p>Chưa có </p>
                                            <div class="bottom-area">
                                                <a href="{{ route('post-show' , $item ->id ) }}" class=" eg-btn arrow-btn two">Xem thêm <i class="bi bi-arrow-right"></i></a>
                                                <span><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                            <
                                                               path d="M8 0C3.60594 0 0 3.60594 0 8C0 12.3941 3.60594 16 8 16C12.3941 16 16 12.3941 16 8C16 3.60594 12.3941 0 8 0ZM11.646 3.69106C11.8291 3.508 12.1259 3.508 12.3089 3.69106C12.492 3.87413 12.492 4.17091 12.3089 4.35397C12.1259 4.53703 11.8291 4.53703 11.646 4.35397C11.463 4.17091 11.463 3.87413 11.646 3.69106ZM7.53125 2.375C7.53125 2.11591 7.74091 1.90625 8 1.90625C8.25909 1.90625 8.46875 2.11591 8.46875 2.375V3.3125C8.46875 3.57159 8.25909 3.78125 8 3.78125C7.74091 3.78125 7.53125 3.57159 7.53125 3.3125V2.375ZM2.375 8.46875C2.11591 8.46875 1.90625 8.25909 1.90625 8C1.90625 7.74091 2.11591 7.53125 2.375 7.53125H3.3125C3.57159 7.53125 3.78125 7.74091 3.78125 8C3.78125 8.25909 3.57159 8.46875 3.3125 8.46875H2.375ZM4.35397 12.3089C4.17091 12.492 3.87413 12.492 3.69106 12.3089C3.508 12.1259 3.508 11.8291 3.69106 11.646C3.87413 11.4629 4.17091 11.4629 4.35397 11.646C4.53703 11.8291 4.53703 12.1259 4.35397 12.3089ZM4.35397 4.35397C4.17091 4.53703 3.87413 4.53703 3.69106 4.35397C3.508 4.17091 3.508 3.87413 3.69106 3.69106C3.87413 3.508 4.17091 3.508 4.35397 3.69106C4.53703 3.87413 4.53703 4.17091 4.35397 4.35397ZM8.46875 13.625C8.46875 13.8841 8.25909 14.0938 8 14.0938C7.74091 14.0938 7.53125 13.8841 7.53125 13.625V12.6875C7.53125 12.4284 7.74091 12.2188 8 12.2188C8.25909 12.2188 8.46875 12.4284 8.46875 12.6875V13.625ZM11.1439 11.1439C10.9608 11.327 10.6642 11.327 10.4811 11.1439L7.66856 8.33141C7.58069 8.24353 7.53125 8.1245 7.53125 8V5.1875C7.53125 4.92841 7.74091 4.71875 8 4.71875C8.25909 4.71875 8.46875 4.92841 8.46875 5.1875V7.80591L11.1439 10.4811C11.327 10.6642 11.327 10.9608 11.1439 11.1439ZM12.3089 12.3089C12.1259 12.492 11.8291 12.492 11.646 12.3089C11.463 12.1259 11.463 11.8291 11.646 11.646C11.8291 11.4629 12.1259 11.4629 12.3089 11.646C12.492 11.8291 12.492 12.1259 12.3089 12.3089ZM14.0938 8C14.0938 8.25909 13.8841 8.46875 13.625 8.46875H12.6875C12.4284 8.46875 12.2188 8.25909 12.2188 8C12.2188 7.74091 12.4284 7.53125 12.6875 7.53125H13.625C13.8841 7.53125 14.0938 7.74091 14.0938 8Z">
                                                            </>
                                                        </svg>5 phút trước</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
