<?php
function add_features(){
    register_nav_menus(
        [
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        ]
    );
    register_nav_menu(
            'primary-2',
            __('Primary 2 Menu', 'primary-menu')
    );
}
add_action('init','add_features');