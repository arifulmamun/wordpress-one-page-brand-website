<?php

function testsite_css_js_enqueue() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all' );

    // Enqueue Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0-beta3', 'all' );

    // Enqueue main stylesheet
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/asset/css/main.css', array(), '1.0', 'all' );

    // Enqueue GSAP (JavaScript)
    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), '3.10.4', true );

    // Enqueue main JavaScript file
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/asset/js/main.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'testsite_css_js_enqueue' );
