<?php
/*
Template Name: About Us
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<!-- start of about template content -->
	
	<section class="container about-us">
		<div class="inner">
            
            <?php the_content(); ?>

        </div>
    </section>
	
	<!-- end of about template content -->

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_footer(); ?>