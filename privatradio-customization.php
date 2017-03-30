<?php
/**
 * Plugin Name: Privatradio Customization
 * Plugin URI:
 * Description: Adds some customizations to Privatradio sites.
 * Version: 1.0.0
 * Author: Carlos
 * Author URI: http://carlito.me
 *
 * Text Domain: privatradio
 * Domain Path: /languages/
 *
 * @package Starter_Plugin
 * @category Core
 * @author Carlos
 */


 /**
  * Register with hook 'wp_enqueue_scripts', which can be used for front end CSS and JavaScript
  */
 add_action( 'wp_enqueue_scripts', 'privatradio_customization_stylesheets' );

 /**
  * Enqueue plugin style-file
  */
 function privatradio_customization_stylesheets() {
     // Respects SSL, Style.css is relative to the current file
     wp_register_style( 'prefix-style', plugins_url('privatradio-customization.css', __FILE__) );
     wp_enqueue_style( 'prefix-style' );
 }
