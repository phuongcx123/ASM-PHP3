@extends('Client/layouts/master')
@section('content')

<section class="about-us-title">
    <div class="container">
        <h1>
            Creative magazine, design
            <strong>
                <img src="{{ asset('theme/client/theme/client/assets/images/about/about-title-icon.svg') }}" alt>
                focused
            </strong>
            article solutions
        </h1>
    </div>
</section>


<section class="about-us mb-100">
    <div class="container">
        <div class="about-us-head">
            <div class="section-title-1">
                <div class="subtitle">
                    <svg width="11" height="14" viewBox="0 0 11 14" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.15888 13.1844C8.73336 10.6029 8.07416 7.35423 5.59136 5.46029C5.58991 5.45922 5.58846 5.45788 5.5873 5.45708L5.59803 5.48172L5.59629 5.5002C6.08003 6.68033 6.01217 7.97589 5.41793 9.08745L4.99915 9.87117L4.87068 9.00522C4.78338 8.41784 4.54354 7.85751 4.17407 7.3778H4.11578L4.08503 7.29744C4.08938 8.19499 3.88464 9.07915 3.48297 9.91322C2.95602 11.0047 3.03345 12.2633 3.69033 13.2806L4.14362 13.9829L3.3281 13.6647C1.98331 13.1399 0.908237 12.1291 0.378384 10.8914C-0.215271 9.50931 -0.105357 7.90679 0.672747 6.6056C1.07847 5.92875 1.36269 5.21012 1.51784 4.46926L1.66952 3.74314L2.0564 4.39079C2.24113 4.69961 2.37715 5.03388 2.46154 5.38503L2.47024 5.39333L2.47923 5.44958L2.48765 5.44717C3.64654 4.02518 4.34083 2.25579 4.44204 0.464176L4.46814 0L4.88982 0.253917C6.61075 1.28967 7.80589 2.95139 8.17508 4.81853L8.18349 4.85684L8.18784 4.86273L8.20669 4.83809C8.54398 4.42668 8.72204 3.93732 8.72204 3.42226V2.62461L9.2432 3.26048C10.4549 4.73845 11.0761 6.57185 10.9926 8.42319C10.8899 10.6024 9.6031 12.5151 7.5501 13.5514L6.66121 14L7.15888 13.1844Z" />
                    </svg>
                    <span>Who We Are</span>
                </div>
                <h2>Unleashing Creativity: A Glimpse of our work's in the World</h2>
            </div>
        </div>
        <div class="about-us-wrapper">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="about-us-left">
                        <p>vestibulum gomat dictum, lorem nibh faucibus quam, non mattis dutoma augue ac quam. Donec
                            placeratena nibh ac turpis cursus, ut blandit ante ullamcorper. Pellentesque lorem nisl,
                            vehiculalut quis libero in, dignissimi fringilla odio. Vivamus congue commodo euismod.
                            Integer ac purusantut aliquam, dapibus ipsum vel, accumsan massa. Proin imperdiet,
                            lectusont nonprotai convallis pretium, justo dui rhoncus nunc, non vestibulum urna augue
                            sed libero. andt Mauris sed sagittis dolor. Suspendisse europeana tincidunt purus,
                            tristique rhoncu.</p>
                        <img src="{{ asset('theme/client/assets/images/about/about-left-img.jpg') }}" alt>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-right">
                        <div class="about-us-right-img">
                            <div class="swiper about-us-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{ asset('theme/client/assets/images/about/about-right-img1.jpg') }}" alt>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('theme/client/assets/images/about/about-right-img2.jpg') }}" alt>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('theme/client/assets/images/about/about-right-img3.jpg') }}" alt>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{ asset('theme/client/assets/images/about/about-right-img4.jpg') }}" alt>
                                    </div>
                                </div>
                            </div>
                            <div class="about-us-slider-btn">
                                <div class="about-us-prev">
                                    <i class="bi bi-arrow-left"></i>
                                </div>
                                <div class="about-us-next">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="counter-area">
                            <div class="row g-lg-0 gy-4">
                                <div
                                    class="col-lg-3 col-sm-3 col-6 d-flex jusify-content-sm-start justify-content-center">
                                    <div class="single-counter">
                                        <div class="icon">
                                            <img src="{{ asset('theme/client/assets/images/about/about-counter-icon1.svg') }}" alt>
                                        </div>
                                        <div class="content">
                                            <div class="number">
                                                <h3 class="counter2">10.39</h3>
                                                <h3>k</h3>
                                            </div>
                                            <p>Perfect Posts</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-sm-3 col-6 d-flex jusify-content-sm-start justify-content-center">
                                    <div class="single-counter">
                                        <div class="icon">
                                            <img src="{{ asset('theme/client/assets/images/about/about-counter-icon2.svg') }}" alt>
                                        </div>
                                        <div class="content">
                                            <div class="number">
                                                <h3 class="counter2">19</h3>
                                                <h3>k</h3>
                                            </div>
                                            <p>Social Shares</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-sm-3 col-6 d-flex jusify-content-sm-start justify-content-center">
                                    <div class="single-counter">
                                        <div class="icon">
                                            <img src="{{ asset('theme/client/assets/images/about/about-counter-icon3.svg') }}" alt>
                                        </div>
                                        <div class="content">
                                            <div class="number">
                                                <h3 class="counter2">320</h3>
                                            </div>
                                            <p>Super Authors</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-sm-3 col-6 d-flex jusify-content-sm-start justify-content-center">
                                    <div class="single-counter">
                                        <div class="icon">
                                            <img src="{{ asset('theme/client/assets/images/about/about-counter-icon4.svg') }}" alt>
                                        </div>
                                        <div class="content">
                                            <div class="number">
                                                <h3 class="counter2">25.7</h3>
                                                <h3 class>k</h3>
                                            </div>
                                            <p>Daily Visitors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="update pb-100">
    <div class="container">
        <div class="update-wrapper">
            <div class="update-image">
                <img src="{{ asset('theme/client/assets/images/bg/update-girl.png   ') }}" alt>
            </div>
            <div class="row justify-content-start">
                <div class="col-lg-8">
                    <div class="update-content">
                        <div class="section-title-1">
                            <div class="subtitle justify-content-center">
                                <svg width="11" height="14" viewBox="0 0 11 14" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.15888 13.1844C8.73336 10.6029 8.07416 7.35423 5.59136 5.46029C5.58991 5.45922 5.58846 5.45788 5.5873 5.45708L5.59803 5.48172L5.59629 5.5002C6.08003 6.68033 6.01217 7.97589 5.41793 9.08745L4.99915 9.87117L4.87068 9.00522C4.78338 8.41784 4.54354 7.85751 4.17407 7.3778H4.11578L4.08503 7.29744C4.08938 8.19499 3.88464 9.07915 3.48297 9.91322C2.95602 11.0047 3.03345 12.2633 3.69033 13.2806L4.14362 13.9829L3.3281 13.6647C1.98331 13.1399 0.908237 12.1291 0.378384 10.8914C-0.215271 9.50931 -0.105357 7.90679 0.672747 6.6056C1.07847 5.92875 1.36269 5.21012 1.51784 4.46926L1.66952 3.74314L2.0564 4.39079C2.24113 4.69961 2.37715 5.03388 2.46154 5.38503L2.47024 5.39333L2.47923 5.44958L2.48765 5.44717C3.64654 4.02518 4.34083 2.25579 4.44204 0.464176L4.46814 0L4.88982 0.253917C6.61075 1.28967 7.80589 2.95139 8.17508 4.81853L8.18349 4.85684L8.18784 4.86273L8.20669 4.83809C8.54398 4.42668 8.72204 3.93732 8.72204 3.42226V2.62461L9.2432 3.26048C10.4549 4.73845 11.0761 6.57185 10.9926 8.42319C10.8899 10.6024 9.6031 12.5151 7.5501 13.5514L6.66121 14L7.15888 13.1844Z" />
                                </svg>
                                <span>Get Every Update</span>
                            </div>
                            <h2>Become An Author And Share
                                Your Great Stories.</h2>
                        </div>
                        <a href="#" class="eg-btn btn--primary btn--lg">Become An Author</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonial mb-100">
    <div class="container">
        <div class="row align-items-center mb-40">
            <div class="col-lg-9">
                <div class="section-title-1">
                    <h2>Testimonial</h2>
                    <div class="subtitle">
                        <svg width="11" height="14" viewBox="0 0 11 14" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.15888 13.1844C8.73336 10.6029 8.07416 7.35423 5.59136 5.46029C5.58991 5.45922 5.58846 5.45788 5.5873 5.45708L5.59803 5.48172L5.59629 5.5002C6.08003 6.68033 6.01217 7.97589 5.41793 9.08745L4.99915 9.87117L4.87068 9.00522C4.78338 8.41784 4.54354 7.85751 4.17407 7.3778H4.11578L4.08503 7.29744C4.08938 8.19499 3.88464 9.07915 3.48297 9.91322C2.95602 11.0047 3.03345 12.2633 3.69033 13.2806L4.14362 13.9829L3.3281 13.6647C1.98331 13.1399 0.908237 12.1291 0.378384 10.8914C-0.215271 9.50931 -0.105357 7.90679 0.672747 6.6056C1.07847 5.92875 1.36269 5.21012 1.51784 4.46926L1.66952 3.74314L2.0564 4.39079C2.24113 4.69961 2.37715 5.03388 2.46154 5.38503L2.47024 5.39333L2.47923 5.44958L2.48765 5.44717C3.64654 4.02518 4.34083 2.25579 4.44204 0.464176L4.46814 0L4.88982 0.253917C6.61075 1.28967 7.80589 2.95139 8.17508 4.81853L8.18349 4.85684L8.18784 4.86273L8.20669 4.83809C8.54398 4.42668 8.72204 3.93732 8.72204 3.42226V2.62461L9.2432 3.26048C10.4549 4.73845 11.0761 6.57185 10.9926 8.42319C10.8899 10.6024 9.6031 12.5151 7.5501 13.5514L6.66121 14L7.15888 13.1844Z" />
                        </svg>
                        <span>Author Say</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-end">
                <div
                    class="slider-arrows arrow-style-1 text-center d-lg-flex d-none flex-row justify-content-center align-items-center gap-4">
                    <div class="testimonial-prev swiper-next-arrow" tabindex="0" role="button"
                        aria-label="Next slide">
                        <i class="bi bi-arrow-left"></i>
                    </div>
                    <div class="testimonial-next swiper-prev-arrow" tabindex="0" role="button"
                        aria-label="Previous slide">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card-img">
                                    <img src="{{ asset('theme/client/assets/images/about/testimonial-card-img1.jpg') }}" alt>
                                </div>
                                <div class="testimonial-card-content">
                                    <p>"I work with Alguneb Johnl on many projects, he always tolda exceei my
                                        expectations with his quality work and fastestopa service, veryal smooth and
                                        simple communication."</p>
                                    <h4>Leslie Alexander</h4>
                                    <span>Author</span>
                                    <div class="testimonial-card-quotes">
                                        <img src="{{ asset('theme/client/assets/images/about/testimonial-quotes.svg') }}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card-img">
                                    <img src="{{ asset('theme/client/assets/images/about/testimonial-card-img2.jpg') }}" alt>
                                </div>
                                <div class="testimonial-card-content">
                                    <p>"I work with Alguneb Johnl on many projects, he always tolda exceei my
                                        expectations with his quality work and fastestopa service, veryal smooth and
                                        simple communication."</p>
                                    <h4>Mark Jaction</h4>
                                    <span>Author</span>
                                    <div class="testimonial-card-quotes">
                                        <img src="{{ asset('theme/client/assets/images/about/testimonial-quotes.svg') }}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card-img">
                                    <img src="{{ asset('theme/client/assets/images/about/testimonial-card-img3.jpg') }}" alt>
                                </div>
                                <div class="testimonial-card-content">
                                    <p>"I work with Alguneb Johnl on many projects, he always tolda exceei my
                                        expectations with his quality work and fastestopa service, veryal smooth and
                                        simple communication."</p>
                                    <h4>Harry Kane</h4>
                                    <span>Author</span>
                                    <div class="testimonial-card-quotes">
                                        <img src="{{ asset('theme/client/assets/images/about/testimonial-quotes.svg"') }} alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-card-img">
                                    <img src="{{ asset('theme/client/assets/images/about/testimonial-card-img4.jpg') }}" alt>
                                </div>
                                <div class="testimonial-card-content">
                                    <p>"I work with Alguneb Johnl on many projects, he always tolda exceei my
                                        expectations with his quality work and fastestopa service, veryal smooth and
                                        simple communication."</p>
                                    <h4>Luka Modric</h4>
                                    <span>Author</span>
                                    <div class="testimonial-card-quotes">
                                        <img src="{{ asset('theme/client/assets/images/about/testimonial-quotes.svg') }}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
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
