<?php

if (!defined('GLPI_ROOT')) {
    die("Oh no");
}

function plugin_qphone_config() {
    global $CFG_GLPI;
    
    $config = new PluginQphoneConfig();
    $config->addField([
        'name' => 'url',
        'label' => 'URL',
        'type' => 'text',
        'value' => $CFG_GLPI['url'],
        'required' => true
    ]);
    $config->addField([
        'name' => 'token',
        'label' => 'Token',
        'type' => 'text',
        'value' => $CFG_GLPI['token'],
        'required' => true
    ]);
}

class PluginQphoneConfig extends CommonDBTM {

    static $rightname = 'plugin_qphone';

    function getTable() {
        return "glpi_plugin_qphone_config";
    }

    function getForm($ID, $options = []) {
        $form = parent::getForm($ID, $options);
        $form->addTextField('url', 'URL', ['required' => true]);
        $form->addTextField('token', 'Token', ['required' => true]);
        return $form;
    }
}
