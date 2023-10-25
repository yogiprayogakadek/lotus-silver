@extends('landingpage.template.main')

@section('title')
About Us -
@endsection

@section('content')
{{-- HEADER --}}
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('assets_landingpage/images/banner_about_us.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- ABOUT US AND CONTACT --}}
<div id="fh5co-about">
    <div class="container">
        <div class="row animate-box mb-2 row-center">
            <div class="col-md-6 mb-3 bg-video">
                <div class="video-container">
                    <iframe class="responsive-iframe" src="{{asset('assets_landingpage/images/about/lotus_ayu_silver_2.mov')}}" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="desc">
                    <h3>Lotus Ayu Silver</h3>
                    <p>Our shop which is located on Jl. Sangkan Gunung, Sidemen, Karangasem - Bali - Indonesia has been operating since 1989. We have a large selection of silver jewelry in our gallery. So, it is very easy for customers who want to visit and see the traditional jewelry making process with an emphasis on handmade techniques. This is the first step in growing customer confidence that all the products we make are handmade and have competitive quality.</p>
                </div>
            </div>
        </div>
        <div class="row animate-box mb-2 row-center">
            <div class="col-md-6 col-md-push-6">
                <div class="product">
                    <div class="product-grid" style="background-image:url('{{asset('assets_landingpage/images/about/about_1.JPG')}}');" alt="beautiful silver jewelry">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <div class="desc">
                    <h3>Silver Class</h3>
                    <p>We believe that the beauty of silver should be shared. Therefore, we offer a variety of silversmith classes that allow you to understand the creative process behind each piece of jewelry we create. In these classes, you will understand advanced techniques, gain in-depth insight into silver art, and create your own unique silver jewelry.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="fa fa-cogs"></i>
                    </span>
                    <h3>Experienced Mentors</h3>
                    <p>Our team has experienced silversmiths who will guide you with in-depth knowledge in the art of silver, ensuring you receive valuable guidance to develop your skills.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="fa fa-life-ring"></i>
                    </span>
                    <h3>Quality Products</h3>
                    <p>We emphasize the highest quality in every silver product we create, with quality materials and attention to detail to ensure that every piece of jewelry we produce exudes beauty and durability.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i class="fa fa-usd"></i>
                    </span>
                    <h3>Competitive Prices</h3>
                    <p>We offer competitive prices for our silversmith grades and silver products. We believe that quality silver art doesn't have to be expensive, so we are committed to providing the best value to our customers.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
