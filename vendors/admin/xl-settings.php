<?php

/**
 * WordPress settings API demo class
 *
 * @author Tareq Hasan
 */
if ( !class_exists('xl_WeDevs_Settings_API_option' ) ):
    class xl_WeDevs_Settings_API_option {

        private $settings_api;

        function __construct() {
            $this->settings_api = new xl_WeDevs_Settings_API;

            add_action( 'admin_init', array($this, 'admin_init') );
            add_action( 'admin_menu', array($this, 'admin_menu') );
        }

        function admin_init() {

            //set the settings
            $this->settings_api->set_sections( $this->get_settings_sections() );
            $this->settings_api->set_fields( $this->get_settings_fields() );

            //initialize settings
            $this->settings_api->admin_init();
        }

        function admin_menu() {
            add_options_page( 'XL PopUp', 'XL PopUp', 'delete_posts', 'xl_popup', array($this,
                'plugin_page') );
        }

        function get_settings_sections() {
            $sections = array(
                array(
                    'id' => 'xl_basics',
                    'title' => __( 'Basic Settings', 'wedevs' )
                )
            );
            return $sections;
        }

        /**
         * Returns all the settings fields
         *
         * @return array settings fields
         */
        function get_settings_fields() {
            $settings_fields = array(
                'xl_basics' => array(
                    array(
                        'name'  => 'xl_popup_form_code',
                        'label' => __( 'Popup form code', 'wedevs' ),
                        'desc'  => __( 'Paste popup form code here. You can use HTML, JS or WordPress shortcode.', 'wedevs' ),
                        'type'  => 'textarea'
                    ),

                )
            );

            return $settings_fields;
        }

        function plugin_page() {
            echo '<div class="wrap">';

            $this->settings_api->show_navigation();
            $this->settings_api->show_forms();

            echo '</div>';
        }

        /**
         * Get all the pages
         *
         * @return array page names with key value pairs
         */
        function get_pages() {
            $pages = get_pages();
            $pages_options = array();
            if ( $pages ) {
                foreach ($pages as $page) {
                    $pages_options[$page->ID] = $page->post_title;
                }
            }

            return $pages_options;
        }

    }
endif;