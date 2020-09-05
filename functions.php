<?php 


function surfing_assets(){
    wp_enqueue_style( "surfing_style", get_stylesheet_uri());
    wp_enqueue_style( "bootstrap", "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css");

}

add_action( "wp_enqueue_scripts", "surfing_assets" );
