<?php

define("QPHONE_VERSION", "1.0.0");

function plugin_init_qphone() {
   global $PLUGIN_HOOKS;

   $PLUGIN_HOOKS['csrf_compliant']['qphone'] = true;
   $PLUGIN_HOOKS['config_page']['qphone'] = 'front/config.php';
}

function plugin_version_qphone() {
   return [
      'name'           => 'Q-Phone',
      'version'        => QPHONE_VERSION,
      'author'         => 'QoS',
      'license'        => 'GLPv3',
      'homepage'       => 'https://qosit.cloud',
      'requirements'   => [
         'glpi'   => [
            'min' => '10.0'
         ]
      ]
   ];
}

function plugin_qphone_check_prerequisites() {
   return true;
}

function plugin_qphone_check_config() {
    return true;
}

function plugin_qphone_options() {
   return [
      Plugin::OPTION_AUTOINSTALL_DISABLED => true,
   ];
}

?>