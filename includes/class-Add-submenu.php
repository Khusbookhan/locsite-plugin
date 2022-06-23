<?php


if (! defined('ABSPATH')) {
    die;
}


class Add_submenu
{

     /*
     *
     *contructor
     *
     */

    public function __construct()

    {

     add_action('admin_menu',array($this, 'my_plugin_menu'));

     
    }

    /**
     * Registers a new settings page under Settings.
     */
    public function my_plugin_menu()
     {
        add_options_page(
            __( 'setting_locksite', 'textdomain' ),
            __( 'Lock Site', 'textdomain' ),
            'manage_options',
            'options_page_slug',
            array(
                $this,
                'settings_page'
            )
        );
    }
   
    /**
     * Settings page display callback.
     */
    function settings_page() {

    /*
    *include class-submenu-callback.php in this file .this class have 
    */

    require_once(plugin_dir_path(__FILE__).'submenu-callback.php');
       //require_once(plugin_dir_path(__FILE__).'/template/sebmenu-archive.php');
    }
    
}

new Add_submenu();