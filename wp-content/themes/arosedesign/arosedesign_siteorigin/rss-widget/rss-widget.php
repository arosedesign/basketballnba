<?php

/*
Widget Name: RSS template widget
Description: Questo widget restituisce i post rss di un sito WP con featured image
Author: Arosedesign

*/

class RSS_Widget extends SiteOrigin_Widget {

    function __construct() {

        parent::__construct(
            'rss-widget',

            __('RSS Widget', 'rss-widget-text-domain'),

            array(
                'description' => __('Questo widget restituisce i post rss di un sito WP con featured image.', 'rss-widget-text-domain')
            ),

            array(
            ),

            array(
                'rss_url' => array(
                    'type' => 'link',
                    'label' => __('Inserisci il link al feed', 'siteorigin-widgets'),
                    'default' => 'http://iltuofeed.it'
                ),
                'numero_feed' => array(
                    'type' => 'number',
                    'label' => __('Numero di feed da visualizzare', 'siteorigin-widgets'),
                    'default' => '1'
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
