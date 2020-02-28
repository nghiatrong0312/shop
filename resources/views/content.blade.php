<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<?php  
use App\Product;
$products = Product::orderBy('id_product', 'desc')->get();
?>
<body>
	@extends('welcome')
	@section('sidebar')
	@section('content')
    <div class="container slider_home">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="top: -1px;">

          <div class="item active">
            <img src="{{ url('../storage/app/upload/product1.jpg') }}" alt="Los Angeles" style="width:100%; height: 520px">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>LA is always so much fun!</p>
            </div>
          </div>

          <div class="item">
            <img src="{{ url('../storage/app/upload/wp2381184.jpg') }}" alt="Chicago" style="width:100%; height: 520px">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>
        
          <div class="item">
            <img src="{{ url('../storage/app/upload/wp2381184.jpg') }}" alt="Chicago" style="width:100%; height: 520px">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>
          </div>
      
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-sm-12 category_content" style="padding: 0px;">
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">
                <!-- Single Catagory -->
                
                <div class="single-products-catagory clearfix home">
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
                            </ul>
                        </div>
                        <div class="button_seen">
                            <button>16:30 Ngay 10 Thang 03 Nam 2019</button>
                        </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix home">
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
                            </ul>
                        </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix home">
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
                            </ul>
                        </div>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix home">
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
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>  
	<script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->

    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

	@endsection
</body>
</html>