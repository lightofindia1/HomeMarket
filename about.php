<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us | HomeMarket</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="HomeMarket - Your Market Buddy">
    <meta name="author" content="Manikiran">

    <link rel="shortcut icon" href="assets/img/logo-icon-dark.png">

    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/fonts/mdi/css/mdi.css" type="text/css" rel="stylesheet">
    <!-- Material Icons -->
    <link type='text/css' href='//fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
    <link type='text/css' href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/css/styles.css" type="text/css" rel="stylesheet">
    <!-- Core CSS with all styles -->

    <link href="assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">
    <!-- Code Prettifier -->

    <link href="assets/plugins/dropdown.js/jquery.dropdown.css" type="text/css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">
    <!-- Skylo -->

    <!--[if lt IE 10]>
        <script src="assets/js/media.match.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    <style>
        .card img {
            height: 300px !important;
        }
        .demo-btns .btn {
            color: #fff !important;
        }
    </style>

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
        </div>
        <!-- logo-area -->

        <ul class="nav navbar-nav toolbar pull-right">

            <li class="toolbar-icon-bg appear-on-search ov-h" id="trigger-search-close">
                <a class="toggle-fullscreen"><span class="icon-bg">
	        	<i class="material-icons">close</i>
	        </span></i></a>
            </li>

            <li class="dropdown toolbar-icon-bg hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-bg"><i class="material-icons">person</i><span class="caret"></span></span></a>
                <ul class="dropdown-menu">
                    <?php if(isset($_COOKIE[ "uid"])) { echo '<li><a href="settings"><i class="material-icons">settings</i> Settings</a></li>
					<li><a href="logout"><i class="material-icons">lock_open</i> Logout</a></li>'; } else { echo '<li><a href="login">Login/Signup</a></li>'; } ?>
                </ul>
            </li>

    </header>

    <div id="wrapper">
        <div class="static-content-wrapper">
            <center>
                <div class="static-content">
                    <div class="page-content">
                        <div class="container-fluid mt">
                            <div class="panel mt">
                                <div class="panel-heading">
                                    <h2>Objective</h2>
                                </div>
                                <div class="panel-body" style="text-align:left">
                                    <p>Our primary goal is introduce small scale business to citizens, especially to home makers. We found a huge potential for goods and services that are made at home which is a great step towards Make In India. We make homemakers do what they love the most and help them earn money out of it. They can make products or services of their hobby or interest and sell them to people who are in need for them. With the help of latest Google Map hacks, and our coolest coding skills we present to you HomeMarket. HomeMarket is the first fully voice controlled marketing app with speech recognition and synthesis support.</p>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h2>What we had dreamt of and what we have built</h2>
                                </div>
                                <div class="panel-body" style="text-align:left">
                                    <p>We want common citizens to expand their thoughts and indulge themselves in the field of business. We want homemakers to use their free time at home to do something productive and innovative, to do things they love, at the same time make it a part time business.</p>
                                    <p>We dream of a society where every individual sells something from their home, it could be homemade products or services like tuitions, yoga, arts classes or even renting their unused products, to a greater community of people. Every individual of the society is a buyer and a seller here.</p>
                                    <p>In this modern world people are more aware of the society around them. They don't fully trust the products made by bigger companies, as their system is not completely transparent. They know better what is good or bad for them, so they are looking for products that are safer and transparently made. Here is where we found a huge potential for goods and services that are made in home by other people of the society.</p>
                                    <p>We have built a portal where citizens can buy or sell home made products or services to other citizens who are in need for it. Every product in our portal is made by hobbyists who take great interest and love in making their product. While they take care of the making, we take care of the selling. Our business system is designed in such a way that anyone who is interested in a particular product can request the sellers contact through our portal for making the purchase deal. Either the buyer can visit the sellers address directly to enquire and buy the product, or the seller can parcel the product to the buyer, through a third party transportation. Sellers can also advertise their products for free in our portal to attract buyers in need of a service.</p>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h2>How we plan to improve the service beyond the hackathon.</h2>
                                </div>
                                <div class="panel-body" style="text-align:left">
                                    <p>We plan to create an online shopping market where people can visit and buy goods made transparently and doubt free by fellow citizens. We plan expand this system to other major cities in India, where every citizen contributes a little to the world of business. A society where every citizen has the immense satisfaction of doing things they love the most and also working part time for it to earn money. We believe such a system would expand people's thoughts and knowledge about the world and improve their innovative and creative minds.</p>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h2>Team Members</h2>
                                </div>
                                <div class="panel-body">
                                    <div class="row">

                                        <div class="col-md-3 col-md-offset-3">
                                            <div class="card profile-card">
                                                <div class="card-content">
                                                    <div class="card-image">
                                                        <img src="assets/img/manikiran.jpg" alt="Manikiran" class="img-responsive">
                                                        <h3 class="card-image-headline">Manikiran Pasala
																	<small>Programmer/Developer</small>
																</h3>
                                                    </div>

                                                    <div class="card-body">
                                                        <table class="table table-no-border">
                                                            <tbody>
                                                                <tr>
                                                                    <td><i class="material-icons">mail</i>
                                                                        </span>
                                                                    </td>
                                                                    <td>pmanikiran_1998@yahoo.co.in</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="material-icons">call</i>
                                                                    </td>
                                                                    <td>(+91) 8050548991</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <footer class="card-footer">
                                                        <ul class="demo-btns">
                                                            <li><a href="https://www.facebook.com/lightofindia1" class="btn btn-sm btn-raised" style="background-color:#3b5998;"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a href="https://twitter.com/lightofindia1" class="btn btn-sm btn-raised" style="background-color:#00aced;"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li><a href="https://in.linkedin.com/in/lightofindia1" class="btn btn-sm btn-raised" style="background-color:#007bb6;"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                            <li><a href="https://plus.google.com/+ManikiranPasala" class="btn btn-sm btn-raised" style="background-color:#dd4b39;"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                            <li><a href="http://stackoverflow.com/users/3699054/manikiran" class="btn btn-sm btn-raised" style="background-color:#fb8f3d;"><i class="fa fa-stack-overflow"></i></a>
                                                            </li>
                                                            <li><a href="https://github.com/manikiranp" class="btn btn-sm btn-raised" style="background-color:#333;"><i class="fa fa-github"></i></a>
                                                            </li>
                                                        </ul>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card profile-card">
                                                <div class="card-content">
                                                    <div class="card-image">
                                                        <img src="assets/img/abhay.jpg" alt="Abhay Subramanian" class="img-responsive">
                                                        <h3 class="card-image-headline">Abhay Subramanian
																		<small>Concept Provider</small>
																	</h3>
                                                    </div>

                                                    <div class="card-body">
                                                        <table class="table table-no-border">
                                                            <tbody>
                                                                <tr>
                                                                    <td><i class="material-icons">mail</i>
                                                                        </span>
                                                                    </td>
                                                                    <td>abhaysubramaniank@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><i class="material-icons">call</i>
                                                                    </td>
                                                                    <td>(+91) 9591593454</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <footer class="card-footer">
                                                        <ul class="demo-btns">
                                                            <li><a href="https://www.facebook.com/abhay.subramanian.3" class="btn btn-sm btn-raised" style="background-color:#3b5998;"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a href="https://twitter.com/AbhayInnovation" class="btn btn-sm btn-raised" style="background-color:#00aced;"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li><a href="https://in.linkedin.com/in/abhay-subramanian-k-b7907a113" class="btn btn-sm btn-raised" style="background-color:#007bb6;"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                            <li><a href="https://plus.google.com/102958935715200053547" class="btn btn-sm btn-raised" style="background-color:#dd4b39;"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        <!-- #page-content -->
    </center>
    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline text-center">
                <li>
                    <h6 style="margin: 0;">&copy; 2016 HomeMarket. All Rights Reserved.</h6>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Load site level scripts -->

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <!-- Load jQuery -->
    <script src="assets/js/jqueryui-1.10.3.min.js"></script>
    <!-- Load jQueryUI -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Load Bootstrap -->
    <script src="assets/js/enquire.min.js"></script>
    <!-- Load Enquire -->
<script src="assets/js/annyang.min.js"></script> 									<!-- Load Annyang -->
<script src="assets/js/mespeak.js"></script> 									<!-- Load meSpeak -->
<script src="assets/js/mespeak_config.js"></script> 								<!-- Load meSpeak Config -->

    <script src="assets/plugins/velocityjs/velocity.min.js"></script>
    <!-- Load Velocity for Animated Content -->
    <script src="assets/plugins/velocityjs/velocity.ui.min.js"></script>

    <script src="assets/plugins/progress-skylo/skylo.js"></script>
    <!-- Skylo -->

    <script src="assets/plugins/wijets/wijets.js"></script>
    <!-- Wijet -->

    <script src="assets/plugins/sparklines/jquery.sparklines.min.js"></script>
    <!-- Sparkline -->

    <script src="assets/plugins/codeprettifier/prettify.js"></script>
    <!-- Code Prettifier  -->

    <script src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>
    <!-- Bootstrap Tabdrop -->

    <script src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->

    <script src="assets/plugins/dropdown.js/jquery.dropdown.js"></script>
    <!-- Fancy Dropdowns -->
    <script src="assets/plugins/bootstrap-material-design/js/material.min.js"></script>
    <!-- Bootstrap Material -->
    <script src="assets/plugins/bootstrap-material-design/js/ripples.min.js"></script>
    <!-- Bootstrap Material -->

    <script src="assets/js/application.js"></script>

    <!-- End loading site level scripts -->

    <!-- Load page level scripts-->


    <!-- End loading page level scripts-->
<?php include("options.php"); ?>

</body>

</html>