<?php 
/**
 *Template Name: Frontpage
 *
 * @package Mybibibig
 */

get_header();
$parent_page_id = get_the_ID();

?>
<div id="content" class="site-content">
		<main id="main" class="site-main mt-5" role="main">
		<?php	
			$args = array(
				'post_type'      => 'page',
				'post_status'    => 'publish',
				'posts_per_page' => -1,
				'post_parent'    => $parent_page_id,
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
			);

			$child_pages_query = new WP_Query($args);

			if ($child_pages_query->have_posts()) {
					while ($child_pages_query->have_posts()) {
							$child_pages_query->the_post();

							// Get the page template
							$page_template = get_post_meta(get_the_ID(), '_wp_page_template', true);

							// Construct the template name for get_template_part
							$template_name = str_replace(array('section-', '.php'), '', basename($page_template));

							// Include the custom template file if it exists
							if (!empty($page_template) && locate_template($page_template)) {
									get_template_part('section-parts/section', $template_name);
							} else {
									// If no custom template is specified, display default content
									the_title();
									the_content();
							}
					}
				wp_reset_postdata();
			}	
		?>
		</main>
	</div>
<?php get_footer(); ?>