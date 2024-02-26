<?php

// Load css

function load_css()
{
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false,'all' );
    wp_register_style( 'custome', get_template_directory_uri().'/css/main.css', array(), false,'all' );
    wp_register_style( 'animation', get_template_directory_uri().'/css/allAnimation.css', array(), false,'all' );
    wp_enqueue_style('bootstrap');
    wp_enqueue_style( 'custome');
    wp_enqueue_style( 'animation');
}

add_action('wp_enqueue_scripts','load_css');


// Load javascript

function load_js(){
    wp_enqueue_script('jquery');
    // wp_register_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js','jquery', false,true );
    // wp_enqueue_script('bootstrap');
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js', array(), '2.5.4', true);
}

add_action( 'wp_enqueue_scripts','load_js');

function hook_bootstrap() {
    ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
}
add_action('wp_head', 'hook_bootstrap');



// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

add_image_size( 'blog-large', 800, 400, true );
add_image_size( 'blog-small', 600, 300, true );



// Register Menus
register_nav_menus( 
    array(
        'top-menu' => 'Top menu location',
        'mobile-menu' => 'Mobile menu location'
    
    )
);

// Register Widgets
function my_widgets(){

    register_sidebar( array(
        'name'=>'Page Sidebar',
        'id'=>'page-sidebar',
        'before_title'=>'<h3 class="widget-title">',
        'after_title'=>'</h3>'
    ) );
    register_sidebar( array(
        'name'=>'Blog Sidebar',
        'id'=>'blog-sidebar',
        'before_title'=>'<h4 class="widget-title">',
        'after_title'=>'</h4>'
    ) );


}
add_action('widgets_init','my_widgets');