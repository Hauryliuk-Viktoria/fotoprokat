<?php
function fotoprokat_scripts() {
    // Подключаем CSS
    wp_enqueue_style( 'fotoprokat-style', get_stylesheet_uri() );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css' );

}
add_action( 'wp_enqueue_scripts', 'fotoprokat_scripts' );

register_nav_menus( array(
    'primary' => 'Главное меню',
) );