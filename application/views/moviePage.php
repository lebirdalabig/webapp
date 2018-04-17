<div class='row'>
	<div class='col-md-6' style="border-right: 1px solid black;">
		<img src= "<?php echo base_url("resources/{$res[0]->movie_poster}"); ?>" style="margin: 50px; margin-left:200px">		
	</div>
	<div  style="margin: 50px;">
	<p style="margin: 50px; padding-left: 20px"> <?php echo $res[0]->movie_desc; ?> </p>
	</div>
</div>
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav" style="margin-left: 210px">
							<li class="dropdown">
									<select style="border-radius: 10px">
										<option value="" selected disabled>Platforms</option>
										<option value="volvo">Valve</option>
										<option value="saab">Steam</option>
										<option value="vw">Origin</option>
										<option value="audi">EA</option>
									</select>
									<select style="border-radius: 10px">
										<option value="" selected disabled>Location</option>
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="vw">VW</option>
										<option value="audi">Audi</option>
									</select>
									<select style="border-radius: 10px">
										<option value="" selected disabled>Location</option>
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="vw">VW</option>
										<option value="audi">Audi</option>
									</select>
									<select style="border-radius: 10px">
										<option value="" selected disabled>Location</option>
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="vw">VW</option>
										<option value="audi">Audi</option>
									</select>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<script>
function tryAlerting() {
    alert("Please Login to continue!");
}
</script>
