<?php

/**
 * Plugin Name: Pronamic Framework Example
 * Plugin URI: http://pronamic.nl
 * Author: Pronamic
 * Author URI: http://pronamic.nl
 * Description: An example of the usage of the pronamic-framework collection.
 */

define( 'PFE_PLUGIN_FOLDER_ROOT', dirname( __FILE__ ) );
define( 'PFE_PLUGIN_FOLDER_NAME', basename( PFE_PLUGIN_FOLDER_ROOT ) );
define( 'PFE_PLUGIN_URL', plugins_url( __FILE__ ) );

// Register the autoloader if one doesn't exist
if ( ! class_exists( 'Pronamic_Autoload' ) ) {
    include( 'pronamic-framework/Pronamic/Autoload.php' );
    Pronamic_Autoload::register();
}

// Add the directory
Pronamic_Autoload::add_directory( PFE_PLUGIN_FOLDER_ROOT . '/pronamic-framework' );
Pronamic_Autoload::add_directory( PFE_PLUGIN_FOLDER_ROOT . '/lib' );

$plugin = new Pronamic_FrameworkExample_Plugin();
