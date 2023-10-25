@extends('landingpage.template.main')

@section('title')
Product -
@endsection

@section('content')
{{-- SLIDER --}}
<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url({{asset('assets_landingpage/images/img_bg_4.jpg')}});">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <span class="price">$540</span>
                                <h2>The WW Chair</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{asset('assets_landingpage/images/img_bg_3.jpg')}});">
                <div class="container">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <span class="price">$750</span>
                                <h2>Alato Cabinet</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                <p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

{{-- PRODUCT DETAIL --}}


@endsection
