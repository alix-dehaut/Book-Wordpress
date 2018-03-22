
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo get_bloginfo( 'url' ); ?>">Book WordPress</a>
  

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav">
        <?php 

            $categories= get_categories([
                'orderby'=>'name',
                'exclude'=>1
            ]);

            foreach($categories as $category){
                echo sprintf(
                    '<li class="nav-item"><a class="nav-link" href="%s" alt="%s">%s</a></li>',
                    esc_url(get_category_link($category->term_id) ),
                    esc_attr($category->name),
                    esc_html($category->name)
                );
            };

            $page= get_page_by_title('Qui sommes nous');
            echo sprintf(
                    '<li class="nav-item"><a class="nav-link" href="%s" alt="%s">%s</a></li>',
                    esc_url(get_page_link($page->ID) ),
                    esc_attr($page->post_title),
                    esc_html($page->post_title)
                );
        ?>

        </ul>

        <div class="navbar-form navbar-right">
        <?php 
        wp_nav_menu([
            'theme_location'  => 'main-menu',
            'container'       => false, // wrapper nav
            'container_class' => '',
            'menu_class'     => 'nav navbar-nav',
        ]); 
        ?>
        </div>
    </div>
</nav>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo get_bloginfo( 'url' ); ?>">Book WordPress</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php 

        $categories= get_categories([
            'orderby'=>'name',
            'exclude'=>1
        ]);

        foreach($categories as $category){
            echo sprintf(
                '<li class="nav-item"><a class="nav-link" href="%s" alt="%s">%s</a></li>',
                esc_url(get_category_link($category->term_id) ),
                esc_attr($category->name),
                esc_html($category->name)
            );
        };

        $page= get_page_by_title('Qui sommes nous');
        echo sprintf(
                '<li class="nav-item"><a class="nav-link" href="%s" alt="%s">%s</a></li>',
                esc_url(get_page_link($page->ID) ),
                esc_attr($page->post_title),
                esc_html($page->post_title)
            );
    ?>
    </ul>
    <div class="navbar-form navbar-right">
      <?php
      wp_nav_menu([
          'theme_location'  => 'main-menu',
          'container'       => false, // wrapper nav
          'container_class' => '',
          'menu_class'     => 'nav navbar-nav',
      ]);
      ?>
      </div>
  </div>
</nav> -->