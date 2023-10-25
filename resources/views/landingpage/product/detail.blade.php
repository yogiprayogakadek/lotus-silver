@extends('landingpage.template.main')

@section('title')
Product Detail -
@endsection

@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('assets_landingpage/images/banner_product_detail.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Product Detail</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-product">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-10 col-md-offset-1 animate-box">
                @forelse ($product as $key => $products)
                <h2 class="title_product">{{$products->name}}</h2>
                <figure class="mb-2">
                    <img class="img-responsive center-block mb-2" src="{{asset($products->photo)}}" alt="Picture of {{$products->name}}">
                </figure>
                <span class="product_price">IDR {{number_format($products->price,0,'.','.')}}</span>
                <h2 class="description_product"><i>{{$products->description}}</i></h2>
                <p>{{$products->detail}}</p>
                @empty
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2 style="color: red">! No Data !</h2>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>



@endsection
