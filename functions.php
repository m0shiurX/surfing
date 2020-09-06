<?php

// Initialize
function surfing_initialize(){
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menu("top_nav", "Main navigation bar on top");
}
add_action("after_setup_theme", "surfing_initialize");


// Loading assets
function surfing_assets(){
    wp_enqueue_style( "surfing_style", get_stylesheet_uri(),'',time());
    wp_enqueue_style( "bootstrap", "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css");

}
add_action( "wp_enqueue_scripts", "surfing_assets" );


// Menu item class
function surfing_menu_item_class($class, $item){
    $class[] = 'mr-3 nav-item';
    return $class;
}
add_filter("nav_menu_css_class", "surfing_menu_item_class", 10, 2);


// Widgets
function surfing_widgets(){

    register_sidebar([
        'name' => "Footer Left Widget",
        "id"    => 'footer_left_widget',
        "before_widget" => '<div class="w-100 p-3">',
        "after_widget"  => "</div>",
        "before_title" => '<h3>',
        "after_title"  => "</h3>"
    ]);

    register_sidebar([
        'name' => "Footer Right Widget",
        "id"    => 'footer_right_widget',
        "before_widget" => '<div class="w-100 p-3">',
        "after_widget"  => "</div>",
        "before_title" => '<h3>',
        "after_title"  => "</h3>"


    ]);
}
add_action("widgets_init", "surfing_widgets");