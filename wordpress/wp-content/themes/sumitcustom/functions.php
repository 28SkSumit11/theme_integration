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

/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'core', get_stylesheet_uri() );
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function remove_more_link_scroll($link){
    $link = preg_replace('|#more-[0-9]+|','' ,$link);
    return $link;
}
add_filter('the_content_more_link', 'remove_more_link_scroll');

function modify_readmore_text(){
    return '<a class="read-more" href="'.get_permalink().'">Your Read More text</a>';
}
add_filter('the_content_more_link', 'modify_readmore_text');
function my_login_logo(){
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a{
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg');
            border-radius: 50%;
            background-size: cover;
            background-position: left;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'my_login_logo');

function my_plugin_menu(){
    add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-unique-identifier', 'my_plugin_options');
}
add_action('admin_menu', 'my_plugin_menu');

function my_plugin_options(){
    if(!current_user_can('manage_options')){
        wp_die( __('You do not have sufficent permission to access this page'));
    }
    echo '<div class="wrap">';
    echo '<p> Here is where the form would go if I actually had options</p>';
    echo '</div>';
}

    // add_menu_page(
    //     'Sumit Custom',
    //     'Sumit menu',
    //     'manage_options',
    //     'sumit-custom',
    //     'display_the_contents'
    // );