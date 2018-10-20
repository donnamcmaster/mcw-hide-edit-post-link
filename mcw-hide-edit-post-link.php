<?php
/*
Plugin Name: McWebby Hide Edit Post Links
Plugin URI: https://www.donnamcmaster.com/
Description: Temporarily hides the edit links so that you can view the page without them. 
Version: 00.01.00
Author: Donna McMaster
Author URI: https://www.donnamcmaster.com/
License: GNU GPU v3
*/

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *	Stylesheets and scripts
 */
add_action( 'wp_enqueue_scripts', function () {
?>
<style type="text/css">
	a.post-edit-link {
		display: none !important;
	}
</style>
<?php
}, 99 );