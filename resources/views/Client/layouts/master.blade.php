<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from themelooks.us/demo/socifly/html/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 13:30:44 GMT -->

<head>

    @include('Client.layouts.partials.head')
    @yield('css')
</head>

<body class="tt-magic-cursor">

    <header>
        @include('Client.layouts.partials.header-sidebar')
        @include('Client.layouts.partials.header-topbar')
        @include('Client.layouts.partials.header-menu')
    </header>
    @yield('content')

    <footer class="bg-one style-1 style-two">
        @include('Client.layouts.partials.footer')
    </footer>
    @include('Client.layouts.partials.js')

</body>

<!-- Mirrored from demo-egenslab.b-cdn.net/html/blogxton/preview/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jul 2024 08:28:47 GMT -->

</html>
