<?php

    $_SESSION = array();
    session_destroy();
    setcookie ('PHPSESSID', '', time()-3600, '/', '', 0, 0);
    $url = 'login.php'; 
    header("Location: $url");
    exit();

