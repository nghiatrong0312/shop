<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@extends('welcome')
	@section('sidebar')
	@section('content')
	<div class="col-sm-4 login_user">
		<h3>CUSTOMER LOGIN</h3>
		<?php //Hiển thị thông báo lỗi?>
                        @if ( Session::has('note') )
                            <div id="hide" class="alert alert-success alert-dismissible" role="alert">
                                {{ Session::get('note') }}
                                <button id="click" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        @if ( Session::has('login.rule') )
                            <div id="hide" class="alert alert-success alert-dismissible" role="alert">
                                {{ Session::get('login.rule') }}
                                <button id="click" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        @if ( Session::has('success') )
                            <div id="hide" class="alert alert-success alert-dismissible" role="alert">
                                {{ Session::get('success') }}
                                <button id="click" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                        @if ( Session::has('error') )
                            <div id="hide" class="alert alert-danger alert-dismissible" role="alert">
                                {{ Session::get('error') }}
                                <button id="click" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
        <form method="POST" action="{{ route('login.check') }}">
            @csrf
        <input class="form-control" placeholder="Email" name="email" type="text" value="{{ old('email') }}" autofocus>
        <p class="help is-danger">{{ $errors->first('email') }}</p>
        <input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
        <p class="help is-danger">{{ $errors->first('password') }}</p>
        <div class="col-sm-12 forget_register_pass" style="text-align: center;">
            <p id="register_click"><a href="{{ url('/registeruser') }}">Register</a></p>
            <p><a href="">Forget Password ?</a></p>
        </div>
        <input id="submit_login" type="submit" name="submit" value="Login">
        </form>
	</div>
	@endsection

</body>
</html>