<?php
/*
Template Name: FXRS
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="pagina">

	<section class="container" id="singular">

		<div class="heading">
			<h1><?php the_title(); ?></h1>
			<hr>
		</div>
		
	</section>

</div>

<!-- <div id="page"> -->

	<div id="masonry">

		<section class="container" id="main">
			<?php 
				query_posts('category_name=FSMS'); 
				while (have_posts()) : the_post(); 
			?>
			<article>
				<?php 
					// check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {
						echo '<div class="thumbnail"><a href="' . get_permalink($post->post_parent) . '"><p>';
						the_post_thumbnail();
						echo '</a></p></div>';
					}else {
						echo '';
					}
				?>
				
				<div class="content">
					<h3>
						<a href="<?php echo get_permalink($post->post_parent) ?>"><?php the_title(); ?></a>
					</h3>
					<h4><?php the_time('F j, Y'); ?></h4>
				    <?php the_excerpt(); ?>
				</div>
			</article>

			<?php endwhile; ?>

			<a href="#0" class="cd-top">Top</a>

		</section>

	</div>
<!-- </div> -->

<?php get_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/backtotop.js"></script>

<script type="text/javascript">
	var ids=["eleven", "twelve", "thirteen", "fourteen"];
	var dropDown = document.getElementById("versions");

	dropDown.onchange = function(){
	    for(var x = 0; x < ids.length; x++){   
	        document.getElementById(ids[x]).style.display="none";
	    }    
	    document.getElementById(this.value).style.display = "block";
	}
</script>

<script>
  var container = document.querySelector('#masonry');
  var masonry = new Masonry(container, {
    itemSelector: 'article'
  });
</script>