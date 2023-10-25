<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Admin Panel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets_admin/images/logo/logo_white.png')}}">
    <link href="{{asset('assets_admin/css/style.css')}}" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <img class="mx-auto d-block mb-2" src="{{asset('assets_admin/images/logo/logo_black.png')}}" style="height:100px;">
                                    <h4 class="text-center mb-4">Admin Panel</h4>
                                    <form name="user" id="user" class="forms-sample" action="{{route('login')}}" method='POST'>
                                        @if (session()->has('error'))
                                        <div class="alert alert-danger alert-dismissable fade show" role="alert">
                                            {{ session('error') }}
                                        </div>
                                        @endif
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="enter email" value="{{ old('email') }}" autofocus required>
                                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" placeholder="enter password" value="{{ old('password') }}">
                                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Log in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assets_admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('assets_admin/js/quixnav-init.js')}}"></script>
    <script src="{{asset('assets_admin/js/custom.min.js')}}"></script>
</body>
</html>
