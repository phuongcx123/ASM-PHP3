@extends('Client/layouts/master')

@section('content')
    {{-- category --}}
    <section class="category-section pt-100">
        @include('Client.components.home-category-slide')
    </section>
    {{-- end category  --}}
    {{-- new post --}}
    @if (session()->has('res'))
        <div class="alert alert-success">
            {{ session()->get('res') }}
        </div>
    @endif
    <div class="home-two-recent-post pb-100">
        <div class="container">
            <div class="row align-items-center mb-40">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <div class="titel">
                            <h4>Bài đăng mới nhất</h4>
                            <div class="dash"></div>
                        </div>
                        <a href="#" class=" eg-btn arrow-btn-2 two">Xem thêm<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-lg-4 gy-5">
                <div class="col-lg-8">
                    <div class="row justify-content-center gy-4">

                        @include('Client.components.home-post')


                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-title-2 two mb-30">
                        <h4>Bài viết hot <svg width="14" height="24" viewBox="0 0 11 14"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.15888 13.1844C8.73336 10.6029 8.07416 7.35423 5.59136 5.46029C5.58991 5.45922 5.58846 5.45788 5.5873 5.45708L5.59803 5.48172L5.59629 5.5002C6.08003 6.68033 6.01217 7.97589 5.41793 9.08745L4.99915 9.87117L4.87068 9.00522C4.78338 8.41784 4.54354 7.85751 4.17407 7.3778H4.11578L4.08503 7.29744C4.08938 8.19499 3.88464 9.07915 3.48297 9.91322C2.95602 11.0047 3.03345 12.2633 3.69033 13.2806L4.14362 13.9829L3.3281 13.6647C1.98331 13.1399 0.908237 12.1291 0.378384 10.8914C-0.215271 9.50931 -0.105357 7.90679 0.672747 6.6056C1.07847 5.92875 1.36269 5.21012 1.51784 4.46926L1.66952 3.74314L2.0564 4.39079C2.24113 4.69961 2.37715 5.03388 2.46154 5.38503L2.47024 5.39333L2.47923 5.44958L2.48765 5.44717C3.64654 4.02518 4.34083 2.25579 4.44204 0.464176L4.46814 0L4.88982 0.253917C6.61075 1.28967 7.80589 2.95139 8.17508 4.81853L8.18349 4.85684L8.18784 4.86273L8.20669 4.83809C8.54398 4.42668 8.72204 3.93732 8.72204 3.42226V2.62461L9.2432 3.26048C10.4549 4.73845 11.0761 6.57185 10.9926 8.42319C10.8899 10.6024 9.6031 12.5151 7.5501 13.5514L6.66121 14L7.15888 13.1844Z" />
                            </svg> </h4>
                        <div class="dash"></div>
                    </div>
                    <div class="another-post-area mb-50">

                        @include('Client.components.post-sidebar', ['data' => $data['hot']])

                    </div>
                    <div class="stay-connect">
                        <div class="section-title-2 two mb-30">
                            <h4>Stay Connected</h4>
                        </div>
                        <ul class="social-list">
                            <li>
                                <a href="https://www.facebook.com/"><span><i
                                            class="bx bxl-facebook"></i>Facebook</span><span><strong>3.5K</strong>
                                        Like</span></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/"><span><i
                                            class="bx bxl-twitter"></i>Twitter</span><span><strong>60k</strong>
                                        Follower</span></a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/"><span><i
                                            class="bx bxl-pinterest-alt"></i>Pinterest</span><span><strong>25k</strong>
                                        Follower</span></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/"><span><i
                                            class="bx bxl-instagram"></i>Instagram</span><span><strong>75k</strong>
                                        Follower</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end new --}}
    <div class="home-two-trending-post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mb-40">
                    <div class="section-title-2 three">
                        <div class="titel text-center">
                            <h4>Bài Viết Đang Thịnh Hành</h4>
                            <div class="dash"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper trending-article2">
                        <div class="swiper-wrapper">
                            @foreach ($data['trend'] as $item)
                                <div class="swiper-slide">
                                    <div class="trending-article-card-2">
                                        <div class="article-img">
                                            <a href="{{ route('post-show', $item->id) }}"><img
                                                    src="{{ \Storage::url($item->thumbnail_img) }}" alt
                                                    style="height: 150px"></a>
                                        </div>
                                        <div class="article-content">
                                            <h5><a href="{{ route('post-show', $item->id) }}">{{ $item->title }}</a>
                                            </h5>
                                            <div class="publish-date">
                                                @php
                                                    $date_one = $item->created_at;
                                                    $date_day = date('d', strtotime($date_one));
                                                    $date_M = date('m', strtotime($date_one));
                                                    $date_Y = date('Y', strtotime($date_one));
                                                    $date =
                                                        'Ngày' .
                                                        ' ' .
                                                        $date_day .
                                                        ' ' .
                                                        'Tháng' .
                                                        ' ' .
                                                        $date_M .
                                                        ' ' .
                                                        'Năm' .
                                                        ' ' .
                                                        $date_Y;
                                                @endphp
                                                <a href="#">{{ $date }}</a>
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


    <div class="home2-populer-post pt-100 pb-100">
        @include('Client.components.home-populer')
    </div>
@endsection
