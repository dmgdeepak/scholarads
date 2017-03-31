<?php session_start(); ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<?php require('sqlc.php');   ?>
<title>Post Your ad - Step 2</title>
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
	<?php require('header.php');?>
<!-- content-section-starts -->
	<!-- start registration -->
	<div class="container">
				<div class="My-wish-section">
		<section id="wish">
			<div class="my-wish-content">
				<div class="pag-nav">
			<ul class="p-list">
				<li><a href="index.php">Home</a></li> &nbsp;&nbsp;/&nbsp;
				<li class="act">&nbsp;Post Ad</li>
			</ul>
		</div>
		<div class="coats sing-c">
			<h3 class="c-head">Fill The Required Details</h3>
			
 				
		</div>
		<script>
function testing()
{
    var txtlength=document.getElementById("txt1").value.length;
    if(txtlength>500)  
    {
        alert("Specifications should less than 500 chars");
        return false; 
    }
    if(txtlength<40)
    {
	alert("Specifications should more than 50 chars");
    	return false;
    }
	 var txtlength=document.getElementById("txt2").value.length;
    if(txtlength>500)  
    {
        alert("Description should less than 500 chars");
        return false; 
    }
    if(txtlength<40)
    {
	alert("Description should more than 50 chars");
    	return false;
    }
	
    return true;
}
</script> 


<div class="contact-form">

<form action="uploadadpic.php" method="post" enctype="multipart/form-data" onsubmit="return testing()">
<input type="hidden" name="vericode" value="<?php echo $_GET['data'] ?>">
<input type="hidden" name="email" value="<?php echo $_GET['email'] ?>">
<p>Only JPG Images are allowed and Size Limit is 500kb</p>
<h4>
				Picture 1: <input type="file" name="fileToUpload" id="fileTo Upload">
				
 				<br \>
 				Picture 2:
 				<input type="file" name="fileToUpload2" id="fileToUpload2">
				<br \>
				 Picture 3:
 				<input type="file" name="fileToUpload3" id="fileToUpload3">
				<br \>
				Picture 4:
				<input type="file" name="fileToUpload4" id="fileToUpload4">
                 <br \>
				 <br \>
				 Enter Price Of Product
				 </h4>
				 <div>
					<label>
						<input placeholder="Enter Selling Price" name="user_price" type="text" tabindex="1" required autofocus>
					</label>
				</div> <br \> <br \>
				<h4>Specifications : </h4>(Max 500 chars)
				  <textarea id="txt1" name="specs" required></textarea>

						  <br \>
						  	<h4>Description Of Product : </h4>(Max 500 chars)
				  <textarea id="txt2" name="descrip" required></textarea>
<div>
						   		<span><input type="submit" class="" value="Upload"></span>
						  </div>

</form>
</div>
	</div>
	</div>
		</div>
	</div>
</div>
   <!-- content-section-ends -->	
   <?php require('footer.php'); ?>
</body>
</html>