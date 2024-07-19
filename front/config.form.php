<?php

if (!defined('GLPI_ROOT')) {
    die("Oh no");
}

include (GLPI_ROOT . "/inc/includes.php");

Session::checkRight("config", READ);

$plugin = new PluginQphoneConfig();
$plugin->displayForm();

class PluginQphoneConfig {
    
    function displayForm() {
        global $DB;
        
        $config = new PluginQphoneConfig();
        $configData = $config->find('1');
        $url = $configData['url'];
        $token = $configData['token'];

        echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">';
        echo '<input type="text" name="url" value="'.$url.'" placeholder="URL" required />';
        echo '<input type="text" name="token" value="'.$token.'" placeholder="Token" required />';
        echo '<input type="submit" value="Salvar Configurações" />';
        echo '</form>';

        if ($_POST) {
            $url = $_POST['url'];
            $token = $_POST['token'];
            $config->setField('url', $url);
            $config->setField('token', $token);
            $config->save();
        }
    }
}
