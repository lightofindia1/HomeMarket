<?php
if(!isset($_COOKIE["uid"]))
{
	header("location: login");
}
include("config.php");
$sql="SELECT * FROM users WHERE uid='$_COOKIE[uid]'";
$result = $conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$fullname=$row["fullname"];
		$usertype=$row["usertype"];
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Settings | HomeMarket</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="HomeMarket - Your Market Buddy">
    <meta name="author" content="Manikiran">
	<base href="http://localhost/homemarket/">

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
    

    </head>

    <body class="sidebar-scroll animated-content infobar-overlay">
        
        
<header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
	<!-- <div id="page-progress-loader" class="show"></div> -->

	<div class="logo-area">
		<a class="navbar-brand navbar-brand-success" href="home">
			<img class="show-on-collapse img-logo-white" alt="Paper" src="assets/img/logo-icon-white.png">
			<img class="show-on-collapse img-logo-dark" alt="Paper" src="assets/img/logo-icon-dark.png">
			<img class="img-white" alt="Paper" src="assets/img/logo-white.png">
			<img class="img-dark" alt="Paper" src="assets/img/logo-dark.png">
		</a>
		<span id="trigger-search" class="toolbar-trigger toolbar-icon-bg ov-h">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="material-icons">search</i>
				</span>
			</a>
		</span>
		<div id="search-box">
			<input class="form-control" type="text" placeholder="Search..." id="search-input"></input>
		</div>
	</div><!-- logo-area -->

	<ul class="nav navbar-nav toolbar pull-right">

		<li class="toolbar-icon-bg appear-on-search ov-h" id="trigger-search-close">
	        <a class="toggle-fullscreen"><span class="icon-bg">
	        	<i class="material-icons">close</i>
	        </span></i></a>
	    </li>

        <li class="dropdown toolbar-icon-bg hidden-xs">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-bg"><i class="material-icons">person</i><span class="caret"></span></span></a>
			<ul class="dropdown-menu">
				<li><a href="logout"><i class="material-icons">lock_open</i> Logout</a></li>
			</ul>
		</li>

</header>

        <div id="wrapper">
                <div class="static-content-wrapper">
                    <center><div class="static-content">
                        <div class="page-content">
                            <div class="container-fluid">
								<div class="row mt">
									<div class="col-md-6">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h2>General Settings</h2>
											</div>
											<form action="#" id="settings_form" class="form-horizontal">
												<div class="panel-body">
													<div class="form-group mb-md" id="fullname_group">
														<label for="fullname" class="col-md-3 control-label">Full Name</label>
														<div class="col-xs-8">
															<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" required <?php if(isset($fullname)){echo 'value="'.$fullname.'"';}?>>
														</div>
													</div>
													<div class="form-group mb-md" id="usertype_group">
														<label for="usertype" class="col-md-3 control-label">Category</label>
														<div class="col-xs-8">
															<select class="form-control" id="usertype" required>
															
																<option value="0" disabled>Select Your Category</option>
																<option value="seller" <?php if(isset($usertype)&&$usertype=="seller"){echo "selected";} ?>>Seller</option>
																<option value="buyer" <?php if(isset($usertype)&&$usertype=="buyer"){echo "selected";} ?>>Buyer</option>
																<option value="student" <?php if(isset($usertype)&&$usertype=="student"){echo "selected";} ?>>Student</option>
																<option value="tutor" <?php if(isset($usertype)&&$usertype=="tutor"){echo "selected";} ?>>Tutor</option>
															</select>
														</div>
													</div>
												</div>
												<div class="panel-footer">
													<div class="clearfix">
														<div class="alert alert-warning text-center" id="err_box">
															<strong id="err_msg">Please check your details before submitting!</strong>
															<button type="button" class="close" aria-hidden="true" id="err_close">&times;</button>
														</div>
														<button type="submit" class="btn btn-primary btn-raised pull-left">Update</button>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="col-md-6">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h2>Change Password</h2>
											</div>
											<form action="#" id="change_password_form" class="form-horizontal">
												<div class="panel-body">
													<div class="form-group mb-md" id="old_password_group">
														<label for="old_password" class="col-md-3 control-label">Old Password</label>
														<div class="col-xs-8">
															<input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old Password" required>
														</div>
													</div>
													<div class="form-group mb-md" id="new_password_group">
														<label for="new_password" class="col-md-3 control-label">New Password</label>
														<div class="col-xs-8">
															<input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" required>
														</div>
													</div>
													<div class="form-group mb-md" id="new_password_r_group">
														<label for="new_password_r" class="col-md-3 control-label">Confirm New Password</label>
														<div class="col-xs-8">
															<input type="password" class="form-control" name="new_password_r" id="new_password_r" placeholder="Confirm New Password" required>
														</div>
													</div>
												</div>
												<div class="panel-footer">
													<div class="clearfix">
														<div class="alert alert-warning text-center" id="err_box_2">
															<strong id="err_msg_2">Are you sure? There is no undo!</strong>
															<button type="button" class="close" aria-hidden="true" id="err_close_2">&times;</button>
														</div>
														<button type="submit" class="btn btn-primary btn-raised pull-left">Change</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
                        </div> <!-- #page-content -->
                    </div></center>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
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
<?php include("options.php"); ?>
    

    <!-- End loading page level scripts-->

    </body>
</html>