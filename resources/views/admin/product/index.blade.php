@extends('admin.template.main')

@section('title')
Product |
@endsection

@section('content')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Product</h4>
            <span>All data product in system</span>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Product</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @can('admin')
                <div class="row">
                    <div class="col-auto mr-auto"></div>
                    <div class="col-auto">
                        <a href="{{route('product.create')}}">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Create Data
                            </button>
                        </a>
                    </div>
                </div>
                @endcan
                <br>
                <div class="table-responsive">
                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                {{-- <th>Detail</th> --}}
                                <th>Price</th>
                                <th>Photo</th>
                                @can('admin')
                                <th>Action</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td style=" word-break: break-word; vertical-align: center; white-space: normal !important;">
                                    {{$data->name}}
                                </td>
                                <td>{{$data->description}}</td>
                                {{-- <td>{{$data->detail}}</td> --}}
                                <td>Rp. {{number_format($data->price,0,'.','.')}}</td>
                                <td>
                                    <img src="{{asset($data->photo)}}" width="70px">
                                </td>
                                @can('admin')
                                <td>
                                    <a href="{{route('product.edit', $data->id_product)}}">
                                        <button type="button" class="btn btn-social-icon btn-facebook">
                                            <i class="ti-pencil"></i>
                                        </button>
                                    </a>
                                    <button class="btn btn-social-icon btn-youtube btn-delete" data-id="{{$data->id_product}}">
                                        <i class="ti-trash"></i>
                                    </button>
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- <div class="table-responsive">
                <table id="data_table_product" class="table table-striped table-bordered" style="width:100%; table-layout:auto">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Detail</th>
                            <th>Price</th>
                            <th>Photo</th>
                            @can('admin')
                            <th>Action</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                <td style=" word-break: break-word; vertical-align: center; white-space: normal !important;">
                    {{$data->name}}
                </td>
                <td>{{$data->description}}</td>
                <td>{{$data->detail}}</td>
                <td>Rp. {{number_format($data->price,0,'.','.')}}</td>
                <td>
                    <img src="{{asset($data->photo)}}" width="70px">
                </td>
                @can('admin')
                <td>
                    <a href="{{route('product.edit', $data->id_product)}}">
                        <button type="button" class="btn btn-social-icon btn-facebook">
                            <i class="ti-pencil"></i>
                        </button>
                    </a>
                    <button class="btn btn-social-icon btn-youtube btn-delete" data-id="{{$data->id_product}}">
                        <i class="ti-trash"></i>
                    </button>
                </td>
                @endcan
                </tr>
                @endforeach
                </tbody>
                </table>
            </div> --}}
        </div>
    </div>
</div>
</div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#data_table_product').DataTable();

        @if(session('status') == 'success')
        toastr.options = {
            "closeButton": true
            , "progressBar": true
        }
        toastr.success("{{ session('message') }}");
        @elseif(session('status') == 'error')
        toastr.options = {
            "closeButton": true
            , "progressBar": true
        }
        toastr.error("{{ session('message') }}");
        @endif

        // delete
        $('body').on('click', '.btn-delete', function() {
            let id = $(this).data('id')
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                , }
            , });
            Swal.fire({
                title: 'Are you sure?'
                , text: "Deleted data cannot be recovered!"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , confirmButtonText: 'Yes, delete!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "get"
                        , url: "/control/product/delete/" + id
                        , dataType: "json"
                        , success: function(response) {
                            Swal.fire(
                                response.title
                                , response.message
                                , response.status
                            );

                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        }
                        , error: function(error) {
                            console.log("Error", error);
                        }
                    , });
                }
            })
        });
    });

</script>
