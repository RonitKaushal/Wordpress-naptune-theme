<?php

function register_custom_menu() {
    register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('init', 'register_custom_menu');

function custom_theme_menu_location() {
    register_nav_menu('second_main_menu', 'second_main_menu');
}
add_action('after_setup_theme', 'custom_theme_menu_location');


?>