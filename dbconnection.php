<?php
session_start();
$con = mysqli_connect("localhost", "root","","sdk_db");

if(isset($_POST['']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    $query ="INSERT INTO users (fname,lname,email_id,password,user_type) VALUES ('$fname','$lname','$email','$password','$user_type')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
    $_SESSION['status']= "Registration Completed";
    header("Location:members.php");
    }
    else
    {
        $_SESSION['status']= "Invalid Registration";
        header("Location:members.php"); 
    }

}