<?php
/*
Plugin Name: add-scroll-class
Description: adding scroll class to the body on user scroll
Developer: Joel Hajioff, Eyal Ron
version: 1.0
*/

add_action( 'wp_enqueue_scripts', 'add_scroll_class', 999 );

function add_scroll_class(){
  wp_enqueue_script( 'add-scroll-class', plugins_url( '/add-scroll-class.js' , __FILE__ ), array ( 'jquery' ), 1.1, true);
}
