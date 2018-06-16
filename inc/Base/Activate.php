<?php
/**
*
*@package Dsports-plugin
*/
namespace Inc\Base;

class Activate
{
  public static function activate()
  {
    flush_rewrite_rules();
    $default = array();
    if (! get_option( 'dsports_plugin')){
      update_option( 'dsports_plugin', $default );
    }
    if (! get_option( 'dsports_plugin_cpt')){
      update_option( 'dsports_plugin_cpt', $default );
    }

    if (! get_option( 'dsports_plugin_tax')){
      update_option( 'dsports_plugin_tax', $default );
    }

    if (! get_option( 'dsports_plugin_lpt')){
      update_option( 'dsports_plugin_lpt', $default );
    }
  }
}
