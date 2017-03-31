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
<title>Post Your ad</title>
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
	<?php require('header.php'); ?>
<!-- content-section-starts -->
	<!-- start registration -->
	<div class="container">
		<div class="registration">
		<div class="registration_left">
			<h2>Post Your Advertisement</h2>
				<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
		<script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
		<script language = "Javascript">

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}

function ValidateForm(){
	var emailID=document.frmSample.user_email
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	return true
 }
</script>

		 <div class="registration_form">
		 <!-- Form -->
			<form name="frmSample" id="registration_form" action="postad1.php" method="post" onSubmit="return ValidateForm()">
				<div>
					<label>
						<input placeholder="Enter your Name" name="user_name" type="text" tabindex="1" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Enter your Phone no." name="user_phone" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="email address" name="user_email" type="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Enter Ad title" name="ad_title" type="text" tabindex="4" required autofocus>
					</label>
				</div>
				
			<div>
					<label>
				<font color="green" size=4>	Choose City &nbsp;&nbsp;&nbsp; </font>
						<select name="city" required autofocus>
<option value="Hyderabad">Hyderabad</option>
<option value="Bangalore">Bangalore</option>
<option value="Pune">Pune</option>
<option value="Chennai">Chennai</option>
<option value="Kolkata">Kolkata</option>
<option value="Gurgaon">Gurgaon</option>
<option value="Mumbai">Mumbai</option>
<option value="Noida">Noida</option>
</select>
						
					</label>
			
				</div>
				<div>
					<label>
						<input placeholder="Enter Wipro Location , Eg:Manikonda " name="com_location" type="text" tabindex="4" required autofocus>
					</label>
				</div>
				
				<div class="sky-form">
					<div class="sky_form1">
						<ul>
							<li><label class="radio left"><input type="radio" name="gender" value="m" checked=""><i></i>Male</label></li>
							<li><label class="radio"><input type="radio" name="gender" value="f"><i></i>Female</label></li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
				<br \>
				<div>
				<font color="green" size=4>Category   &nbsp;&nbsp;&nbsp;&nbsp;</font>					 
					<select name="Category">
						<option value="Laptops">Laptops</option>
						<option value="Home appliances">Home appliances</option>
						<option value="Cars and Bikes">Cars and Bikes</option>
						<option value="Books and materials">Books and materials</option>
						<option value="Phone and tablets">Phone and tablets</option>
						<option value="Clothes">Clothes</option>
							<option value="Others">Others</option>
					</select> 
				 </div> 
<div>
					<label>
						<input placeholder="Used Duration In Months " name="ad_duration" type="text" tabindex="4" required autofocus>
					</label>
				</div>				 <br \>
				<div>
					<input type="submit" value="Next" id="register-submit">
				</div>
			
			</form>
			<!-- /Form -->
		</div>
	</div>
	
		<div class="clearfix"></div>
		</div>
		</div>
	</div>
</div>
   <!-- content-section-ends -->	
   <?php require('footer.php'); ?>
</body>
</html>