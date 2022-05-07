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
            'taxonomies' => array('category'),
        )
    );
}
