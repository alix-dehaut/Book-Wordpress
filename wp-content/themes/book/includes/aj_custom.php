<?php 

add_action( 'init', 'aj_create_post_type' );

function aj_create_post_type() {

  // définit le custom (post_type dans la table wp_posts MySQL)
  register_post_type( 'event',
   [
       // les labels permettent d'afficher des informations dans le CMS
      'labels' => [
        'name' => 'Événement',
        'singular_name' => 'Événement'
        ],

      'public' => true, // pour qu'il s'affiche dans l'administration
      // le support permet de définir les attributs du contenu 
      // ici nous il aura un titre, un éditeur et des images en avant
      'supports' => [
        'title',
        'editor',
        'thumbnail'
      ],
      'has_archive' => true // visible dans les archives
   ]
  );
}

// livre
add_action( 'init', 'aj_create_post_type_book' );

function aj_create_post_type_book() {

  register_post_type( 'book',
   [
      'labels' => [
        'name' => 'Livre',
        'singular_name' => 'Livre'
        ],

      'public' => true, 
      'supports' => [
        'title',
        'excerpt',
        'thumbnail'
      ],
      'has_archive' => true // visible dans les archives
   ]
  );
}