<?php /* Template Name: Generate QR Form */ ?>

<?php
/**
 * Template Name: Generate QR Form
 * @package WordPress
 * @subpackage OpenCUNY Homepage
 * @since OpenCUNY Homepage 1.2.1
 */
?>

<?php get_header(); ?>

<?php get_template_part('/template-parts/generate-qr'); ?>

<?php

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); ?>
	
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article> <?php
	
	endwhile;
endif; ?>
</div>
</div>

<?php get_footer(); ?>
