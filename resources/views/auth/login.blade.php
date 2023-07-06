<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/sass/app.scss')

</head>
<body class="bg-primary">
    <div class="container" style="margin-top: 8%">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-4">
                <div class="mb-3 text-center">

                    <div class="mb-3 text-center">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-5 text-center">
                                <i class="bi-hexagon-fill me-2 text-primary" style="font-size: 50px"></i>
                                <h4>Employee Data Master</h4>
                            </div>

                            <hr>
                            <div class="row mb-3 mt-4">

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <hr>

                            <div class="row mt-4">
                                <div class="col-md-12 d-grid">
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-in-right me-2"></i>
                                        {{ __('Login') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
