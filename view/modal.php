<?php
if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
    header('Location: /');
}

$allowed = array('login');


if (isset($_GET['id']) && in_array($_GET['id'], $allowed)) {
    require 'modal/' . $_GET['id'] . '.php';
    die();
}

die ('Not allowed!');
?>