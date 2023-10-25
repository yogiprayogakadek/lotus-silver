@extends('admin.template.main')

@section('title')
Create Product |
@endsection

@section('content')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Product</h4>
            <span>Create data product for system</span>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Product</li>
            <li class="breadcrumb-item active">Create Product</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form id="formProduct" class="forms-sample" enctype="multipart/form-data" action="{{route('product.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="product name" onkeyup="createTextSlug()" autofocus>
                            </div>
                            <div class="form-group col-12">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" readonly>
                            </div>
                            <div class="form-group col-12">
                                <label for="description">Description <i>(for preview)</i></label>
                                <input type="text" class="form-control" name="description" placeholder="product description">
                            </div>
                            <div class="form-group col-12">
                                <label for="detail">Detail</label>
                                <textarea class="form-control" name="detail" rows="4" placeholder="product detail"></textarea>
                            </div>
                            <div class="form-group col-12">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="rupiah" name="price" placeholder="product price">
                            </div>
                            <div class="form-group col-12">
                                <label for="photo">Photo Upload</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input type="file" class="form-control" name="photo" id="img" onchange="previewImage()">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('product.index')}}"><button type="button" class="btn btn-light">Cancel</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\ProductRequest', '#formProduct'); !!}

<script>
    function previewImage() {
        const image = document.querySelector('#img');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(img.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>

<script>
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString()
            , split = number_string.split(',')
            , sisa = split[0].length % 3
            , rupiah = split[0].substr(0, sisa)
            , ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

</script>

<script>
    function createTextSlug() {
        var name = document.getElementById("name").value;
        document.getElementById("slug").value = generateSlug(name);
    }

    function generateSlug(text) {
        return text.toString().toLowerCase()
            .replace(/^-+/, '')
            .replace(/-+$/, '')
            .replace(/\s+/g, '-')
            .replace(/\-\-+/g, '-')
            .replace(/[^\w\-]+/g, '');
    }

</script>

@endsection
