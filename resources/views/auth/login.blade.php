<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('assets/css/login.css')}}">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/login.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/a81368914c.js" defer></script>
    <script src="{{URL::to('assets/js/login.js')}}" defer></script>
</head>
<body>
    
    <img class="wave" src="{{URL::to('assets/img/icons/common/wave.png')}}">
	<div class="wraps">
		<div class="img">
			<img src="{{URL::to('assets/img/icons/common/bg.svg')}}">
		</div>
		<div class="login-content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
				<img src="{{ asset('assets/img/icons/common/Oppo-Logo-Png.png') }}" class="img-fluid">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one @error('email') focus @enderror">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>{{ __('E-Mail Address') }}</h5>
           		   		<input type="email" id="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
           		   </div>
           		</div>
           		<div class="input-div pass @error('password') focus @enderror">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>{{ __('Password') }}</h5>
           		    	<input type="password" id="password" class="input @error('password') is-invalid @enderror" name="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            	   </div>
            	</div>
            	
                <div class="form-group row">
                    <div class="col-md-5">
                        <div class="form-check btn">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <!-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif -->
                    </div>
                </div>
                
            	<button type="submit" class="btns btn-primary">
                    {{ __('Login') }}
                </button>
                
            </form>
        </div>
    </div>

</body>
</html>