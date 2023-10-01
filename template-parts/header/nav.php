<?php  
/**
 * Header Navigation template.
 * 
 * @package  Mybibibig
 */
 $image = get_template_directory_uri() . '/assets/images/logo.png';
?>
<!-- Brand and toggle get grouped for better mobile display -->
<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-logo" href="<?php echo home_url(); ?>"><img src="<?php echo $image; ?>" alt="logo"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'top-menu',
                'menu_class'     => 'top-bar',
            ));
        ?>
      </li>
    </ul>
  </div>
</nav>