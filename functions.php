<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_directory_uri() . '/assets/css/theme.css',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/css/theme.css')
    );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

function foce_child_enqueue_scripts() {
    wp_enqueue_script(
        'foce-child-scroll-animations',
        get_stylesheet_directory_uri() . '/assets/js/title-scroll-animations.js',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/js/title-scroll-animations.js'),
        true
    );

    wp_enqueue_script(
        'foce-child-banner-parallax',
        get_stylesheet_directory_uri() . '/assets/js/banner-parallax.js',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/js/banner-parallax.js'),
        true
    );

    /** Enqueue Swiper JS and CSS for the characters slider */
    wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
    array(),
    '12'
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
        array(),
        '12',
        true
    );

    wp_enqueue_script(
        'foce-child-characters-swiper',
        get_stylesheet_directory_uri() . '/assets/js/characters-swiper.js',
        array('swiper-js'),
        filemtime(get_stylesheet_directory() . '/assets/js/characters-swiper.js'),
        true
    );

    wp_enqueue_script(
        'foce-child-place-parallax',
        get_stylesheet_directory_uri() . '/assets/js/place-parallax.js',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/js/place-parallax.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'foce_child_enqueue_scripts');