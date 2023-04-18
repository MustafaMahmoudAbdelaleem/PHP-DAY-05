<?php
    //close current session //
    session_start();
    $_SESSION = array();
    session_destroy();
    
    setcookie('PHPSESSID','',time()-10);
    header('location: Login.php');
?>
