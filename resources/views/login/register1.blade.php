<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	@extends('welcome')
	@section('sidebar')
	@section('content')
	<div class="col-sm-5 register_user">
		<h3>REGISTER</h3>
                             
        <form method="POST" action="{{ url('/registeruser') }}">
            @csrf
            <div class="col-sm-6" style="padding: 0px; margin-bottom: 10px;padding-right: 5px;">
                <input class="form-control" placeholder="firstname" name="firstname" type="text" value="{{ old('firstname') }}" autofocus>
                <p class="help is-danger">{{ $errors->first('firstname') }}</p>
            </div>

            
            <div class="col-sm-6" style="padding: 0px; margin-bottom: 10px; padding-left: 5px;">
                <input class="form-control" placeholder="lastname" name="lastname" type="text" value="{{ old('lastname') }}" autofocus>
                <p class="help is-danger">{{ $errors->first('lastname') }}</p>
            </div>
            <input class="form-control" placeholder="email" name="email" type="email" value="{{ old('email') }}" autofocus>
            <p class="help is-danger">{{ $errors->first('email') }}</p>
            
            <input class="form-control" placeholder="password" name="password" type="password" value="{{ old('password') }}" autofocus>
            <p class="help is-danger">{{ $errors->first('password') }}</p>
            <input type="text" name="permission" value="3">
            <input class="form-control" placeholder="Xác nhận mật khẩu" name="password_confirmation" type="password">
            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
            <!-- <input type="password_confirmation" name="password" placeholder="Password Confirmation"> -->
        
        <div class="col-sm-12 forget_register_pass" style="text-align: center;">
            <div class="col-sm-3">
                <input type="checkbox" name="checkbox">
            </div>
            <div class="col-sm-9" style="padding: 0px; text-align: left;">
                <p><a href="">Dong Y Dieu Khoan</a></p>
            </div>
            <p class="help is-danger">{{ $errors->first('checkbox') }}</p>
            
        </div>
        <input id="submit_login" type="submit" name="submit" value="REGISTER">
        </form>
	</div>
	@endsection
</body>
</html>