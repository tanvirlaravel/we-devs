<?php 
/**
* Plugin Name: WeDevs Plugin
*/

 /**
	* defined() 
	* defined() function in PHP is used to check whether a constant has been defined or not. 
	* Constants are values that cannot be changed during the execution of a script, and they 
	* are typically defined using the define() function in PHP.
	*	
	* @return true/false
 */
/**
   * ABSPATH
   * ABSPATH is a constant that represents the absolute path to the WordPress installation directory.
 */
 if( ! defined( 'ABSPATH' ) ){ 
    exit;
 }
 
require_once __DIR__ . "/vendor/autoload.php";
  
  
 
  /**
  * The main class of wedevs plugin.
  */
  
final class We_Devs {
	
	const version = "1.0.0";
	
	
	private function __construct(){
		
		$this->define_constants();
		
		/**
		* In WordPress, the register_activation_hook() function 
		* is used to register a callback function that is executed when a plugin is activated. This hook 
		* allows plugin developers to perform tasks such as initializing plugin settings, creating 
		* database tables, or performing other setup operations upon activation.
		*
		* register_activation_hook( string $file, callable $callback )
		* $file: The main plugin file path. Typically, you would use the __FILE__ magic constant to 
		* refer to the main plugin file.		
		*/
		register_activation_hook(__FILE__, [$this, "activate"]);
		
		/**
		* In WordPress, the plugin_loaded action hook 
		* is fired once all active plugins have been loaded. This hook provides a way to execute code 
		* after plugins have been loaded but before any WordPress content is rendered. It can be useful 
		* for initializing plugin-specific functionality or checking if certain plugins are active.
		*/
		add_action("plugin_loaded", [$this, "init_plugin"]);
	}  
	
	/**
         * Initializes a singleton instance
         * 
         * @return \We_Devs
    */
	public static function init(){
		
		$instance = false;
		
		if(	! $instance ){
			/*	
			* self()			
			* In PHP, new self() is used within a class to create a new instance of the class 
			* itself. It's similar to using new ClassName(), but self refers to the current class 
			* where the code is written, whereas ClassName refers to a specific class.
			*/
			$instance = new self();
		}
	}
	
	
	/**
		* Define require plugin constrains
    */
	public function define_constants(){
		/**
		* self::version refers to accessing a class constant named version within the same 
		* class using the self keyword in PHP.
		*/
		define("WD_ACADEMY_VERSION", self::version);
		/**
		* In PHP, the __FILE__ magic constant 
		* represents the full path and filename of the current PHP script file. 
		* It provides the absolute path to the file in which it appears.
		*/
		define("WD_ACADEMY_FILE", __FILE__ );
		/**
		* In PHP, the __DIR__ magic constant 
		* represents the directory of the current PHP script file. It returns the absolute path 
		* to the directory containing the file in which it is used.
		*/
		define('WD_ACADEMY_PATH', __DIR__);
		/**
		*  the plugins_url() function is used to retrieve the URL for the plugins directory 
		*/
		define("WD_ACADEMY_URL", plugins_url("", WD_ACADEMY_FILE));
		define("WD_ACADEMY_ASSETS", WD_ACADEMY_URL . "/assets");
	}
	
	
	public function activate(){
		/**
		* In WordPress, the get_option() function 
		* is used to retrieve the value of an option from the wp_options database table. 
		* Options in WordPress are used to store site settings, configurations, and other data.
		*/
		
		$installed = get_option('wd_academy_installed');
		
		if(! $installed)
		{		
			/**
			* In WordPress, the update_option() function 
			* is used to update the value of an existing option in the wp_options database table. 
			* Options in WordPress are used to store site settings, configurations, and other data.
			*/		
			update_option('wd_academy_installed', time());
		}
		$version = get_option('wd_academy_version');
		if( ! $version ) {
			update_option('wd_academy_version', WD_ACADEMY_VERSION);
		}
		
		
	}
	
	public function init_plugin(){
		new WeDevs\Academy\Admin();
	}
	
	
	
	
	
}



/**
  * Initialize the main plugin
*/  
function we_devs(){
	  We_Devs::init();
}

we_devs();