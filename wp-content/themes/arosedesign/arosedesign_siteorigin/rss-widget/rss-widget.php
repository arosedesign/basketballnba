<?php

/*
Widget Name: RSS template widget
Description: Questo widget restituisce i post rss di un sito WP con featured image
Author: Arosedesign

*/

class RSS_Widget extends SiteOrigin_Widget {

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        //Call the parent constructor with the required arguments.
        parent::__construct(
        // The unique id for your widget.
            'rss-widget',

            // The name of the widget for display purposes.
            __('RSS Widget', 'rss-widget-text-domain'),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('Questo widget restituisce i post rss di un sito WP con featured image.', 'rss-widget-text-domain')
            ),

            //The $control_options array, which is passed through to WP_Widget
            array(
            ),

            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'text' => array(
                    'type' => 'text',
                    'label' => __('Inserisci il link al feed', 'siteorigin-widgets'),
                    'default' => 'http://iltuofeed.it'
                ),
            ),

            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }

    function get_template_name($instance) {
        return 'rss-template';
    }

    function get_template_dir($instance) {
        return 'rss-templates';
    }

}

siteorigin_widget_register('rss-widget', __FILE__, 'RSS_Widget');
