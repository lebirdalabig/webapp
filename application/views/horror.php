<html>
<head>
<title>FCC | Horror</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/.php; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('resources/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('resources/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('resources/css/medile.css');?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('resources/css/single.css');?>" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url('resources/css/contactstyle.css');?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url('resources/css/faqstyle.css');?>" type="text/css" media="all" />
<!-- news-css -->
<link rel="stylesheet" href="<?php echo base_url('resources/news-css/news.css');?>" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="<?php echo base_url('resources/list-css/list.css');?>" type="text/css" media="all" />
<!-- //list-css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('resources/css/font-awesome.min.css');?>" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="<?php echo base_url('resources/js/jquery-2.1.4.min.js');?>"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('resources/js/move-top.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('resources/js/easing.js');?>"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('.php,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="<?php echo base_url('resources/css/owl.carousel.css');?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url('resources/js/owl.carousel.js');?>"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,5],
		  itemsDesktopSmall : [414,4]
	 
		});
	 
	}); 
</script> 
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="index.php"><h1>One<span>Movies</span></h1></a>
			</div>
			<div class="w3_search">
				<form action="#" method="post">
					<input type="text" name="Search" placeholder="Search" required="">
					<input type="submit" value="Go">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 123 345 653</li>
					<li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Click Me</div>
							  </div>
							  <div class="form">
								<h3>Login to your account</h3>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="submit" value="Login">
								</form>
							  </div>
							  <div class="form">
								<h3>Create an account</h3>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="email" name="Email" placeholder="Email Address" required="">
								  <input type="text" name="Phone" placeholder="Phone Number" required="">
								  <input type="submit" value="Register">
								</form>
							  </div>
							  <div class="cta"><a href="#">Forgot your password?</a></div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="w3_home_act"><a href="index.php">Home</a></li>
							<li class="dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.php">Action</a></li>
												<li><a href="genres.php">Biography</a></li>
												<li><a href="genres.php">Crime</a></li>
												<li><a href="genres.php">Family</a></li>
												<li><a href="horror.php">Horror</a></li>
												<li><a href="genres.php">Romance</a></li>
												<li><a href="genres.php">Sports</a></li>
												<li><a href="genres.php">War</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.php">Adventure</a></li>
												<li><a href="comedy.php">Comedy</a></li>
												<li><a href="genres.php">Documentary</a></li>
												<li><a href="genres.php">Fantasy</a></li>
												<li><a href="genres.php">Thriller</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.php">Animation</a></li>
												<li><a href="genres.php">Costume</a></li>
												<li><a href="genres.php">Drama</a></li>
												<li><a href="genres.php">History</a></li>
												<li><a href="genres.php">Musical</a></li>
												<li><a href="genres.php">Psychological</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="series.php">tv - series</a></li>
							<li><a href="news.php">news</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Country <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.php">Asia</a></li>
												<li><a href="genres.php">France</a></li>
												<li><a href="genres.php">Taiwan</a></li>
												<li><a href="genres.php">United States</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.php">China</a></li>
												<li><a href="genres.php">HongCong</a></li>
												<li><a href="genres.php">Japan</a></li>
												<li><a href="genres.php">Thailand</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="genres.php">Euro</a></li>
												<li><a href="genres.php">India</a></li>
												<li><a href="genres.php">Korea</a></li>
												<li><a href="genres.php">United Kingdom</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="short-codes.php">Short Codes</a></li>
							<li><a href="list.php">A - z list</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav>
