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
		/**
		* The add_menu_page() function 
		* in WordPress is used to add a top-level menu item to the WordPress admin menu. This function 
		* is typically called within the admin_menu action hook to register custom menu items.
		*
		* add_menu_page(string $page_title,	string $menu_title,string $capability,string $menu_slug,
		*				callable $function = '',string $icon_url = '',int $position = null );
		*/
		add_menu_page('Wedevs academy', 'wedevs academy', 'manage_options', 'wedevs-academy', [$this, 'plugin_page'], 'dashicons-welcome-learn-more');
	}
	
	
	public function plugin_page(){
		echo "Plugin page content";
	}
	
	
	
	
}