<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <?php
wp_head();
?>
</head>
<!-- body_class shows classes depending on each pages -->
<body <?php body_class();?>>
 <header class="header">
    <div class="nav-container">
    <div class="nav__logo-menu">
      <?php the_custom_logo();?>
       <img class="nav__menu"src="<?php echo get_theme_file_uri('/images/menu.svg'); ?>" alt="open navigation " >
    </div>
      <nav class="nav">
        <?php wp_nav_menu(array(
    'theme_location' => 'primary',
    'container' => false));
?>
      </nav>
    </div>
  </header>
