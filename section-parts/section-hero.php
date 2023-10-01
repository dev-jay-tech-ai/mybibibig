<?php
/* 
Template Name: Hero
*/
?>

	<section id="<?php echo get_the_ID(); ?>" class="page-wrap" style='background: #E8F2B8; height: 900px; overflow: hidden;'>
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