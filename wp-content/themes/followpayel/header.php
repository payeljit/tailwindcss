<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    wp_head();
    ?>
</head>
<body class="text-yellow-400 text-sm">
    <span class="text-red-400">Tesing</span>
<header>
    <?php
    if(function_exists('the_custom_logo')) {
        $custom_logo_id =   get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
    }
    
    ?>
    <a href="index.html"><?php echo get_bloginfo('name') ; ?></a>
</header>
<?php 

wp_nav_menu(
    array(
        'menu' => 'primary',
        'container' => '',
        'theme_location' => 'primary',
        'items_wrap' => '<ul id="" class="">%3$s</ul>'
    )
    );?>




