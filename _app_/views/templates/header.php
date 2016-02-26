<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo _SCHOOL_; ?></title>
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
							<a href="#"><img src="<?php echo base_url('_assets_/images/logoSch.png');?>" title="doctor" class="img-responsive"/></a>
						</div>
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="#" class="scroll">Home </a></li>
								<li><a href="#" class="scroll">About us</a></li>
								<li><a href="#" class="scroll">Admissions</a></li>
								<li><a href="#" class="scroll">Features</a></li>
								<li><a href="#" class="scroll">Contact</a></li>
							</ul>
							<a href="#" id="pull"><img src="<?php echo base_url('_assets_/images/menu-icon.png');?>" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>