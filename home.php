<?php
if(!isset($_GET["noredirect"]))
{
	if(isset($_COOKIE["user_buyer"]))
	{
		header("location: buyers/");
	}
	else if(isset($_COOKIE["user_seller"]))
	{
		header("location: sellers/");
	}
	else if(isset($_COOKIE["user_student"]))
	{
		header("location: students/");
	}
	else if(isset($_COOKIE["user_tutor"]))
	{
		header("location: tutors/");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HomeMarket - Your Market Buddy</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="HomeMarket - Your Market Buddy">
    <meta name="author" content="Manikiran">

    <link rel="shortcut icon" href="assets/img/logo-icon-dark.png"> 

    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">        <!-- Font Awesome -->
    <link href="assets/fonts/mdi/css/mdi.css" type="text/css" rel="stylesheet">								 <!-- Material Icons -->
    <link type='text/css' href='//fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
    <link type='text/css'  href="//fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
    <link href="assets/css/styles.css" type="text/css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link href="assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">                <!-- Code Prettifier -->

    <link href="assets/plugins/dropdown.js/jquery.dropdown.css" type="text/css" rel="stylesheet">            <!-- iCheck -->
    <link href="assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">                   <!-- Skylo -->

    <!--[if lt IE 10]>
        <script src="assets/js/media.match.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
	<style>
	@media(max-width:720px){
		.mii{
			width:200px !important;
		}
	}
	</style>
	
    </head>

    <body class="sidebar-scroll animated-content infobar-overlay">
        

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content" style="background:url(assets/img/bg2.jpg);background-size:cover;">
                            <div class="container-fluid">
								<div data-widget-group="group1">
								<div class="row">
									<div class="col-md-12 mt">

										<div class="row">
											<div class="col-md-2 col-md-offset-5 text-center">
												<img src="assets/img/logo-dark.png">
											</div>
										</div>

										<div class="row">	
											<div class="col-md-3 col-xs-12 col-md-offset-2">
												<div class="panel panel-default" style="border-radius:50%;padding:30px">
													<div class="panel-body" style="border-radius:50%;">
														<center>
														<img src="assets/img/buyer.png" width="100px" height="100px">
														<a href="buyers/" class="btn btn-raised btn-inverse">Buy Now</a>
														</center>
													</div>
												</div>
											</div>


											<div class="col-md-3 col-xs-12 col-md-offset-2">
												<div class="panel panel-default" style="border-radius:50%;padding:30px">
													<div class="panel-body" style="border-radius:50%;">
													<center>
														<img src="assets/img/seller.png" width="100px" height="100px">
														<a href="sellers/" class="btn btn-raised btn-inverse">Sell Now</a>
													</center>
													</div>
												</div>
											</div>
										</div>

										<div class="row">	
											<div class="col-md-3 col-xs-12 col-md-offset-2">
												<div class="panel panel-default" style="border-radius:50%;padding:30px">
													<div class="panel-body" style="border-radius:50%;">
													<center>
														<img src="assets/img/student.png" width="100px" height="100px">
														<a href="students/" class="btn btn-raised btn-inverse">Find Tutor</a>
													</center>
													</div>
												</div>
											</div>


											<div class="col-md-3 col-xs-12 col-md-offset-2">
												<div class="panel panel-default" style="border-radius:50%;padding:30px">
													<div class="panel-body" style="border-radius:50%;">
													<center>
														<img src="assets/img/tutor.png" width="100px" height="100px">
														<a href="tutors/" class="btn btn-raised btn-inverse">Teach Now</a>
													</center>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12 text-center">
												<img src="assets/img/make_in_india.png" class="mii">
											</div>
										</div>


									</div>
								</div>
								</div>

							</div>
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline text-center">
            <li><h6 style="margin: 0;">&copy; 2016 HomeMarket. All Rights Reserved.</h6></li>
        </ul>
    </div>
</footer>

                </div>
                <div class="extrabar-underlay"></div>
            </div>
        </div>

        

            </div>
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
    
    <!-- End loading page level scripts-->
<?php include("options.php"); ?>

    </body>
</html>