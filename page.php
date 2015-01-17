<?php
/**
* Template Name: Default
*/
?>
<?php get_header(); ?>
<!--========================================================
														CONTENT 
	=========================================================-->
	<section id="content" class="content_pages">        
		<div class="container">
			<h2><?php the_title();?></h2>
			<?php the_forced_content(); ?>
		</div>
	</section>

<?php get_footer(); ?>