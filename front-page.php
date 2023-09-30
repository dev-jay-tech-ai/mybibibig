<?php get_header();?>
<section style='background: #f3f3f3; height: 900px; overflow: hidden;'>
	<?php 
		get_template_part('/includes/section','content');
		$videos = get_template_directory_uri() . '/assets/videos/video1.mp4';
	?>
	<div class='slide-container'>
		<div class='slider'>
			<video muted autoplay loop>
				<source src="<?php echo $videos; ?>" type="video/mp4">
				<strong>Your browser does not support the video tag.</strong>
			</video>
			<div class='content'>
				<h1 style='text-transform: uppercase; font-weight: 800; font-size: 75px; letter-spacing: 4px;'>
				Welcome to <span class="js-rotating">Bibibig | One Page | Responsive | Perfection</span>', 'onepress'</h1>
				<p>your gateway to a delightful journey through the world of Korean hot dogs.</p>
			</div>
		</div>
	</div>
</section>

<section class="page-wrap section-padding" style='min-height: 980px; background: #f3f3f3'>
		<div class='section-title-area'>
			<h5 class='section-subtitle'>Why choose us</h5>
			<h2 class='section-title'>Features</h2>
		</div>
</section>
<section class="page-wrap section-padding" style='min-height: 480px; background: #E47930'>
	<div  style='display: flex'>
		<div class='catchphrase' 
			style='text-transform: uppercase; text-align: center; font-size: 50px; color: red; margin: 0 auto; font-weight: 900;'> 
			<p>Serving epic corn dogs </p>
			<p>alongside sweet and spicy burgers</p>
			<p>fried chicken, and dakgangjeong cupbap </p>
		</div>
	</div>	
</section>
<section class="page-wrap section-padding">
		<div class='section-title-area'>
			<h5 class='section-subtitle'>Section subtitle</h5>
			<h2 class='section-title'>Section 1</h2>
		</div>
</section>
<section class="page-wrap section-padding">
		<div class='section-title-area'>
			<h5 class='section-subtitle'>Section subtitle</h5>
			<h2 class='section-title'>Section 2</h2>
		</div>
</section>
<section class="page-wrap section-padding">
		<div class='section-title-area'>
			<h5 class='section-subtitle'>Section subtitle</h5>
			<h2 class='section-title'>Section 3</h2>
		</div>
</section>
<section style='min-height: 480px;'>

	<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d4965.0271805666225!2d-0.1109884!3d51.5221392!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x48761b4ed002c51b%3A0x5d5537c616044971!2sTohbang%20164%20Clerkenwell%20Rd%20London%20EC1R%205DU%20United%20Kingdom!3m2!1d51.5221235!2d-0.11099279999999999!5e0!3m2!1sen!2suk!4v1695668504974!5m2!1sen!2suk" style="border:0;" width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>
<section class="page-wrap section-padding" style='height: 480px; 	background-color: #f3f3f3;'>
		<div class='section-title-area'>
			<h5 class='section-subtitle'>Section subtitle</h5>
			<h2 class='section-title'>GET IN TOUCH</h2>
		</div>
		<div class='info-container'>
			<div>
			<div class="address-box">
				<div class="address-contact">
					<span class="fa-stack"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i></span>
					<div class="address-content"><a href="mailto:<?php echo antispambot($email); ?>"><?php echo antispambot($email); ?></a></div>
				</div>
			</div>	
			</div>
			<div>
				<p><strong>ADDRESS |</strong>	Tohbang, Clerkenwell Road, London, UK (EC1R 5DU)</p>
				<p><strong>TEL     |</strong>	+44 20 7278 8674</p>
				<p><strong>E-mail  |</strong>	gotohbang@gmail.com</p>
				<p><strong>Opening Hours  |</strong></p>
				<p>Monday	12–2:30 pm, 5:30–10:30 pm</p>
				<p>Tuesday	12–2:30 pm, 5:30–10:30 pm</p>
				<p>Wednesday	12–2:30 pm, 5:30–10:30 pm</p>
				<p>Thursday	12–2:30 pm, 5:30–10:30 pm</p>
				<p>Friday	12–2:30 pm, 5:30–10:30 pm</p>
				<p>Saturday	5:30–10:30 pm</p>
				<p>Sunday	Closed</p>
			</div>
		</div>
</section>

<?php get_footer();?>