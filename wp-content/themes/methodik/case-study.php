<?php
/*
Template Name: Case Study
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
	
	<section class="container about-us quote case-study">
            <div class="inner">
            
            <!-- start of case study content -->
                
            <?php the_content(); ?>

            <!-- end of case study content -->  

            </div>
        </section>

	

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_footer(); ?>