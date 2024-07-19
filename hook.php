<?php

// if (!defined('GLPI_ROOT')) {
//     die("Oh no");
// }


// function plugin_qphone_menu() {
//     global $MENU;
//     $MENU['config']['plugin_qphone'] = [
//         'title' => 'Q-Phone Configurações',
//         'link' => '/plugins/qphone/front/config.form.php',
//         'right' => 'config',
//     ];
// }


function plugin_qphone_install() {
    global $DB;
 
    $migration = new Migration(100);
 
    if (!$DB->tableExists('glpi_plugin_qphone')) {        
       $query = "CREATE TABLE `glpi_plugin_qphone` (
                   `id` INT(11) NOT NULL AUTO_INCREMENT,
                   `url` VARCHAR(255) NOT NULL,
                   `token` VARCHAR(255) NOT NULL,
                   PRIMARY KEY  (`id`)
                )";
       $DB->queryOrDie($query, $DB->error());
    }
 
    $migration->executeMigration();
 
    return true;
}


function plugin_qphone_uninstall() {
    global $DB;
 
    if ($DB->tableExists('glpi_plugin_qphone')) {
        $query = "DROP TABLE `glpi_plugin_qphone`";
        $DB->queryOrDie($query, $DB->error());
    }
 
    return true;
}


?>