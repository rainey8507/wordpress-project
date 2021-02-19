<?php 
/*
* Template Name: functions.php
*   Description: Add features to wordpress theme 
*/
function custom_wp_enqueue_style() {
    wp_enqueue_style('bootstrapcdn', "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css");
    wp_enqueue_style('gfont1', "https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,300italic,500,700,600,800");
    wp_enqueue_style('gfont2', "https://fonts.googleapis.com/css?family=Montserrat:400,700");
}

/*** Add JS file */


add_action('custom_wp_enqueue_scripts', 'custom_wp_enqueue_style');