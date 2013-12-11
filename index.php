<?php
/*
Plugin Name: Fashion Trends Plugin
Plugin URI: http://www.rahulkavi.com/
Description: Enables Fashion Bloggers to add trends to a specific fashion post (apart from tags, categories, pages). Each Fashion Trend is associated with a Fashion Blog Post.
Author: Rahul Kavi
Version: 0.1
Author URI: http://www.rahulkavi.com/

*/

include_once('includes/StandardizedCustomContent.php');

add_action( 'admin_menu', 'StandardizedCustomContent::create_meta_box' );
add_action( 'save_post', 'StandardizedCustomContent::save_custom_fields', 1, 2 );
add_action( 'do_meta_boxes', 'StandardizedCustomContent::remove_default_custom_fields', 10, 3 );
add_action( 'transition_post_status', 'StandardizedCustomContent::update_trend_meta', 10, 3 );



/*EOF*/