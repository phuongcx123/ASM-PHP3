@extends('Client/layouts/master')
@section('content')

<section class="contact-section pt-100 pb-100">
    <div class="container">
        <div class="row gy-4 justify-cotnent-center align-items-center">
            <div class="col-lg-5 pe-lg-5 pe-0">
                <div class="contact-box">
                    <div class="title">
                        <h3>Contact Us</h3>
                        <p>Morbi quis elementum ex, id commodo odio. In maximus, augue europea vestibulum gomat.
                        </p>
                    </div>
                    <div class="left-social">
                        <ul>
                            <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="informations">
                        <div class="single-info">
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="info">
                                <a href="tel:05661111985">+880 566 1111 985</a>
                                <a href="tel:06571111576">+880 657 1111 576</a>
                            </div>
                        </div>
                        <div class="single-info">
                            <div class="icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="info">
                                <a
                                    href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#d4bdbab2bb94b1acb5b9a4b8b1fab7bbb9"><span
                                        class="__cf_email__"
                                        data-cfemail="5f363139301f3a273e322f333a713c3032">[email&#160;protected]</span></a>
                                <a
                                    href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#2e474048416e5d5b5e5e415c5a004d4143"><span
                                        class="__cf_email__"
                                        data-cfemail="4f262129200f3c3a3f3f203d3b612c2022">[email&#160;protected]</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="form-title">
                    <h2>Have Any Questions</h2>
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
                                <input type="text" placeholder="Enter Your Subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-inner">
                                <textarea rows="5" placeholder="Enter Your Messege"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="eg-btn btn--primary btn--lg">Send Message</button>
                        </div>
                    </div>
                </form>
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
