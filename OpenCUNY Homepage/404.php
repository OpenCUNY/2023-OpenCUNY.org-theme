 <?php
	get_header();
?>
<div class="container">
<div>
	<img class="cat" id="cornelius" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat.png' ); ?>" alt="Cornelius the cat"></img>
	<div class="hand-drawn centered lt-pink">
		<h1 class="centered single-spaced">Something's not right…</h1>
		<p class="centered em">Search OpenCUNY or <a href="https://opencuny.org">return to the homepage</a></p>
		<form role="search" aria-label="404 not found" method="get" class="search-form" align="center" action="https://opencuny.org/">
			<input type="search" id="search-form-1" class="search-field" placeholder="Search …" value="" name="s">
			<input type="submit" class="search-submit" value="Search">
		</form>
	</div>
	<img class="flower-pot" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flower-pot.png' ); ?>" alt="Broken flower pot"></img>
</div>
</div>
<?php
	get_footer();
?>
