<footer>
    <div class="footer-content">
      <div class="row primary">
        <div class="column centered">
          <a href="https://cunydsc.org"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/DGSC-logo.png' ); ?>" class="dgsc-logo"></a>
        </div>
        <div class="column about">
          <h3 class="no-marg">OpenCUNY</h3>
           <p class="small-text">Room 5396,<br/>
          The Graduate Center, CUNY,<br/>
          365 Fifth Avenue<br/>
          New York, NY 10016</p>     
        </div>
        <div class="column nav-footer">
          <?php echo wp_nav_menu( array(
              // calls the dashboard > appearance > menu assigned to location: footer menu (see functions.php)
              'theme_location' => 'footer-menu',
            )); 
          ?>
        </div>
        <div class="column">
          <p class="small-text single-spaced"><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" class="license" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a></p>
          <p class="small-text"><script>document.write(new Date().getFullYear())</script> (CC) <?php echo get_bloginfo('name'); ?></p>
        </div>
      </div>
    </div>
      <div class="footer-menu blue">
        <nav class="single-spaced small-text">
          <a class="em" href="https://opencuny.org/">OpenCUNY</a> » 
          <a href="https://opencuny.org/terms">terms</a> |
          Sponsored by <a href="https://cunydsc.org/">Doctoral and Graduate Students' Council (DGSC)</a>
        </nav>
      </div>
    </div>
    </div>
    </footer>

<!--
<div class="footer-wrapper">
	<div class="footer single spacing">
		<hr/>
		<p><img class="DGSC-logo-right small-text text-align-left" src="<?php echo esc_url( get_template_directory_uri() . '/images/DGSC-logo.png' ); ?>" alt="DGSC logo"><a href="https://cunydsc.org"></img><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" class="license float-left" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>(CC) OpenCUNY, <script>document.write(new Date().getFullYear())</script> | Room 5396, The Graduate Center, CUNY | <a href="https://cunydsc.org">DGSC</a> affiliate organization | Read our <a href="https://opencuny.org/terms/">Terms of Participation</a></p>
		<img class="DGSC-logo-center" src="<?php echo esc_url( get_template_directory_uri() . '/images/DGSC-logo.png' ); ?>" alt="DGSC logo"></img>
	</div>
</div>
-->

<!--
<div class="footer-col large-15 small-text single-spaced centered">
		<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" class="license" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>
		<p class="centered">(CC) <script>document.write(new Date().getFullYear())</script></p>
	</div>
	<div class="footer-col large-60 small-text single-spaced text-align-left">
		<p><a href="mailto:info@opencuny.org" rel="author">info@opencuny.org</a> | Rm. 5396, The Graduate Center, CUNY</p>
		<p>Read our <a href="https://opencuny.org/terms/">Terms of Participation</a></p>
	</div>
	<div class="footer-col large-15 single-spaced">
		<a href="https://cunydsc.org"><img class="dgsc-logo-footer" src="<?php echo esc_url( get_template_directory_uri() . '/images/DGSC-logo.png' ); ?>" alt="DGSC logo" /></a>
	</div>
-->

<!-- loads scripts including accordian.js-->
<?php
  wp_footer();
?>
</body>
</html>