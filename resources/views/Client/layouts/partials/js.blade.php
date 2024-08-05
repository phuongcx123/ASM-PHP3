<script src="{{ asset('theme/client/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('theme/client/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('theme/client/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://unpkg.com/wavesurfer.js@7.8.1"></script>
<script src="{{ asset('theme/client/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('theme/client/assets/js/jquery.nice-select.js') }}"></script>
<script src="{{ asset('theme/client/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('theme/client/assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('theme/client/assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('theme/client/assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('theme/client/assets/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('theme/client/assets/js/slick.js') }}"></script>
<script src="{{ asset('theme/client/assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('theme/client/assets/js/main.js') }}"></script>

<script>
    // Hàm để lấy ngày và giờ hiện tại ở múi giờ UTC+7 (Việt Nam)
    function getVietnamTime() {
        const now = new Date();
        const vietnamTime = new Date(now.toLocaleString('en-US', { timeZone: 'Asia/Ho_Chi_Minh' }));

        const year = vietnamTime.getFullYear();
        const month = vietnamTime.toLocaleString('vi-VN', { month: 'long' });
        const day = vietnamTime.getDate();


        return `Ngày ${day} ${month} , ${year}`;
    }


    const dateTimeDiv = document.querySelector('.date-time');
    dateTimeDiv.innerHTML = getVietnamTime();
</script>
