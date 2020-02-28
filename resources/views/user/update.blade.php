<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body>
	@extends('welcome')
	@section('sidebar')
	@section('content')
    
	<div class="col-sm-12" style="padding: 0px;">
		<div class="col-sm-8 user_form-info">
			
			<h4>Update Profile / <small><a href="{{ url('/profile') }}">Cancel</a></small></h4>
			<form method="POST" action="{{ route('update.store') }}">
				@csrf
			<div class="col-sm-6" style="padding: 2px;">
			<label>Firstname</label><br>
			<input type="" name="firstname"  value="<?php echo Auth::user()->firstname; ?>">
			</div>

			<div class="col-sm-6" style="padding: 2px;">
			<label>Lastname</label><br>
			<input type="" name="lastname"  value="<?php echo Auth::user()->lastname; ?>">
			</div>

			<div class="col-sm-6"style="padding: 2px;">
			<label>Numberphone</label><br>
			<input type="" name="numberphone"  value="<?php echo Auth::user()->numberphone; ?>">
			</div>

			<div class="col-sm-6" style="padding: 2px;">
			<label>Email</label><br>
			<input type="" name="email"  value="<?php echo Auth::user()->email; ?>">
			</div>

			<div class="col-sm-8" style="padding: 2px;">
			<label>Address</label><br>
			<input type="" name="address" value="<?php echo Auth::user()->address; ?>">
			</div>
			<div class="col-sm-4" style="padding: 2px;">
			<label>Phuong</label><br>
			<input type="" name="phuong" value="<?php echo Auth::user()->address; ?>">
			</div>
			<div class="col-sm-4" style="padding: 2px;">
			<label>Static</label><br>
			<input type="" name="static" value="<?php echo Auth::user()->address; ?>">
			</div>
			<div class="col-sm-4" style="padding: 2px;">
			<label>City</label><br>
			<input type="" name="city" value="<?php echo Auth::user()->address; ?>">
			</div>
			<div class="col-sm-4" style="padding: 2px;">
			<label></label><br>
			<input id="user_form-info-submit" type="submit" name="submit">
			</div>
			</form>
		</div>
		<div class="col-sm-4 user_form-avatar">
            
            <div class="col-sm-12 user_form-avatar-2">
                <img src="{{ url('../storage/app/upload/avatar.jpg') }}">
                <a href="">
                <i class="fa fa-gear" style="font-size: 20px;cursor: pointer;color: #808080;"></i>
                </a>
            </div>

            <div class="col-sm-12 user_form-avatar-name">
                <h3><?php echo Auth::user()->firstname; ?> <?php echo Auth::user()->lastname; ?></h3>
            </div>
            <div class="col-sm-12 user_form-avatar-hr">
                <hr>
            </div>
            <div class="col-sm-12 user_form-avatar-icon">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-2">
                    <a href="">
                    <i class="fa fa-facebook-f"></i>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="">
                    <i class="fa fa-google-plus"></i>
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="">
                    <i class="fa fa-twitter"></i>
                    </a>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
			<div class="col-sm-12 retated_content">
				<h2>PRODUCTS SELLING</h2>
			</div>
			<div class="col-sm-12 retated_content-product" style="padding: 0px;">
		<div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                	<a href="{{ url('/detailproduct') }}">
                        <img src="{{ url('../storage/app/upload/1.jpg') }}" alt="">
                        <!-- Hover Content -->
                        <div class="product_content">
                        	<div class="avatar">
                        		<img src="{{ url('../storage/app/upload/avatar.jpg') }}" style="width: 23%; opacity: 1;">
                        	</div>
                            <div class="line"></div>
                            <p>$180</p>
                            <h4>Modern Chair</h4>
                        </div>
                        <div class="icon_product">
                    		<ul>
                    			<li>
                    				<a href="">
                    					<i class="fa fa-heart-o"></i>
                    				</a>
                    			</li>
                    			<li>
                    				<p>21</p>
                    			</li>
                    			<li>
                    				<a href="">
                    					<i class="fa fa-share-alt"></i>
                    				</a>
                    				
                    			</li>
                    			<li>
                    				<p>21</p>
                    			</li>
                    		</ul>
                        </div>
                        <div class="button_seen">
                        	<button>16:30 Ngay 10 Thang 03 Nam 2019</button>
                        </div>
                        </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                        <img src="{{ url('../storage/app/upload/2.jpg') }}" alt="">
                        <!-- Hover Content -->
                        <div class="product_content">
                        	<div class="avatar">
                        		<img src="{{ url('../storage/app/upload/avatar.jpg') }}" style="width: 23%; opacity: 1;">
                        	</div>
                            <div class="line"></div>
                            <p>$180</p>
                            <h4>Modern Chair</h4>
                        </div>
                        <div class="icon_product">
                    		<ul>
                    			<li>
                    				<a href="">
                    					<i class="fa fa-share-alt"></i>
                    				</a>
                    				
                    			</li>
                    			<li>
                    				<p>21</p>
                    			</li>
                    			<li>
                    				<a href="">
                    					<i class="fa fa-heart-o"></i>
                    				</a>
                    			</li>
                    			<li>
                    				<p>21</p>
                    			</li>
                    		</ul>
                        </div>
                        <div class="button_seen">
                        	<button>16:30 Ngay 10 Thang 03 Nam 2019</button>
                        </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                        <img src="{{ url('../storage/app/upload/3.jpg') }}" alt="">
                        <!-- Hover Content -->
                        <div class="product_content">
                        	<div class="avatar">
                        		<img src="{{ url('../storage/app/upload/avatar.jpg') }}" style="width: 23%">
                        	</div>
                            <div class="line"></div>
                            <p>$180</p>
                            <h4>Modern Chair</h4>
                        </div>
                        <div class="icon_product">
                    		<ul>
                    			<li>
                    				<a href="">
                    					<i class="fa fa-share-alt"></i>
                    				</a>
                    				
                    			</li>
                    			<li>
                    				<p>21</p>
                    			</li>
                    			<li>
                    				<a href="">
                    					<i class="fa fa-heart-o"></i>
                    				</a>
                    			</li>
                    			<li>
                    				<p>21</p>
                    			</li>
                    		</ul>
                        </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                        <img src="{{ url('../storage/app/upload/4.jpg') }}" alt="">
                        <!-- Hover Content -->
                        <div class="product_content">
                        	<div class="avatar" style="">
                        		<img src="{{ url('../storage/app/upload/avatar.jpg') }}" style="width: 23%">
                        	</div>
                            <div class="line"></div>
                            <p>$180</p>
                            <h4>Modern Chair</h4>
                        </div>
                        <div class="icon_product">
                    		<ul>
                    			<li>
                    				<a href="">
                    					<i class="fa fa-share-alt"></i>
                    				</a>
                    				
                    			</li>
                    			<li>
                    				<p>21</p>
                    			</li>
                    			<li>
                    				<a href="">
                    					<i class="fa fa-heart-o"></i>
                    				</a>
                    			</li>
                    			<li>
                    				<p>21</p>
                    			</li>
                    		</ul>
                        </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                        <img src="{{ url('../storage/app/upload/5.jpg') }}" alt="">
                        <!-- Hover Content -->
                        <div class="product_content">
                        	<div class="avatar">
                        		<img src="{{ url('../storage/app/upload/avatar.jpg') }}" style="width: 23%">
                        	</div>
                            <div class="line"></div>
                            <p>$180</p>
                            <h4>Modern Chair</h4>
                        </div>
                        <div class="icon_product">
                    		<ul>
                    			<li>
                    				<a href="">
                    					<i class="fa fa-share-alt"></i>
                    				</a>
                    				
                    			</li>
                    			<li>
                    				<p>21</p>
                    			</li>
                    			<li>
                    				<a href="">
                    					<i class="fa fa-heart-o"></i>
                    				</a>
                    			</li>
                    			<li>
                    				<p>21</p>
                    			</li>
                    		</ul>
                        </div>
                </div>
            </div>
        </div>
	
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->

    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
	</div>
	@endsection
</body>
</html>