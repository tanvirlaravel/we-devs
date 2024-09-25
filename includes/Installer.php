<?php

namespace WeDevs\Academy;

class Installer{

    public function run(){
        $this->add_version();
        $this->create_table();
    }

    public  function  add_version(){
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

    // Create necessary database table
    public function create_table(){

        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();

        $schema = " CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}ac_address` (
        `id` INT NOT NULL AUTO_INCREMENT ,
         `name` VARCHAR(100) NOT NULL ,
        `address` VARCHAR(255) NULL ,
        `phone` VARCHAR(30) NULL ,
        `created_by` bigint  NOT NULL ,
        `created_at` datetime NOT NULL ,
         PRIMARY KEY (`id`))
         $charset_collate ";

        if(! function_exists('dbDelta')){
            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        }

        dbDelta($schema);






    }
}
