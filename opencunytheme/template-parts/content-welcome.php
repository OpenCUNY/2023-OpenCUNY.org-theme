<div class="welcome-message">
	<h1>Welcome back!</h1>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img alt="Create QR codes" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/qrcode-slide.png' ); ?>">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img id="edgar" alt="Edgar the cat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flower-pot.png' ); ?>">
    <div class="caption-text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img id="edgar" alt="Edgar the cat" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/edgar.png' ); ?>">
    <div class="captioni-text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> 
<script src="<?php echo esc_url( get_template_directory_uri() . '/assets/js/slideshow.js' ); ?> "></script>
	<nav>
		<a href="<?php echo admin_url(); ?>" title="Go to Dashboard">Dashboard</a> |
		<a href="<?php echo wp_registration_url(); ?>" title="Create new site">Create site</a> |
		<a href="<?php echo home_url( '/qr-generator/' ); ?>" title="Create QR">Create QR</a> |
		<a href="<?php echo wp_logout_url(); ?>" title="Log out">Log out</a>
	</nav>
</div>
