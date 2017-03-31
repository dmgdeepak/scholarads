<?php
require('sqlc.php');

// Fetch New 10 ADS
function getnew()
{
$sql="SELECT * FROM ads limit 0,10";
if(!$data=mysql_query($sql))
echo mysql_error();
while($row=mysql_fetch_object($data))
{
echo '
						
					                    <div class="item">
					                	<div class="product-grid">
										<a href="view.php?id='.$row->aid.'">
											<div class="product-pic">
												<img src="uploads/'.$row->photourl.'1.jpg" width=150 height=150 title="'.$row->adname.'" />
											</div>
											<div class="product-pic-info">
												<h4><a href="view.php?id='.$row->aid.'">'.$row->adname.'</a></h4>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>'.$row->price.'</span>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="view.php?id='.$row->aid.'">View Item</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</a></div>
					                </div>';

}
}

//Get 10 mobile ads

function mobileads()
{
$sql="SELECT * FROM ads WHERE category='Phone and tablets' limit 0,10";
if(!$data=mysql_query($sql))
echo mysql_error();
while($row=mysql_fetch_object($data))
{
echo '
							     <div class="item">
					                	<div class="product-grid">
										<a href="view.php?id='.$row->aid.'">
											<div class="product-pic">
												<img src="uploads/'.$row->photourl.'1.jpg" width=150 height=150 title="'.$row->adname.'" />
											</div>
											<div class="product-pic-info">
												<h4><a href="view.php?id='.$row->aid.'">'.$row->adname.'</a></h4>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>'.$row->price.'</span>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="view.php?id='.$row->aid.'">View Item</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</a></div>
					                </div>';
}
}

//get 10 Home appliance

function gethomeappliance()
{
$sql="SELECT * FROM ads WHERE category='Home appliances' limit 0,10";
if(!$data=mysql_query($sql))
echo mysql_error();
while($row=mysql_fetch_object($data))
{
echo '
							 
					                <div class="item">
					                	<div class="product-grid">
										<a href="view.php?id='.$row->aid.'">
											<div class="product-pic">
												<img src="uploads/'.$row->photourl.'1.jpg" width=150 height=150 title="'.$row->adname.'" />
											</div>
											<div class="product-pic-info">
												<h4><a href="view.php?id='.$row->aid.'">'.$row->adname.'</a></h4>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>'.$row->price.'</span>
													</div>
													<div class="product-pic-info-cart">
														<a class="p-btn" href="view.php?id='.$row->aid.'">View Item</a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</a></div>
					                </div>
							';
}
}


//Main Code starts

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>EAGLECLOTHES Bootstarp responsive Website Template| Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/demo1.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<!-- JavaScript includes -->
		<script src="js/ipresenter.packed.js"></script>
		<script>
			$(document).ready(function(){
				$('#ipresenter').iPresenter({
					timerPadding: -1,
					controlNav: true,
					controlNavThumbs: true,
					controlNavNextPrev: false
				});
			});
		</script>
	    <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="user-desc">
		<div class="container">
			<ul>
				<li><a href="checkout.html">Checkout</a></li>
				<li><i class="user"></i><a href="account.html">My Account</a></li>
				<li><i class="cart"></i><a href="#">Cart (3)</a></li>
			</ul>
		</div>
		</div>
		<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
				</div>
				<div class="top-menu">
				  <span class="menu"> </span>
					<ul class="cl-effect-15">
						<li><a class="active" href="index.html">HOME</a></li>
						<li><a href="404.html" data-hover="NEWS">NEWS</a></li>
						<li><a href="products.html" data-hover="PRODUCTS">PRODUCTS</a></li>
						<li><a href="404.html" data-hover="FEATURES">FEATURES</a></li>
						<li><a href="contact.html" data-hover="CONTACT">CONTACT</a></li>
					</ul>
				</div>
				 <!--script-nav-->
				<script>
				$("span.menu").click(function(){
				$(".top-menu ul").slideToggle("slow" , function(){
				});
				});
				</script>
				<!--script-nav-->
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="slider">
		<div id="ipresenter">
			<div id="intro" class="step" data-x="0" data-y="0" data-thumbnail="images/thumbnails/1.jpg">
				<img src="images/details1.png" />
				<h2>CHECK OUR LATEST FASHION</h2>
			</div>

			<div id="capture" class="step" data-x="1100" data-y="1200" data-scale="1.8" data-rotate="180" data-thumbnail="images/thumbnails/2.jpg">
				<img src="images/details1.png" />
				<h2>CHECK OUR LATEST FASHION</h2>
			</div>

			<div id="view" class="step" data-x="-300" data-y="600" data-scale="0.2" data-rotate="270" data-thumbnail="images/thumbnails/3.jpg">
				<img src="images/details1.png" />
				<h2>CHECK OUR LATEST FASHION</h2>
			</div>
		</div>
	</div>
	</div>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32024393-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- header-section-ends -->
<!-- content-section-starts -->
	<div class="content">
		<div class="sales">
			<div class="container">
				<div class="sales-head text-center">
					<h3>CHECK OUT OUR UNIQUE APPROACH TO <span>FASHION</span></h3>
				</div>
				<div class="sales-grids">
					<div class="col-md-4 sales-grid-a">
						<div class="discount">
							<h4>Sale %60</h4>
						</div>
						<div class="s-img">
							<img src="images/s1.png" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 sales-grid-b">
						<div class="discount">
							<h4>Free Shipping</h4>
						</div>
						<div class="s-img">
							<img src="images/s2.png" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 sales-grid-c">
						<div class="discount">
							<h4>24/7 Support</h4>
						</div>
						<div class="s-img">
							<img src="images/s3.png" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- products-section-starts -->
	  <div class="products-section">
	    <div class="container">
		<div class="product-section-head-text">
		    <h3> Latest <span> ADS</span></h3>
		</div>
		<div class="bottom-grids collections">
				<div class="bottom-grids-left">
					<div class="f-products">
							<!----sreen-gallery-cursual---->
						<div class="sreen-gallery-cursual">
							 <!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 3,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  false,
									        pagination : false,
									      });
									    });
									   </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo" class="owl-carousel text-center">
							   <?php getnew(); ?>
							             </div>
				              </div>
						<!--//sreen-gallery-cursual---->
						
				</div>
				
				
				<!-- Mobile -->
				
				<div class="d-products product-section-head-text">
			<h3><span> Mobile and Tablets</span></h3>
							<!----sreen-gallery-cursual---->
						<div class="sreen-gallery-cursual">
							 <!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo1").owlCarousel({
									        items : 3,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  false,
									        pagination : false,
									      });
									    });
									   </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo1" class="owl-carousel text-center">
							   <?php mobileads(); ?>
							    </div>
						<!--//sreen-gallery-cursual---->
							
					</div>
				</div>
				
				<!-- Home appliance -->
				
				<div class="product-section-head-text">
							<!----sreen-gallery-cursual---->
						<div class="sreen-gallery-cursual">
							 <!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 3,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : false,
									      });
									    });
									   </script>
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
						       <div id="owl-demo2" class="owl-carousel text-center">
							   <?php gethomeappliance(); ?>
							   </div>
						<!--//sreen-gallery-cursual---->
							
					</div>
				</div>
				</div>
	</div>
	</div>
	</div>
	</div>
	<!-- products-section-ends -->
	<?php require('footer.php');
	