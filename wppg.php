<?php
/*
	Plugin Name: Laundry
	Plugin URI: http://qodr.or.id/
	Version: 1.0.0
	Author: Qodr Team
	Author URI: http://qodr.or.id/
	Description: Wordpress using postgressql
	Text Domain: wppg
	Domain Path: /languages/
	License: GPL
 */

defined( 'ABSPATH' ) or die();

add_action( 'admin_menu', 'wppgplugin_admin_option' );
function wppgplugin_admin_option() {
	add_options_page( 'Marem Jaya', 'Marem Jaya', 'manage_options', 'wppg.php', 'wppgplugin_admin_submenu' );
}

function wppgplugin_admin_submenu() {
	if (!empty($_POST)) {
		if (!empty($_POST['pg_action']) && $_POST['pg_action']=='move_pg4wp') {
			// script pindah folder
			echo "string";
		}
	}

	

    	

}

// - buat sub menu wppg di menu settings
// - buat tombol change database to postgressql 