<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="post">

	<section class="container" id="single">
		
		<!-- Breadcrumbs -->
		<?php custom_breadcrumbs(); ?>
		<h1><?php the_title(); ?></h1>
		<h4><?php the_time('F j, Y'); ?></h4>
		<hr>
		

		<?php while ( have_posts() ) : the_post() ?>
		<article>
		    <?php the_content(); ?>
		</article>
		
		<?php endwhile; ?>

		<a href="#0" class="cd-top">Top</a>

	</section>

	<section  class="container" id="single">
		<?php comments_template(); ?>
	</section>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ZeroClipboard.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/backtotop.js"></script>
<?php get_footer(); ?>