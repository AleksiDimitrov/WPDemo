
<?php get_header();?>

<?php /* Including header and footer templates for theme*/?>

<div id="hero">
	<div class="container d-flex align-items-center justify-content-center h-100">
		<h1>Welcome to my shop</h1>
	</div>
</div>

<?php #Display contnet on the page?>
<div class="content">
	
	<div class="container">

		<?php if(have_posts()) : while(have_posts()) : the_post();?>

		  <?php the_content();?>

		 <?php endwhile; else: endif;?>

		</div>
</div>


<?php get_footer();?>