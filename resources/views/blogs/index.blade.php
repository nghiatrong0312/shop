<!DOCTYPE html>
<html>
<head>
	<title>Blogs</title>
</head>
<body>
	@extends('welcome')
	@section('sidebar')
	@section('content')
	<div class='col-sm-12' style="padding: 0px;">
	<div class="col-sm-3 categories" id="Blogs1">
		<h4>Blogs</h4>
		<ul>
			<li><a href="">All</a></li>			
			<li><a href="">Clothes men</a></li>
			<li><a href="">glass</a></li>
			<li><a href="">Clothes women</a></li>
			<li><a href="">shoes</a></li>
			<li><a href="">bags</a></li>
		</ul>
	</div>
	<div class="col-sm-3 categories" id="Blogs2" style="display: none;">
		<h4>Blogs</h4>
		<ul>
			<li><a href="">All</a></li>			
			<li><a href="">Clothes men</a></li>
			<li><a href="">glass</a></li>
			<li><a href="">Clothes women</a></li>
			<li><a href="">shoes</a></li>
			<li><a href="">bags</a></li>
		</ul>
	</div>
	<div class="col-sm-9" style="padding: 0px;">
		@yield('content_blogs')
	</div>
	</div>
	<script type="text/javascript">
    jQuery(document).ready(function($) {    

    //selector đến menu cần làm việc

    var TopFixMenuBlogs1 = $("#Blogs1");
    var TopFixMenuBlogs2 = $("#Blogs2");

  // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.

    $(window).scroll(function(){

    // Nếu cuộn được hơn 150px rồi

        if($(this).scrollTop()>110){

      // Tiến hành show menu ra    

        TopFixMenuBlogs2.show();
        

        }else{

      // Ngược lại, nhỏ hơn 150px thì hide menu đi.

            TopFixMenuBlogs1.show();
            TopFixMenuBlogs2.hide();

        }}

    )

    })
    </script>
	@endsection
</body>
</html>