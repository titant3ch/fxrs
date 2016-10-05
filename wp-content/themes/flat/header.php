<!DOCTYPE html>
<html>
<head>
<!--[if IE]>
<link rel="stylesheet" href="http://192.168.88.250/fxrs/wp-content/themes/fxrs/css/ie-only.css" type="text/css" />
<h1>Why are you using IE? smh.. Use a better browser like Google Chrome!</h1>
<img src="http://i.imgur.com/kgfV66r.gif" alt="IE">
<![endif]--> 
    
        <title>FXRS Chronicles</title>
        
        <link rel="icon" type="image/gif" href="<?php echo get_template_directory_uri(); ?>/img/fx-favicon.ico">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/masonry.js"></script>
        <meta charset="UTF-8">
        <!-- <meta http-equiv="refresh" content="2" > -->
 
    </head>
    
<body>

<header>

	<div id="list">
		<?php 

			$defaults = array('menu' => 'main');

			wp_nav_menu( $defaults ); 

		?>
		<div class="circle">
			<h1>
			    <a href="<?php echo home_url(); ?>">FXRS</a>
			</h1>
		</div>
	</div>
	
</header><!-- /header -->