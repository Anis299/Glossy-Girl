<?php get_header();?>

	<div class="body-area"> 
		<div class="mid"> 
			<div class="left"> 
				<div class="post-area"> 
				
				<?php while(have_posts()):the_post();?>
				
					<div class="post-box-b"> 
						<div class="post-img-b"><?php the_post_thumbnail();?></div>
						<div class="post-cont-b"> 
							<h2><?php the_title();?></h2>
							<p class="au">By : <?php the_author();?> | <?php the_time('d,F,Y');?> | <?php the_time('g,i A');?></p>
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