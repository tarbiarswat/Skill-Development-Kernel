<?php  
session_start();

if(!$_SESSION['email_id'])
    {
        header('Location: members.php');
    }


?>