<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage OpenCUNY Homepage
 * @since OpenCUNY Homepage 1.0
 */

?>
<?php
	get_header();
?>

<?php

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); ?>
	
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article> <?php
	
	endwhile;
endif;

?>

<?php
	get_footer();
?>