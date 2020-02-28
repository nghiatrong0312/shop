<!DOCTYPE html>
<html>
<head>
	<title>Update Avatar</title>
</head>
<body>
	@extends('welcome')
	@section('sidebar')
	@section('content')
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="avatar">
		<input type="submit" name="submit">
	</form>
	@endsection
</body>
</html>