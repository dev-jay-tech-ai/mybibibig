<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
	<?php 
        wp_head();
        $image = get_template_directory_uri() . '/assets/images/logo.png';
	?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-logo" href="<?php echo home_url(); ?>"><img src="<?php echo $image; ?>" alt="logo"/></a>
    <?php
        wp_nav_menu(array(
            'theme_location' => 'top-menu',
            'menu_class'     => 'top-bar'
        ) );
    ?>
    </div>
</header>