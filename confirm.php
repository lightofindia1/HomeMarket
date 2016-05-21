<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
    <meta charset="utf-8">
    <title>Confirm Email | HomeMarket</title>
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
					<h2>Confirm Email</h2>
				</div>
				<form action="#" class="form-horizontal" id="confirm_form">
					<div class="panel-body">
						<div class="form-group mb-md" id="email_group">
	                        <div class="col-xs-8 col-xs-offset-2">							
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</span>
									<input type="email" class="form-control" id="email" placeholder="Email" <?php if(isset($_GET["email"])){echo 'value="'.$_GET["email"].'" disabled="disabled"'; }?> required>
								</div>
	                        </div>
						</div>
						<div class="form-group mb-md" id="code_group">
	                        <div class="col-xs-8 col-xs-offset-2">					
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="text" class="form-control" id="code" placeholder="Activation Code" <?php if(isset($_GET["code"])){echo 'value="'.$_GET["code"].'" disabled="disabled"'; }?> required>
								</div>
	                        </div>
						</div>
					</div>
					<div class="panel-footer">
						<div class="clearfix">
							<div class="alert alert-info text-center" id="err_box">
								<strong id="err_msg"><i class="fa fa-info-circle"></i> Please check your email for activation code!</strong>
								<button type="button" class="close" aria-hidden="true" id="err_close">&times;</button>
							</div>
							<a href="login" class="btn btn-default pull-right">Already Confirmed? Login</a>
							<button class="btn btn-primary btn-raised pull-left">Confirm</button>
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
function isEmail(email) { 
    return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(email);
}
$(document).ready(function(){
	$("#confirm_form").submit(function(e){
		e.preventDefault();
		$(".preloader").fadeIn();
		$("#err_box").removeClass("alert-info alert-danger").addClass("alert-danger").slideUp();
		var email=$("#email").val();
		var code=$("#code").val();
		if(!isEmail(email))
		{
			$("#email_group").addClass("has-error");
			$("#email").focus();
			$("#err_msg").html("Enter Valid Email!");
			$("#err_box").slideDown();
		}
		else if(code.length!=10)
		{
			$("#code_group").addClass("has-error");
			$("#code").focus();
			$("#err_msg").html("Enter Valid Activation Code!");
			$("#err_box").slideDown();
		}
		else
		{
			$.ajax({
				url:"verify",
				method:"POST",
				data:{"confirm":true,"email":email,"code":code},
				success: function(response, textStatus, jqXHR){
					var resp=JSON.parse(response);
					if(resp.msg=="success")
					{
						window.location="login?activated";
					}
					else if(resp.msg=="fail")
					{
						$("#err_msg").html("Invalid Email/Code! Please Try Again!");
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