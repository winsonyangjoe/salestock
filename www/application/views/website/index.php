<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from eazzy.me/html/bella-interior/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2016 03:07:45 GMT -->
<head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bella Shop</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <!-- CSS Global -->
        <link href="<?php echo site_url('web_assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('web_assets/plugins/bootstrap-select/css/bootstrap-select.min.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('web_assets/plugins/fontawesome/css/font-awesome.min.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('web_assets/plugins/prettyphoto/css/prettyPhoto.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('web_assets/plugins/owl-carousel2/assets/owl.carousel.min.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('web_assets/plugins/owl-carousel2/assets/owl.theme.default.min.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('web_assets/plugins/animate/animate.min.css') ?>" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="<?php echo site_url('web_assets/css/theme.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('web_assets/css/theme-yellow-1.css') ?>" rel="stylesheet" id="theme-config-link">

        <!-- Head Libs -->
        <script src="<?php echo site_url('web_assets/plugins/modernizr.custom.js') ?>"></script>

        <!--[if lt IE 9]>
        <script src="<?php echo site_url('web_assets/plugins/iesupport/html5shiv.js') ?>"></script>
        <script src="<?php echo site_url('web_assets/plugins/iesupport/respond.min.js') ?>"></script>
        <![endif]-->
    </head>
    <body id="home" class="wide">
        <!-- PRELOADER -->
        <div id="preloader">
            <div id="preloader-status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
                <div id="preloader-title">Loading</div>
            </div>
        </div>
        <!-- /PRELOADER -->

        <!-- WRAPPER -->
        <div class="wrapper">

            <!-- Popup: Shopping cart items -->
            <div class="modal fade popup-cart" id="popup-cart" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="container">
                        <div class="cart-items">
                            <div class="cart-items-inner">
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object item-image" src="assets/img/preview/shop/order-1s.jpg" alt=""></a>
                                    <p class="pull-right item-price">$450.00</p>
                                    <div class="media-body">
                                        <h4 class="media-heading item-title"><a href="#">1x Standard Product</a></h4>
                                        <p class="item-desc">Lorem ipsum dolor</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <p class="pull-right item-price">$450.00</p>
                                    <div class="media-body">
                                        <h4 class="media-heading item-title summary">Subtotal</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal">Close</a><!--
                                            --><a href="shopping-cart.html" class="btn btn-theme btn-theme-transparent btn-call-checkout">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Popup: Shopping cart items -->

            <!-- Header top bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="top-bar-left">
                        <ul class="list-inline">
                            <li class="icon-user"><a href="login.html"><img src="assets/img/icon-1.png" alt=""/> <span>Login</span></a></li>
                            <li class="icon-form"><a href="login.html"><img src="assets/img/icon-2.png" alt=""/> <span>Not a Member? <span class="colored">Sign Up</span></span></a></li>
                            <li><a href="mailto:support@yourdomain.com"><i class="fa fa-envelope"></i> <span>support@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="list-inline">
                            <li class="hidden-xs"><a href="about.html">About</a></li>
                            <li class="hidden-xs"><a href="blog.html">Blog</a></li>                             
                            <li class="hidden-xs"><a href="accountinformation.html">My Account</a></li>
                            <li class="hidden-xs"><a href="contact.html">Contact</a></li>
                            <li class="hidden-xs"><a href="faq.html">FAQ</a></li>
                            <li class="hidden-xs"><a href="wishlist.html">My Wishlist</a></li>
                            <li class="dropdown currency">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">€ EURO<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">€ EURO</a></li>
                                    <li><a href="#">€ EURO</a></li>
                                    <li><a href="#">€ EURO</a></li>
                                </ul>
                            </li>
                            <li class="dropdown flags">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/flag.gif" alt=""/> Eng<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#"><img src="assets/img/flag.gif" alt=""/> Eng</a></li>
                                    <li><a href="#"><img src="assets/img/flag.gif" alt=""/> Eng</a></li>
                                    <li><a href="#"><img src="assets/img/flag.gif" alt=""/> Eng</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Header top bar -->

            <!-- HEADER -->
            <header class="header fixed">
                <div class="header-wrapper">
                    <div class="container">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index-2.html"><img src="assets/img/logo-bella-shop.png" alt="Bella Shop"/></a>
                        </div>
                        <!-- /Logo -->

                        <!-- Header search -->
                        <div class="header-search">
                            <input class="form-control" type="text" placeholder="What are you looking?"/>
                            <button><i class="fa fa-search"></i></button>
                        </div>
                        <!-- /Header search -->

                        <!-- Header shopping cart -->
                        <div class="header-cart">
                            <div class="cart-wrapper">
                                <a href="wishlist.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
                                <a href="compare-products.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-exchange"></i></a>
                                <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> 0 item(s) - $0.00 </span> <i class="fa fa-angle-down"></i></a>
                                <!-- Mobile menu toggle button -->
                                <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                                <!-- /Mobile menu toggle button -->
                            </div>
                        </div>
                        <!-- Header shopping cart -->

                    </div>
                </div>
                <div class="navigation-wrapper">
                    <div class="container">
                        <!-- Navigation -->
                        <nav class="navigation closed clearfix">
                            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                            <ul class="nav sf-menu">
                                <li class="active"><a href="index-2.html">Homepage</a>
                                    <ul>
                                        <li><a href="index-2.html">Homepage 1</a></li>
                                        <li><a href="index-3.html">Homepage 2</a></li>
                                        <li><a href="index-4.html">Homepage 3</a></li>
                                        <li><a href="index-5.html">Homepage 4</a></li>
                                        <li><a href="index-6.html">Homepage 5</a></li>
                                        <li><a href="index-7.html">Homepage 6</a></li>
                                        <li><a href="index-8.html">Homepage 7</a></li>
                                        <li><a href="index-9.html">Homepage 8</a></li>
                                        <li><a href="index-10.html">Homepage 9</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Furnitures</a>
                                    <ul>
                                        <li><a href="category.html">Shop Sidebar Left</a></li>
                                        <li><a href="category-right.html">Shop Sidebar Right</a></li>
                                        <li><a href="category-list.html">Shop List View</a></li>
                                        <li><a href="product-details.html">Product Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Sidebar Left </a></li>
                                        <li><a href="blog-right.html">Blog Sidebar Right</a></li>
                                        <li><a href="blog-post.html">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio.html">Portfolio</a>
                                    <ul>
                                        <li><a href="portfolio.html">Portfolio 3 columns</a></li>
                                        <li><a href="portfolio-4col.html">Portfolio 4 columns</a></li>
                                        <li><a href="portfolio-alt.html">Portfolio Alternate</a></li>
                                        <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu"><a href="#">Features</a>
                                    <ul>
                                        <li class="row">
                                            <div class="col-md-2">
                                                <h4 class="block-title"><span>Interior</span></h4>
                                                <ul>
                                                    <li><a href="#">Kitchen</a></li>
                                                    <li><a href="#">Bedroom</a></li>
                                                    <li><a href="#">Bathroom</a></li>
                                                    <li><a href="#">Living Room</a></li>
                                                    <li><a href="#">Porch</a></li>
                                                    <li><a href="#">Garden</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <h4 class="block-title"><span>Furnitures</span></h4>
                                                <ul>
                                                    <li><a href="#">Modern Sofas</a></li>
                                                    <li><a href="#">Modern Chairs</a></li>
                                                    <li><a href="#">Modern Desks</a></li>
                                                    <li><a href="#">Modern Beds</a></li>
                                                    <li><a href="#">Modern Storages</a></li>
                                                    <li><a href="#">Modern Bookcases</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <h4 class="block-title"><span>Pages</span></h4>
                                                <ul>
                                                    <li><a href="shortcodes.html"><strong>Shortcodes</strong></a></li>
                                                    <li><a href="typography.html"><strong>Typography</strong></a></li>
                                                    <li><a href="coming-soon.html"><strong>Coming soon</strong></a></li>
                                                    <li><a href="error-page.html"><strong>404 Page</strong></a></li>
                                                    <li><a href="about.html"><strong>About</strong></a></li>
                                                    <li><a href="login.html"><strong>Login</strong></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 visible-xs">
                                                <h4 class="block-title"><span>My Account</span></h4>
                                                <ul>
                                                    <li><a href="accountinformation.html"> Account Information </a></li>
                                                    <li><a href="myaccount.html">My Account</a></li>                                        
                                                    <li><a href="cng-pw.html">Change Password</a></li>
                                                    <li><a href="address-book.html">Address Books</a></li>
                                                    <li><a href="order-history.html">Order History</a></li>
                                                    <li><a href="review-rating.html">Reviews and Ratings</a></li>
                                                    <li><a href="return.html">Returns Requests</a></li>
                                                    <li><a href="newsletter.html">Newsletter</a></li>
                                                    <li><a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="block-title"><span>Header styles</span></h4>
                                                <ul>
                                                    <li><a href="index-style-1.html"><strong>Header style 1</strong></a></li>
                                                    <li><a href="index-style-2.html"><strong>Header style 2</strong></a></li>
                                                    <li><a href="index-style-3.html"><strong>Header style 3</strong></a></li>
                                                    <li><a href="index-style-4.html"><strong>Header style 4</strong></a></li>
                                                    <li><a href="index-style-5.html"><strong>Header style 5</strong></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="product-list">
                                                    <div class="media">
                                                        <a class="pull-left media-link" href="#">
                                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-2.jpg" alt="">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Cardboard Wiggle</a></h4>
                                                            <div class="rating">
                                                                <span class="star"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span>
                                                            </div>
                                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="pull-left media-link" href="#">
                                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-3.jpg" alt="">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Book Self</a></h4>
                                                            <div class="rating">
                                                                <span class="star"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span>
                                                            </div>
                                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Accessories</a></li>
                                <li><a href="category.html">Office</a></li>
                                <li><a href="category.html">Luxury</a></li>
                                <li><a href="category.html">Non Residential</a></li>
                                <li class="sale"><a href="category.html">Offers</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- /Navigation -->
                    </div>
                </div>
            </header>
            <!-- /HEADER -->

            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- PAGE -->
                <section class="page-section no-padding slider">
                    <div class="container full-width">

                        <div class="main-slider">
                            <div class="owl-carousel" id="main-slider">

                                <!-- Slide 1 -->
                                <div class="item slide1">
                                    <img class="slide-img" src="assets/img/preview/slider/slide-1.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title">Furniture</h2>
                                                        <h3 class="caption-subtitle">Sale</h3>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Shop Now</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 1 -->

                                <!-- Slide 2 -->
                                <div class="item slide2 alt">
                                    <img class="slide-img" src="assets/img/preview/slider/slide-2.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title">Bella Shop</h2>
                                                        <h3 class="caption-subtitle"><span>interior
                                                                design</span></h3>
                                                        <div class="price">
                                                            <span>$</span><ins>49</ins>
                                                            <span>$</span><del>86</del>
                                                        </div>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Get In Touch</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 2 -->

                                <!-- Slide 3 -->
                                <div class="item slide3 dark">
                                    <img class="slide-img" src="assets/img/preview/slider/slide-3.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title">We are a creative</h2>
                                                        <h3 class="caption-subtitle"><span>interior
                                                                design studio</span></h3>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Get In Touch</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 3 -->

                            </div>
                        </div>

                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">

                        <div class="tabs">
                            <ul id="tabs" class="nav nav-justified-off">
                                <li class="active"><a href="#tab-2" data-toggle="tab">Our Product</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <!-- tab 2 -->
                            <div class="tab-pane fade active in" id="tab-2">
                                <div class="row" id="product-view">
                                    no product
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section no-padding-top">
                    <div class="container">
                        <div class="row blocks shop-info-banners">
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-gift"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Buy 1 Get 1</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-comments"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Call to Free</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-trophy"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Money Back!</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->

            <!-- FOOTER -->
            <footer class="footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title">About Us</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="social-icons">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title">News Letter</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <form action="#">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Enter Your Mail and Get $10 Cash"/>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-theme btn-theme-transparent">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-categories">
                                    <h4 class="widget-title">Information</h4>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Private Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-tag-cloud">
                                    <h4 class="widget-title">Item Tags</h4>
                                    <ul>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Chairs</a></li>
                                        <li><a href="#">Interior</a></li>
                                        <li><a href="#">E commerce</a></li>
                                        <li><a href="#">Hot Deals</a></li>
                                        <li><a href="#">Supplier</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Theme</a></li>
                                        <li><a href="#">Website</a></li>
                                        <li><a href="#">J Themes</a></li>
                                        <li><a href="#">Themeforest</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer-meta">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="copyright">Copyright 2015 BELLA SHOP   |   All Rights Reserved   |   Designed By Jthemes</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="payments">
                                    <ul>
                                        <li><img src="assets/img/preview/payments/visa.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/mastercard.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/paypal.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/american-express.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/visa-electron.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/maestro.jpg" alt=""/></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>
        <!-- /WRAPPER -->

        <!-- JS Global -->
        <script src="<?php echo site_url('web_assets/plugins/jquery/jquery-1.11.1.min.js') ?>"></script>
        <script src="<?php echo site_url('web_assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo site_url('web_assets/plugins/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
        <script src="<?php echo site_url('web_assets/plugins/superfish/js/superfish.min.js') ?>"></script>
        <script src="<?php echo site_url('web_assets/plugins/prettyphoto/js/jquery.prettyPhoto.js') ?>"></script>
        <script src="<?php echo site_url('web_assets/plugins/owl-carousel2/owl.carousel.min.js') ?>"></script>
        <script src="<?php echo site_url('web_assets/plugins/jquery.sticky.min.js') ?>"></script>
        <script src="<?php echo site_url('web_assets/plugins/jquery.easing.min.js') ?>"></script>
        <script src="<?php echo site_url('web_assets/plugins/jquery.smoothscroll.min.js') ?>"></script>

        <!-- JS Page Level -->
        <script src="<?php echo site_url('web_assets/js/theme.js') ?>"></script>

        <!--[if (gte IE 9)|!(IE)]><!-->
        <script src="<?php echo site_url('web_assets/plugins/jquery.cookie.js') ?>"></script>
        <!--<![endif]-->

        <script type="text/javascript">
            $(document).ready(function(){
                $.ajax({
                    url: "order/get_product",
                    dataType: 'json', 
                    success: function(result){
                        var product_view = "";
                        $.each( result, function( key, value ) {
                            product_view += '\
                                <div class="col-md-3 col-sm-6">\
                                    <div class="thumbnail no-border no-padding">\
                                        <div class="media">\
                                            <a class="media-link" data-gal="prettyPhoto" href="detail/'+value.id+'">\
                                                <img src="./uploads/'+value.image+'" alt=""/>\
                                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>\
                                            </a>\
                                        </div>\
                                        <div class="caption text-center">\
                                            <h4 class="caption-title"><a href="detail/'+value.id+'">'+value.name+'</a></h4>\
                                            <div class="price"><ins>Rp.'+value.price+'</ins></div>\
                                            <div class="buttons">\
                                                <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>\
                                            </div>\
                                        </div>\
                                    </div>\
                                </div>';
                            });
                            $("#product-view").html(product_view);
                    }
                });
            })             
        </script>

    </body>

<!-- Mirrored from eazzy.me/html/bella-interior/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Aug 2016 03:08:51 GMT -->
</html>