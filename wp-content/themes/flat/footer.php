		<?php wp_footer(); ?>
		<footer>
			<section>
				<?php 
					query_posts('category_name=Important&showposts=1'); 
					while (have_posts()) : the_post(); 
				?>
				<h3>
					<a href="<?php echo get_permalink($post->post_parent) ?>"><?php the_title(); ?></a>
				</h3>
				<h4><?php the_time('F j, Y'); ?></h4>
			    <p><?php the_excerpt(); ?></p>
			    <?php endwhile; ?>
			</section>

			<section>
				
			</section>
		</footer>
	</div>
	</body>
</html>