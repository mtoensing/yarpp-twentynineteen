<?php
/*
  Plugin Name: YARPP Helper Twenty Nineteen
  Plugin URI: http://marc.tv/marctv-wordpress-plugins/
  Description: YARPP related list for twentyseventeen with lazy load.
  GitHub Plugin URI: mtoensing/yarpp-twentynineteen
  Version: 1.0
  Author: MarcDK
  Author URI: https://marc.tv
  License: GPL2
 */

function yarpp_helper_scripts() {
	wp_enqueue_style("yarpp-template-thumbnails", WP_PLUGIN_URL . "/yarpp-twentynineteen/yarpp-template.css",false,2.0 );
}
	if ( ! is_admin() ) {
		add_action( 'wp_enqueue_scripts', 'yarpp_helper_scripts' );
	}
?>
