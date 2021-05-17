<?php
session_start();


if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['email_id']);
    header('Location: members.php');
}

?>