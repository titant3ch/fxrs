<?php
/*
Template Name: New Year
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="pagina">

	<section class="container" id="singular">
		
		<?php while ( have_posts() ) : the_post() ?>
		<?php the_content(); ?>
		
		<?php endwhile; ?
>
		<a href="#0" class="cd-top">Top</a>

	</section>

		<section class="container" id="singleCD">

		<div class="clock"></div>

	</section>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/backtotop.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/flipclock.js"></script>

		<script type="text/javascript">
			var clock;

			$(document).ready(function() {

				// Grab the current date
				var currentDate = new Date();

				// Set some date in the future. In this case, it's always Jan 1
				var futureDate  = new Date(currentDate.getFullYear()+ 1, 0, 1);

				// Calculate the difference in seconds between the future and current date
				var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

				// Instantiate a coutdown FlipClock
				clock = $('.clock').FlipClock(diff, {
					clockFace: 'DailyCounter',
					countdown: true
				});
			});
		</script>

<?php get_footer(); ?>