<div class="mobile-search">
    <div class="container">
       <form action="{{ route('tim') }}" method="POST">
        @csrf
        <div class="row d-flex justify-content-center gy-4">
            <div class="col-10">
                <label>Bạn muốn tìm kiếm </label>
                <input type="text" name="blog" placeholder="Tìm Kiếm Chủ Đề , Bài Viết ...">
            </div>
            <div class="col-2 d-flex justify-content-end align-items-sm-center align-items-end gap-2">

                   <button type="submit">   <div class="search-cross-btn"><i class="bi bi-search"></i>  </div></button>

                <div class="search-cross-btn">
                    <i class="bi bi-x-lg"></i>
                </div>
            </div>
        </div>
       </form>
    </div>
</div>

<div class="topbar-2 d-lg-flex d-none">
    <div class="container1 d-flex justify-content-between align-items-center">
        <div class="date-time"></div>
        <div class="topbar-right">
            <div class="search-btn"><i class="bi bi-search"></i></div>
            <div class="admin-area">
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Đăng nhập</a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Đăng ký </a>
                    @endif
                @else
                    <button class=" dropdown-toggle d-flex jusify-content-start align-items-center" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i>  <div class="date ms-2"> {{ Auth::user()->name }}</div>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item " href="{{ route('profile') }}"><i class="bi bi-person"></i>Thông tin cá nhân </a></li>

                    @if ( Auth::user()->roles == 'admin')
                    <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}"><i class="bi bi-file-lock"></i>Trang quản trị </a></li>
                    @endif

                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item text-white" ><i class="bi bi-box-arrow-left"></i>Đăng xuất</button>
                            </form>
                        </li>
                    </ul>
                @endguest
            </div>




            <div class="sidebar-button mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
