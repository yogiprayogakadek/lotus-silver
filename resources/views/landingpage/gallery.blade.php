@extends('landingpage.template.main')

@section('head')
<link rel="stylesheet" href="{{asset('asset_gallery/css/style.css')}}">
<link rel="stylesheet" href="{{asset('asset_gallery/css/lightbox.css')}}">
@endsection

@section('title')
Gallery -
@endsection

@section('content')
{{-- HEADER --}}
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('assets_landingpage/images/banner_gallery.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- GALLERY --}}

<div id="fh5co-product" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_1.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_1.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_2.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_2.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_3.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_3.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_4.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_4.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_5.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_5.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_6.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_6.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_7.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_7.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_8.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_8.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_9.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_9.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_10.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_10.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_11.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_11.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_12.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_12.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_13.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_13.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_14.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_14.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="gallery gallery-3">
                    <div class="gallery-g text-center">
                        <a href="{{asset('assets_landingpage/images/gallery/gallery_15.jpg')}}" data-lightbox="models" data-title="picture in gallery">
                            <img src="{{asset('assets_landingpage/images/gallery/gallery_15.jpg')}}" alt="picture in gallery">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('asset_gallery/js/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
@endsection
