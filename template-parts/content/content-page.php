<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mybibibig
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<div class='section-title-area'>
		<h5 class='section-subtitle'><?php the_title() ?></h5>
		<h2 class='section-title'>Section 1</h2>
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>