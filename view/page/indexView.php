<!DOCTYPE html>

<html>

    <head>
        
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>HomeShop </title>
        
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,700italic,500italic' rel='stylesheet' type='text/css'>
		
        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo INCLUDE_FILE ?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo INCLUDE_FILE ?>css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_FILE ?>css/style.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_FILE ?>css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo INCLUDE_FILE ?>css/fontello.css">
   		<link rel="stylesheet" href="<?php echo INCLUDE_FILE ?>css/animation.css">
		<link rel="stylesheet" href="<?php echo INCLUDE_FILE ?>css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo INCLUDE_FILE ?>css/owl.theme.css">
		<link rel="stylesheet" href="<?php echo INCLUDE_FILE ?>css/chosen.css">
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->
        
    </head>
    
    
    <body>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Header -->
			<header class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<!-- Top Header -->
					<div id="top-header">
						
						<div class="row">
							
							<nav id="top-navigation" class="col-lg-7 col-md-7 col-sm-7">
								<ul class="pull-left">
									<li><a href="<?php echo PATH ?>#">Home</a></li>
									<li><a href="<?php echo PAGE_PATH ?>index/listt">List Order</a></li>
									<li><a href="<?php echo PATH ?>index/add">Add Product</a></li>
									<li><a href="<?php echo PATH ?>index/about">About Us</a></li>
									<li><a href="<?php echo PATH ?>index/ontact">Contact</a></li>
								</ul>
							</nav>
							
							<nav class="col-lg-5 col-md-5 col-sm-5">
								<ul class="pull-right">
									<li><a class="flag" href="#"><span class="english-flag"></span>English <i class="icons icon-down-dir"></i></a>
                                    	<ul class="box-dropdown parent-arrow">
											<li>
                                            	<div class="box-wrapper no-padding parent-border">
                                                    <table class="language-table">
                                                    	<tr>
                                                        	<td class="flag"><span class="english-flag"></span></td>
                                                            <td class="country"><a href="#">India</a></td>
                                                        
                                                    </table>
                                                </div>
											</li>
										</ul>
                                    	
                                    </li>
									<li><a href="#">TRICHY <i class="icons icon-down-dir"></i></a>
                                    	<ul class="box-dropdown parent-arrow">
											<li>
                                            	<div class="box-wrapper no-padding parent-border">
                                                    <table class="currency-table">
                                                    	<tr>
                                                        	<td><a href="#">TRICHY</a></td>
                                                        </tr>
                                                        <tr>
                                                        	<td><a href="#">CHENNAI</a></td>
                                                        </tr>
                                                        <tr>
                                                        	<td><a href="#">COVAI</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
											</li>
										</ul>
                                    </li>
								</ul>
							</nav>
							
						</div>
						
					</div>
					<!-- /Top Header -->
					
					
					
					<!-- Main Header -->
					<div id="main-header">
						
					<!--	<div class="row">
							
							<div id="logo" class="col-lg-4 col-md-4 col-sm-4">
								<a href="home_v1.html"><img src="img/logo.png" alt="Logo"></a>
							</div>
							
							<nav id="middle-navigation" class="col-lg-8 col-md-8 col-sm-8">
								<ul class="pull-right">
									<li class="blue">
										<a href="compare_products.html"><i class="icons icon-docs"></i>0 Items</a>
                                    </li>
									<li class="red">
										<a href="wishlist.html"><i class="icons icon-heart-empty"></i>2 Items</a>
                                    </li>
									<li class="orange"><a href="order_info.html"><i class="icons icon-basket-2"></i>17 Items</a>
                                    	<ul id="cart-dropdown" class="box-dropdown parent-arrow">
											<li>
                                            	<div class="box-wrapper parent-border">
                                                    <p>Recently added item(s)</p>
                                                    
                                                    <table class="cart-table">
                                                    	<tr>
                                                    		<td><img src="img/products/sample1.jpg" alt="product"></td>
                                                            <td>
                                                                <h6>Lorem ipsum dolor</h6>
                                                                <p>Product code PSBJ3</p>
                                                            </td>
                                                            <td>
                                                            	<span class="quantity"><span class="light">1 x</span> $79.00</span>
                                                                <a href="#" class="parent-color">Remove</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                    		<td><img src="img/products/sample1.jpg" alt="product"></td>
                                                            <td>
                                                                <h6>Lorem ipsum dolor</h6>
                                                                <p>Product code PSBJ3</p>
                                                            </td>
                                                            <td>
                                                            	<span class="quantity"><span class="light">1 x</span> $79.00</span>
                                                                <a href="#" class="parent-color">Remove</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                    		<td><img src="img/products/sample1.jpg" alt="product"></td>
                                                            <td>
                                                                <h6>Lorem ipsum dolor</h6>
                                                                <p>Product code PSBJ3</p>
                                                            </td>
                                                            <td>
                                                            	<span class="quantity"><span class="light">1 x</span> $79.00</span>
                                                                <a href="#" class="parent-color">Remove</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    
                                                    <br class="clearfix">
                                                </div>
                                                
												<div class="footer">
													<table class="checkout-table pull-right">
                                                    	<tr>
                                                        	<td class="align-right">Tax:</td>
                                                            <td>$0.00</td>
                                                        </tr>
                                                        <tr>
                                                        	<td class="align-right">Discount:</td>
                                                            <td>$37.00</td>
                                                        </tr>
                                                        <tr>
                                                        	<td class="align-right"><strong>Total:</strong></td>
                                                            <td><strong class="parent-color">$999.00</strong></td>
                                                        </tr>
                                                    </table>
												</div>
                                                
                                                <div class="box-wrapper no-border">
                                                	<a class="button pull-right parent-background" href="#">Checkout</a>
													<a class="button pull-right" href="order_info.html">View Cart</a>
                                                </div>
											</li>
										</ul>
                                    </li>
									<li class="login-create purple">
                                    	<i class="icons icon-user"></i>
                                        <p>Hello Guest! <a href="#">Login</a> or<br><a href="#">Create Account</a></p>
										<ul id="login-dropdown" class="box-dropdown">
											<li>
                                            	<div class="box-wrapper">
                                                    <h4>LOGIN</h4>
                                                    <div class="iconic-input">
                                                        <input type="text" placeholder="Username">
                                                        <i class="icons icon-user-3"></i>
                                                    </div>
                                                    <div class="iconic-input">
                                                        <input type="text" placeholder="Password">
                                                        <i class="icons icon-lock"></i>
                                                    </div>
                                                    <input type="checkbox" id="loginremember"> <label for="loginremember">Remember me</label>
                                                    <br>
                                                    <br>
                                                    <div class="pull-left">
                                                        <input type="submit" class="orange" value="Login">
                                                    </div>
                                                    <div class="pull-right">
                                                        <a href="#">Forgot your password?</a>
                                                        <br>
                                                        <a href="#">Forgot your username?</a>
														<br>
                                                    </div>
                                                    <br class="clearfix">
                                                </div>
												<div class="footer">
													<h4 class="pull-left">NEW CUSTOMER?</h4>
													<a class="button pull-right" href="create_an_account.html">Create an account</a>
												</div>
											</li>
										</ul>
                                    </li>
								</ul>
							</nav>
							
						</div> -->
						
					</div>
					<!-- /Main Header -->
					
					
					<!-- Main Navigation -->
					<nav id="main-navigation" class="style3">
						<ul>
							
							<li class="home-green current-item">
								<a href="home_v1.html">
									<span class="nav-caption">Home</span>
								</a>
								
								<ul class="normal-dropdown normalAnimation">
									<li><a href="#">Layouts <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Layout 1</a></li>
											<li><a href="home_v2.html">Layout 2</a></li>
											<li><a href="home_v3.html">Layout 3</a></li>
										</ul>
									</li>
									<li><a href="#">Headers <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Header 1</a></li>
											<li><a href="home_v2.html">Header 2</a></li>
											<li><a href="home_v3.html">Header 3</a></li>
											<li><a href="category_v1.html">Header 4</a></li>
											<li><a href="category_v2.html">Header 5</a></li>
											<li><a href="products_page_v1.html">Header 6</a></li>
										</ul>
									</li>
									<li><a href="#">Footers <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html#footer">Footer 1</a></li>
											<li><a href="home_v2.html#footer">Footer 2</a></li>
											<li><a href="home_v3.html#footer">Footer 3</a></li>
											<li><a href="category_v1.html#footer">Footer 4</a></li>
											<li><a href="category_v2-2.html#footer">Footer 5</a></li>
											<li><a href="products_page_v1.html#footer">Footer 6</a></li>
										</ul>
									</li>
									<li><a href="#">Sliders <i class="icons icon-right-dir"></i></a>
										<ul class="normalAnimation">
											<li><a href="home_v1.html">Revolution Slider</a></li>
											<li><a href="home_v2.html">IOS Slider</a></li>
											<li><a href="home_v3.html">Flex Slider</a></li>
										</ul>
									</li>
								</ul>
							</li>
							
							<li class="red">
								<a href="#">
									<span class="nav-caption">Cameras</span>
								</a>
								
								<ul class="wide-dropdown normalAniamtion">
									<li>
										<ul>
											<li><span class="nav-caption">Digital Cameras</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Digital SLR</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Point &amp; Shoot</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Spy, Miniature</a></li>
										</ul>
									</li>
									<li>
										<ul>
											<li><span class="nav-caption">Digital Cameras</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Background Material</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Continuous Lighting</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Flash Lighting</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Light Meters</a></li>
										</ul>
									</li>
									<li>
										<ul>
											<li><span class="nav-caption">Digital Cameras</span></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Batteries</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Cables &amp; Adapters</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Camcorder Tapes &amp; Discs</a></li>
											<li><a href="#"><i class="icons icon-right-dir"></i> Cases, Bags &amp; Covers</a></li>
										</ul>
									</li>
								</ul>
								
							</li>
							
							<li class="blue">
								<a href="category_v2.html">
									<span class="nav-caption">Computers</span>
								</a>
							</li>
							
							<li class="orange">
								<a href="category_v1.html">
									<span class="nav-caption">Cell phones</span>
								</a>
							</li>
							
							
							
							
							
							
						</ul>
						
                                            <div id="search-bar" class="searchbar-visible" style="display: block; opacity: 1; left: 0px; right: 1px;">
							
							<div class="col-lg-12 col-md-12 col-sm-12">
                            	<table id="search-bar-table">
                                    <tr>
                                    	<td class="search-column-1">
                                            <p><span class="grey">Popular Searches:</span> <a href="#">accessories</a>, <a href="#">audio</a>, <a href="#">camera</a>, <a href="#">phone</a>, <a href="#">storage</a>, <a href="#">more</a></p>
                                            <input type="text" placeholder="Enter your keyword">
                                        </td>
                                        <td class="search-column-2">
                                        	<p class="align-right"><a href="#">Advanced Search</a></p>
                                        	<select class="chosen-select-search">
                                                <?php  if(isset($this->data['categorylist'])) echo $this->data['categorylist']; ?>
                                            </select>
                                		</td>
                                    </tr>
                                </table>
							</div>
							<div id="search-button">
								<input type="submit" value="">
								<i class="icons icon-search-1"></i>
							</div>
						</div>
						
					</nav>
					<!-- /Main Navigation -->
					
				</div>
				
			</header>
			<!-- /Header -->
			
			
			<!-- Content -->
			<div class="row content">
				
                
                <!-- Slider -->
                <section class="slider col-lg-12 col-md-12 col-sm-12">
                    <div class="flexslider flexsliderBig">
                        <ul class="slides">
                            <li id="slide1">
								<div class = "text">
									
									<div class = "bg"></div>
									
									<div class = "title">
										<h2>The New <strong>Laptop</strong></h2>
									</div>
									
									<div class = "desc">
										<h3>All the power in your hands!</h3>
										<span>From <span class="price">$960.00</span></span>
									</div>
									
									<div class = "button">
										<a class="button big red" href="#">Buy Now</a>
									</div>
									
								</div>
                            </li>
                            <li id="slide2">
								<div class = "text">
								
									<div class = "bg"></div>
								
									<div class = "title">
										<h2><strong>The New Studio<br>Original Headphones</strong></h2>
									</div>
									
									<div class = "desc">
										<h3>Lorem ipsum dolor</h3>
										<span>From <span class="price">$399.00</span></span>
									</div>
									
									<div class = "button">
										<a class="button big red" href="#">Buy Now</a>
									</div>
									
								</div>
                            </li>
                            <li id="slide3">
								<div class = "text">
									
									<div class = "bg"></div>
									
									<div class = "title">
										<h2><strong>Lorem Ipsum Dolor</strong></h2>
									</div>
									
									<div class = "desc">
										<h3>All the power in your hands!</h3>
										<span>From <span class="price">$960.00</span></span>
									</div>
									
									<div class = "button">
										<a class="button big red" href="#">Buy Now</a>
									</div>
									
								</div>
                            </li>
                        </ul>
                    </div>
                </section>
                <!-- /Slider -->
                
                
                <!-- Banner -->
				<section class="banner col-lg-12 col-md-12 col-sm-12">
					
					<div class="left-side-banner banner-item icon-on-right gray">
						<h4>8(802)234-5678</h4>
						<p>Monday - Saturday: 8am - 5pm PST</p>
						<i class="icons icon-phone-outline"></i>
					</div>
					
					<a href="#">
					<div class="middle-banner banner-item icon-on-left light-blue">
						<h4>Free shipping</h4>
						<p>on all orders over $99</p>
						<span class="button">Learn more</span>
						<i class="icons icon-truck-1"></i>
					</div>
					</a>
					
					<a href="#">
					<div class="right-side-banner banner-item orange">
						<h4>Crazy sale!</h4>
						<p>on selected items</p>
						<span class="button">Shop now</span>
					</div>
					</a>
					
				</section>
				<!-- /Banner -->
                
                
                
				<!-- Main Content -->
				<section class="main-content col-lg-9 col-md-9 col-sm-9">
					
					<!-- Featured Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Featured Products</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="3">
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample1.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<span class="product-tag">Sale</span>
												<img src="img/products/sample2.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample3.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample1.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample2.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample3.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Featured Products -->
					
					
					
					
					<!-- New Collection -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>New Collection</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="3">
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<span class="product-tag">Sale</span>
												<img src="img/products/sample4.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample5.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample6.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample4.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample5.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample6.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /New Collection -->
					



					
					<!-- Random Products -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Random Products</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="3">
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample7.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample8.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample9.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample7.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample8.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
									
									
									
									<!-- Slide -->
									<div>
										<!-- Carousel Item -->
										<div class="product">
											
											<div class="product-image">
												<img src="img/products/sample9.jpg" alt="Product1">
												<a href="products_page_v1.html" class="product-hover">
													<i class="icons icon-eye-1"></i> Quick View
												</a>
											</div>
											
											<div class="product-info">
												<h5><a href="products_page_v1.html">Lorem ipsum dolor sit amet</a></h5>
												<span class="price">$281.00</span>
												<div class="rating readonly-rating" data-score="4"></div>
											</div>
											
											<div class="product-actions">
												<span class="add-to-cart">
													<span class="action-wrapper">
														<i class="icons icon-basket-2"></i>
														<span class="action-name">Add to cart</span>
													</span >
												</span>
												<span class="add-to-favorites">
													<span class="action-wrapper">
														<i class="icons icon-heart-empty"></i>
														<span class="action-name">Add to wishlist</span>
													</span>
												</span>
												<span class="add-to-compare">
													<span class="action-wrapper">
														<i class="icons icon-docs"></i>
														<span class="action-name">Add to Compare</span>
													</span>
												</span>
											</div>
											
										</div>
										<!-- /Carousel Item -->
									</div>
									<!-- /Slide -->
									
									
							</div>
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Random Products -->
					
					
                    
                    
                    
                    <!-- News -->
                    <div class="products-row row">
                        
                        <!-- Carousel Heading -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <div class="carousel-heading">
                                <h4>Latest news &amp; Reviews</h4>
                                <div class="carousel-arrows">
                                    <i class="icons icon-left-dir"></i>
                                    <i class="icons icon-right-dir"></i>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /Carousel Heading -->
                        
                        <!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="2">
									
								<!-- Slide -->
								<div>
									<!-- Carousel Item -->
									<article class="news">
										
										<div class="news-background">
										
											<div class="row">
												<div class="col-lg-5 col-md-5 col-sm-5 news-thumbnail">
													<a href="#"><img src="img/news/sample1-round.jpg" alt="News1"></a>
												</div>
												<div class="col-lg-7 col-md-7 col-sm-7 news-content">
													<h5><a href="blog_post.html">Lorem Ipsum</a></h5>
													<span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
													<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
												</div>
											</div>
										
										</div>
										
									</article>
									<!-- /Carousel Item -->
								</div>
								<!-- /Slide -->
								
								
								<!-- Slide -->
								<div>
									
									<!-- Carousel Item -->
									<article class="news">
										
										<div class="news-background">
										
											<div class="row">
												<div class="col-lg-5 col-md-5 col-sm-5 news-thumbnail">
													<a href="#"><img src="img/news/sample2-round.jpg" alt="News1"></a>
												</div>
												<div class="col-lg-7 col-md-7 col-sm-7 news-content">
													<h5><a href="blog_post.html">Lorem Ipsum</a></h5>
													<span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
													<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
												</div>
											</div>
										
										</div>
										
									</article>
									<!-- /Carousel Item -->
									
								</div>
								<!-- /Slide -->
								
								
								
								<!-- Slide -->
								<div>
									<!-- Carousel Item -->
									<article class="news">
										
										<div class="news-background">
										
											<div class="row">
												<div class="col-lg-5 col-md-5 col-sm-5 news-thumbnail">
													<a href="#"><img src="img/news/sample1-round.jpg" alt="News1"></a>
												</div>
												<div class="col-lg-7 col-md-7 col-sm-7 news-content">
													<h5><a href="blog_post.html">Lorem Ipsum</a></h5>
													<span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
													<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
												</div>
											</div>
										
										</div>
										
									</article>
									<!-- /Carousel Item -->
								</div>
								<!-- /Slide -->
								
								
								<!-- Slide -->
								<div>
									
									<!-- Carousel Item -->
									<article class="news">
										
										<div class="news-background">
										
											<div class="row">
												<div class="col-lg-5 col-md-5 col-sm-5 news-thumbnail">
													<a href="#"><img src="img/news/sample2-round.jpg" alt="News1"></a>
												</div>
												<div class="col-lg-7 col-md-7 col-sm-7 news-content">
													<h5><a href="blog_post.html">Lorem Ipsum</a></h5>
													<span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
													<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
												</div>
											</div>
										
										</div>
										
									</article>
									<!-- /Carousel Item -->
									
								</div>
								<!-- /Slide -->
								
								
								<!-- Slide -->
								<div>
									<!-- Carousel Item -->
									<article class="news">
										
										<div class="news-background">
										
											<div class="row">
												<div class="col-lg-5 col-md-5 col-sm-5 news-thumbnail">
													<a href="#"><img src="img/news/sample1-round.jpg" alt="News1"></a>
												</div>
												<div class="col-lg-7 col-md-7 col-sm-7 news-content">
													<h5><a href="blog_post.html">Lorem Ipsum</a></h5>
													<span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
													<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
												</div>
											</div>
										
										</div>
										
									</article>
									<!-- /Carousel Item -->
								</div>
								<!-- /Slide -->
								
								
								<!-- Slide -->
								<div>
									
									<!-- Carousel Item -->
									<article class="news">
										
										<div class="news-background">
										
											<div class="row">
												<div class="col-lg-5 col-md-5 col-sm-5 news-thumbnail">
													<a href="#"><img src="img/news/sample2-round.jpg" alt="News1"></a>
												</div>
												<div class="col-lg-7 col-md-7 col-sm-7 news-content">
													<h5><a href="blog_post.html">Lorem Ipsum</a></h5>
													<span class="date"><i class="icons icon-clock-1"></i> 23 April, 2012</span>
													<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
												</div>
											</div>
										
										</div>
										
									</article>
									<!-- /Carousel Item -->
									
								</div>
								<!-- /Slide -->
						
						
							</div>
						
						</div>
                        <!-- /Carousel -->
                        
                    </div>
                    <!-- /News -->
                    
                    


					<!-- Product Brands -->
					<div class="products-row row">
						
						<!-- Carousel Heading -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="carousel-heading">
								<h4>Product Brands</h4>
								<div class="carousel-arrows">
									<i class="icons icon-left-dir"></i>
									<i class="icons icon-right-dir"></i>
								</div>
							</div>
							
						</div>
						<!-- /Carousel Heading -->
						
						<!-- Carousel -->
						<div class="carousel owl-carousel-wrap col-lg-12 col-md-12 col-sm-12">
							
							<div class="owl-carousel" data-max-items="5">
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/sample.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/sample.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/sample.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/sample.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/sample.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/sample.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/sample.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/sample.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/sample.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
									
									<!-- Slide -->
									<div>
										<div class="product">
											<a href="#"><img src="img/brands/sample.jpg" alt="Brand1"></a>
										</div>
									</div>
									<!-- /Slide -->
							
							</div>
							
						</div>
						<!-- /Carousel -->
						
					</div>
					<!-- /Product Brands -->
					
						
				</section>
				<!-- /Main Content -->
				
				
				
				
				<!-- Sidebar -->
				<aside class="sidebar right-sidebar col-lg-3 col-md-3 col-sm-3">
					
					<!-- Categories -->
					<div class="row sidebar-box purple">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
								<i class="icons icon-folder-open-empty"></i>
								<h4>Categories</h4>
							</div>
							
							<div class="sidebar-box-content">
								<ul>
									<li><a href="#">Cameras &amp; Photography <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Computers &amp; Tablets <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Cell Phones &amp; Accessories <i class="icons icon-right-dir"></i></a>
                                    	<ul class="sidebar-dropdown">
                                        	<li>
                                            	<ul>
                                                	<li><a href="#">Cell phones &amp; Smartphone</a></li>
                                                    <li><a href="#">Cell Phone Accessories</a></li>
                                                    <li><a href="#">Headsets</a></li>
                                                    <li><a href="#">Cases, Covers & Skins</a></li>
                                                    <li><a href="#">Screen Protectors</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                            	<ul>
                                                	<li><a href="#">Chargers & Cradles</a></li>
                                                    <li><a href="#">Batteries</a></li>
                                                    <li><a href="#">Cables & Adapters</a></li>
                                                    <li><a href="#">All About Smartphones</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
									<li><a href="#">TV, Audio &amp; Surveillance <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Video Games &amp; Consoles <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Car Audio, Video &amp; GPS <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Best Sellers <i class="icons icon-right-dir"></i></a></li>
									<li><a href="#">Shop by Brands <i class="icons icon-right-dir"></i></a></li>
									<li><a class="purple" href="#">All Categories</a></li>
								</ul>
							</div>
							
						</div>
							
					</div>
					<!-- /Categories -->
					
					
					<!-- Compare Products -->
					<div class="row sidebar-box blue">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
                            	<i class="icons icon-docs"></i>
								<h4>Compare Products</h4>
							</div>
							<div class="sidebar-box-content">
                                <table class="compare-table">
                                    
                                    <tr>
                                        <td class="product-thumbnail"><img src="img/products/sample1.jpg" alt="Product1"></td>
                                        <td class="product-info">
                                            <p><a href="#">Lorem ipsum dolor sit amet</a></p>
                                            <a href="#" class="remove">Remove</a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="product-thumbnail"><img src="img/products/sample2.jpg" alt="Product1"></td>
                                        <td class="product-info">
                                            <p><a href="#">Lorem ipsum dolor sit amet</a></p>
                                            <a href="#" class="remove">Remove</a>
                                        </td>
                                    </tr>
                                    
                                </table>
                                <div class="padding-box">
                                	<a class="button grey">Go to compare</a>
                                </div>
							</div>
						</div>
						
					</div>
					<!-- /Compare Products -->
					
					
					<!-- Carousel -->
					<div class="row sidebar-box">
						
						<div class="col-lg-12 col-md-12 col-sm-12 sidebar-carousel">
							
							<!-- Slider -->
							<section class="sidebar-slider">
								<div class="sidebar-flexslider">
									<ul class="slides">
										<li>
											<a href="#"><img src="img/sidebar-slide1.jpg" alt="Slide1"/></a>
										</li>
										<li>
											<a href="#"><img src="img/sidebar-slide2.jpg" alt="Slide1"/></a>
										</li>
										<li>
											<a href="#"><img src="img/sidebar-slide3.jpg" alt="Slide1"/></a>
										</li>
									</ul>
								</div>
								<div class="slider-nav"></div>
							</section>
							<!-- /Slider -->
                            
						</div>
						
					</div>
					<!-- /Carousel -->
					
					
					<!-- Bestsellers -->
					<div class="row sidebar-box red">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
                            <i class="icons icon-award-2"></i>
								<h4>Bestsellers</h4>
							</div>
							
							<div class="sidebar-box-content">
								<table class="bestsellers-table">
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample1.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">Lorem ipsum dolor sit amet</a></p>
											<span class="price">$550.00</span>
										</td>
									</tr>
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample2.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">Lorem ipsum dolor sit amet</a></p>
											<span class="price">$550.00</span>
										</td>
									</tr>
									
									<tr>
										<td class="product-thumbnail"><a href="#"><img src="img/products/sample3.jpg" alt="Product1"></a></td>
										<td class="product-info">
											<p><a href="#">Lorem ipsum dolor sit amet</a></p>
                                            <div class="rating readonly-rating" data-score="4"></div>
											<span class="price"><del>$650.00</del> $550.00</span>
										</td>
									</tr>
									
								</table>
							</div>
							
						</div>
						
					</div>
					<!-- /Bestsellers -->
					
					
					<!-- Tag Cloud -->
					<div class="row sidebar-box green">
						
						<div class="col-lg-12 col-md-12 col-sm-12">
							
							<div class="sidebar-box-heading">
                            	<i class="icons icon-tag-6"></i>
								<h4>Tags Cloud</h4>
							</div>
							
							<div class="sidebar-box-content sidebar-padding-box">
								<a href="#" class="tag-item">digital camera</a>
								<a href="#" class="tag-item">lorem</a>
								<a href="#" class="tag-item">gps</a>
								<a href="#" class="tag-item">headphones</a>
								<a href="#" class="tag-item">ipsum</a>
								<a href="#" class="tag-item">laptop</a>
								<a href="#" class="tag-item">smartphone</a>
								<a href="#" class="tag-item">tv</a>
							</div>
								
						</div>
						
					</div>
					<!-- /Tag Cloud -->
					
					
					
				</aside>
				<!-- /Sidebar -->
				
			</div>
			<!-- /Content -->
			

			<!-- Footer -->
			<footer id="footer" class="row">
				
				
				
				<!-- Main Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="main-footer">
					
						<div class="row">
							
							<!-- Information -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<h4>Information</h4>
								<ul>
									<li><a href="#"><i class="icons icon-right-dir"></i> About Us</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> New Collection</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Bestsellers</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Manufacturers</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Privacy Policy</a></li>
									<li><a href="#"><i class="icons icon-right-dir"></i> Terms &amp; Conditions</a></li>
								</ul>
							</div>
							<!-- /Information -->
							
							
							<!-- Like us on Facebook -->
							<!-- /Like us on Facebook -->
							
							
							<!-- Contact Us -->
							<div class="col-lg-3 col-md-3 col-sm-6 contact-footer-info">
								<h4>Contact Us</h4>
								<ul>
									<li><i class="icons icon-location"></i> 8901 Marmora Road, Glasgow, D04 89GR.</li>
                                    <li><i class="icons icon-phone"></i> +1 800 603 6035</li>
									<li><i class="icons icon-mail-alt"></i><a href="mailto:mail@company.com"> mail@companyname.com</a></li>
									<li><i class="icons icon-skype"></i> homeshop</li>
								</ul>
                                
                                <!-- Social Media -->
                                <div class="social-media">
                                    <ul>
                                        <li class="social-googleplus tooltip-hover" data-toggle="tooltip" data-placement="top" title="Google+"><a href="#"></a></li>
                                        <li class="social-facebook tooltip-hover" data-toggle="tooltip" data-placement="top" title="Facebook"><a href="#"></a></li>
                                        <li class="social-pinterest tooltip-hover" data-toggle="tooltip" data-placement="top" title="Pinterest"><a href="#"></a></li>
                                        <li class="social-twitter tooltip-hover" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="#"></a></li>
                                        <li class="social-youtube tooltip-hover" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="#"></a></li>
                                    </ul>
                                </div>
                                <!-- /Social Media -->
                                
							</div>
							<!-- /Contact Us -->
							
							
							<!-- Newsletter -->
							<div class="col-lg-3 col-md-3 col-sm-6">
								<form id="newsletter" action="http://inthe7heaven.com/homeshop-html/php/newsletter.php">
									<h4>Newsletter Sign Up</h4>
									<p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
									<input type="text" name="newsletter-email" placeholder="Enter your email address">
									<input type="submit" name="newsletter-submit" value="Submit">
								</form>
							</div>
							<!-- /Newsletter -->
							
						</div>
						
					</div>
					
				</div>
				<!-- /Main Footer -->
				
				
				
				<!-- Lower Footer -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					
					<div id="lower-footer">
					
						<div class="row">
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<p class="copyright">Copyright 2014 <a href="#">HomeShop</a>. All Rights Reserved.</p>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-6">
								<ul class="payment-list">
									<li class="payment1"></li>
									<li class="payment2"></li>
									<li class="payment3"></li>
									<li class="payment4"></li>
									<li class="payment5"></li>
								</ul>
							</div>
							
						</div>
						
					</div>
					
				</div>
				<!-- /Lower Footer -->
				
			</footer>
			<!-- Footer -->
			
            
            <div id="back-to-top">
            	<i class="icon-up-dir"></i>
            </div>
            
		</div>
    	<!-- Container -->
		
		
		
		<!-- JavaScript -->
		<script src="<?php echo INCLUDE_FILE ?>js/modernizr.min.js"></script>
		<script src="<?php echo INCLUDE_FILE ?>js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="<?php echo INCLUDE_FILE ?>js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo INCLUDE_FILE ?>js/jquery.raty.min.js"></script>
		
		<!-- Scroll Bar -->
		<script src="<?php echo INCLUDE_FILE ?>js/perfect-scrollbar.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="<?php echo INCLUDE_FILE ?>js/zoomsl-3.0.min.js"></script>
		
		<!-- FancyBox -->
		<script src="<?php echo INCLUDE_FILE ?>js/jquery.fancybox.pack.js"></script>
		
		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="<?php echo INCLUDE_FILE ?>js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="<?php echo INCLUDE_FILE ?>js/jquery.themepunch.revolution.min.js"></script>

		<!-- FlexSlider -->
		<script defer src="<?php echo INCLUDE_FILE ?>js/flexslider.min.js"></script>
		
		<!-- IOS Slider -->
		<script src = "<?php echo INCLUDE_FILE ?>js/jquery.iosslider.min.js"></script>
		
		<!-- noUi Slider -->
		<script src="<?php echo INCLUDE_FILE ?>js/jquery.nouislider.min.js"></script>
		
		<!-- Owl Carousel -->
		<script src="<?php echo INCLUDE_FILE ?>js/owl.carousel.min.js"></script>
		
		<!-- Cloud Zoom -->
		<script src="js/zoomsl-3.0.min.js"></script>
		
		<!-- SelectJS -->
        <script src="<?php echo INCLUDE_FILE ?>js/chosen.jquery.min.js" type="text/javascript"></script>
        
        <!-- Main JS -->
        <script defer src="<?php echo INCLUDE_FILE ?>js/bootstrap.min.js"></script>
        <script src="<?php echo INCLUDE_FILE ?>js/main-script.js"></script>
        

		
    </body>
    
</html>