<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        session_destroy();
        unset($_SESSION['user_id']);
        unset($_SESSION['type']);
        unset($_SESSION['User_name']);
        unset($_SESSION['User_email']);
        header("Location: ../index.php");
    }
    else{
        header("Location: ../index.php");
    }

?>