<html>
<head>
<title>FCC | My Account</title>
<link href="<?php echo base_url('resources/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" media="all" />
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
<script type="text/javascript" src="<?php echo base_url('resources/js/jquery.min.js');?>""></script>
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
	<style>
		.myaccount input[type="text"]{
	 	outline: none;
	    border: none;
	    background:#EFEFEF;
	    padding: 10px;
	    margin-top:20px;
	    text-align: center;
	    font-size: 14px;
	    color: #999;
	    width: 500px;
	    float:left;
	    border-top-right-radius: 25px;
	    border-bottom-right-radius: 25px;
	    border-top-left-radius: 25px;
	    border-bottom-left-radius: 25px;
		}
		.myaccount input[type="password"]{
	 	outline: none;
	    border: none;
	    background:#EFEFEF;
	    padding: 10px;
	    margin-top:20px;
	    text-align: center;
	    font-size: 14px;
	    color: #999;
	    width: 500px;
	    float:right;
	    border-top-right-radius: 25px;
	    border-bottom-right-radius: 25px;
	    border-top-left-radius: 25px;
	    border-bottom-left-radius: 25px;
		}
	</style>
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
								<div class="tooltip">register</div>
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
							<li class="dropdown">
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

	<h4 style="text-align:center;">My Account</h4>

	<div class="container">
		<form>
			<div class="row">
				<div class="myaccount">
					<form action="#" method="post">
						<input type="text" name="First Name" placeholder="First Name" required="">
						<input type="password" name="Password" placeholder="Password" required="">		
					</form>
				</div>
			</div>
		</form>
	</div>
</body>
</html>