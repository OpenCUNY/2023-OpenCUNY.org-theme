<?php
	get_header();
?>

	<article class="content">
		// loads the post title
		<h1 class="post-title"><?php the_title(); ?></h1>

		<?php
			// checking if posts exists
			if( have_posts()){
				//if posts exist, the content of a post is shown
				while( have_posts){
					the_post();
					the_content();
				}
			}
		?>

	</article>

<?php
get_footer();
?>
