<?php
/* 
Template Name: Contact
*/
?>
<section id="<?php echo get_the_ID(); ?>" class="page-wrap">
<div class="container">
	
	<p>Contact 페이지</p>

		<section class="row">

			<div class="col-lg-9">
				<?php if(has_post_thumbnail()):?>
					<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
				<?php endif;?>

				<?php get_template_part( 'template-parts/content/content', 'page' ); ?>
			</div>


	</section>
</div>
</section>