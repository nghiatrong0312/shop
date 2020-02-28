<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@extends('welcome')
	@section('sidebar')
	@section('content')
	<div class='col-sm-12' style="padding: 0px;">
	<div class="col-sm-3 categories" id="menu_categories">
		<h4 id="h4_categories">Categories <a href="javascript:void(0)" id="show_categories">+</a></h4>
		<ul id="show_categories1">
			<li><a href="">All</a></li>			
			<li><a href="">Clothes men</a></li>
			<li><a href="">glass</a></li>
			<li><a href="">Clothes women</a></li>
			<li><a href="">shoes</a></li>
			<li><a href="">bags</a></li>
		</ul>
		<h4 id="h4_brands">Brands <a href="javascript:void(0)" id="show_brands">+</a></h4>
		<ul id="show_brands1">
			<li><a href="">All</a></li>			
			<li><a href="">Casio</a></li>
			<li><a href="">Gucci</a></li>
			<li><a href="">Luvias</a></li>
			<li><a href="">Polo</a></li>
			<li><a href="">Adidas</a></li>
			
		</ul>
	</div>
	<div class="col-sm-9" style="padding: 0px;">
		@yield('content_categories')
	</div>
	</div>
	<script>
    $(document).ready(function(){
      $("#show_categories").click(function(){
        $("#show_categories1").slideToggle();
      });
      $("#show_brands").click(function(){
        $("#show_brands1").slideToggle();
      });
    });
    </script> 
    
	@endsection
</body>
</html>