<?php
	require_once "configs/db.php"; 
    require_once "models/user.php";
    require_once "utils/common.php";
    require_once "utils/page_var.php";

    if (isset($_POST["submit"])) {
        if (are_set($_POST, array('name', 'username', 'email', 'password-1', 'address', 'phone'))) {
            if ($_POST['password-1'] == $_POST['password-2']) {
                $_POST['password'] = $_POST['password-1'];
                $user = User::new($_POST);
                try {
                    $user->commit();
                    header('Location: '.'http://'.$_SERVER['SERVER_NAME'].'/tugasbesar1_2018/login.php');
                    die();
                } catch (Exception $e) {
                    echo $e;
                }
            } else {
                setvar('failure', 'passwords do not match');
            }
        } else {
            setvar('failure', 'lack of some fields');
        }
    }

    include "views/register.php";
?>