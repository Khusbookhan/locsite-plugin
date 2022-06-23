<?php
/**
* @package myown
*
*
*/

if (! defined('ABSPATH')) {
die;
}

class locksite_loader
{
/**
*Constructor
*/
  public function __construct()
  {
//here calling includes files
    $this->includes();
    //enque scrips call function
    //add_action('wp_enqueue_scripts',array($this,'enqueue_scripts'));
    //admin enque script of locksite.js file
    add_action('admin_enqueue_scripts',array($this,'enqueue_script_admin'));  
   
  }
/*files depends on platforms like all file containing
*/
  public function includes()
  {

    
      include_once 'class-Add-submenu.php';
  }
/*
Enque script files */

 // public function enque_scripts()
 //  {

 //     //here recipe_js is handle name of script and jquery is dependency and wp_rand() generates random number
 //    // wp_enqueue_script( 'locksite_js',  plugin_dir_url( __DIR__ ). '/assets/js/locksite.js',   array('jquery') , wp_rand() );
   
 //     wp_localize_script('locksite_js',  'front_ajax_object',array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
 //     wp_enqueue_style( 'child-style', plugin_dir_url( __DIR__ ). '/assets/css/style.css');
 //  }


  /**
  * This is the function for admin side script to enque  
  */
  public function enqueue_script_admin()
  {
       
     wp_enqueue_script( 'locksite_js',  plugin_dir_url( __DIR__ ). '/assets/js/locksite.js',   array('jquery') , wp_rand() );
   
  }


}
  new locksite_loader();