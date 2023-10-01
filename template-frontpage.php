<?php 
/**
 *Template Name: Frontpage
 *
 * @package Mybibibig
 */

get_header();

?>
<div id="content" class="site-content">
		<main id="main" class="site-main mt-5" role="main">

		<?php
			$args = array(
				'post_type'      => 'page',        // Retrieve only pages
				'post_status'    => 'publish',     // Retrieve only published pages
				'posts_per_page' => -1,            // Retrieve all pages
				'post_parent'    => 1414, // Replace $parent_page_id with the ID of the parent page
				'orderby'        => 'menu_order',  // Order by the menu order of pages
				'order'          => 'ASC',         // Ascending order (you can change to 'DESC' for descending)
			);

			$child_pages_query = new WP_Query($args);

			if ($child_pages_query->have_posts()) {
				while ($child_pages_query->have_posts()) {
					  // Get the slug (post_name)
						$slug = $child_pages_query->post->post_name;
						$child_pages_query->the_post();

						// Display child page content here
						the_title();  // Display the child page title
						echo '<p><Strong>Slug: ' . esc_html($slug) . '</Strong></p>';
						the_content(); // Display the child page content

						// You can add more template code to format how each child page is displayed
				}
				wp_reset_postdata(); // Restore the global $post object
			}
		?>
		</main>
	</div>
<?php get_footer(); ?>