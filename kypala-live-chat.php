<?php
/**
 * Plugin Name: Kypala Live Chat
 * Plugin URI: http://www.kypala.com
 * Description: Kypala Live Chat allows you to chat with visitors to your site via a customizable chat window.
 * Version: 1.0.1
 * Author: kypala
 * Author URI: http://www.kypala.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
function kypalalivechat() {
	wp_enqueue_script( 'kypala-live-chat', 'https://snippet.kypala.com/flochat.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'kypalalivechat' );
