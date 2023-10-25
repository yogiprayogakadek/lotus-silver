@extends('landingpage.template.main')

@section('title')
Class -
@endsection

@section('content')
{{-- HEADER --}}
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('assets_landingpage/images/banner_class.JPG')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Class</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- CLASS DETAIL --}}
<div id="fh5co-services" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>Class details.</span>
                <h2>Inspiration and Unique Designs</h2>
                <p>Explore the world of jewelry design and find inspiration from various cultures. Create unique silver jewelry that reflects your character and personality.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url('{{asset('assets_landingpage/images/class/silver_class_1.jpg')}}');" alt="Photo of Essentials Silver Class">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="feature-center animate-box border" data-animate-effect="fadeIn">
                    <h2>Essentials</h2>
                    <p>The “Silver Essentials” package is the perfect choice for those who want to start their journey in the art of silver jewelry. In this class, you will understand the basics of silver jewelry making and get a comprehensive introduction to basic techniques. Each step of the jewelry making process will be taught in detail, and you will use quality materials to make your first piece of jewelry. This package includes training materials, expert guidance, and the opportunity to create stunning simple silver jewelry. This is the perfect opportunity to get closer to the art of silver jewellery.</p>
                    <h2 class="price_class">IDR 149.999,-</h2>
                    <p><a href="https://api.whatsapp.com/send?phone=6283827982560&text=Hello%20admin,%20I%20want%20to%20order%20the%20%22Essentials%22%20silver%20class%20package%20at%20Lotus%20Ayu%20Silver%20-%20Sidemen.%20Can%20you%20provide%20more%20information%3F
                        " target="__blank" class="btn btn-success btn-outline btn-md">Book Now</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url('{{asset('assets_landingpage/images/class/silver_class_2.jpg')}}');" alt="Photo of Artistry Silver Class">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="feature-center animate-box border" data-animate-effect="fadeIn">
                    <h2>Artistry</h2>
                    <p>The “Silver Artistry” package is an exclusive option for those who wish to pursue finesse and beauty in the art of silver jewelry. In this class, you will step to the next level in creating truly unique silver jewelry. Guided by experienced mentors, you will understand advanced techniques in silver jewelery and get the opportunity to design and create stunning works of jewelery art. In addition to high-quality ingredients and in-depth guidance, this package also includes an exclusive welcome drink to create a relaxed and inspiring atmosphere in the classroom.</p>
                    <h2 class="price_class">IDR 299.999,-</h2>
                    <p><a href="https://api.whatsapp.com/send?phone=6283827982560&text=Hello%20admin,%20I%20want%20to%20order%20the%20%22Artistry%22%20silver%20class%20package%20at%20Lotus%20Ayu%20Silver%20-%20Sidemen.%20Can%20you%20provide%20more%20information%3F
                        " target="__blank" class="btn btn-success btn-outline btn-md">Book Now</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url('{{asset('assets_landingpage/images/class/silver_class_3.jpg')}}');" alt="Photo of Masterclass Silver Class">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="feature-center animate-box border" data-animate-effect="fadeIn">
                    <h2>Masterclass</h2>
                    <p>The "Silver Masterclass" package is our premium option that promises the best experience in making silver jewelry. In this class, you will dig deeper into the art of silver jewelry with detailed training materials and intensive practice. You will use selected materials to create unique and beautiful silver jewelry. Guided by experienced mentors in the jewelry industry, you will gain in-depth insight into advanced techniques in jewelry making. In addition to high-quality ingredients and an exclusive welcome drink, this package includes the opportunity to create an impressive work of silver jewelery art.</p>
                    <h2 class="price_class">IDR 499.999,-</h2>
                    <p><a href="https://api.whatsapp.com/send?phone=6283827982560&text=Hello%20admin,%20I%20want%20to%20order%20the%20%22Masterclass%22%20silver%20class%20package%20at%20Lotus%20Ayu%20Silver%20-%20Sidemen.%20Can%20you%20provide%20more%20information%3F
                        " target="__blank" class="btn btn-success btn-outline btn-md">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
