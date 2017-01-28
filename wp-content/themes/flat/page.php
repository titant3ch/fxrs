<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="pagina">

	<section class="container" id="singular">

		<h1><?php the_title(); ?></h1>
		<hr>
		

		<?php while ( have_posts() ) : the_post() ?>
		<?php the_content(); ?>
		
		<?php endwhile; ?>

		<a href="#0" class="cd-top">Top</a>

	</section>

</div>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ZeroClipboard.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/backtotop.js"></script>

<script type="text/javascript">
	var ids=["ten", "tensix", "eleven", "twelve", "thirteen", "fourteen", "fifteen"];
	var dropDown = document.getElementById("versions");

	dropDown.onchange = function(){
	    for(var x = 0; x < ids.length; x++){   
	        document.getElementById(ids[x]).style.display="none";
	    }    
	    document.getElementById(this.value).style.display = "block";
	}
</script>

<?php get_footer(); ?>