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

     //add_action( 'admin_init',array($this, 'my_redirect_if_user_not_logged_in' ));
      
       //add_action('admin_init',array($this, 'register_and_build_fields'));
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

     require_once(plugin_dir_path(__FILE__).'class-submenu-callback.php');

    // public  function my_redirect_if_user_not_logged_in() {
 
    if ( !is_user_logged_in() && isset( $_GET['fl_builder'])) {
        auth_redirect();
    }
     
    // wp_redirect( 'http://localhost/mywordpress/my-account/');
     
    // exit;
     
    // }
     
    // }

     
     }

    
}
 



new Add_submenu();