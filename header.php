<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>My bibibig</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
if(function_exists('wp_body_open')) wp_body_open(); ?>
<header>
    <div class="container">
    <?php get_template_part('template-parts/header/nav'); ?>
    </div>
</header>