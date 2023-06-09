/*
Plugin Name: Dummy Content Plugin
Plugin URI: https://example.com/dummy-content-plugin
Description: A plugin to easily insert dummy content into your website.
Version: 1.0.1
Author: Mayank Kumar
Author URI: https://markmemayank.com
License: GPL3
*/

function generate_dummy_content() {
    $content = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque, felis ac tristique convallis, velit sapien vestibulum ante, at lacinia nibh nibh ac justo. </p>';
    return $content;
}

function dummy_content_shortcode() {
    $dummy_content = generate_dummy_content();
    return $dummy_content;
}
add_shortcode( 'dummy_content', 'dummy_content_shortcode' );
