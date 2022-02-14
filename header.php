<!DOCTYPE HTML>
<html <?php language_attributes();?>>
<head>
	<meta <?php bloginfo('charset');?>>
	<title><?php bloginfo('name')?></title>
	
	<?php wp_head();?>
	
</head>
<body <?php body_class();?>>
	
	<div class="header"> 
		<div class="top-header"> 
			<div class="mid"> 
				<div class="top-left"> 
					<ul>
						<li><a href="#">Call : 019111234444</a></li>
						<li><a href="#">|</a></li>
						<li><a href="#">Email : info@domain.com</a></li>
					</ul>
				</div>
				<div class="top-right"> 
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mid"> 
			<div class="logo"> 
				<a href="#"><?php the_custom_logo();?></a>
			</div>
			<div class="menu"> 
				
				<?php 
				
				wp_nav_menu([

					'theme_location'	=> 'primaryMenu',
				]);

				?>

			</div>
		</div>
	</div>