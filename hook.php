<?php

if (!defined('GLPI_ROOT')) {
    die("Oh no");
}

function plugin_qphone_menu() {
    global $MENU;
    $MENU['config']['plugin_qphone'] = [
        'title' => 'Q-Phone Configurações',
        'link' => '/plugins/qphone/front/config.form.php',
        'right' => 'config',
    ];
}
