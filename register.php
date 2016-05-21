<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
    <meta charset="utf-8">
    <title>Registration | HomeMarket</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="Manikiran">

    <link rel="shortcut icon" href="assets/img/logo-icon-dark.png"> 
    <link type='text/css' href='//fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
    <link href="assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">                   <!-- Skylo -->

    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="assets/css/styles.css" type="text/css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link href="assets/css/ie8.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->
    </head>

    <body class="focused-form animated-content">
<div class="preloader"><img src="assets/img/loader.gif"></div>
        
<div class="container" id="registration-form">
	<a href="home" class="login-logo"><img src="assets/img/logo-dark.png"></a>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Registration Form</h2>
				</div>
				<form action="#" class="form-horizontal" id="reg_form">
					<div class="panel-body">
						<div class="form-group mb-md" id="fullname_group">
	                        <label for="fullname" class="col-md-3 control-label">Full Name</label>
	                        <div class="col-xs-8">
	                        	<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" required>
	                        </div>
	                       
						</div>
						<div class="form-group mb-md" id="username_group">
	                        <label for="username" class="col-md-3 control-label">Username</label>
	                        <div class="col-xs-8">
	                        	<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
	                        </div>
						</div>
						<div class="form-group mb-md" id="email_group">
	                        <label for="email" class="col-md-3 control-label">Email</label>
	                        <div class="col-xs-8">
	                        	<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
	                        </div>
						</div>
						<div class="form-group mb-md" id="password_group">
	                        <label for="password" class="col-md-3 control-label">Password</label>
	                        <div class="col-xs-8">
	                        	<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
	                        </div>
						</div>
						<div class="form-group mb-md" id="password_r_group">
	                        <label for="password_r" class="col-md-3 control-label">Confirm Password</label>
	                        <div class="col-xs-8">
	                        	<input type="password" class="form-control" name="password_r" id="password_r" placeholder="Confirm Password" required>
	                        </div>
						</div>
						<div class="form-group mb-md" id="address_group">
							<label for="address" class="col-md-3 control-label">Address</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" name="address" id="address" placeholder="Enter your address" required>
							</div>
						</div>
						<div class="row mt mb">
							<div class="col-md-12" id="g_map" style="height:400px">
							</div>
						</div>
						<div class="form-group mb-md" id="usertype_group">
	                        <label for="usertype" class="col-md-3 control-label">Category</label>
	                        <div class="col-xs-8">
	                        	<select class="form-control" id="usertype" required>
								
									<option value="0" disabled <?php if((!isset($_GET["seller"]))&&(!isset($_GET["buyer"]))&&(!isset($_GET["student"]))&&(!isset($_GET["tutor"]))){echo "selected";} ?>>Select Your Category</option>
									<option value="seller" <?php if(isset($_GET["seller"])){echo "selected";} ?>>Seller</option>
									<option value="buyer" <?php if(isset($_GET["buyer"])){echo "selected";} ?>>Buyer</option>
									<option value="student" <?php if(isset($_GET["student"])){echo "selected";} ?>>Student</option>
									<option value="tutor" <?php if(isset($_GET["tutor"])){echo "selected";} ?>>Tutor</option>
								</select>
	                        </div>
						</div>
						<div class="form-group mb-n" id="accept_group">
							<div class="col-xs-offset-2 col-xs-8">
								<div class="checkbox">
									<label for="accept"><input type="checkbox" id="accept"/>&nbsp;&nbsp;I accept the <a href="#">user agreement</a></label>
								</div>
							</div>
						</div>
					
					</div>
					<div class="panel-footer">
						<div class="clearfix" id="err_panel">
							<div class="alert alert-warning text-center" id="err_box">
								<strong>Error:</strong> <span id="err_msg">Please check your details before submiting</span>
								<button type="button" class="close" aria-hidden="true" id="err_close">&times;</button>
							</div>
							<a href="login" class="btn btn-default pull-right">Already Registered? Login</a>
							<button type="submit" class="btn btn-primary btn-raised pull-left">Register</button>
						</div>
					</div>
					<input type="hidden" id="lat">
					<input type="hidden" id="long">
				</form>
			</div>
		</div>
	</div>
</div>
    
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script src="assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script src="assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->
<script src="assets/js/annyang.min.js"></script> 									<!-- Load Annyang -->
<script src="assets/js/mespeak.js"></script> 									<!-- Load meSpeak -->
<script src="assets/js/mespeak_config.js"></script> 								<!-- Load meSpeak Config -->

<script src="assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script src="assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script src="assets/plugins/progress-skylo/skylo.js"></script> 		<!-- Skylo -->

<script src="assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script src="assets/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->