</div>
<div class="w3l-agile-horror">
       <!-- /w3l-medile-movies-grids -->
			<div class="w3l-medile-movies-grids">
				<!-- /movie-browse-agile -->
				      <div class="movie-browse-agile">
					     <!--/browse-agile-w3ls -->
						<div class="browse-agile-w3ls general-w3ls">
								<div class="tittle-head">
									<h4 class="latest-text">Horror Movies </h4>
									<div class="container">
										<div class="agileits-single-top">
											<ol class="breadcrumb">
											  <li><a href="index.php">Home</a></li>
											  <li class="active">Horror</li>
											</ol>
										</div>
									</div>
								</div>
								<div class="container">
									<!-- /latest-movies1 -->
							    <div class="browse-inner-come-agile-w3">
							   <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h1.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Before I Wake</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											<div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														
														  <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
								   <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h2.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Don't Breathe</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
								    <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h3.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">The Shallows</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														   <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										  <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h4.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Hush</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
										<div class="col-md-2 w3l-movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h5.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Tell Me How I Die</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														   <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h6.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">The Veil</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											<div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>

								<div class="clearfix"> </div>
								</div>
							<!-- //latest-movies1 -->
								<!-- /latest-movies1 -->
							    <div class="browse-inner-come-agile-w3">
							   <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h7.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Dead 7</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											<div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														   <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
								   <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h8.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Keep Watching</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
								    <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h9.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Holidays</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										  <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h10.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">The Neon Demon</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
										<div class="col-md-2 w3l-movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h11.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Morgan </a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h12.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">The Belko Experiment</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											<div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>

								<div class="clearfix"> </div>
								</div>
									<!-- /latest-movies1 -->
							    <div class="browse-inner-come-agile-w3">
							   <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h1.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Before I Wake</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											<div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														
														  <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
								   <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h2.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Don't Breathe</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
								    <div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h3.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">The Shallows</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														   <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										  <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h4.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Hush</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
										<div class="col-md-2 w3l-movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h5.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">Tell Me How I Die</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											 <div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														   <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>
									<div class="col-md-2 w3l-movie-gride-agile">
										 <a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/h6.jpg" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="single.php">The Veil</a></h6>							
										</div>
										<div class="mid-2">
										
											<p>2016</p>
											<div class="block-stars">
												<ul class="w3l-ratings">
													     <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														 <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														  
										
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
											
									</div>
							 	    <div class="ribben">
										<p>NEW</p>
									</div>	
									</div>

								<div class="clearfix"> </div>
								</div>
							<!-- //latest-movies1 -->
				<!--//browse-agile-w3ls -->
						<div class="blog-pagenat-wthree">
							<ul>
								<li><a class="frist" href="#">Prev</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a class="last" href="#">Next</a></li>
							</ul>
						</div>
					</div>
				<!-- //movie-browse-agile -->
				<!--body wrapper start-->
						<div class="review-slider">
						 <h4 class="latest-text">Movie Reviews</h4>
						 <div class="container">
						 	<div class="w3_agile_banner_bottom_grid">
								<div id="owl-demo" class="owl-carousel owl-theme">
									<div class="item">
										<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
											<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m13.jpg" title="album-name" class="img-responsive" alt=" " />
												<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
											</a>
											<div class="mid-1 agileits_w3layouts_mid_1_home">
												<div class="w3l-movie-text">
													<h6><a href="single.php">Citizen Soldier</a></h6>							
												</div>
												<div class="mid-2 agile_mid_2_home">
													<p>2016</p>
													<div class="block-stars">
														<ul class="w3l-ratings">
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="ribben">
												<p>NEW</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
											<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg" title="album-name" class="img-responsive" alt=" " />
												<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
											</a>
											<div class="mid-1 agileits_w3layouts_mid_1_home">
												<div class="w3l-movie-text">
													<h6><a href="single.php">X-Men</a></h6>							
												</div>
												<div class="mid-2 agile_mid_2_home">
													<p>2016</p>
													<div class="block-stars">
														<ul class="w3l-ratings">
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="ribben">
												<p>NEW</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
											<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m12.jpg" title="album-name" class="img-responsive" alt=" " />
												<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
											</a>
											<div class="mid-1 agileits_w3layouts_mid_1_home">
												<div class="w3l-movie-text">
													<h6><a href="single.php">Greater</a></h6>							
												</div>
												<div class="mid-2 agile_mid_2_home">
													<p>2016</p>
													<div class="block-stars">
														<ul class="w3l-ratings">
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="ribben">
												<p>NEW</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
											<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg" title="album-name" class="img-responsive" alt=" " />
												<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
											</a>
											<div class="mid-1 agileits_w3layouts_mid_1_home">
												<div class="w3l-movie-text">
													<h6><a href="single.php">Light B/t Oceans</a></h6>							
												</div>
												<div class="mid-2 agile_mid_2_home">
													<p>2016</p>
													<div class="block-stars">
														<ul class="w3l-ratings">
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="ribben">
												<p>NEW</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
											<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m8.jpg" title="album-name" class="img-responsive" alt=" " />
												<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
											</a>
											<div class="mid-1 agileits_w3layouts_mid_1_home">
												<div class="w3l-movie-text">
													<h6><a href="single.php">The BFG</a></h6>							
												</div>
												<div class="mid-2 agile_mid_2_home">
													<p>2016</p>
													<div class="block-stars">
														<ul class="w3l-ratings">
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="ribben">
												<p>NEW</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
											<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg" title="album-name" class="img-responsive" alt=" " />
												<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
											</a>
											<div class="mid-1 agileits_w3layouts_mid_1_home">
												<div class="w3l-movie-text">
													<h6><a href="single.php">Central Intelligence</a></h6>							
												</div>
												<div class="mid-2 agile_mid_2_home">
													<p>2016</p>
													<div class="block-stars">
														<ul class="w3l-ratings">
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="ribben">
												<p>NEW</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
											<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m10.jpg" title="album-name" class="img-responsive" alt=" " />
												<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
											</a>
											<div class="mid-1 agileits_w3layouts_mid_1_home">
												<div class="w3l-movie-text">
													<h6><a href="single.php">Don't Think Twice</a></h6>							
												</div>
												<div class="mid-2 agile_mid_2_home">
													<p>2016</p>
													<div class="block-stars">
														<ul class="w3l-ratings">
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="ribben">
												<p>NEW</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
											<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m17.jpg" title="album-name" class="img-responsive" alt=" " />
												<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
											</a>
											<div class="mid-1 agileits_w3layouts_mid_1_home">
												<div class="w3l-movie-text">
													<h6><a href="single.php">Peter</a></h6>							
												</div>
												<div class="mid-2 agile_mid_2_home">
													<p>2016</p>
													<div class="block-stars">
														<ul class="w3l-ratings">
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="ribben">
												<p>NEW</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
											<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m15.jpg" title="album-name" class="img-responsive" alt=" " />
												<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
											</a>
											<div class="mid-1 agileits_w3layouts_mid_1_home">
												<div class="w3l-movie-text">
													<h6><a href="single.php">God’s Compass</a></h6>							
												</div>
												<div class="mid-2 agile_mid_2_home">
													<p>2016</p>
													<div class="block-stars">
														<ul class="w3l-ratings">
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
														</ul>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="ribben">
												<p>NEW</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						<!--body wrapper end-->
			   </div>	
		   </div>
		</div>
	      <!-- //w3l-medile-movies-grids -->
	</div>
	</div>	
