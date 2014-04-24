<?php
/*
Plugin Name: DPLA Search Widget (dcplumer)
Plugin URI: https://github.com/dcplumer/DPLA-Search-Widget-dcplumer
Description: Plugin for displaying a search form to search the Digital Public Library of America. Modified version of the plugin developed by Dean Farrell, https://github.com/lfarrell/DPLA-Search-Widget
Author: Danielle Cunniff Plumer
Version: 0.1
Author URI: https://github.com/dcplumer
*/

function dpla_search_widget_load() {
    wp_register_script('add-dpla-widget-dcplumer-js', 'http://www.dcplumer.com/dpla/dpla-search-widget-dcplumer.js', '', null,'');
    wp_enqueue_script('add-dpla-widget-dcplumer-js');
}

add_action( 'wp_enqueue_scripts', 'dpla_search_widget_dcplumer_load');