<?php
// Enqueue theme styles and scripts
function masters_of_brugge_enqueue_scripts() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    
    // Enqueue Bootstrap JS (with Popper.js included)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    
    // Enqueue theme styles and scripts
    wp_enqueue_style('masters-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'masters_of_brugge_enqueue_scripts');

// Add theme support for featured images
function masters_of_brugge_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'masters-of-brugge'),
    ));
}
add_action('after_setup_theme', 'masters_of_brugge_setup');

// Custom post type for tournaments
function masters_of_brugge_custom_post_type() {
    register_post_type('tournament',
        array(
            'labels' => array(
                'name' => __('Tournaments'),
                'singular_name' => __('Tournament')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'masters_of_brugge_custom_post_type');
?>