<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@extends('blogs.index')
	@section('content_blogs')
		<div class="col-sm-6 content_blogs">
			<img src="{{ url('../storage/app/upload/2.jpg') }}">
			<h4><a href="{{ url('/blogs/content') }}">LAPKA X PROJECT ARA (PART2)</a></h4>
			<div class="col-sm-6 content_blogs-time">
				<p>December 03, 2014</p>
			</div>
			<div class="col-sm-6 content_blogs-comment">
				<p>10 comment</p>
			</div>
			<div class="content_blogs-content">
				<p>Light Light will always be one our closest companions. Whether you’re stepping into the daylight, switching on a lamp or watching the sunset, light is an external factor we all...</p>
			</div>
			<a href="">keep Reading...</a>
		</div>
		<div class="col-sm-6 content_blogs">
			<img src="{{ url('../storage/app/upload/3.jpg') }}">
			<h4><a href="">LAPKA X PROJECT ARA (PART2)</a></h4>
			<div class="col-sm-6 content_blogs-time">
				<p>December 03, 2014</p>
			</div>
			<div class="col-sm-6 content_blogs-comment">
				<p>10 comment</p>
			</div>
			<div class="content_blogs-content">
				<p>Light Light will always be one our closest companions. Whether you’re stepping into the daylight, switching on a lamp or watching the sunset, light is an external factor we all...</p>
			</div>
			<a href="">keep Reading...</a>
		</div>
		<div class="col-sm-6 content_blogs">
			<img src="{{ url('../storage/app/upload/3.jpg') }}">
			<h4>LAPKA X PROJECT ARA (PART2)</h4>
			<div class="col-sm-6 content_blogs-time">
				<p>December 03, 2014</p>
			</div>
			<div class="col-sm-6 content_blogs-comment">
				<p>10 comment</p>
			</div>
			<div class="content_blogs-content">
				<p>Light Light will always be one our closest companions. Whether you’re stepping into the daylight, switching on a lamp or watching the sunset, light is an external factor we all...</p>
			</div>
			<a href="">keep Reading...</a>
		</div>
	@endsection

</body>
</html>