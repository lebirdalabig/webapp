<html>
<head>
<title>FCC | Home</title>
<link href="<?php echo base_url('resources/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('resources/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url('resources/css/contactstyle.css');?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url('resources/css/faqstyle.css" type="text/css');?>" media="all" />
<link href="<?php echo base_url('resources/css/single.css');?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('resources/css/medile.css');?>" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="<?php echo base_url('resources/css/jquery.slidey.min.css');?>" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="<?php echo base_url('resources/css/popuo-box.css');?>" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('resources/css/font-awesome.min.css"');?> />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="<?php echo base_url('resources/js/jquery-2.1.4.min.js');?>""></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="<?php echo base_url('resources/css/owl.carousel.css');?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url('resources/js/owl.carousel.js');?>"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('resources/js/move-top.js');?>""></script>
<script type="text/javascript" src="<?php echo base_url('resources/js/easing.js');?>""></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<image src="<?php echo base_url('resources/images/fcc.png');?>" style="width:70px; float:left;">
			</div>
			<div class="w3_search">
				<form action="#" method="post">
					<input type="text" name="Search" placeholder="Search" required="">
					<input type="submit" value="Go">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> (+63) 915 777 5831</li>
					<li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>