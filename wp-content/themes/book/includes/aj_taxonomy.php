<?php
add_action( 'init', 'al_create_country_tax' );

function al_create_country_tax() {

	register_taxonomy(
		'country',
        ['event', 'post'],
        [
            'label' => 'Pays',
            'rewrite' => array( 'slug' => 'country' ),
            'hierarchical' => false,
        ]
	);
}

add_action( 'init', 'aj_create_genre_tax' );

function aj_create_genre_tax() {

	register_taxonomy(
		'genre',
        ['book'],
        [
            'label' => 'Genre',
            'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => true,
        ]
	);
}