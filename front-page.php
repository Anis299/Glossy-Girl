<?php get_header();?>

	<div class="slider"> 

			<?php 
			
			$Slider = new WP_Query([

				'post_type'		=> 'Slider',
 
			]);
			
			while($Slider -> have_posts()): $Slider-> the_post();?>

		<div class="s-img" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_ID($post -> ID));?>)"></div>

			<?php endwhile;?>

	</div>
	<div class="services"> 
		<div class="mid"> 
			<h2>Our Services</h2>
			<p>See all the services of our own</p>
			
			<div class="services-area"> 
			
				<?php 
				
				$Services = new WP_Query([

					'post_type'		=> 'Services',
					'order'			=> 'ASC',
				]);
				
				while( $Services -> have_posts()): $Services -> the_post();?>

				<div class="services-box"> 
					<?php the_post_thumbnail();?>
					<h2><?php the_title();?></h2>
					<p><?php the_content();?></p>
				</div>

				<?php endwhile;?>
	
			</div>
		</div>
	</div>
	<div class="body-area"> 
		<div class="mid"> 
			<div class="left"> 
				<div class="post-area"> 
				<h2>Recent Post </h2>
				<hr />

					<?php 
					
					$recentPost = new WP_Query([

						'post_type'			=> 'post',
						'order'				=> 'ASC'

					]);
					
					while( $recentPost -> have_posts()): $recentPost -> the_post();?>

					<div class="post-box"> 
						<div class="post-img"><?php the_post_thumbnail();?></div>
						<div class="post-cont-b"> 
							<h2><?php the_title();?></h2>
							<p><?php echo wp_trim_words(get_the_content(), 30, true);?></p>
                            <a class="button" href="<?php the_permalink();?>">Read More</a>
						</div>
					</div>

					<?php endwhile;?>

				</div>
			</div>
			<div class="right"> 
				
				<?php get_sidebar();?>
				
			</div>
		</div>
	</div>
	
	<?php get_footer();?>