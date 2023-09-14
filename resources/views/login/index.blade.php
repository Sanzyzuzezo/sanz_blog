@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-5 mt-5">

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
{{-- 
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
    </main>
  </div>
</div> --}}

{{-- <!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1058/1058927.svg">
</head>
<body>
	<img class="wave" src="{{ asset('img/wave.png') }}">
	<div class="container">
		<div class="img">
			<img src="{{ asset('img/bg.svg') }}">
		</div>
		<div class="login-content">
			<form action="/login" method="post">
        @csrf
				<img src="{{ asset('img/avatar.svg') }}">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>EMAIL ADDRES</h5>
           		   		<input type="email" name="email" class="input" @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" required>
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>PASSWORD</h5>
           		    	<input type="password" name="password" class="input" id="password"  placeholder="Masukan Password" required>
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LoginForm</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>

<body class="flex">
    <div class="container-form">
        <div class="user"></div>
        <form action="/login" method="post">
          @csrf
            <h1>Please Login </h1>
            <div class="input">
                <input type="email" name="email" @error('email') is-invalid @enderror" id="email" required />
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
                <label>Email Address</label>
            </div>
            <div class="input box">
                <input type="password" name="password" class="input" id="password" required />
                <label class="pw">Password</label>
            </div>
            <input class="L_btn" type="submit" value="Login" />
        </form>
        <div class="div">
            <div class="line"></div>
        </div>
    </div>
</body>

</html>

@endsection
