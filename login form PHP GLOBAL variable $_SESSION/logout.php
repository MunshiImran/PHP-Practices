<?php

    session_start();
    session_destroy();
//    not mendatory 
    $_SESSION = array();
header('location: index.php');

?>