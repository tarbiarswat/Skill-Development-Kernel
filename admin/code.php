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
        header('location: index.php');
    }



}
    
if(isset($_POST['addintrnshpbtn']))
{
    $internship_title = $_POST['internship_title'];
    $internship_img = rand(1000,10000)."-".$_FILES["internship_img"]["name"];
    $tname = $_FILES["internship_img"]["tmp_name"];
    
    $internship_details = $_POST['internship_details'];
    $internship_offered_by = $_POST['internship_offered_by'];
    $internship_deadline = $_POST['internship_deadline'];

    

    $uploads_dir = "images";
    move_uploaded_file($tname, $uploads_dir.'/'.$internship_img);

        $query = "INSERT INTO internships (internship_title, internship_img, internship_details, internship_offered_by, internship_deadline ) VALUES ('$internship_title' , '$internship_img', '$internship_details' , '$internship_offered_by', '$internship_deadline')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['success'] = 'Membership Added';
            header('location: internshiplist.php');
        }
        else
        {
            $_SESSION['status'] = 'Membership Not Added';
            header('location: internshiplist.php');
        }
    

}

?>