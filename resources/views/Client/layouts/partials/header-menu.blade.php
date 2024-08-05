{{-- menu --}}
<header class="header-area style-2">
    <div class="header-wrap">
        <div class="main-nav">
            <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                <div class="mobile-logo-wrap">
                    <a href="#"><img alt="image" class="img-fluid"
                            src="{{ asset('theme/client/assets/images/logo/logo-3.svg') }}"></a>
                </div>
                <div class="menu-close-btn">
                    <i class="bi bi-x-lg text-dark"></i>
                </div>
            </div>
            <ul class="menu-list">
                <li class="menu-item-has-children">
                    <a href="{{ route('home') }}" class="active"> Trang Chủ </a>
                </li>

                <li class="menu-item-has-children">
                    <a href="{{ route('post') }}" class="drop-down active">Các Chủ Đề</a><i
                        class="bi bi-chevron-down dropdown-icon"></i>
                    <ul class="sub-menu">
                        @foreach($cate as $i )
                            <li><a href="{{ route('cate' , $i->id ) }}">{{$i -> name}}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="{{ route('about') }}">Giới Thiệu</a>
                </li>

                <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
            </ul>

        </div>
        <div class="header-logo">
            <a href="{{ route('home') }}"><img alt="image" class="img-fluid"
                    src="{{ asset('theme/client/assets/images/logo/logo-3.svg') }}"></a>
        </div>
        <div class="nav-right">
            <ul class="social-1">
                <li>
                    <a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i>6.5K</a>
                </li>
                <li>
                    <a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i>3.5K</a>
                </li>
                <li>
                    <a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i>2.1K</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i>1.9K</a>`
                </li>
            </ul>
            <div class="mobile-menu-btn d-lg-none d-flex">
                <i class="bi bi-list text-dark"></i>
            </div>
        </div>
    </div>
</header>
{{-- Kêt thức menu --}}
