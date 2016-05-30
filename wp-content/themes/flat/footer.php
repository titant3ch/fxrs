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
				<div class="weather">
					<?php
						$BASE_URL = "http://query.yahooapis.com/v1/public/yql";

					    $yql_query = 'select * from weather.forecast where woeid in (select woeid from geo.places(1) where text="austin, tx")';
						$result = json_decode(file_get_contents($BASE_URL . "?q=" . urlencode($yql_query) . "&format=json"), true);

						if(is_array($result)) {
						    $location = $result['query']['results']['channel'];

						     if(!empty($location)){
						        $temp = $result['query']['results']['channel']['item']['condition']['temp'];
						        $text = $result['query']['results']['channel']['item']['condition']['text'];
						        $imgCode = $result['query']['results']['channel']['item']['condition']['code'];

						        $forecast = $result['query']['results']['channel']['item']['forecast'];
						        $todayForecast = $forecast[0];
						        $low = $todayForecast['low'];
						        $high = $todayForecast['high'];

						      
						        echo '<div class="forecast">
						        		<p id="degrees">' . $temp . '</p>
						        		<ul>
						        			<li id="low">' . $low . '</li>
						        			<li id="high">' . $high . '</li>
						        		</ul>
						        	  </div>';

						        echo '<div class="forecastImg">
						        		<img src="'. get_template_directory_uri() .'/img/' . $imgCode . '.png" alt="weather icon" />
						        		<p>
						        			<a href="http://www.msn.com/en-us/weather?eid=2349&q=Austin-TX&zip=78701" target="_blank">' . $text . '</a>
						        		</p>
						        	  </div>';
						   	}
							    else{
							        echo '<h1>No weather for today</h1>';
							    }
						}else{
						    echo '<p>Weather service is down</p>';
						}
					?>
				</div>
			</section>
		</footer>
	</body>
</html>