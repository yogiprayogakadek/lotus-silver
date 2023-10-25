@extends('landingpage.template.main')

@section('content')
<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url({{asset('assets_landingpage/images/home/home_1.JPG')}});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h3>Get Ready!</h3>
                                <p>Now you can join our Silver Class in Sidemen, with exclusive features that will enhance your knowledge and skills about silver.</p>
                                <h2 class="price_class">Only IDR 149.999,-</h2>
                                <p><a href="https://wa.me/6283827982560" target="__blank" class="btn btn-success btn-outline btn-md">Book Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{asset('assets_landingpage/images/home/home_2.JPG')}});">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h3>Quality Materials</h3>
                                <p>Our Silver Class offers exclusive access to high-quality silver materials, so you can create jewelry that is <i><strong>"not only beautiful, but also long-lasting"</strong></i>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{asset('assets_landingpage/images/home/home_3.JPG')}});">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 col-md-push-3 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h3>Experienced Mentor</h3>
                                <p>This class is led by experienced silver jewelry mentors who will share their knowledge and skills to help you create stunning works of silver art.</p>
                                <h2 class="price_class">Only IDR 149.999,-</h2>
                                <p><a href="https://wa.me/6283827982560" target="__blank" class="btn btn-success btn-outline btn-md">Book Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{asset('assets_landingpage/images/home/home_4.JPG')}});">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 col-md-push-3 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h3>Creative Projects and Amazing Results</h3>
                                <p><i><strong>"Push the limits of your creativity"</strong></i> with challenging jewelry making projects and <i><strong>"see the results"</strong></i> become stunning works of silver art.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="fh5co-services" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>Silver Class.</span>
                <h2>Developing Your Skills with Creative Projects</h2>
                <p>In all packages, you will face challenging creative projects that will develop your skills and produce stunning silver jewelry.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 text-center overflow-hidden">
                <div class="feature-center animate-box border" data-animate-effect="fadeIn">
                    <div class="ribbon-wrap">
                        <div class="ribbon">Special Offer!</div>
                    </div>
                    <h2>Essentials</h2>
                    <h2 class="price_class">IDR 149.999,-</h2>
                    <p>This package is the perfect choice for those who want to start their journey in the art of silver jewelry. You will learn the basics of jewelry making and using high-quality materials.</p>
                    <p><a href="https://api.whatsapp.com/send?phone=6283827982560&text=Hello%20admin,%20I%20want%20to%20order%20the%20%22Essentials%22%20silver%20class%20package%20at%20Lotus%20Ayu%20Silver%20-%20Sidemen.%20Can%20you%20provide%20more%20information%3F
                        " target="__blank" class="btn btn-success btn-outline btn-md">Book Now</a></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box border" data-animate-effect="fadeIn">
                    <h2>Artistry</h2>
                    <h2 class="price_class">IDR 299.999,-</h2>
                    <p>In this class, you will step to the next level in creating silver jewelry that is truly unique and will make you feel more challenged in doing it. Include a refreshing welcome drink in your class.</p>
                    <p><a href="https://api.whatsapp.com/send?phone=6283827982560&text=Hello%20admin,%20I%20want%20to%20order%20the%20%22Artistry%22%20silver%20class%20package%20at%20Lotus%20Ayu%20Silver%20-%20Sidemen.%20Can%20you%20provide%20more%20information%3F
                        " target="__blank" class="btn btn-success btn-outline btn-md">Book Now</a></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <div class="feature-center animate-box border" data-animate-effect="fadeIn">
                    <h2>Masterclass</h2>
                    <h2 class="price_class">IDR 499.999,-</h2>
                    <p>This is our premium package for those who want to reach an advanced level in silver jewelry making. You will use selected ingredients and get an exclusive welcome drink.</p>
                    <p><a href="https://api.whatsapp.com/send?phone=6283827982560&text=Hello%20admin,%20I%20want%20to%20order%20the%20%22Masterclass%22%20silver%20class%20package%20at%20Lotus%20Ayu%20Silver%20-%20Sidemen.%20Can%20you%20provide%20more%20information%3F
                        " target="__blank" class="btn btn-success btn-outline btn-md">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-product">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>Products.</span>
                <h2>Variety of Products for Every Taste</h2>
                <p>Whether you are looking for rings, bracelets, earrings, or necklaces, our collection offers a variety of silver jewelry products that will suit a variety of tastes.</p>
            </div>
        </div>
        <div class="row">
            @forelse ($product as $key => $products)
            <div class="col-md-4 text-center animate-box">
                <div class="product">
                    <div class="product-grid" style="background-image:url('{{ asset($products->photo) }}');">
                        <div class="inner">
                            <p>
                                <a href="{{url('/product/'.$products->slug)}}" class="icon"><i class="icon-eye"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="desc">
                        <h3><a href="{{url('/product/'.$products->slug)}}">{{$products->name}}</a></h3>
                        <span class="price_product">IDR {{number_format($products->price,0,'.','.')}}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2 style="color: red">! No Data !</h2>
                </div>
            </div>
            @endforelse
            <div class="text-center animate-box">
                <a href="/product" target="__blank" class="btn btn-primary btn-outline btn-md">View More <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-services" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box row-center">
            <div class="col-md-8 text-center fh5co-heading-mb">
                <span>Sneak Peek.</span>
                <h2><i>"Fun to do it"</i></h2>
            </div>
        </div>
        <div class="row animate-box row-center">
            <div class="col-md-8 text-center">
                <div class="video-container">
                    <iframe class="responsive-iframe" src="{{asset('assets_landingpage/images/home/lotus_ayu.mp4')}}" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
