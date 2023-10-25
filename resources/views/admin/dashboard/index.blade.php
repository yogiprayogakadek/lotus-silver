@extends('admin.template.main')

@section('content')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Hi, welcome {{ auth()->user()->name }}!</h4>
            <p class="mb-0">Your business admin dashboard</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-one card-body text-center align-center">
                <div class="stat-icon py-1 d-inline-block">
                    <i class="ti-layout-grid2 text-pink border-pink"></i>
                </div>
                <div class="d-inline-block mx-4 py-2 ">
                    <div class="stat-text">Product</div>
                    <div class="stat-digit">{{ $product }}</div>
                </div>
            </div>
            <a href="{{route('product.index')}}" class="mb-2 text-center">
                More info
                <i class="ti-arrow-right"></i>
            </a>
        </div>
    </div>

</div>
@endsection
