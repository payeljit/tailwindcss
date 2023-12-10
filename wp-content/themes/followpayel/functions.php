<?php

//Dynamic title
function followpayel_theme_support(){
    // Dynamic add the title tag
    add_theme_support('title-tag');
    //Add custom logo
    add_theme_support('custom-logo');
    // To be able to add featured image
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'followpayel_theme_support');

// Menu
function followpayel_menus(){

    $locations = array(
        'primary' => 'Top navigation menu',
        'footer' => 'Footer navigation menu'
    );
    register_nav_menus( $locations );
}

add_action('init', 'followpayel_menus');

function followpayel_register_styles() {

$version = wp_get_theme()->get( 'Version' );
wp_enqueue_style('followpayel-style', get_template_directory_uri() . "/style.css", array('followpayel-bootstrap'),$version , 'all');
wp_enqueue_style('followpayel-tailwind-style', get_template_directory_uri() . "/assets/public/style.css", array('followpayel-bootstrap'),$version , 'all');
wp_enqueue_style('followpayel-bootstrap',  "https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap-reboot.min.css", array(), '5.3.2', 'all');
wp_enqueue_style('followpayel-fontawsome',  "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css", array(), '6.4.2', 'all');

}
add_action('wp_enqueue_scripts', 'followpayel_register_styles');

function followpayel_register_scripts() {

wp_enqueue_script('followpayel-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js", array(),'5.3.2', true );
wp_enqueue_script('followpayel-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js", array(),'2.9.2', true );
wp_enqueue_script('followpayel-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js", array(),'3.7.1', true );
wp_enqueue_script('followpayel-custom', get_template_directory_uri() . "/assets/js/main.js", array(),'0.1', true );


}
add_action('wp_enqueue_scripts', 'followpayel_register_scripts');

?>

