<?php
/*
	Template Name: Left Sidebar
*/
?>
<?php get_header(); ?>
<div class="wrapper">
		
		<section class="description">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no pages found.', 'lacasitacenter' ); ?></p>
			<?php endif; ?>
		</section>
		
</div>

<?php get_footer(); ?>