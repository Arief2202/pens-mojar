<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Login | {{ config('app.name') }}</title>
    <link rel="icon" href="assets/img/logo-bulat.png">

    <!-- CoreUI CSS -->
    {{-- <link rel="stylesheet" href="{{ url('css/super-admin.css') }}" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ url('css/login.css') }}" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

</head>

<body class="c-app flex-row align-items-center" style="background-image: linear-gradient(rgba(16,57,104, 0.8), rgba(16,57,104, 0.8)),url('{{ asset('images/pens.png') }}');">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <form method="post" action="{{ url('/login') }}">
                            @csrf
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="cil-user"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}"
                                       placeholder="Email">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="cil-lock-locked"></i>
                                    </span>
                                </div>
                                <input type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="Password" name="password">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <button class="btn btn-primary px-4" type="submit">Login</button>
                                </div>
                                <div class="col-8 text-right">
                                    {{-- <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                        Forgot password?
                                    </a> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
<!-- CoreUI -->
<script src="{{ mix('js/app.js') }}" defer></script>

</body>
</html>
