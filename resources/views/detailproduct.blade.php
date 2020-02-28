<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@extends('welcome')
	@section('sidebar')
	@section('content')
	<div class="col-sm-4" id="detail-product-info">
	    <div id="tabs">
	    	<div id="tab">
			  <ul>
			    <li><a href="#tabs-1">Information</a></li>
			    <li><a href="#tabs-2">Comment</a></li>
			  </ul>
			</div>
		  	<div id="tabs-1">
		  		<h3>VINTAGE TOTE BAG</h3>
		  		<p>By <a href="">Tran Trong Nghia</a></p>

		    	<h4>2.500.000 <small>VND</small></h4>
		        <p>
		        <b>Mo ta san pham</b><br>
		        To purchase these products please visit Whipping Post. To purchase the Retina theme please visit the Shopify Theme Store.
		        </p>
		        <div id="detail-product-size">
                    <p><i class="fa fa-circle" style="color: #2fff00"></i> In Stock</p>
		            <p><b>Do Moi :</b> 100%</p>
                    <p><b>Thuong Hieu :</b> <a href="">Adidas</a></p>
		            <p><b>Size :</b> L</p>
		            <p><b>Mau :</b> Xanh</p>
		        </div>
		        <button>Lien He nguoi ban</button>
		        <hr>
		        <div id="detail-product-icon">
		            <span>
		                <p>Share :</p>
		                <a href=""><i class="fa fa-facebook"></i></a>
		                <a href=""><i class="fa fa-instagram"></i></a>
		                <a href=""><i class="fa fa-pinterest-p"></i></a>
		            </span>
		        </div>
		  	</div>
		  	<div class="col-sm-12" id="tabs-2">
		  		<div class="col-sm-3 avatar_comment">
		  			<img src="{{ url('../storage/app/upload/avatar.jpg') }}">
		  		</div>
		  		<div class="col-sm-9 input_comment">
		  			<input type="text" name="" placeholder="Comment...">
		  		</div>
		  	</div> 
		</div>
	</div>
	<div class="col-sm-8" style="padding: 0px;">
        <div class="slideshow-container">   
    		<div class="mySlide ">
            <img src="{{ url('../storage/app/upload/2.jpg') }}">
            </div>
            <div class="mySlide ">
            <img src="{{ url('../storage/app/upload/3.jpg') }}">
            </div>
            <div class="mySlide">
            <img src="{{ url('../storage/app/upload/4.jpg') }}">
            </div>
            <div class="mySlide">
            <img src="{{ url('../storage/app/upload/5.jpg') }}">
            </div>
            <div class="mySlide">
            <img src="{{ url('../storage/app/upload/6.jpg') }}">
            </div>
        </div>
        <div class="dot">
            <div class="col-sm-3 dot1" id="myDot" onclick="currentSlide(1)">
            <img src="{{ url('../storage/app/upload/2.jpg') }}">
            </div>
            <div class="col-sm-3 dot1" id="myDot" onclick="currentSlide(2)">
            <img src="{{ url('../storage/app/upload/3.jpg') }}">
            </div>
            <div class="col-sm-3 dot1" id="myDot" onclick="currentSlide(3)">
            <img src="{{ url('../storage/app/upload/4.jpg') }}">
            </div>
            <div class="col-sm-3 dot1" id="myDot" onclick="currentSlide(4)">
            <img src="{{ url('../storage/app/upload/5.jpg') }}">
            </div>
            <div class="col-sm-3 dot1" id="myDot" onclick="currentSlide(5)">
            <img src="{{ url('../storage/app/upload/6.jpg') }}">
            </div>
        </div>
	</div>
	<div class="col-sm-12 retated_content">
		<h2>RELATED PRODUCTS</h2>
		<p>Other goods that you may like</p>
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