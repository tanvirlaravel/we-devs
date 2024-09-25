<?php 

namespace WeDevs\Academy;

class Admin{
	
	public function __construct(){
        $this->dispach_action();
		new Admin\Menu();
	}

    public function dispach_action(){

        $addressbook = new Admin\Addressbook();
        add_action('admin_init', [$addressbook, 'form_handler']);
    }
}

