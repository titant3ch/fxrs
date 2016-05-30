<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php
	if (is_category( )) {
  		$cat = get_query_var('cat');
  		$yourcat = get_category ($cat);
  		$currentCat = $yourcat->slug;
		}
?>

<div id="pagina">

	<section class="container" id="singular">

		<h1><?php echo $currentCat; ?></h1>
		<hr>

	</section>

</div>

<div id="masonry">

	<section class="container" id="main">

		<?php while ( have_posts() ) : the_post() ?>
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
			    <!-- <p id="edit_post"><?php edit_post_link('Edit Post'); ?></p> -->
			</div>
		</article>
		<?php endwhile; ?>

	</section>

	<section id="paged">
		<p>
			<?php
				//display Page x of y pages
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				echo 'Page ' . $paged . ' of ' . $wp_query->max_num_pages;
			?>
		</p>

			<?php next_posts_link('<img src="' . get_template_directory_uri(). '/img/next.png" />'); ?>
			<?php previous_posts_link('<img src="' . get_template_directory_uri(). '/img/prev.png" />'); ?>
			
	</section>
	
</div>

<?php get_footer(); ?>

<script src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>

<script>
  var container = document.querySelector('#masonry');
  var masonry = new Masonry(container, {
    itemSelector: 'article'
  });
</script>