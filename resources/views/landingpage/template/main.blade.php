<!DOCTYPE HTML>
<html>
<head>
    @include('landingpage.template.head')

</head>
<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        @include('landingpage.template.navbar')

        @yield('content')

        @include('landingpage.template.footer')
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    @include('landingpage.template.script')

</body>
</html>
