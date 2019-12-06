<?php
/*
Plugin Name: Dropdown and scrollable Text
Plugin URI: http://n-pedram.ir
Description: Create shortcode for Dropdown Text
Author: Pedram Nasertorabi
Version: 1.0
Author URI: http://n-pedram.ir/
*/
defined('ABSPATH') || exit();


register_activation_hook(__FILE__, 'Festival_Activation');
register_deactivation_hook(__FILE__, 'Festival_Deactivation');
function Festival_Activation() {}
function Festival_Deactivation(){}

/*Add JS & CSS*/
function Dropdown_Assets_Handler($hook) {
    wp_enqueue_script( 'dropdownjs', plugins_url( 'assets/dropdownjs.js', __FILE__ ), array('jquery') );
    wp_enqueue_script( 'scrollbarjs', plugins_url( 'assets/jquery.mCustomScrollbar.concat.min.js', __FILE__ ), array('jquery') );
    wp_register_style( 'dropdowncss',    plugins_url( 'assets/dropdowncss.css',    __FILE__ ), false );
    wp_enqueue_style ( 'dropdowncss' );
    wp_register_style( 'scrollbarcss',    plugins_url( 'assets/jquery.mCustomScrollbar.min.css',    __FILE__ ), false );
    wp_enqueue_style ( 'scrollbarcss' );
}
add_action('wp_enqueue_scripts', 'Dropdown_Assets_Handler');


/*Create Shortcode For Drop Down Text*/
function Dropdown_Text_Shortcode( $atts, $content) {
    $atts = shortcode_atts(
        array(
            'height' => '300',
        ), $atts, 'dropdowntext' );
    return '<div class="dropdowntextholder" style="height:'.$atts['height'].'px">
<p class="dropdownopener">&#8595;</p>
<p class="dropdowncloser">&#8593;</p>
' . $content . '</div>';
}
add_shortcode( 'dropdowntext', 'Dropdown_Text_Shortcode');


/*Create Shortcode For Scrollable Text*/
function Scrollable_Shortcode( $atts, $content) {
    $atts = shortcode_atts(
        array(
            'theme' => 'dark',
            'height' => '300',
        ), $atts, 'scrollabletext' );
    return '<div class="mCustomScrollbar" data-mcs-theme="'.$atts['theme'].'" style="height : '.$atts['height'].'px">'
        . $content .
        '</div>';
}
add_shortcode( 'scrollabletext', 'Scrollable_Shortcode');