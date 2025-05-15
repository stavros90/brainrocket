<?php 

// Load Stylesheets
function load_stylesheets() {
    wp_enqueue_style( 'brainrocket-style', get_stylesheet_uri(), [], '1747333447932', 'all' );    
    wp_enqueue_style('font-family', 'https://fonts.cdnfonts.com/css/druk-text-wide-trial');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// Load Javascripts
function load_javascripts() {
    wp_enqueue_script( 'brainrocket-script', get_template_directory_uri() . '/assets/scripts/app.js', [], '1747333447932', true );  

    wp_localize_script('brainrocket-script', 'load_more_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'load_javascripts');

