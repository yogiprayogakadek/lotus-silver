@extends('landingpage.template.main')

@section('title')
Product -
@endsection

@section('content')
{{-- HEADER --}}
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('assets_landingpage/images/banner_product.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- PRODUCT LIST --}}
<div id="fh5co-product">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>List of Products.</span>
                <h2>Jewelry Suitable for All Occasions</h2>
                <p>No matter whether you are looking for jewelry for everyday, party or special gifts, we have a product to suit every occasion.</p>
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
        </div>
    </div>
</div>

@endsection
