<?php
/**
 * @package  PixelPaper Login Plugin
 * @version 1.0
 */
/*
Plugin Name:  PixelPaper Login Plugin

Description:  Custom PixelPaper Hosting clients login page
Author: Kim White
Version: 1.0
Author URI: http://mrscrw.com
*/


// New Login Logo
function change_my_wp_login_image() {
echo "
<style>
body.login #login h1 a {
background: url('//pixelpaper.net/site/wp-content/uploads/2014/07/PixelPaper-logo.png') no-repeat transparent;height:117px;width:280px;
}

</style>
";
}
add_action("login_head", "change_my_wp_login_image");

function my_login_logo_url() {
    return '//www.pixelpaper.net';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Sites by PixelPaper YEA!';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );







//*end pixelpaper logo *//

