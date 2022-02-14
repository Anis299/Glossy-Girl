<div class="notice-board"> 
					
					
					<div class="notice-box"> 
					<h2>Notice Board</h2>
					<hr />
						<ul>

							<?php 
							
							$Notice = new WP_Query ([

								'post_type'		=> 'Notice'

							]);

							while($Notice -> have_posts()):$Notice -> the_post();?>

							<li><i class="fa fa-chevron-right"></i>
								<a href="#"><?php the_post_thumbnail();?></a></li>
							
							<?php endwhile;?>

						</ul>
					</div>
				</div>