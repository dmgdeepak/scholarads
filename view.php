<?php session_start(); 
	require('sqlc.php');
	if(!isset($_GET['id']))
	{
	exit;
	}
	$aid=$_GET['id'];
	
	$sql="SELECT * FROM ads WHERE aid='$aid'";
if(!$data=mysql_query($sql))
echo mysql_error();
if(!$qrow=mysql_fetch_object($data))
echo mysql_error();
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

<title><?php echo $qrow->adname;  ?></title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--webfont-->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<link type="text/css" rel="stylesheet" href="css/easy-responsive-tabs.css" />
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
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
		
		<!-- Fb comment -->
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		
</head>
<body>

	<?php require('header.php');  ?>

		<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span_1_of_left">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="uploads/<?php echo $qrow->photourl; ?>1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="uploads/<?php echo $qrow->photourl; ?>1.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="uploads/<?php echo $qrow->photourl; ?>2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="uploads/<?php echo $qrow->photourl; ?>2.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="uploads/<?php echo $qrow->photourl; ?>3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="uploads/<?php echo $qrow->photourl; ?>3.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="uploads/<?php echo $qrow->photourl; ?>4.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="uploads/<?php echo $qrow->photourl; ?>4.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div>

			<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1">
					<h3><?php echo $qrow->adname; ?> </h3>
					<br \>
					<h5>Rs. <?php echo $qrow->price; ?> </h5>
					<div class="available">
						<h4>Product Details</h4>	<br \>
						<ul>
							<li><b>Location:</b>
								<select>
								<option><?php echo $qrow->location; ?></option>
							</select></li>
								<br \>
									<br \>
							<li><b>City:</b>
								<select>
									<option> <?php echo $qrow->city; ?></option>
									</select>
							</li>
							
							<br \>	<br \>
							<li><b>Used Duration:</b>
								<select>
									<option><?php echo $qrow->usedduration; ?></option>
									</select>
								Months
							</li>
						</ul>
						<div class="btn_form">
							<form>
								<input type="submit" value="Buy" title="" />
							</form>
						</div>
						
						<div class="clearfix"></div>
					</div>
			
			   	 </div>
			   	</div>
					<div class="clearfix"></div>
				</div>
			   
			   	<!-- start tabs -->
			    <!--Horizontal Tab-->
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <li>More Information</li>
                <li>Specifications</li>
                <li>Reviews</li>
            </ul>
            <div class="resp-tabs-container">
                <div class="tab-content">
                                    <p class="para"> <?php echo $qrow->moreinfo; ?>  </p>
					
				</div>
               <div class="tab-content">
                    <p class="para"> <?php echo $qrow->description; ?>  </p>
						
                </div>
                <div class="tab-content">
				<?php
				$host=$_SERVER['HTTP_HOST'];
$address=$_SERVER['PHP_SELF'];
$url=$host.$address;
				?>
                  <div class="fb-comments" data-href="http://<?php echo $url ?>" data-width="550" data-numposts="7" data-colorscheme="dark"></div>
                </div>
            </div>
        </div>
					
		         	<!-- end tabs -->
			   	</div>
		
		<!-- Related ADs -->
		
			 <div class="left_sidebar">
					<div class="sellers">
						 <h4>Seller</h4>
					<div class="banner-wrap bottom_banner color_link">
							<font color="blue">Name: </font> &nbsp; <b><?php echo $qrow->username ?> </b> <br \><br \>
						<a href="mailto:<?php echo $qrow->email ?>?Subject=Wipro Buy and Sell" target="_blank">	<img src="images\email.png"/>&nbsp; <b><?php echo $qrow->email ?> </b> </a> <br \><br \>
						<img src="images\mobile.png"/>&nbsp; &nbsp; <b><?php echo $qrow->mobile ?> </b> </a> <br \><br \>
	                <font color="greeen+yellow">Ad Posted On: </font> &nbsp; <b><?php echo $qrow->date ?> </b> <br \><br \>
						</div>
						 
						 <h4>Related ADS</h4>
						<div class="single-nav">
			                <ul>
							<?php
							$sql="SELECT category FROM ads where aid='$aid'";
						if(!$data=mysql_query($sql))
echo mysql_error();
if(!$qrow=mysql_fetch_object($data))
echo mysql_error();
$category=$qrow->category;
$sql="SELECT * FROM ads WHERE category='$category' and AID!='$aid' limit 0,6";
if(!$data=mysql_query($sql))
echo mysql_error();
							while($qrow=mysql_fetch_object($data))
{
echo ' <li><a href="view.php?id='.$qrow->aid.'">'.$qrow->adname.'</a></li>';
}
?>
			                  
			                </ul>
			              </div>
						</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clearfix"></div>
	       </div>	
		    <?php require('footer.php'); ?>
</body>
</html>