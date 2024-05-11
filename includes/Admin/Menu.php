<?php 

namespace WeDevs\Academy\Admin;

/**
	* Manu handler class 
*/

class Menu {
	
	function __construct(){
		/**
		* In WordPress, the admin_menu action hook 
		* is fired when the administration menus have been created. This hook is used to add custom menu 
		* items or submenus to the WordPress admin menu.
		*/
		add_action("admin_menu", [$this, "admin_menu"]);
	}
	
	
	public function admin_menu(){
		echo 'admin menu';
		exit;
	}
	
	
	
	
}