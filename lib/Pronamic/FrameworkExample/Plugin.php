<?php

class Pronamic_FrameworkExample_Plugin {
    public function __construct() {
        add_action( 'admin_menu', array( $this, 'setting_page' ) );

        add_action( 'admin_init', array( $this, 'register_settings' ) );
    }

    public function setting_page() {
        add_submenu_page( 
            'options-general.php', // parent item
            'Pronamic Framework Example Settings',  // page title
            'Pronamic Framework', // menu title
            'manage_options', // capability
            'pronamic-framework-settings-page',  // page slug (IMPORTANT)
            array( $this, 'show_settings_page' ) // method to show the page
        );
    }

    public function show_settings_page() {
        $view = new Pronamic_View( PFE_PLUGIN_FOLDER_ROOT . '/views' );
        $view
            ->set_view( 'show_settings_page' )
            ->render();
    }

    public function register_settings() {
        
        // Renderer for the fields
        $renderer = new Pronamic_Settings_Renderer();

        // Settings Section for Common Settings
        $common_settings = new Pronamic_Settings_Section( 'pfe_settings_common' );
        $common_settings
            ->set_title( 'Pronamic Settings Common' )
            ->set_page( 'pronamic-framework-settings-page' );

        // Fields
        $extra_title = new Pronamic_Settings_Field( 'pfe_extra_title' );
        $extra_title
            ->set_title( 'Extra Title' )
            ->set_type( 'text' );

        // Register
        $common_settings
            ->set_field_renderer( $renderer )
            ->add_field( $extra_title )
            ->register( 'pfe_settings' );
    }

}