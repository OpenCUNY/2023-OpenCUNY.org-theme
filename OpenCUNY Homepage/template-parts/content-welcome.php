<div class="welcome-message">
	<h1>Welcome back!</h1>
	<img id="edgar" alt="Edgar the cat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/edgar.png' ); ?>">
	<nav>
		<a href="<?php echo home_url( '/wp-admin' ); ?>" title="Go to Dashboard">Dashboard</a> |
		<a href="<?php echo home_url( '/wp-signup.php' ); ?>" title="Create new site">Create site</a> |
		<a href="<?php echo wp_logout_url( home_url() ); ?>" title="Log out">Log out</a>
	</nav>
</div>
