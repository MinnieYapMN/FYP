<?php

    $_SESSION = array();
    session_destroy();
    setcookie ('PHPSESSID', '', time()-3600, '/', '', 0, 0);
    $url = 'homepage.php'; 
    header("Location: $url");
    exit();

