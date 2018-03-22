<?php 

/**
 * initialisation du thème
 */
add_action('after_setup_theme', 'aj_setup_theme');

function aj_setup_theme()
{
    register_nav_menus(
        [
          'main-menu' => 'Menu principal',
          'footer-menu' => 'Menu dans le footer'
        ]
      );

    add_theme_support('post-thumbnails');
}

/**
 * @custom @taxonomy
 */

require_once TEMPLATEPATH . '/includes/aj_custom.php';
require_once TEMPLATEPATH . '/includes/aj_taxonomy.php';
require_once TEMPLATEPATH . '/includes/aj_shortcodes.php';


add_filter( 'the_excerpt', 'aj_add_svg');
/**
 * Ajouter un svg à la fin de l'article dans la catégorie coup de coeur
 *
 * @uses is_category()
 */

// fonction de callback appelée par le hook
function aj_add_svg( $excerpt ) {
    
    // on teste si on est dans la catégorie love
    if(is_category('love'))

        return $excerpt. '<svg xmlns="http://www.w3.org/2000/svg" 
        width="100%" 
        height="100" 
        viewBox="0 0 100 100" 
        preserveAspectRatio="none"><path d="M0 0 L50 25 L100 0 Z" />';

    // ailleurs
    return $excerpt;

}


add_filter('excerpt_more', 'aj_read_more');

function aj_read_more($more) {
    // permet de récupérer les informations du post dans la boucle
    global $post;

 return sprintf(
     '<p><a class="btn btn-default" href="%s"> Lire la suite...</a></p>',
     get_permalink($post->ID) 
    );
}

// afficher les customs posts types en page d'accueil

add_filter( 'pre_get_posts', 'aj_get_posts' );

function aj_get_posts( $query ) {
 if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', [ 'event', 'post' ] );

 return $query;
}

// afficher les derniers événements
add_action('aj_sidebar', 'aj_get_events_list', 10, 1 );

function aj_get_events_list(int $number){
    $args = [
        'post_type' => 'event',
        'posts_per_page' => $number
    ];

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) : ?>
    <ul class="list-group">
        <a href="#" class="list-group-item active">
            Evénement(s)
        </a>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<li class="list-group-item" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
    </ul>
	<?php wp_reset_postdata(); // permet de réinitialiser la variable $post ?>

<?php else : ?>
	<p><?php esc_html_e( 'Désolé mais il n\'y a pas d\'événement pour l\'instant' ); ?></p>
<?php endif; 

}

// Active classe pour le menu 

add_filter('nav_menu_css_class' , 'al_special_nav_class' , 10 , 2);

function al_special_nav_class ($classes, $item) {

    if (in_array('current-menu-item', $classes) )
        $classes[] = 'active ';

    return $classes;
}

// définition d'un Hook pour les CSS pour les templates du sites 

add_action('al_add_class', 'al_set_class' );

function al_set_class(){
    // ici on retourne une classe uniquement pour les catégories 
    // Il faudra bien sûr définir les CSS de la classe dans le fichier style.css
    if(is_category() and !is_category('love')){
        echo "category__top";
    }
}
