<?php
include('session.php'); 

$connection = mysqli_connect("localhost","root","","sdk_db");

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email_id'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM users WHERE email_id = '$email_login' AND password = '$password_login'";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['email_id'] = $email_login ;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = 'Invalid username or password';
        header('Location: members.php');
    }
 

}



if(isset($_POST['registerbtn']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    
    
    $query = "INSERT INTO users (fname, lname, email_id, password) VALUES ('$fname', '$lname', '$email_id' , '$password')";
    $query_run = mysqli_query($connection, $query);

    if(!$query_run)
    {
        header('location: members.php');
    }
    else
    {
        header('location: admin/index.php');
    }



}
    


?>