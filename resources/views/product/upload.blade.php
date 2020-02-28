<!DOCTYPE html>
<html>
<head>
	<title>Dang bai</title>
</head>
<body>
	@extends('welcome')
	@section('sidebar')
	@section('content')
	<div class="col-sm-8 upload_product">
		<h3>Upload Product / <small><a href="{{ url('/') }}">Cancel</a></small></h3>
		<form method="POST" enctype="multipart/form-data" action="{{ route('upload.store') }}">
			@csrf
		<div class="upload_product-info">

			<div class="upload_product-info-library">
			<p>Product Library</p>
			<a href="{{ url('/upload/library') }}">
				Choose Library Picture
			</a>
			</div>

			<p>Product Avatar</p>
			<input type="file" name="product_avatar">

			<p>Product name</p>
			<input type="text" name="product_name">
			<p class="help is-danger">{{ $errors->first('product_name') }}</p>

			<p>Product price</p>
			<input type="text" name="product_price">
			<p class="help is-danger">{{ $errors->first('product_price') }}</p>

			<p>Brand Product</p>
			<input type="text" name="product_brand">
			<p class="help is-danger">{{ $errors->first('product_brand') }}</p>

			<p>Category Product</p>
			<select name="product_category" >
			  <option value="">Choose Yours Categories</option>
			  <?php foreach ($categories as $key => $category): ?>
			  <option value="<?php echo $category['id_categories'] ?>"><?php echo $category['categories_name'] ?></option>
			   <?php endforeach ?>
			</select>
			<p class="help is-danger">{{ $errors->first('product_category') }}</p>

			<p>Product Size</p>
			<div class="col-sm-12 upload_product-info-checkbox">
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="s">S</div>
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="M">M</div>
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="L">L</div>
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="XL">XL</div>
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="36">36</div>
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="37">37</div>
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="38">38</div>
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="39">39</div>
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="40">40</div>
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="41">41</div>
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="42">42</div>
			<div class="col-sm-2" style="padding: 0px;"><input type="radio" name="size_product" value="43">43</div>
			</div>


			<p>Độ Mới : <strong id="demo" style=""></strong> <strong>%</strong></p>

			<input type="range" name="range" min="1" max="100" value="" class="slider" id="myRange">

			<p>Describe</p>
			<textarea name="describeproduct">Introduction Your Product Writing In Here...
			</textarea>
			<input id="upload_product-submit" type="submit" name="submit">

		</div>
		</form>
	</div>
	<script>
			var slider = document.getElementById("myRange");
			var output = document.getElementById("demo");
			output.innerHTML = slider.value;

			slider.oninput = function() {
			  output.innerHTML = this.value;
			}
			</script>
	@endsection

</body>
</html>