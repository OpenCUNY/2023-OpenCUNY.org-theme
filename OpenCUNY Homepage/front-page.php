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
	<button class="accordion green">How is OpenCUNY unique? ▾</button>
	<div class="panel lt-blue">
		<p><em>OpenCUNY helps you keep control of your own work.</em></p>
		<p>Data ownership and copyright are complex issues in the digital world and especially academic spaces. Because OpenCUNY.org is not hosted on school servers and does not fall under CUNY administrator’s control, OpenCUNY.org offers a unique, CUNY-affiliated, student-centered space to teach and organize.</p>
		<p>Additionally, we make every effort to protect your digital rights (see our terms of service). You can feel safe hosting your personal, professional, or organization’s data on this platform.</p>
		<p><em>OpenCUNY is student-run and student-funded.</em></p>
		<p>OpenCUNY is the only WordPress platform at the GC run by students for students. We’re funded by DGSC and coordinators work with a DGSC-elected board of OpenCUNY users to develop and improve the platform annually.</p>
		<p><em>Using free and open source software is a political and ethical choice.</em></p>
		<p>Free software is accessible and open source software is free to study, customize, and distribute. OpenCUNY uses the open source version of WordPress, and works to find open source plugins and solutions whenever possible in an effort to protect the digital rights of students.</p>
	</div>
	<button class="accordion yellow">Who can I talk to? ▾</button>
	<div class="panel lt-blue">
		<p>We're particpant-driven, so we try our best to respond to requests for ideas, help, themes, plugins, etc.</p>
		<p>The quickest way to get in touch with someone is to email <a href="mailto:info@opencuny.org">info@opencuny.org</a>, but you can also email any of the coordinators individually (our email addresses are listed below).</p>
		<h3>Coordinators</h3>
		<h4 class="coordinator-name">Zach Muhlbauer | Coordinator for Education & Support</h4>
		<p>Contact: <a href="mailto:zach@opencuny.org" alt="Email Zach">Zach@opencuny.org</a></p>
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/Zach-profile.jpg' ); ?>" alt="Zach Muhlbauer profile picture" class="profile" />
		<p>Zach is a third-year doctoral student in English Language and Literature at the Graduate Center, CUNY, where he explores the intersection of critical university studies, educational technology, and new literacy. His research foregrounds the emergent role of digital literacy in composition pedagogy and writing program administration, meanwhile advocating for data sovereignty and open infrastructure within public higher education. In addition to teaching first-year writing sections at Baruch College, Zach serves as a HASTAC Scholar (’22-24) as well as a Workshop Kit Designer & Facilitator at Queens College. A recent alum of the Interactive Technology and Pedagogy Certificate Program, he is also a recent member of the Editorial Collective of the Journal of Interactive Technology and Pedagogy.</p>
		<h4 class="coordinator-name">Paul L. Hebert | Coordinator for Planning & Development</h4>
		<p>Contact: <a href="mailto:paul@OpenCUNY.org" alt="Email Zach">paul@OpenCUNY.org</a></p>
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/Paul-profile.jpg' ); ?>" alt="Paul's profile picture" class="profile" />
		<p>Paul is a doctoral candidate in the English Program at the Graduate Center, CUNY and a Teaching Fellow at Queens College, CUNY. Paul’s research focuses on the early 19th-century Atlantic maritime literature in popular culture. His courses have included Global Literature (300-level); American Literature, Literary Theory, Literary History (200-level); and College Writing I & II (100-level).</p>
		<h3 class="centered">Former Coordinators</h3>
		<div class="two-columns">
			<p><a href="http://gtdonovan.org" target="_blank" alt="Gregory Donovan's website">Gregory Donovan</a></p>
			<p><a href="http://margaretgalvan.org" target="_blank" alt="Maggie Galvan's website">Maggie Galvan</a></p>
			<p><a href="https://lauriehurson.info/" target="_blank" alt="Laurie Hurson's website">Laurie Hurson</a></p>
			<p><a href="http://kristenhackett.org" target="_blank" alt="Kristen Hackett's website">Kristen Hackett</a></p>
			<p><a href="http://christinanadler.com" target="_blank" alt="Christina Nadler 's website">Christina Nadler</a></p>
		</div>
	</div>
</div>
<?php
	// retrieves footer.php
	get_footer();
?> 