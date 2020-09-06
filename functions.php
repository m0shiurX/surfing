<?php

function surfing_initialize(){
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menu("top_nav", "Main navigation bar on top");
}

add_action("after_setup_theme", "surfing_initialize");


function surfing_assets(){
    wp_enqueue_style( "surfing_style", get_stylesheet_uri(),'',time());
    wp_enqueue_style( "bootstrap", "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css");

}

add_action( "wp_enqueue_scripts", "surfing_assets" );
