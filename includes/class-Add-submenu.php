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

   
    /**
     * fields
     */ 
     if (isset($_POST['awesome_text'])) {
        $value = $_POST['awesome_text'];
        update_option('awesome_text', $value);
    }

    $value = get_option('awesome_text', 'hey-ho');

     require_once(plugin_dir_path(__FILE__).'class-submenu-callback.php');

     


   
   

   


     
     }
}
 



new Add_submenu();