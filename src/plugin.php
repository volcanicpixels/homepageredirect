<?php
/*
Plugin Name: {{ lava.name }}
Plugin URI: {{ lava.url }}
Description: {{ lava.description }}
Version: {{ lava.version }}
Author: {{ lava.author }}
Author URI: {{ lava.author_url }}
License: {{ lava.license }}
*/
?>
<?php

include( dirname( __FILE__ ) . '/classes/Plugin.php' );

class Lava extends Lava_Plugin {

	public $_plugin_name = "{{ lava.name }}";
	public $_plugin_version = "{{ lava.version }}";

	public $_plugin_actions = array(
	);

	public $_plugin_filters = array(
	);

	#####################
	#	Auto Hooks
	#####################

	function _get_header() {
		if( is_front_page() ) {
			//get most recent post
			$args = array(
				'numberposts' => 1,

			);
			$posts = wp_get_recent_posts( $args );
			$permalink = get_permalink( $posts[0]['ID'] );
			wp_redirect( $permalink );
			exit;
		}
	}



	#####################
	##	Plugin hooks
	#####################

}

$the_plugin = new Lava( __FILE__ );

?>