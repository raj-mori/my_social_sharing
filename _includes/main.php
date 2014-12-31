<?php
define("_PATH", str_replace("_includes\main.php", "", __FILE__));
include _PATH . '_includes/config.php';

$db = array();
$db['pdo'] = new PDO($dsn, DB_USER, DB_PASSWORD);

session_start();

function IsActiveUser() {
    if (isset($_SESSION['user']) && isset($_SESSION['user']['id'])) {
        return true;
    } else {
        return false;
    }
}

function BuildAjaxError($type = 'fatal', $text = '', $input = null) {
    return array('error' => array('type' => $type, 'text' => $text, 'input' => $input));
}

function BuildAjaxRedirect($url) {
    return array('error' => false, 'redirect' => $url);
}

function EchoUserName() {
    if (isset($_SESSION['user']['name'])) {
        echo $_SESSION['user']['name'];
    } else {
        echo 'guest';
    }
}

?>