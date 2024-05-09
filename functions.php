<?php

// Create Custom Link

define("Rayium_URL", get_template_directory_uri());

// Importing Files

function Rayium_scripts()
{
    wp_enqueue_style('bootstrap_css',Rayium_URL . '/css/bootstrap.css');
    wp_enqueue_style('style_css',Rayium_URL . '/css/style.css');
    wp_enqueue_script('jquery_js',Rayium_URL . '/js/jquery.min.js',array('jquery'),true);
    wp_enqueue_script('bootstrap_js',Rayium_URL . '/js/bootstrap.min.js',array('jquery'),true);
    wp_enqueue_script('mixitup_min_js',Rayium_URL . '/js/mixitup.min.js',array(),true);
}
add_action('wp_enqueue_scripts','Rayium_scripts');

require_once('post_type.php');
