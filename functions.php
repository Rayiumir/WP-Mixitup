<?php

// Create Custom Links

define("RaymondTomcat_URL", get_template_directory_uri());

// Importing Files

function RaymondTomcat_scripts()
{
    wp_enqueue_style('bootstrap-rtl',RaymondTomcat_URL . '/css/bootstrap.rtl.min.css');

    wp_enqueue_script('jquery_js',RaymondTomcat_URL . '/js/jquery.min.js',array('jquery'),true);
    wp_enqueue_script('bootstrap_js',RaymondTomcat_URL . '/js/bootstrap.min.js',array('jquery'),true);
    wp_enqueue_script('mixitup_min_js',RaymondTomcat_URL . '/js/mixitup.min.js',array(),true);
}
add_action('wp_enqueue_scripts','RaymondTomcat_scripts');

require_once('post_type.php');