</div>
<!-- //comedy-w3l-agileits -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3ls_footer_grid">
				<div class="col-md-6 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_left1">
						<h2>Subscribe to us</h2>
						<div class="w3ls_footer_grid_left1_pos">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="Your email..." required="">
								<input type="submit" value="Send">
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6 w3ls_footer_grid_right">
					<a href="index.php"><h2>One<span>Movies</span></h2></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-5 w3ls_footer_grid1_left">
				<p>&copy; 2016 One Movies. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
			<div class="col-md-7 w3ls_footer_grid1_right">
				<ul>
					<li>
						<a href="<?php echo base_url('/welcome/genres');?>">Movies</a>
					</li>
					<li>
						<a href="<?php echo base_url('/welcome/faq');?>">FAQ</a>
					</li>
					<li>
						<a href="<?php echo base_url('/welcome/horror');?>">Action</a>
					</li>
					<li>
						<a href="<?php echo base_url('/welcome/genres');?>">Adventure</a>
					</li>
					<li>
						<a href="<?php echo base_url('/welcome/comedy');?>">Comedy</a>
					</li>
					<li>
						<a href="<?php echo base_url('/welcome/icons');?>">Icons</a>
					</li>
					<li>
						<a href="<?php echo base_url('/welcome/contact');?>">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('resources/js/bootstrap.min.js');?>"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>