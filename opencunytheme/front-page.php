<?php
	// retrieves header.php
	get_header();
?>  	

<div class="body-content">	
	<?php 
		// displays welcome template if visitor is logged in; otheriwse login template
		if (is_user_logged_in()):
	      	get_template_part('/template-parts/content-welcome');
		else: 
			get_template_part('/template-parts/content-login'); 
		endif; 
	?>
	<button class="accordion pink rounded-top-corners">What is OpenCUNY? ▾</button>
	<div class="panel lt-blue">
		<p><em>OpenCUNY is a student-run organization that serves students at the Graduate Center, CUNY, and is sponsored by the Doctoral and Graduate Students Council (DGSC).</em></p>
		<p>Since our founding by Greg Donovan in 2008, we’ve hosted OpenCUNY.org as a participatory digital community and WordPress platform for GC students. Each semester we convene conferences and informational events about open-source software and data privacy.</p>
		<p>We’re always exploring ways to make new digital tools available to GC students that will help us to research, teach, organize, and commune.</p>
	</div>
	<button class="accordion green">Why is OpenCUNY unique? ▾</button>
	<div class="panel lt-blue">
		<p><em>OpenCUNY helps you keep control of your own work.</em></p>
		<p>Data ownership and copyright are complex issues in the digital world and especially academic spaces. Because OpenCUNY.org is not hosted on school servers and does not fall under CUNY administrator’s control, OpenCUNY.org offers a unique, CUNY-affiliated, student-centered space to teach and organize.</p>
		<p>Additionally, we make every effort to protect your digital rights (see our terms of service). You can feel safe hosting your personal, professional, or organization’s data on this platform.</p>
		<p><em>OpenCUNY is student-run and student-funded.</em></p>
		<p>OpenCUNY is the only WordPress platform at the GC run by students for students. We’re funded by the DGSC, and coordinators work with a DGSC-elected board of OpenCUNY users to develop and improve the platform annually.</p>
		<p><em>Using free and open-source software is a political and ethical choice.</em></p>
		<p>Free software is accessible and open-source software is free to study, customize, and distribute. OpenCUNY uses the open-source version of WordPress, and works to find open-source plugins and solutions whenever possible in an effort to protect the digital rights of students.</p>
	</div>
	<button class="accordion yellow">How do I use OpenCUNY? ▾</button>
	<div class="panel lt-blue">
	  <p><em>OpenCUNY can be used to support your research, projects, events, organizations, and more.</em></p>
	  <p>Plus, you can create a site with OpenCUNY.org in a matter of minutes:</p>
		<ol>
		 	<li><a href="https://opencuny.org/wp-signup.php">Sign up</a> for an account and verify your GC email to confirm it.</li>
		 	<li>Return here to sign in using your OpenCUNY.org credentials.</li>
		 	<li>Navigate to <a href="http://opencuny.org/wp-login.php?action=register" >Create site</a> and complete the form to add a new site to your account.</li>
		</ol>
	  <p>See our <a href="https://opencuny.info" aria-label="Search our knowledge base">knowledge base</a> for further guidance on how to customize, improve, and maintain your site.</p>
	  <p><em>Have a question or feature request in mind?</em></p>
	  <p>As a community-led platform, we try our best to respond to requests for help and support as well as for themes, plugins, and other open-source solutions.</p>
	  <p>Contact us at <a href="mailto:info@opencuny.org">info@opencuny.org</a> or visit our office hours on Wednesday from 3-5pm in Room 5396.</p> 
	  <p><a href="https://opencuny.org/coordinators">Read here</a> to learn more about OpenCUNY coordinators</p>
	</div>
</div>
<?php
	// retrieves footer.php
	get_footer();
?> 
