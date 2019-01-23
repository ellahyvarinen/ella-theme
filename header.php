<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-2 col-4">
          <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php // bloginfo('name'); ?>

          <div class="logo-by-ella">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>

        </a>
      </div>
      <div class="col-md-10 col-8 d-flex justify-content-end">
        <nav class="nav-primary menu-primary" role="navigation">

         <div id="night-sky" class="particles-js"></div>
         
         <div id="nav-by-ella">

          <div id="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>

            <?php //'container'=> false | 'div', 'container_class' => 'particles-js', 'container_id' => 'night-sky' 
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'menu_id' => 'menu', 'container' => false ]);
              
            endif;
            ?>

          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
