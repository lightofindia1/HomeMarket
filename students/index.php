<?php
include("../functions.php");
if(isset($_COOKIE["uid"]))
{
	if(LoginVerify())
	{
		header("location: ../logout");
	}
}
if(!isset($conn))
{
	include("../config.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Find Tutors | HomeMarket - Your Market Buddy</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="HomeMarket - Your Market Buddy">
    <meta name="author" content="Manikiran">

    <link rel="shortcut icon" href="../assets/img/logo-icon-white.png"> 

    <link href="../assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">        <!-- Font Awesome -->
    <link href="../assets/fonts/mdi/css/mdi.css" type="text/css" rel="stylesheet">								 <!-- Material Icons -->
    <!--<link type='text/css' href='//fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
    <link type='text/css'  href='//fonts.googleapis.com/icon?family=Material+Icons'  rel="stylesheet">-->
    <link href="../assets/css/styles.css" type="text/css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link href="../assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">                <!-- Code Prettifier -->

    <link href="../assets/plugins/dropdown.js/jquery.dropdown.css" type="text/css" rel="stylesheet">            <!-- iCheck -->
    <link href="../assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">                   <!-- Skylo -->

    <!--[if lt IE 10]>
        <script src="../assets/js/media.match.min.js"></script>
        <script src="../assets/js/respond.min.js"></script>
        <script src="../assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    <style>
	.card-image-headline{
		color:#000 !important;
	}
	.card-image-headline small{
		font-size:22px !important;
		color: #000 !important;
	}
	.card-image img{
		height:200px !important;
	}
	</style>
    

    </head>

    <body class="sidebar-scroll animated-content infobar-overlay">
        

        <header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
	<!-- <div id="page-progress-loader" class="show"></div> -->

	<div class="logo-area">
		<a class="navbar-brand navbar-brand-success" href="../home?noredirect">
			<img class="show-on-collapse img-logo-white" alt="HomeMarket" src="../assets/img/logo-icon-white.png">
			<img class="show-on-collapse img-logo-dark" alt="HomeMarket" src="../assets/img/logo-icon-dark.png">
			<img class="img-white" alt="HomeMarket" src="../assets/img/logo-white.png">
			<img class="img-dark" alt="HomeMarket" src="../assets/img/logo-dark.png">
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
				<?php 
				if(isset($_COOKIE["uid"]))
				{
					echo '<li><a href="../settings"><i class="material-icons">settings</i> Settings</a></li>
					<li><a href="../logout"><i class="material-icons">lock_open</i> Logout</a></li>';
				}
				else
				{
					echo '<li><a href="../login?student">Login/Signup</a></li>';
				}
				?>
			</ul>
		</li>
		
	</ul>

</header>

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-cyan">
                    <div class="static-sidebar">
                        <div class="sidebar">
	
	<div class="widget stay-on-collapse" id="widget-sidebar">
        <nav role="navigation" class="widget-body">
	<ul class="acc-menu">
		<li class="nav-separator"><span>Navigation</span></li>
		<li class="active">
			<a  class="withripple" href="home">
				<span class="icon"><i class="material-icons">home</i></span>
				<span>Dashboard</span>
			</a>
		</li>
		<li >
			<a  class="withripple" href="javascript:;">
				<span class="icon"><i class="material-icons">books</i></span>
				<span>Education</span>
			</a>
			<ul class="acc-menu">
				<li><a  class="withripple " href="http://localhost/homemarket/students/classes/education/primary">Primary Classes</a></li>
				<li><a  class="withripple " href="http://localhost/homemarket/students/classes/education/secondary">Secondary Classes</a></li>
				<li><a  class="withripple " href="http://localhost/homemarket/students/classes/education/entrance">Entrance Exams</a></li>
				<li><a  class="withripple " href="http://localhost/homemarket/students/classes/education/degree">Degree Couching</a></li>
				<li><a  class="withripple " href="http://localhost/homemarket/students/classes/education/others">Others</a></li>	
			</ul>
		</li>
		<li >
			<a  class="withripple" href="javascript:;">
				<span class="icon"><i class="material-icons">art_track</i></span>
				<span>Games</span>
			</a>
			<ul class="acc-menu">
				<li><a  class="withripple " href="http://localhost/homemarket/students/classes/games/chess">Chess</a></li>
				<li><a  class="withripple " href="http://localhost/homemarket/students/classes/games/others">Others</a></li>	
			</ul>
		</li>
		<li >
			<a  class="withripple" href="javascript:;">
				<span class="icon"><i class="material-icons">art_track</i></span>
				<span>Fitness</span>
			</a>
			<ul class="acc-menu">
				<li><a  class="withripple " href="http://localhost/homemarket/students/classes/fitness/yoga">Chess</a></li>
				<li><a  class="withripple " href="http://localhost/homemarket/students/classes/fitness/others">Others</a></li>	
			</ul>
		</li>
		<li >
			<a  class="withripple" href="javascript:;">
				<span class="icon"><i class="material-icons">art_track</i></span>
				<span>Others</span>
			</a>
			<ul class="acc-menu">
				<li><a  class="withripple " href="http://localhost/homemarket/students/classes/others/cooking">Cooking</a></li>
				<li><a  class="withripple " href="http://localhost/homemarket/students/classes/others/others">Others</a></li>	
			</ul>
		</li>
		<li>
			<a  class="withripple" href="../about">
				<span class="icon"><i class="material-icons">contacts</i></span>
				<span>About Us</span>
			</a>
		</li>
		<?php 
		if(isset($_COOKIE["uid"]))
		{
			echo '<li>
					<a  class="withripple" href="../settings">
						<span class="icon"><i class="material-icons">settings</i></span>
						<span>Settings</span>
					</a>
				</li>
				<li>
					<a  class="withripple" href="../logout">
						<span class="icon"><i class="material-icons">lock_open</i></span>
						<span>Logout</span>
					</a>
				</li>';
		}
		else
		{
			echo '<li>
					<a  class="withripple" href="../login?student">
						<span class="icon"><i class="material-icons">person</i></span>
						<span>Login/Signup</span>
					</a>
				</li>';
		}
		?>
		
	</ul>
</nav>
    </div>
</div>
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            
                            <div class="container-fluid">
                                
<div data-widget-group="group1">
	<div class="row">
		<div class="col-md-12">

			<div class="row mt">
			<?php
			if(isset($_COOKIE["uid"]))
			{
				$lat=0;
				$long=0;
				$sql="SELECT `lat`,`long` FROM users WHERE uid='$_COOKIE[uid]'";
				$result=$conn->query($sql);
				if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
					{
						$lat=$row["lat"];
						$long=$row["long"];
					}
				}
				$sellers_count=0;
				$sql="SELECT * FROM classes WHERE uid!='$_COOKIE[uid]' ORDER BY cid";
				$result=$conn->query($sql);
				if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
					{
						$uid=$row["uid"];
						$sql2="SELECT `lat`,`long` FROM users WHERE uid='$uid'";
						$result2=$conn->query($sql2);
						if($result2->num_rows>0)
						{
							while($row2=$result2->fetch_assoc())
							{
								$lat2=$row2["lat"];
								$long2=$row2["long"];
								$dist=GetDistance($lat,$long,$lat2,$long2);
								if($dist!="fail")
								{
									$seller_dist=explode(" ",$dist["distance"])[0];
									if($seller_dist<5)
									{
										$sellers_count+=1;
										echo '<div class="col-md-3">
												<div class="card profile-card">
													<div class="card-content">
														<div class="card-image" style="background:#fff;min-height:100px;">
															<h3 class="card-image-headline">'.$row["title"].'
																<small><i class="fa fa-inr"></i> '.$row["price"].'</span> / '.$row["per"].'</small>
															</h3>
														</div>
														<div class="card-body">
															<p><strong>'.$row["description"].'</strong></p>
															<p>'.u2a($row["uid"]).'</p>
															<button class="btn btn-default btn-fab"><i class="material-icons text-success">call</i></button>
														</div>
													</div>
												</div>
											</div>';
									}
								}
								else
								{
									echo "failed to load";
								}
							}
						} 
					}
				}
				if($sellers_count==0)
				{
					echo '<h3 align="center">No Tutors found near your location!</h3>';
				}
			}
			else
			{
				$sql="SELECT * FROM classes ORDER BY cid DESC";
				$result = $conn->query($sql);
				if($result->num_rows>0)
				{
					while($row = $result->fetch_assoc()) {
						echo '<div class="col-md-3">
								<div class="card profile-card">
									<div class="card-content">
										<div class="card-image" style="background:#fff;min-height:100px;">
											<h3 class="card-image-headline">'.$row["title"].'
												<small><i class="fa fa-inr"></i> '.$row["price"].'</span> / '.$row["per"].'</small>
											</h3>
										</div>
										<div class="card-body">
											<p><strong>'.$row["description"].'</strong></p>
											<p>'.u2a($row["uid"]).'</p>
											<button class="btn btn-default btn-fab"><i class="material-icons text-success">call</i></button>
										</div>
									</div>
								</div>
							</div>';
					}
				}
				else
				{
					echo '<h3 align="center">No Tutors found near your location!</h3>';
				}
			}

			?>
			</div>

		</div>
	</div>
</div>

                            </div> <!-- .container-fluid -->
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

<script src="../assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script src="../assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script src="../assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script src="../assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->
<script src="../assets/js/annyang.min.js"></script> 									<!-- Load Annyang -->
<script src="../assets/js/mespeak.js"></script> 									<!-- Load meSpeak -->
<script src="../assets/js/mespeak_config.js"></script> 								<!-- Load meSpeak Config -->

<script src="../assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script src="../assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script src="../assets/plugins/progress-skylo/skylo.js"></script> 		<!-- Skylo -->

<script src="../assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script src="../assets/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script src="../assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->

<script src="../assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script src="../assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script src="../assets/plugins/dropdown.js/jquery.dropdown.js"></script> <!-- Fancy Dropdowns -->
<script src="../assets/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
<script src="../assets/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->

<script src="../assets/js/application.js"></script>

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    

    <!-- End loading page level scripts-->
<?php include("../options.php"); ?>

    </body>
</html>