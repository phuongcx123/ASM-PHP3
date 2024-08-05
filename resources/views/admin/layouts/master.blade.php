<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('admin.layouts.partials.head')
    @yield('css')
</head>

<body>

<!--start header-->
<header class="top-header">
    @include('admin.layouts.partials.header')
</header>
<!--end top header-->


<!--start sidebar-->
<aside class="sidebar-wrapper" data-simplebar="true">
    @include('admin.layouts.partials.header-sidebar')
    @include('admin.layouts.partials.header-sidebar-nav')
</aside>
<!--end sidebar-->

<!--start main wrapper-->
<main class="main-wrapper">
    @yield('content')
</main>
<!--end main wrapper-->

<!--start overlay-->
<div class="overlay btn-toggle"></div>
<!--end overlay-->

<!--start footer-->
<footer class="page-footer">
    <p class="mb-0">Copyright © 2024. All right reserved.</p>
</footer>
<!--end footer-->


@include('admin.layouts.partials.dasboard-cart')
@include('admin.layouts.partials.js')
@yield('js-new')
</body>
</html>
