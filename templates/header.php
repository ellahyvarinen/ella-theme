<header class="banner">
  <div class="container-fluid">
    <div class="row align-items-center">

      <div class="col-md-2 col-4">
        <a class="header-logo" href="<?= esc_url(home_url('/')); ?>"><?php // bloginfo('name'); ?>
        <?php 
        $image = get_field('header_logo', 'option');
        if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
<!--
          <div class="logo-by-ella">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        -->
      </a>
    </div>

    <div class="col-md-10 col-8 d-flex justify-content-end">
      <nav class="nav-primary menu-primary" role="navigation">

       <div id="night-sky" class="particles-js"></div>

       <div id="hamburger">
        <div class="wrapper">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

            <?php //'container'=> false | 'div', 'container_class' => 'particles-js', 'container_id' => 'night-sky' 
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'menu_id' => 'menu', 'container' => false ]);
            endif;
            ?>

          </nav>
        </div>
      </div>
    </div>
  </header>