<script src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script src="assets/plugins/dropdown.js/jquery.dropdown.js"></script> <!-- Fancy Dropdowns -->
<script src="assets/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
<script src="assets/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->

<script src="assets/js/application.js"></script>

<!-- End loading site level scripts -->
    <!-- Load page level scripts-->
<script type="text/javascript" src='//maps.google.com/maps/api/js?key=AIzaSyDotSQv_5iX0j8WXAU4fP5Hc7sMTv9tdcY&libraries=places'></script>
<script src="assets/js/locationpicker.jquery.js"></script>
<script type="text/javascript">
function isEmail(email) { 
    return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(email);
}
$(document).ready(function(){
	var lat=12.979196;
	var lon=77.569452;
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position){
			lat=position.coords.latitude;
			lon=position.coords.longitude;
			$('#g_map').locationpicker({
				location: {latitude: lat, longitude: lon},	
				radius: 300,
				enableAutocomplete: true,
				inputBinding: {
					latitudeInput: $('#lat'),
					longitudeInput: $('#long'),
					locationNameInput: $('#address')
				}
			});
		});
	}
	$('#g_map').locationpicker({
		location: {latitude: lat, longitude: lon},	
		radius: 300,
		enableAutocomplete: true,
		inputBinding: {
			latitudeInput: $('#lat'),
			longitudeInput: $('#long'),
			locationNameInput: $('#address')
		}
	});
	$("#reg_form").submit(function(e){
		e.preventDefault();
		$(".preloader").fadeIn();
		$("#err_box").removeClass("alert-warning alert-danger").addClass("alert-danger").slideUp();
		var fullname=$("#fullname").val();
		var username=$("#username").val();
		var email=$("#email").val();
		var password=$("#password").val();
		var password_r=$("#password_r").val();
		var address=$("#address").val();
		var usertype=$("#usertype").val();
		var accept="false";
		if($("#accept").is(':checked'))
		{
			accept="true";
		}
		if(fullname.length<4)
		{
			$("#fullname_group").addClass("has-error");
			$("#fullname").focus();
			$("#err_msg").html("Enter your Full Name!");
			$("#err_box").slideDown();
		}
		else if(username.length<6)
		{
			$("#username_group").addClass("has-error");
			$("#username").focus();
			$("#err_msg").html("Username must be Min. 6 Characters");
			$("#err_box").slideDown();
		}
		else if(!isEmail(email))
		{
			$("#email_group").addClass("has-error");
			$("#email").focus();
			$("#err_msg").html("Enter valid Email!");
			$("#err_box").slideDown();
		}
		else if(password.length<6)
		{
			$("#password_group").addClass("has-error");
			$("#password").focus();
			$("#err_msg").html("Password must be Min. 6 Characters");
			$("#err_box").slideDown();
		}
		else if(password!=password_r)
		{
			$("#password_r_group").addClass("has-error");
			$("#password_r").focus();
			$("#err_msg").html("Passwords do not match!");
			$("#err_box").slideDown();
		}
		else if(address=='Railway Station Road, Kempegowda, Sevashrama, Bengaluru, Karnataka 560023, India')
		{
			$("#address_group").addClass("has-error");
			$("#address").focus();
			$("#err_msg").html("Please select your address!");
			$("#err_box").slideDown();	
		}
		else if(usertype=="0"||usertype==null)
		{
			$("#usertype_group").addClass("has-error");
			$("#usertype").focus();
			$("#err_msg").html("Select your Category!");
			$("#err_box").slideDown();
		}
		else if(accept=="false")
		{
			$("#accept_group").addClass("has-error");
			$("#err_msg").html("You must Agree to our Conditions to Register!");
			$("#err_box").slideDown();
		}
		else
		{
			$.ajax({
				url:"verify",
				method:"POST",
				data:{"register":true,"fullname":fullname,"username":username,"password":password,"email":email,"usertype":usertype,"lat":lat,"long":lon},
				success: function(response, textStatus, jqXHR){
					var resp=JSON.parse(response);
					if(resp.msg=="success")
					{
						window.location="confirm?email="+email;
					}
					else
					{
						$("#err_msg").html("Unknown Error! Please Contact Administrator!");
						$("#err_box").slideDown();
						console.log(resp);
					}
				},
				error: function(jqXHR, textStatus, errorThrown){
					$("#err_msg").html("Unknown Error! Please Contact Administrator!");
					$("#err_box").slideDown();
					console.log(jqHXR);
				}
			});
		}
		$(".preloader").fadeOut();
		return false;
	});
	$("#err_close").click(function(){
		$("#err_box").slideUp();
	});
});
</script>
    <!-- End loading page level scripts-->
<?php include("options.php"); ?>
    </body>
</html>