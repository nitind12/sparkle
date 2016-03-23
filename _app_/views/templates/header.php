<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="description" content="<?php echo $desc_; ?>" />
        <meta name="keywords" content="<?php echo $keys_; ?>" />
        <meta name="revisit-after" content="7 days">
        <meta name="abstract" content="<?php echo _SCHOOL_; ?> offers Class from 1st to 12th, First Class to Twelth Class, 1 to 12 class">
        <meta name="contact" content="enquiry@motherindiaglobalschool.org">
        <meta name="distribution" content="local">
        <meta name="author" content="Mother India Global School, Uttarakhand">
        <meta name="language" content="English"> 
        <meta name="allow-search" content="yes">
        <meta name="copyright" content="Mother India Global School, Uttarakhand">
        <script type="text/javascript">
            base_url_ = "<?php echo base_url(); ?>";
            site_url_ = "<?php echo site_url(); ?>";
        </script>
		<link href="<?php echo base_url('_assets_/css/bootstrap.css');?>" rel='stylesheet' type='text/css' />
		<script src="<?php echo base_url('_assets_/js/jquery.min.js');?>"></script>
		<link href="<?php echo base_url('_assets_/css/style.css');?>" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script type="text/javascript" src="<?php echo base_url('_assets_/js/move-top.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('_assets_/js/easing.js');?>"></script>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>

		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>

	</head>
	<body>
		<div id="home" class="header navbar-fixed-top">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<a href="#"><img src="<?php echo base_url('_assets_/images/logoSch.png');?>" title="Little Sparkle Academy" class="img-responsive"/></a>
						</div>
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="<?php echo site_url('web/');?>">Home </a></li>
								<li><a href="<?php echo site_url('web/call_page/about/about/1'); ?>">About us</a></li>
								<li><a href="<?php echo site_url('web/call_page/admission/admission/2'); ?>">Admissions</a></li>
								<li><a href="<?php echo site_url('web/call_page/features/features/3'); ?>">Features</a></li>
								<li><a href="<?php echo site_url('web/call_page/contact/contact/5'); ?>">Contact</a></li>
                                <li><a href="<?php echo site_url('web/call_page/login/lgn/4'); ?>">Login</a></li>
							</ul>
							<a href="#" id="pull"><img src="<?php echo base_url('_assets_/images/menu-icon.png');?>" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>