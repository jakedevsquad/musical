<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Source+Sans+Pro" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="font-open">
    <div class="dashboard-background
                lg:pt-4 lg:pb-20 lg:h-full
                md:pt-4 md:pb-20 md:h-full
                sm:pt-4 sm:pb-20 sm:h-full
                xs:pt-4 xs:pb-20 xs:h-full">
        <div class="lg:h-12 lg:w-full lg:flex lg:flex-row lg:justify-around lg:text-white lg:text-lg
                    md:h-12 md:w-full md:flex md:flex-row md:justify-around md:text-white md:text-lg
                    sm:h-12 sm:w-full sm:flex sm:flex-row sm:justify-around sm:text-white sm:text-lg
                    xs:h-12 xs:w-full xs:flex xs:flex-row xs:justify-around xs:text-white xs:text-lg">
            <div class="w-1/2
                        lg:flex lg:flex-row lg:justify-center
                        md:hidden
                        sm:hidden
                        xs:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="99.502" height="17.969" viewBox="0 0 99.502 17.969">
                    <path id="Union_28" data-name="Union 28" d="M18191.756-2360.956v-5.432c0-4.022,2.3-6.269,6.424-6.269a5.972,5.972,0,0,1,5.432,2.819.652.652,0,0,1-.207.993l-1.8,1.281a.659.659,0,0,1-1.02-.21,2.843,2.843,0,0,0-2.4-1.332c-1.543,0-2.348,1.043-2.348,3.029v4.809c0,1.981.8,3.029,2.348,3.029a2.909,2.909,0,0,0,2.4-1.332.656.656,0,0,1,1.02-.211l1.8,1.281a.652.652,0,0,1,.207.993,5.981,5.981,0,0,1-5.432,2.819C18194.053-2354.687,18191.756-2356.934,18191.756-2360.956Zm-21.658,3.995a.67.67,0,0,1,.027-1.016l1.543-1.592a.657.657,0,0,1,1.043,0,5.112,5.112,0,0,0,3.449,1.332c1.277,0,1.986-.627,1.986-1.753,0-.965-.709-1.409-2.795-1.775-3.84-.654-5.332-2.247-5.332-5.459,0-3.29,2.3-5.431,5.826-5.431a7.5,7.5,0,0,1,5.486,1.853.681.681,0,0,1,0,1.043l-1.543,1.569a.7.7,0,0,1-1.043.023,3.9,3.9,0,0,0-2.664-.938c-1.281,0-1.984.627-1.984,1.748,0,.97.73,1.437,2.795,1.78,3.84.627,5.326,2.247,5.326,5.459,0,3.29-2.3,5.431-5.824,5.431A8.322,8.322,0,0,1,18170.1-2356.961Zm-14.99-3.812v-10.84a.659.659,0,0,1,.727-.732h2.613a.662.662,0,0,1,.732.732v10.63c0,1.881.705,2.746,2.17,2.746s2.168-.865,2.168-2.746v-10.63a.662.662,0,0,1,.732-.732h2.508a.657.657,0,0,1,.727.732v10.84c0,3.917-2.219,6.086-6.186,6.086S18155.107-2356.856,18155.107-2360.773Zm67.471,5.775a.663.663,0,0,1-.732-.732v-15.883a.663.663,0,0,1,.732-.732h2.613a.662.662,0,0,1,.732.732v13.059h6.189a.661.661,0,0,1,.732.732v2.091a.661.661,0,0,1-.732.732Zm-6.557,0a.752.752,0,0,1-.811-.627l-.572-2.119h-5.121l-.576,2.119a.752.752,0,0,1-.809.627h-2.664c-.521,0-.76-.316-.6-.837l4.859-15.91a.794.794,0,0,1,.814-.6h3.186a.792.792,0,0,1,.809.6l4.859,15.91c.156.521-.078.837-.6.837Zm-5.588-6.141h3.318l-1.648-6.452h-.055Zm-25.107,6.141a.661.661,0,0,1-.729-.732v-15.883a.66.66,0,0,1,.729-.732h2.617a.66.66,0,0,1,.729.732v15.883a.661.661,0,0,1-.729.732Zm-36.908,0a.661.661,0,0,1-.732-.732v-11h-.051l-3.395,11.129a.794.794,0,0,1-.811.6h-1.83a.794.794,0,0,1-.811-.6l-3.422-11.206h-.051v11.078a.662.662,0,0,1-.732.732h-2.508a.662.662,0,0,1-.732-.732v-15.883a.662.662,0,0,1,.732-.732h4.521a.774.774,0,0,1,.811.6l3.156,10.529h.055l3.158-10.529a.777.777,0,0,1,.814-.6h4.438a.661.661,0,0,1,.732.732v15.883a.661.661,0,0,1-.732.732Z" transform="translate(-18133.344 2372.656)" fill="#fff"/>
                </svg>
            </div>
            <div class="lg:flex lg:flex-row lg:justify-center lg:px-0 lg:w-1/2
                        md:flex md:flex-row md:justify-around md:px-20 md:w-full
                        sm:flex sm:flex-row sm:justify-around sm:px-20 sm:w-full
                        xs:flex xs:flex-row xs:justify-around xs:px-4 xs:w-full">
                <a href="#" class="uppercase text-base tracking-wide text-white
                            lg:mr-12">
                    Courses
                </a>
                <a href="{{ route('register') }}" class="uppercase text-base tracking-wide text-white
                            lg:mr-12">
                    Sign Up
                </a>
                <a href="{{ route('login') }}" class="uppercase text-base tracking-wide text-white
                            lg:mr-12">
                    Sign In
                </a>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Login') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
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
    </div>
</div>

