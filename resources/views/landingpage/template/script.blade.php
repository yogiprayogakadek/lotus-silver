<!-- jQuery -->
<script src="{{asset('assets_landingpage/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('assets_landingpage/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets_landingpage/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('assets_landingpage/js/jquery.waypoints.min.js')}}"></script>
<!-- Carousel -->
<script src="{{asset('assets_landingpage/js/owl.carousel.min.js')}}"></script>
<!-- countTo -->
<script src="{{asset('assets_landingpage/js/jquery.countTo.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('assets_landingpage/js/jquery.flexslider-min.js')}}"></script>
<!-- Main -->
<script src="{{asset('assets_landingpage/js/main.js')}}"></script>

{{-- NEW --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> --}}

<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 0) {
            navbar.classList.add('sticky-navbar');
        } else {
            navbar.classList.remove('sticky-navbar');
        }
    });

</script>


@yield('script')
