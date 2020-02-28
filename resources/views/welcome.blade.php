<!doctype html>
<?php  
use App\Users;
use Illuminate\Support\Facades\Auth;
?>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
        <script src="{{ url('js/bootstrap.min.js') }}" type="text/javascript" ></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         <link rel="stylesheet" type="text/css" href="{{ url('css/site.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
          $( function() {
            $( "#tabs" ).tabs();
          });
        </script>

    </head>
    <body>
        @section('sidebar')
        @show
        <div class="full_content">
            <div class="col-sm-12" style="padding: 0px;">
                <div class="col-sm-3" id="menu" style="padding: 0px; width: 20%">

                    <div class="sidebar">
                        <div class="sidebar_logo">
                        <img src="{{ url('../storage/app/upload/logo1.png') }}">
                        </div>
                        <div class="sidebar_icon">
                            <ul>
                                <li><a href=""><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-home" style="font-size: 25px;margin-top: 3px;"></i></a></li>
                                <li><a href=""><i class="fa fa-shopping-bag"></i></a></li>
                            </ul>
                        </div><br>
                        <div class="sidebar_menu_home">
                            <p><a href="{{ url('/upload') }}">đăng bài</a></p>
                        </div>
                        <div class="sidebar_menu_content">
                            <ul>
                                <li id="show_dichvu"><a href="javascript:void(0)">Dịch Vụ</a><i id="down_dichvu" class="fa fa-sort-down"></i></li>
                                <ul id="menu_dichvu">
                                    <li><a href="">Kí Gửi</a></li>
                                    <li><a href="">Mom Milk Share</a></li>
                                    <li><a href="">Share Your Love</a></li>
                                </ul>
                                <li><a href="{{ url('/categories') }}">sản phẩm</a></li>
                                <li><a href="{{ url('/blogs') }}">blogs</a></li>
                                <li><a href="{{ url('/aboutus') }}"></i>giới thiệu </a></li>
                                <li><a href="{{ url('/contact') }}"></i>liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="sidebar_icon_brand">
                            <ul>
                                <li><a href=""><i class="fa fa-facebook" style=""></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest" style=""></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" style=""></i></a></li>
                            </ul>
                        </div>
                        <div class="sidebar_footer">
                            <p>Copyright © 2019 <a href="">Fashion Second Hand</a></p>
                            <p>Powered by Shopify</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" id="menu1" style="padding: 0px; width: 20%;position: fixed; z-index: 9999; display: none">
                    <div class="sidebar">
                        <div class="sidebar_logo">
                        <img src="{{ url('../storage/app/upload/logo1.png') }}">
                        </div>
                        <div class="sidebar_icon">
                            <ul>
                                <li><a href=""><i class="fa fa-search"></i></a></li>
                                <li><a href="{{ url('/') }}"><i class="fa fa-home" style="font-size: 25px;margin-top: 3px;"></i></a></li>
                                <li><a href=""><i class="fa fa-shopping-bag"></i></a></li>
                            </ul>
                        </div><br>
                        <div class="sidebar_menu_home">
                            <p><a href="{{ url('/upload') }}">đăng bài</a></p>
                        </div>
                        <div class="sidebar_menu_content">
                            <ul>
                                <li id="show_dichvu1"><a href="javascript:void(0)">Dịch Vụ</a><i id="down_dichvu" class="fa fa-sort-down"></i></li>
                                <ul id="menu_dichvu1">
                                    <li><a href="">Kí Gửi</a></li>
                                    <li><a href="">Mom Milk Share</a></li>
                                    <li><a href="">Share Your Love</a></li>
                                </ul>
                                <li><a href="{{ url('/categories') }}">sản phẩm</a></li>
                                <li><a href="{{ url('/blogs') }}">blogs</a></li>
                                <li><a href="{{ url('/aboutus') }}"></i>giới thiệu </a></li>
                                <li><a href="{{ url('/contact') }}"></i>liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="sidebar_icon_brand">
                            <ul>
                                <li><a href=""><i class="fa fa-facebook" style=""></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest" style=""></i></a></li>
                                <li><a href=""><i class="fa fa-instagram" style=""></i></a></li>
                            </ul>
                        </div>
                        <div class="sidebar_footer">
                            <p>Copyright © 2019 <a href="">Fashion Second Hand</a></p>
                            <p>Powered by Shopify</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10" style="padding: 0px; width: 80%;">
                    <div class="row navbar_user" id="navbar_user">
                        <div class="col-sm-10 name_shop">
                            <p>Mom And Baby Second Hand</p>
                        </div>
                        <div class="col-sm-2" style="padding: 0px;">
                        <ul>
                            <?php if (Auth::check()) { ?>
                               <li id="user123"><a href="javascript:void(0)"><i class="fa fa-user-circle-o"></i></a></li>
                            <?php }; ?>
                            <?php if (!Auth::check()): ?>
                                <li id="user"><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i></a></li>
                            <?php endif ?>
                        </ul>
                        </div>
                    </div>
                    <div class="row navbar_user1" id="navbar_user1">
                        <div class="col-sm-10 name_shop">
                            <p>Fashion Second Hand</p>
                        </div>
                        <div class="col-sm-2" style="padding: 0px;">
                        <ul>
                            <?php if (Auth::check()) { ?>
                               <li id="user123"><a href="javascript:void(0)"><i class="fa fa-user-circle-o"></i></a></li>
                            <?php }; ?>
                            <?php if (!Auth::check()): ?>
                                <li id="user1"><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i></a></li>
                            <?php endif ?>
                        </ul>
                        </div>
                    </div> 
                    <div class="col-sm-3 login_info">
                        <div class="col-sm-4 login_info-avatar">
                            <img src="{{ url('../storage/app/upload/avatar.jpg') }}">
                        </div>
                        <div class="col-sm-6 login_info-name">
                            <p>tran trong nghia</p>
                        </div>
                        <div class="col-sm-12 login_info-hr">
                            <hr>
                        </div>
                        <div class="col-sm-12 login_info-viewprofile">
                            <div class="col-sm-2">
                                <i class="fa fa-address-card-o"></i>
                            </div>
                            <div class="col-sm-10">
                                <a href="{{ url('/profile') }}">View Profile</a>
                            </div>
                        </div>
                        <div class="col-sm-12 login_info-changepassword">
                            <div class="col-sm-2">
                                <i class="fa fa-key"></i>
                            </div>
                            <div class="col-sm-10">
                                <a href="">Change Password</a>
                            </div>
                        </div>
                        <div class="col-sm-12 login_info-logout">
                            <div class="col-sm-2">
                                <i class="fa fa-sign-out"></i>
                            </div>
                            <div class="col-sm-10">
                                <a href="{{ route('logout') }}">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 overlay">
                        
                    </div>
                    
                    <div class="col-sm-12 notify">
                        
                        @if (Session::has('success'))
                            <div id="hide" class="alert alert-danger alert-dismissible" role="alert">
                                {{ Session::get('success') }}
                                <button id="click" type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif
                    </div>       
                    @yield('content')
                </div>
            </div>
        </div>    
    <script>
    $(document).ready(function(){
      $("#click").click(function(){
        $("#hide").fadeToggle();
      });
      $("#user123").click(function(){
        $(".login_info").fadeToggle();
        $(".overlay").fadeToggle();
      });
      $(".overlay").click(function(){
        $(".login_info").fadeToggle();
      });
      $("#register_click").click(function(){
        $(".register_sidebar").show(300);
        $(".login_sidebar1").hide(300);
      });
      $(".overlay").click(function(){
        $(".login_sidebar1").hide(300);
        $(".overlay").fadeToggle(300);
        $(".register_sidebar").hide(300);
      });
      $("#show_dichvu").click(function(){
        $("#menu_dichvu").slideToggle();
      });
      $("#show_dichvu1").click(function(){
        $("#menu_dichvu1").slideToggle();
      });
    });
    </script> 
    <script type="text/javascript">
    jQuery(document).ready(function($) {    

    //selector đến menu cần làm việc

    var TopFixMenu = $("#menu");
    var TopFixMenu1 = $("#menu1");
    var Navbar1 = $("#navbar_user1");
    var Navbar = $("#navbar_user");
    var Loginsidebar1 = $(".login_sidebar1");
    var Loginsidebar = $(".login_sidebar");

  // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.

    $(window).scroll(function(){

    // Nếu cuộn được hơn 150px rồi

        if($(this).scrollTop()>100){

      // Tiến hành show menu ra    

        
        TopFixMenu1.show();
        Navbar1.show();
        

        }else{

      // Ngược lại, nhỏ hơn 150px thì hide menu đi.

            TopFixMenu.show();
            TopFixMenu1.hide();
            Navbar1.hide();
            Navbar.show();


        }}

    )

    })
    </script>
    <script>
    var slideIndex = 1;
    showSlide(slideIndex);

    function currentSlide(n) {
        showSlide(slideIndex = n);
    }
    function showSlide(n) {
       var i;
       var slide = document.getElementsByClassName('mySlide');
       var dot1 = document.getElementsByClassName('dot1');
       if (n > slide.length) {slideIndex = 1}
       if (n < 1) {slide.length = slideIndex}
       for (i = 0; i < slide.length; i++) {
           slide[i].style.display = "none";
       }
       for (i = 0; i < dot1.length; i++) {
      dot1[i].className = dot1[i].className.replace(" active", "");
      }
      slide[slideIndex-1].style.display = "block";  
      dot1[slideIndex-1].className += " active";
    }
</script>
    </body>
</html>
