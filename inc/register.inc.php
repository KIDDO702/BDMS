<?php 
    require_once 'dbh.inc.php';

    session_start();
    
    if (isset($_SESSION['client'])) {
        header ('location: ../dashboard.php');
    }

    if (isset($_REQUEST['submit'])) {

        // echo '<pre>';
        //   print_r($_REQUEST);
        // echo '</pre>';
        $name = filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING);
        $username = filter_var($_REQUEST['uid'], FILTER_SANITIZE_STRING);
        $email = filter_var($_REQUEST['email'], FILTER_SANITIZE_EMAIL);
        $pwd = strip_tags($_REQUEST['pwd']);
        $pwdRpt = strip_tags($_REQUEST['pwdRpt']);

        if (empty($name)) {
            $errorMsg[0][] = 'name required';
        }
    }