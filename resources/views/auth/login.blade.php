<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalog</title>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/costum.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
      rel="stylesheet"
    />
</head>
<body>
<div class="background">
    <div class="container">
        <div class="screen">
            <div class="screen-body">
              <div class="screen-body-item left">
                <div class="app-title">
                  <span>Login</span>
                </div>
                <div class="app-contact">CONTACT INFO : +62 895391728752</div>
              </div>
              <div class="screen-body-item">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="app-form-group">
                        <label for="email" class="app-form-group">{{ __('Email Address') }}</label>
                        <div class="app-form-control">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="app-form-group">
                        <label for="password" class="app-form-group">{{ __('Password') }}</label>

                        <div class="app-form-control">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="app-form-group buttons">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="app-form-button">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="app-form-button" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
</body>
</html>
