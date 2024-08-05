@extends('Client/layouts/master')
@section('content')
    @include('Client.components.breadcrumb' , ['title' => $post -> title])

    <section class="post-gallery-details style-5" style="margin-top: 50px">
        <div class="container">
            <div class="post-gallery-content">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-8">
                        <div class="left-sidebar2-inner-img">
                            <img src="{{ \Storage::url($post->thumbnail_img) }}"
                                alt="" style="width: 2000px ; height: 500px" >
                            <div class="category">
                                <span>{{$post->category->name}}</span>
                            </div>
                        </div>
                        <div class="post-gallery-title">
                            <h2>{{ $post -> title }}</h2>
                        </div>
                        <div class="post-gallery-author-meta">
                            <div class="author-area">
                                <div class="author-img">
                                    <img src="{{ \Storage::url($post ->user -> userdetail -> avata_img ) }}"
                                        alt>
                                </div>
                                <div class="author-content">
                                    <p>By, <a href="#">{{ $post ->user -> name  }}</a></p>
                                </div>
                            </div>
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8 0C3.60594 0 0 3.60594 0 8C0 12.3941 3.60594 16 8 16C12.3941 16 16 12.3941 16 8C16 3.60594 12.3941 0 8 0ZM11.646 3.69106C11.8291 3.508 12.1259 3.508 12.3089 3.69106C12.492 3.87413 12.492 4.17091 12.3089 4.35397C12.1259 4.53703 11.8291 4.53703 11.646 4.35397C11.463 4.17091 11.463 3.87413 11.646 3.69106ZM7.53125 2.375C7.53125 2.11591 7.74091 1.90625 8 1.90625C8.25909 1.90625 8.46875 2.11591 8.46875 2.375V3.3125C8.46875 3.57159 8.25909 3.78125 8 3.78125C7.74091 3.78125 7.53125 3.57159 7.53125 3.3125V2.375ZM2.375 8.46875C2.11591 8.46875 1.90625 8.25909 1.90625 8C1.90625 7.74091 2.11591 7.53125 2.375 7.53125H3.3125C3.57159 7.53125 3.78125 7.74091 3.78125 8C3.78125 8.25909 3.57159 8.46875 3.3125 8.46875H2.375ZM4.35397 12.3089C4.17091 12.492 3.87413 12.492 3.69106 12.3089C3.508 12.1259 3.508 11.8291 3.69106 11.646C3.87413 11.4629 4.17091 11.4629 4.35397 11.646C4.53703 11.8291 4.53703 12.1259 4.35397 12.3089ZM4.35397 4.35397C4.17091 4.53703 3.87413 4.53703 3.69106 4.35397C3.508 4.17091 3.508 3.87413 3.69106 3.69106C3.87413 3.508 4.17091 3.508 4.35397 3.69106C4.53703 3.87413 4.53703 4.17091 4.35397 4.35397ZM8.46875 13.625C8.46875 13.8841 8.25909 14.0938 8 14.0938C7.74091 14.0938 7.53125 13.8841 7.53125 13.625V12.6875C7.53125 12.4284 7.74091 12.2188 8 12.2188C8.25909 12.2188 8.46875 12.4284 8.46875 12.6875V13.625ZM11.1439 11.1439C10.9608 11.327 10.6642 11.327 10.4811 11.1439L7.66856 8.33141C7.58069 8.24353 7.53125 8.1245 7.53125 8V5.1875C7.53125 4.92841 7.74091 4.71875 8 4.71875C8.25909 4.71875 8.46875 4.92841 8.46875 5.1875V7.80591L11.1439 10.4811C11.327 10.6642 11.327 10.9608 11.1439 11.1439ZM12.3089 12.3089C12.1259 12.492 11.8291 12.492 11.646 12.3089C11.463 12.1259 11.463 11.8291 11.646 11.646C11.8291 11.4629 12.1259 11.4629 12.3089 11.646C12.492 11.8291 12.492 12.1259 12.3089 12.3089ZM14.0938 8C14.0938 8.25909 13.8841 8.46875 13.625 8.46875H12.6875C12.4284 8.46875 12.2188 8.25909 12.2188 8C12.2188 7.74091 12.4284 7.53125 12.6875 7.53125H13.625C13.8841 7.53125 14.0938 7.74091 14.0938 8Z">
                                            </path>
                                        </svg>{{ $post -> created_at }}
                                    </li>
                                    <li>
                                        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.15888 13.1844C8.73336 10.6029 8.07416 7.35423 5.59136 5.46029C5.58991 5.45922 5.58846 5.45788 5.5873 5.45708L5.59803 5.48172L5.59629 5.5002C6.08003 6.68033 6.01217 7.97589 5.41793 9.08745L4.99915 9.87117L4.87068 9.00522C4.78338 8.41784 4.54354 7.85751 4.17407 7.3778H4.11578L4.08503 7.29744C4.08938 8.19499 3.88464 9.07915 3.48297 9.91322C2.95602 11.0047 3.03345 12.2633 3.69033 13.2806L4.14362 13.9829L3.3281 13.6647C1.98331 13.1399 0.908237 12.1291 0.378384 10.8914C-0.215271 9.50931 -0.105357 7.90679 0.672747 6.6056C1.07847 5.92875 1.36269 5.21012 1.51784 4.46926L1.66952 3.74314L2.0564 4.39079C2.24113 4.69961 2.37715 5.03388 2.46154 5.38503L2.47024 5.39333L2.47923 5.44958L2.48765 5.44717C3.64654 4.02518 4.34083 2.25579 4.44204 0.464176L4.46814 0L4.88982 0.253917C6.61075 1.28967 7.80589 2.95139 8.17508 4.81853L8.18349 4.85684L8.18784 4.86273L8.20669 4.83809C8.54398 4.42668 8.72204 3.93732 8.72204 3.42226V2.62461L9.2432 3.26048C10.4549 4.73845 11.0761 6.57185 10.9926 8.42319C10.8899 10.6024 9.6031 12.5151 7.5501 13.5514L6.66121 14L7.15888 13.1844Z">
                                            </path>
                                        </svg>{{ $post -> views}} View
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="second-para">

                            {!! $post -> content !!}
                        </div>

                    </div>
                    <div class="col-lg-4">

                        @include('Client.components.post-single-sitebar' , ['data' =>  $categories , 'data1' => $data['post']]) ;

                    </div>
                </div>
                <div class="post-tags-social">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="tags">
                                <ul>
                                    @foreach ($post -> tags as $item)
                                    <li><a href="#"> <span>#</span> {{ $item -> name  }}</a></li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="social">
                                <p>Share On:</p>
                                <ul>
                                    <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-120">
                    <div class="col-lg-12">
                        <div class="details-navigation">
                            @if($previousPost)
                                <div class="single-navigation">
                                    <div class="content">
                                        <a href="{{ route('post-show', $previousPost->id) }}">Previous</a>
                                        <h4><a href="{{ route('post-show', $previousPost->id) }}">{{ $previousPost->title }}</a></h4>
                                    </div>
                                    <a href="{{ route('post-show', $previousPost->id) }}" class="img">
                                        <img src="{{ \Storage::url($previousPost->thumbnail_img) }}" alt>
                                        <div class="arrow">
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            @else
                                <div class="single-navigation">
                                    <div class="content">
                                        <span>Previous</span>
                                        <h4><span>No previous post available</span></h4>
                                    </div>
                                    <div class="img">

                                        <div class="arrow">
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($nextPost)
                                <div class="single-navigation two">
                                    <a href="{{ route('post-show', $nextPost->id) }}" class="img">
                                        <img src="{{ \Storage::url($nextPost->thumbnail_img) }}" alt>
                                        <div class="arrow">
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                                            </svg>
                                        </div>
                                    </a>
                                    <div class="content">
                                        <a href="{{ route('post-show', $nextPost->id) }}">NEXT</a>
                                        <h4><a href="{{ route('post-show', $nextPost->id) }}">{{ $nextPost->title }}</a></h4>
                                    </div>
                                </div>
                            @else
                                <div class="single-navigation two">
                                    <div class="img">

                                        <div class="arrow">
                                            <svg width="12" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 1H12M12 1V13M12 1L0.5 12"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span>Next</span>
                                        <h4><span>No next post available</span></h4>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-9">
                        <div class="comment-section">
                            <div class="comment-title">
                                <h4>2 Bình Luận </h4>
                                <div class="dash"></div>
                            </div>
                            <ul class="author-comment">
                                <li>
                                    <div class="author-img">
                                        <img src="{{ asset('theme/client/assets/images/post-gallery-format/author-comment-img1.jpg') }}"
                                            alt>
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-top">
                                            <h5>Polard Girdet</h5>
                                            <p>02 April,2023</p>
                                        </div>
                                        <p>odio tellus, dignissim fermentumara purus nec, consequat dapibus
                                            metus.Vivamusut urna worlda mauris, faucibus at egestas quis, fermentum
                                            egetonav neque. Duisonajt pharetra lectus nec risusonl</p>
                                        <a href>
                                            <i class="bi bi-arrow-return-right"></i>
                                            Reply
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-img">
                                        <img src="{{ asset('theme/client/assets/images/post-gallery-format/author-comment-img2.jpg') }}"
                                            alt="img">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-top">
                                            <h5>Ezekiel Miles</h5>
                                            <p>02 April,2023</p>
                                        </div>
                                        <p>odio tellus, dignissim fermentumara purus nec, consequat dapibus
                                            metus.Vivamusut urna worlda mauris, faucibus at egestas quis, fermentum
                                            egetonav neque. Duisonajt pharetra lectus nec risusonl</p>
                                        <a href>
                                            <i class="bi bi-arrow-return-right"></i>
                                            Reply
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <div class="comment-title">
                                <h4>Leave A Comment</h4>
                                <div class="dash"></div>
                            </div>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-inner">
                                            <input type="text" placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-inner">
                                            <input type="email" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-inner">
                                            <input type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-inner">
                                            <textarea rows="5" placeholder="Your Messege"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="eg-btn btn--primary btn--lg">Post a
                                            Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="newsletter-section-1">
        <div class="paper-fly-icon">
            <img src="{{ asset('theme/client/assets/images/icons/paper-fly.svg') }}" alt="image">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 text-center">
                    <h2>Get the best blog stories into your inbox Connect Us now.</h2>
                    <form class="newsletter-from">
                        <div class="inner-form">
                            <input type="email" placeholder="Enter Your Email...">
                            <button type="submit">Subscribe <svg width="16" height="16" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.6686 7.48076L0.811792 0.623786C0.575226 0.51636 0.292947 0.580359 0.12838 0.783782C-0.0373304 0.987206 -0.0430445 1.27634 0.114666 1.48548L5.00026 7.99961L0.114666 14.5137C-0.0430445 14.7229 -0.0373304 15.0131 0.127237 15.2154C0.238091 15.3537 0.403802 15.428 0.571797 15.428C0.652938 15.428 0.734079 15.4109 0.810649 15.3754L15.6674 8.51845C15.8709 8.42474 16 8.22246 16 7.99961C16 7.77675 15.8708 7.57447 15.6686 7.48076Z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
