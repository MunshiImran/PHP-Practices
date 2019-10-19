<?php
    session_start();
    session_destroy();

    $_SERVER = array();
    setcookie('success',$keep, time() - 60*60);

    header('location: index.php');

?>