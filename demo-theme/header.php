<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php /*This is to allow the theme to inject css and js for plugins into the theme */ wp_head();?> 
</head>
<body <?php /*For plugins to add classes into the theme dynamically*/ body_class('test');?>>


<header>
	<div class="container">

		<div class="row ">

			<div class="col d-flex align-items-center justify-content-between">

		<a href="<?php bloginfo('url');?>">
			<img src="<?php bloginfo('template_directory');?>/images/shoplogo.jpg" class="img-fluid logo">
		</a>


		<?php /* Adding the menu to the header*/
		wp_nav_menu(

			array(

				'theme_location' => 'top-menu',
				'menu_class' => 'top-menu'
				
			)
		);?>

			</div>

		</div>

	</div>

</header>