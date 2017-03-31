<?php
require('sqlc.php');
if(!isset($_GET['q']))
	{
	exit;
	}
	$page=0;  //default vari
	
	//get page value
	function checkpage()
	{
	if(!isset($_GET['page']))
	{
	$GLOBALS['page']=1;
	}
	else
	{
	$GLOBALS['page']=$_GET['page'];
	}
	}
	checkpage();
	$limit=0;
	
	if ($GLOBALS['page']==1)
{
$GLOBALS['limit']=0;
}
	else
{
$GLOBALS['limit']=$GLOBALS['page']*6;
}
$qu=$_GET['q'];   //Searched Query
// Fetch First 3 ADS
function res1($qu,$limit)
{
if($limit!=0)
{
$limit2=$limit-6;
$limit=$limit-3;
}
else
{
$limit2=$limit;
$limit=$limit+3;
}
$sql="SELECT * FROM ads WHERE adname like '%$qu%' limit $limit2,$limit";
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
											</a>
											<div class="product-pic-info">
												<h4><a href="view.php?id='.$row->aid.'">'.$row->adname.'</a></h4>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rs '.$row->price.'</span>
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

function res2($qu,$limit)
{
if($limit!=0)
{
$limit2=$limit-3;
}
else
{
$limit2=3;
$limit=6;
}
$sql="SELECT * FROM ads WHERE adname like '%$qu%' limit $limit2,$limit";
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
											</a>
											<div class="product-pic-info">
												<h4><a href="view.php?id='.$row->aid.'">'.$row->adname.'</a></h4>
												<div class="product-pic-info-price-cart">
													<div class="product-pic-info-price">
														<span>Rs '.$row->price.'</span>
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
<title><?php echo  $qu; ?>Search</title>
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
	<?php require('homeheader.php'); 
	?>
<!-- content-section-starts -->
	<div class="content">
				<!-- products-section-starts -->
	  <div class="products-section">
	    <div class="container">
			<h3><font color="green">Categories</font></h3>  <br \>
<a href="category.php?cat=Phone and tablets">Mobile and Tablets</a>  &nbsp;&nbsp;
	<a href="category.php?cat=laptops">Laptops</a>&nbsp;&nbsp;
	<a href="category.php?cat=Home appliances">Home appliance</a>&nbsp;&nbsp;
	<a href="category.php?cat=Cars and Bikes">Cars and Bikes</a>&nbsp;&nbsp;
	<a href="category.php?cat=Books and materials">Books and Materials</a>&nbsp;&nbsp;
	<a href="category.php?cat=Clothes">clothes</a>&nbsp;&nbsp;
	<a href="category.php?cat=Others">Others</a>  <br \> <br \>
		
		<div class="product-section-head-text">
		    
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
							   <?php res1($qu,$limit); ?>
							             </div>
				              </div>
						<!--//sreen-gallery-cursual---->
						
				</div>
				
				
				<!-- Next 3 Results -->
				
				<div class="d-products product-section-head-text">
			
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
							   <?php res2($qu,$limit); ?>
							    </div>
						<!--//sreen-gallery-cursual---->
							
					</div>
				</div>
				<div align="center">
				<?php
				$sql="SELECT * FROM ads WHERE adname like '%$qu%'";
if(!$data=mysql_query($sql))
echo mysql_error();
$count=mysql_num_rows($data);
$page=round($count/6);
$page++;
if($page>0)
{
$start=1;
echo ' <div><h4><font color ="blue"> Page &nbsp; &nbsp;</font> ';
while($start!=$page)
{
echo '
<a href="search.php?q='.$qu.'&page='.$start.'">'.$start.' </a> &nbsp;    
				 ';
				 $start++;
}
echo '<a href="search.php?q='.$qu.'&page='.$page.'">'.$page.' </a> &nbsp;    </h4>';
}
echo '</div>';

				?>
				</div>
				
								
				</div>
	</div>

	</div>
	</div>
	</div>
	<!-- products-section-ends -->
	<?php require('footer.php'); ?>
	</body>
</html>