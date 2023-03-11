<?php
	// retrieves header.php
	get_header();
?>  	
  	<div class="login-widget">
      <!-- Loads the login form with a remember me box checked by default -->
			<?php $args = array(
        'echo' => true,
        'redirect' => 'http://greatestpersonintheworld.com',
        'form_id' => 'loginform',
        'label_username' => __( 'Username' ),
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Remember Me' ),
        'label_log_in' => __( 'Log In' ),
        'id_username' => 'user_login',
        'id_password' => 'user_pass',
        'id_remember' => 'rememberme',
        'id_submit' => 'wp-submit',
        'remember' => true,
        'value_username' => NULL,
        'value_remember' => true );
        wp_login_form($args);
      ?>
      <p> <a href="https://opencuny.org/wp-login.php?action=register" title="Get an OpenCUNY account!">Join OpenCUNY</a> | <a href="https://opencuny.org/wp-login.php?action=lostpassword" title="Recover your password.">Lost your password?</a></p>
 			</div>
  	<div class="body-content">
  				<button class="accordion pink">What is OpenCUNY? ▾</button>
<div class="panel">
    <p><em>OpenCUNY is a student-run organization that serves students at the Graduate Center, CUNY, and is sponsored by the Doctoral and Graduate Students Council (DGSC).</em></p>
    <p>Since our founding by Greg Donovan in 2008, we’ve hosted OpenCUNY.org as a digital community and WordPress platform for GC students. Each semester we convene conferences and informational events about open-source software and data privacy.</p>
    <p>We’re always exploring ways to make new digital tools available to GC students that will help us to research, teach, organize, and commune.</p>
</div>
  		<button class="accordion green">How is OpenCUNY Unique? ▾</button>
				<div class="panel">
				<p><em>OpenCUNY helps you keep control of your own work.</em></p>
				<p>Data ownership and copyright are complex issues in the digital world and especially academic spaces. Because OpenCUNY.org is not hosted on school servers and does not fall under CUNY administrator’s control, OpenCUNY.org offers a unique, CUNY-affiliated, student-centered space to teach and organize.</p>
				<p>Additionally, we make every effort to protect your digital rights (see our terms of service). You can feel safe hosting your personal, professional, or organization’s data on this platform.</p>
				<p><em>OpenCUNY is student-run and student-funded.</em></p>
				<p>OpenCUNY is the only WordPress platform at the GC run by students for students. We’re funded by DGSC and coordinators work with a DGSC-elected board of OpenCUNY users to develop and improve the platform annually.</p>
				<p><em>Using free and open source software is a political and ethical choice.</em></p>
				<p>Free software is accessible and open source software is free to study, customize, and distribute. OpenCUNY uses the open source version of WordPress, and works to find open source plugins and solutions whenever possible in an effort to protect the digital rights of students.</p>
			</div>

			<button class="accordion yellow">Who can I talk to? ▾</button>
			<div class="panel">
				<p>We're particpant-driven, so we try our best to respond to requests for ideas, help, themes, plugins, etc.</p>
				<p>The quickest way to get in touch with someone is to email <a href="mailto:info@opencuny.org">info@opencuny.org</a>, but you can also email any of the coordinators individually (our email addresses are listed below).</p>
				<h3>Coordinators</h3>

				Picture of Zach Muhlbauer

Zach Muhlbauer | Coordinator for Education & Support

Room: 5396
zach@OpenCUNY.org

<p>Zach is a third-year doctoral student in English Language and Literature at the Graduate Center, CUNY, where he explores the intersection of critical university studies, educational technology, and new literacy. His research foregrounds the emergent role of digital literacy in composition pedagogy and writing program administration, meanwhile advocating for data sovereignty and open infrastructure within public higher education. In addition to teaching first-year writing sections at Baruch College, Zach serves as a HASTAC Scholar (’22-24) as well as a Workshop Kit Designer & Facilitator at Queens College. A recent alum of the Interactive Technology and Pedagogy Certificate Program, he is also a recent member of the Editorial Collective of the Journal of Interactive Technology and Pedagogy.</p>

Picture of Paul Hebert

Paul L. Hebert | Coordinator for Planning & Development

Room: 5396
paul@OpenCUNY.org

<p>Paul is a doctoral candidate in the English Program at the Graduate Center, CUNY and a Teaching Fellow at Queens College, CUNY. Paul’s research focuses on the early 19th-century Atlantic maritime literature in popular culture. His courses have included Global Literature (300-level); American Literature, Literary Theory, Literary History (200-level); and College Writing I & II (100-level).</p>
Former OpenCUNY Coordinators

Gregory Donovan
 http://gtdonovan.org

Maggie Galvan 
http://margaretgalvan.org

Kristen Hackett
http://kristenhackett.org

Laurie Hurson

Christina Nadler 
http://christinanadler.com</p></div>
</div>

<?php
	// retrieves footer.php
	get_footer();
?> 
