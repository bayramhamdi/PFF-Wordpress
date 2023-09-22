<?php

class DfLoader extends MvcPluginLoader {

    var $db_version = '1.0';
    var $tables = array();

    function activate() {

        // This call needs to be made to activate this app within WP MVC

        $this->activate_app(__FILE__);

        // Perform any databases modifications related to plugin activation here, if necessary

        require_once ABSPATH.'wp-admin/includes/upgrade.php';

        add_option('df_db_version', $this->db_version);

        // Use dbDelta() to create the tables for the app here
        $sql = ' CREATE TABLE '.$wpdb->prefix.'etudiants (
            id int(11) NOT NULL auto_increment,
            nom varchar(255) NOT NULL,
            prenom varchar(255) NOT NULL,
            adresse varchar(255) default NULL,
            tel varchar(100) default NULL,
            departement_id int(11) default 1,
            PRIMARY KEY  (id)
        );
        CREATE TABLE '.$wpdb->prefix.'departements (
            id int(11) NOT NULL auto_increment,
            name varchar(255) NOT NULL,
            active tinyint(4),
            PRIMARY KEY  (id)
        );            
        ';
        dbDelta($sql);

    }

    function deactivate() {

        // This call needs to be made to deactivate this app within WP MVC

        $this->deactivate_app(__FILE__);

        // Perform any databases modifications related to plugin deactivation here, if necessary

    }

}
