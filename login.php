<?php
$user=null;
if(isset($_GET["buyer"]))
{
	$user="buyer";
}
else if(isset($_GET["seller"]))
{
	$user="seller";
}
else if(isset($_GET["student"]))
{
	$user="student";
}
else if(isset($_GET["tutor"]))
{
	$user="tutor";
}
?>
<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
    <meta charset="utf-8">
    <title>Login | HomeMarket</title>
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
        
        
<div class="container" id="login-form">
	<a href="home" class="login-logo"><img src="assets/img/logo-dark.png"></a>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>Login</h2>
					</div>
					<form action="#" class="form-horizontal" id="login_form">
						<div class="panel-body">
						
							<div class="form-group mb-md" id="username_group">
		                        <div class="col-xs-12">
		                        	<div class="input-group">							
										<span class="input-group-addon">
											<i class="fa fa-user"></i>
										</span>
										<input type="text" class="form-control" id="username" placeholder="Username/Email" required>
									</div>
		                        </div>
							</div>

							<div class="form-group mb-md">
		                        <div class="col-xs-12">
		                        	<div class="input-group" id="password_group">
										<span class="input-group-addon">
											<i class="fa fa-key"></i>
										</span>
										<input type="password" class="form-control" id="password" placeholder="Password" required>
									</div>
		                        </div>
							</div>

							<div class="form-group mb-n">
								<div class="col-xs-12">
									<a href="forgot" class="pull-right">Forgot password?</a>
									<div class="checkbox-inline pull-left icheck p-n ml">
										<div class="checkbox">
											<label for="remember"><input type="checkbox" id="remember"/> Remeber me</a></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-footer">
							<div class="clearfix">
								<?php
								if(isset($_GET["required"]))
								{
									echo '<div class="alert alert-dismissable alert-warning" id="err_box">
										<strong id="err_msg"><i class="fa fa-exclamation-triangle"></i> Warning: Login Required!</strong>
										<button type="button" class="close" id="err_close" aria-hidden="true">&times;</button>
									</div>';
								}
								else if(isset($_GET["activated"]))
								{
									echo '<div class="alert alert-dismissable alert-success" id="err_box">
										<strong id="err_msg"><i class="fa fa-check"></i> Account Has Been Activated!</strong>
										<button type="button" class="close" id="err_close" aria-hidden="true">&times;</button>
									</div>';
								}
								else
								{
									echo '<div class="alert alert-dismissable alert-warning" id="err_box">
										<strong id="err_msg"><i class="fa fa-exclamation-triangle"></i>&nbsp; Warning: Check details before submiting!</strong>
										<button type="button" class="close" id="err_close" aria-hidden="true">&times;</button>
									</div>';
								}
								?>
								<a href="register<?php if($user){echo "?".$user;} ?>" class="btn btn-default pull-right">Register</a>
								<button class="btn btn-primary btn-raised pull-left" id="login">Login</button>
							</div>
						</div>
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
<script>
$(document).ready(function(){
	$("#login_form").submit(function(e){
		e.preventDefault();
		$(".preloader").fadeIn();
		$("#err_box").removeClass("alert-warning alert-danger alert-success").addClass("alert-danger").slideUp();
		var username=$("#username").val();
		var password=$("#password").val();
		var remember="false";
		if($("#remember").is(':checked'))
		{
			remember="true";
		}
		if(username.length<6)
		{
			$("#username_group").addClass("has-error");
			$("#username").focus();
			$("#err_msg").html("Enter Valid Username/Email!");
			$("#err_box").slideDown();
		}
		else if(password.length<6)
		{
			$("#password_group").addClass("has-error");
			$("#password").focus();
			$("#err_msg").html("Enter Valid Password!");
			$("#err_box").slideDown();
		}
		else
		{
			$.ajax({
				url:"verify",
				method:"POST",
				data:{"login":true,"username":username,"password":password,"remember":remember},
				success: function(response, textStatus, jqXHR){
					var resp=JSON.parse(response);
					if(resp.msg=="success")
					{
						window.location=resp.data+"s/";
					}
					else if(resp.msg=="activate")
					{
						window.location="confirm?email="+resp.email;
					}
					else if(resp.msg=="wrong")
					{
						$("#err_msg").html("Invalid Username/Password! Please Try Again!");
						$("#err_box").slideDown();
					}
					else
					{
						$("#err_msg").html("Unknown Error! Please Contact Administrator!");
						$("#err_box").slideDown();
					}
				},
				error: function(jqXHR, textStatus, errorThrown){
					$("#err_msg").html("Unknown Error! Please Contact Administrator!");
					$("#err_box").slideDown();
				}
			});
		}
		$(".preloader").fadeOut();
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