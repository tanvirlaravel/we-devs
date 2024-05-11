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
  
class We_Devs {
	public function __construct(){
		
	}  
}



  
function we_devs(){
	  new We_Devs();
}

we_devs();