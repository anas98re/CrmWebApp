{{-- @extends('layouts.app')

@section('content') --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #d2f1ea;
    /*min-height: 80vh;*/
    /*background-image:url(../../../public/images/background1.jpg);*/
    /*background-image: url("images/zzz.jpg");*/
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 5vh;
	margin: 330px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #3b3001;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

/* button and register*/
button {
	border-radius: 20px;
	border: 1px solid #171407;
	background-color: rgba(255, 255, 181, 0.53);
	color: #1a0606;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: rgba(255, 255, 181, 0.53);
	border-color: #171407;
}

form {
	background-color: #ffffff;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
    margin: 0 30px;
	padding: 0 50px;
    width: 250px;
	height: 100%;
	text-align: center;
}
/* .regis1{
   margin-left: 50px;
} */

input {
	background-color: #eee;
    box-shadow: 0 14px 98px #c0b57c,
			0 10px 10px rgba(47, 40, 1, 0.35);
	border: none;
	padding: 12px 15px  ;

	margin: 8px 0;
	width: 274%;
}

.container {
	background-color: rgb(255, 255, 255);
	border-radius: 200px;
  	box-shadow: 0 14px 28px rgb(145, 139, 112),
			0 10px 10px rgb(124, 118, 83);
	position: relative;
	overflow: hidden;
	width: 1080px;

	max-width: 100%;
	min-height: 640px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 100px;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(50%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}

	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #148f77;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	/*background: linear-gradient(to right, #796402, #ffe869);*/
   background-image: url("images/xxxx.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #ffffff;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
    left= 0;
	transform: translateX(0);
}
/*word inner*/
.container.right-panel-active .overlay-left {
	transform: translateX(-20%);
}
/*word out*/
.container.right-panel-active .overlay-left1 {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(-5%);
}

.social-container {
	margin: 20px 0px;
}

.social-container a {
	border: 1px solid #171407;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px ;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}

.text-uppercase {
  text-transform: uppercase !important;
}
</style>

<div class="container" id="container">

    <div class="overlay-panel overlay-right">
    <form method="POST"  action="{{ route('register') }}" style="font-family:Copperplate,Papyrus,fantasy; ">
        @csrf

			<h1 style="font-size: 300%;">Create Account</h1>
			<div class="social-container">
				{{-- <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> --}}
                <h4 class="text-uppercase mb-4"></h4>
{{--                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>--}}
{{--                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>--}}
{{--                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>--}}
			</div>
			<span style="font-size: 120%">or use your email for registration</span>
			{{-- <input type="text" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button type="submit"> {{ __('Register') }}</button> --}}

            {{-- <div class="form-group row"> --}}
                {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}

                {{-- <div class="col-md-6"> --}}
                    <input id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password" type="password"  name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password" placeholder="confirmation">
                    <input id="role" type="text"  name="role"  placeholder="role">

                    <br>

                    <button type="submit">
                        {{ __('Register') }}
                    </button>


	</form>
    </div>

    <div class="overlay-panel overlay-left">
        <form method="POST" action="{{ route('login') }}" class="form-container sign-in-container" style="font-family:Copperplate,Papyrus,fantasy; ">
            @csrf

			<h1 style="font-size: 500%;">login</h1>
			<div class="social-container">
{{--				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>--}}
{{--				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>--}}
{{--				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>--}}
			</div>
			<span style="font-size: 120%">or use your account</span>
            {{-- <div class="form-group row"> --}}
                {{-- <label for="email" class="col-md-4 col-form-label text-md-right" ></label> --}}

                {{-- <div class="col-md-6"> --}}

                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="current-password" placeholder="Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

        @if (Route::has('password.request'))
        <a  href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
			<button> {{ __('Login') }}</button>
		</form>
    </div>
	<div class="overlay-container"  style="font-family:Copperplate,Papyrus,fantasy; ">
		<div class="overlay">
			<div class="overlay-panel overlay-left1">
				<h1 style=" font-size: 350%;">Welcome Back!</h1>
				<p style=" font-size: 150%;">To keep connected with us please login with your personal info</p>
				<button class="ghost" id="login">login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1 style=" font-size: 350%;">Hello, Friend!</h1>
				<p style=" font-size: 150%;">Enter your personal details and start journey with us</p>
				<button class="ghost" id="register">register</button>
			</div>
		</div>
	</div>
    <img class="img-fluid" src="images/audrey.jpg" alt="zfczxcv" /></div>

<footer>

	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>

<script>
    const signUpButton = document.getElementById('register');
const signInButton = document.getElementById('login');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</body>
</html>
{{-- @endsection --}}

{{--




 @extends('layouts.app')

@section('content')
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
@endsection --}}
