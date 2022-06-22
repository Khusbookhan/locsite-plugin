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
   
  }
/*files depends on platforms like all file containing
*/
  public function includes()
  {

    
      include_once 'class-Add-submenu.php';


       

  }
/*
Enque script files */

}
  new locksite_loader();