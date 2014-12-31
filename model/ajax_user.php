<?php
    require '../_includes/main.php';
    require 'user.class.php';
    if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
        header('Location: /');
    }

    // header('Content-Type: application/json');
    $methods = array('login');

    if(!isset($_POST['method']) || !in_array($_POST['method'], $methods)) {
        $r = array('error' => array('type' => 'fatal', 'text' => 'Not allowed!'));
    } else {
        $r = call_user_func($_POST['method'], $db, $_POST);
    }

    echo json_encode($r);
    die();

    function login($db, $data) {
        // $r = BuildAjaxError('display', 'Not Found!', 'username');

        if (!isset($data['username']) || $data['username'] == '') {
            return BuildAjaxError('display', 'Required!', 'username');
        }
        if (!isset($data['password']) || $data['password'] == '') {
            return BuildAjaxError('display', 'Required!', 'password');
        }

        $objUser = new User($db);
        $objUser->LoadByName($data['username']);

        if (!$objUser->Id) {
            return BuildAjaxError('display', 'User cannot be found!', 'username');
        }

        if ($objUser->Password != sha1($data['password'])) {
            return BuildAjaxError('display', 'Wrong password!', 'password');
        }

        $objUser->Login();
        return BuildAjaxRedirect('/');
    }
?>
