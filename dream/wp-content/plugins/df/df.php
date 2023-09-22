<?php
/*
Plugin Name: Df
Plugin URI:
Description:Inscription
Author:BAYRAM HAMDI & YASSINE AYADI
Version:1.1
Author URI:
*/

register_activation_hook(__FILE__, 'df_activate');
register_deactivation_hook(__FILE__, 'df_deactivate');

function df_activate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/df_loader.php';
    $loader = new DfLoader();
    $loader->activate();
    $wp_rewrite->flush_rules( true );
}

function df_deactivate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/df_loader.php';
    $loader = new DfLoader();
    $loader->deactivate();
    $wp_rewrite->flush_rules( true );
}
