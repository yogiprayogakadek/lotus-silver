@extends('landingpage.template.main')

@section('title')
Craftsman -
@endsection

@section('content')
{{-- HEADER --}}
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('assets_landingpage/images/banner_craftsman.JPG')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Craftsman</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- CRAFTSMAN PROFILE --}}

<div id="fh5co-about">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>Silver Production</span>
                <h2>Meet Our Mentor</h2>
                <p>Behind each of our beautiful silver jewelry, there are the talented hands of a silversmith who has been dedicated to this art for many years.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 animate-box" data-animate-effect="fadeIn">
                <div class="fh5co-staff">
                    <img src="{{asset('assets_landingpage/images/craftsman/nyoman_sugita.jpg')}}" alt="Nyoman Sugita">
                    <h3>Nyoman Sugita</h3>
                    <strong class="role">Silver and Gold</strong>
                    <p>Master silver and gold craftsman from Dukuh Sangkan Gunung village, Bali. Despite having no formal education, his dedication to the art led him to become a dazzling expert. In his 35 year career, he has created many valuable pieces of silver and gold jewelry. Apart from that, he also has valuable experience in various silver companies in Bali, which shows his level of expertise in the art of silver and gold crafts.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 animate-box" data-animate-effect="fadeIn">
                <div class="fh5co-staff">
                    <img src="{{asset('assets_landingpage/images/craftsman/haris.jpg')}}" alt="Haris">
                    <h3>Haris</h3>
                    <strong class="role">Silver</strong>
                    <p>Experienced silversmith, has been pursuing his artistic career for over 25 years. He began his silver art journey in Lumajang, East Java, before moving to Bali Island in 1999. Over the course of his career, he has created a variety of professional and impressive silver crafts. Based on his experience, he is the perfect choice if you are looking for high-quality silver crafts. He is always committed to providing unique and stunning silver crafts.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-about">
    <div class="container">
        <div class="row animate-box mb-2 row-center">
            <div class="col-md-6 col-md-push-6">
                <div class="desc">
                    <h3>Skills and Experience</h3>
                    <p>Years of proven craftsmanship are the foundation of every piece of silver art we produce. Our silversmiths, with over two decades of experience in the art of silver, have understood every nuance in the process of creating exceptional silver jewelry. The high skill and dedication possessed by our team guarantees that every piece of jewelry we create is a reliable, high quality and impressive handicraft product.</p>
                </div>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <div class="product">
                    <div class="product-grid" style="background-image:url('{{asset('assets_landingpage/images/craftsman/section_1.JPG')}}');" alt="craftsmen are working">
                    </div>
                </div>
            </div>
        </div>
        <div class="row animate-box row-center">
            <div class="col-md-6">
                <div class="desc">
                    <h3>Creativity in Every Work</h3>
                    <p>Creativity is the soul of every silver jewelry we create. Our craftsmen are not only skilled in jewelry making techniques, but are also full of inspiration to create mesmerizing works of art. Each piece of jewelery is a testament to our ability to combine traditional elements with stunning innovation. We believe that every piece of silver jewelry should reflect uniqueness and personal expression, and that is what we always convey through each of our pieces.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product">
                    <div class="product-grid" style="background-image:url('{{asset('assets_landingpage/images/craftsman/section_2.JPG')}}');" alt="making silver rings">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container animate-box">
    <div class="owl-carousel owl-carousel-new mb-5">
        <div class="items">
            <img src="{{asset('assets_landingpage/images/craftsman/craftsman_1.jpg')}}" alt="craftsman gallery">
        </div>
        <div class="items">
            <img src="{{asset('assets_landingpage/images/craftsman/craftsman_2.jpg')}}" alt="craftsman gallery">
        </div>
        <div class="items">
            <img src="{{asset('assets_landingpage/images/craftsman/craftsman_3.jpg')}}" alt="craftsman gallery">
        </div>
        <div class="items">
            <img src="{{asset('assets_landingpage/images/craftsman/craftsman_4.jpg')}}" alt="craftsman gallery">
        </div>
        <div class="items">
            <img src="{{asset('assets_landingpage/images/craftsman/craftsman_5.jpg')}}" alt="craftsman gallery">
        </div>
        <div class="items">
            <img src="{{asset('assets_landingpage/images/craftsman/craftsman_6.jpg')}}" alt="craftsman gallery">
        </div>
        <div class="items">
            <img src="{{asset('assets_landingpage/images/craftsman/craftsman_7.jpg')}}" alt="craftsman gallery">
        </div>
    </div>
</div>
@endsection
