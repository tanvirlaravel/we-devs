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
 
  /**
  * The main class of wedevs plugin.
  */
  
final class We_Devs {
	private function __construct(){
		
	}  
	
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
}



  
function we_devs(){
	  We_Devs::init();
}

we_devs();