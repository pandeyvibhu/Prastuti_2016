<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if( !isset($_SESSION['logged_in']) ){
        echo $_SESSION['logged_in'];
        header('Location: update_login.php');
    }else{
        unset($_SESSION['logged_in']);
        header('Location: update_login.php');
    }

?>