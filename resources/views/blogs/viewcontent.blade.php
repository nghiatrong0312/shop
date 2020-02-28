<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@extends('blogs.index')
	@section('content_blogs')
	<div class="view_content_blogs">
		<img src="{{ url('../storage/app/upload/blog-background.png') }}">
		<h2>LAPKA X PROJECT ARA (PART2)</h2>
		<div class="col-sm-4 view_content_blogs-poster">
			<p>By Krown Themes Collaborator</p>
		</div>
		<div class="col-sm-4 view_content_blogs-time">
			<p>December 03, 2014</p>
		</div>
		<div class="col-sm-4 view_content_blogs-comment">
			<p>10 comments</p>
		</div>
		<div class="view_content_blogs-content">
			<p>
				Light will always be one our closest companions. Whether you’re stepping into the daylight, switching on a lamp or watching the sunset, light is an external factor we all have and use.

				But it’s so ambient that we can overlook how much it has to say. Our interaction with light, or the absence of it, can inform our habits of conservation, activity and reclusivity.
			</p>
		</div>
		<div class="view_content_blogs-share">
			<a href=""><i class="fa fa-share"></i>Share this</a>
		</div>
		<div class="comment_content_blogs">
			<h4>comment(10)</h4>
			<div class="col-sm-12 comment_content_blogs-user">
				<div class="col-sm-2 comment_content_blogs-avatar">
					<img src="{{ url('../storage/app/upload/avatar.jpg') }}">
				</div>
				<div class="col-sm-10 comment_content_blogs-content">
					<div class="comment_content_blogs-nameuser">
						<p>ALEXANDRE JUGIE</p>
					</div>
					<div class="comment_content_blogs-timeup">
						<p>Mar 23, 2019</p>
					</div>
					<div class="comment_content_blogs-comment">
						<p>Ok this is a t4st.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 comment_content_blogs-user">
				<div class="col-sm-2 comment_content_blogs-avatar">
					<img src="{{ url('../storage/app/upload/avatar.jpg') }}">
				</div>
				<div class="col-sm-10 comment_content_blogs-content">
					<div class="comment_content_blogs-nameuser">
						<p>ALEXANDRE JUGIE</p>
					</div>
					<div class="comment_content_blogs-timeup">
						<p>Mar 23, 2019</p>
					</div>
					<div class="comment_content_blogs-comment">
						<p>Light will always be one our closest companions. Whether you’re stepping into the daylight, switching on a lamp or watching the sunset</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 comment_content_blogs-user">
				<div class="col-sm-2 comment_content_blogs-avatar">
					<img src="{{ url('../storage/app/upload/avatar.jpg') }}">
				</div>
				<div class="col-sm-10 comment_content_blogs-content">
					<div class="comment_content_blogs-nameuser">
						<p>ALEXANDRE JUGIE</p>
					</div>
					<div class="comment_content_blogs-timeup">
						<p>Mar 23, 2019</p>
					</div>
					<div class="comment_content_blogs-comment">
						<p>Ok this is a t4st.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 comment_content_blogs-usercomment">
				<textarea class="col-sm-12" placeholder="Comment..."></textarea>
				<button name="submit">Submit Comment</button>
			</div>
		</div>
	</div>
	
	@endsection
</body>
</html>