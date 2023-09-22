<?php
/*
Template Name: Archives
*/

get_header(); ?>

<div class="body-content">

<div class="archive-top">
	
	<?php get_search_form(); ?>
	
	<h2>Browse by Subject</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>

	<div class="row">
		<?php
			if ( ! empty( single_term_title( '', false ) ) ) {
				printf(
					'<h1 class="page-title">%s</h1>',
					single_term_title( '', false )
					);
				}
				if ( ! empty( get_the_archive_description() ) ) {
					the_archive_description( '<div class="archive-description">', '</div>' );
				}
		?>

		<?php
		
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content-archive');
				endwhile;
			else :
				get_template_part( 'template-parts/content-none');
			endif;

		?>
				
	</div>
</div>
	<div class="row">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-archive' );
			endwhile;
		else :
			get_template_part( 'template-parts/content-none' );
		endif;
		?>
	</div>
</div>

<?php get_footer(); ?>