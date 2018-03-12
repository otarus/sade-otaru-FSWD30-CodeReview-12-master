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
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.js" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head() ?>
  </head>
<body>

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

  <div class="jumbotron jumbo1">
    <h1 class="blog-title"> <?php bloginfo('name'); ?></h1>
    <p class="lead blog-description">
      <?php bloginfo('description'); ?>
        <center>
          <h1>Travel..</h1>
          <p>THE BEST WAY TO BE LOST...</p>
          <P>AND BE FOUND ALL..</P>
          <h4>At the same time..</h4>
            
           <p><a class="btn btn-primary btn-lg" href="#" role="button">more...</a></p>
           </center>
    </p>
  </div>
