<?php

// Post type Portfolios
add_action( 'init', 'portfolios' );
function portfolios() {
    register_post_type( 'portfolios',
        array(
            'labels' => array(
                'name' => 'Portfolios',
                'singular_name' => 'Portfolio'
            ),
            'public' => true,
            'rewrite' => array( 'slug' => 'portfolios' ),
            'menu_icon' => 'dashicons-images-alt',
            'supports' => array('title', 'thumbnail', 'editor'),
        )
    );
    $labels = array(
        'name' => 'Category'
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true
    );

    register_taxonomy('CategoryPortfolio', array('portfolio'), $args, 
        array(
            'hide_empty' => true
        )
    );
}
