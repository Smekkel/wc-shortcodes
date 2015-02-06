<?php
/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( 'class-wpc-settings-framework.php' );

	add_action( 'plugins_loaded', array( 'WC_Shortcodes\\WPC_Settings_Framework', 'get_instance' ) );
}
