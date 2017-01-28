<?php
/*
Template Name: PTO Tracker
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="pagina">

	<section class="container" id="singular">

		<h1><?php the_title(); ?></h1>
		<hr>
		

		<?php while ( have_posts() ) : the_post() ?>
		<?php the_content(); ?>

		
		<?php endwhile; ?>
		<?php include 'PTOTracker2017.htm'; ?>

		<a href="#0" class="cd-top">Top</a>

	</section>

</div>


<?php get_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/backtotop.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/prism.js"></script>