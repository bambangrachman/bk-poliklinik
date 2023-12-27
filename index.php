<?php 
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        if ($_SESSION['role'] === 'admin') {
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/bk-poliklinik/views/pages/welcome.php/');
        } else if ($_SESSION['role'] === 'dokter') {
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/bk-poliklinik/views/pages/dokter/');
        }
    } else {
        include_once 'views/pages/welcome.php';
    };
?>