<?php 

namespace WeDevs\Academy;

class Admin{
	
	public function __construct(){
        $addressbook = new Admin\Addressbook();
        $this->dispach_action(  $addressbook  );
		new Admin\Menu(  $addressbook  );
	}

    public function dispach_action( $addressbook ){

        add_action('admin_init', [$addressbook, 'form_handler']);
    }
}

