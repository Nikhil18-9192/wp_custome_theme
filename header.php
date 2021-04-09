<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php
   wp_head()
   ?>
 </head>
 <body>
  <!-- get site name dynamically -->
    <h1><?= get_bloginfo('name') ?></h1>


<!-- logo -->
      <?php
        if(function_exists('the_custom_logo')){
          $custome_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custome_logo_id);
        }
      ?>
      <img src="<?= $logo[0] ?>" alt="">
<!-- nav items -->
     <?php
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items-wrap' => '<ul class="nav-menu"></ul>'
        )
      );
     ?>