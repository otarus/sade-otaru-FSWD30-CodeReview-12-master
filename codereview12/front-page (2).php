<!DOCTYPE html>
<html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="<?php bloginfo('cdescriotion'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<?php wp_head() ?>
</head>
<body>
<img src="a.png" alt="">
	<div class="blog-masthead">
		<div class="container">
			<nav class="blog-nav">
				<?php
				wp_nav_menu( array(
				'menu'              => 'primary',
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker())
				);
				?>
			</nav>
		</div>
	</div>
	<div class="jumbo2">
	    <h1 class="blog-title" ><center> <?php bloginfo('name'); ?></center></h1>
	    <p class="lead blog-description">
	    		<center>
 					<h1>Travel..</h1>
 					<p>THE BEST WAY TO BE LOST...</p>
 					<P>AND BE FOUND ALL..</P>
 					<h4>At the same time..</h4>
 				    
 					 <p><a class="btn btn-primary btn-lg" href="#" role="button">more...</a></p>
 					 </center>
	   
	    </p>
	    <div class="row">
 					<div class="col-sm-6 col-md-4">
   						<div class="thumbnail">
    						 <img id="pic1" src="http://www.telegraph.co.uk/content/dam/Travel/Destinations/Europe/Italy/Rome/rome-overview-bridge-and-river-small.jpg" alt="">
    							 <div class="caption">
      								 <h3>Rome</h3>
       								 <p>1week stay in 3star hotel</p>
       								 <p>with breakfast and..</p>
       								 <p><a href="#" class="btn btn-primary" role="button">get more information</a>
     							 </div>
   						</div>

 				</div>
 				<div class="col-sm-6 col-md-4">
   						<div class="thumbnail">
    						 <img id="pic3" src="https://www.enterprise.nl/content/dam/ecom/locations/netherlands/Amsterdam-canal-1920x1080.jpg" alt="">
    							 <div class="caption">
      								 <h3>Netherlands</h3>
       								 <p>1week stay in 3star hotel</p>
       								 <p>with breakfast and..</p>
       								 <p><a href="#" class="btn btn-primary" role="button">get more information</a>
     							 </div>
   						</div>
   					</div>
   					<div class="col-sm-6 col-md-4">
   						<div class="thumbnail">
    						 <img id="pic2" src="http://cesran.org/wp-content/uploads/2017/08/Visuel-carrousel-dossier-Ou-sortir-le-soir-a-Paris-740x380-C-DR.jpg" alt="">
    							 <div class="caption">
      								 <h3>Paris</h3>
       								 <p>1week stay in 3star hotel</p>
       								 <p>with breakfast and..</p>
       								 <p><a href="#" class="btn btn-primary" role="button">get more information</a>
     							 </div>
   						</div>
</div>
	</div>
   

<?php get_footer(); ?>