<?php 

namespace WeDevs\Academy\Frontend;

class Shortcode {
	
	public function __construct(){
		/**
		* In WordPress, the add_shortcode() function is used to register a shortcode. 
		* Shortcodes are special tags that allow you to embed dynamic content or functionality 
		* into posts, pages, or other content areas on your WordPress site.
		*/
		add_shortcode('wedevs-academy', [$this, 'render_shortcode']);
	}
	
	public function render_shortcode(){
		return 'Hello from short code';
	}
}