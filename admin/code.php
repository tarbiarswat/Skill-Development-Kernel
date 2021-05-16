<?php
include('session.php'); 

$connection = mysqli_connect("localhost","root","","sdk_db");

if(isset($_POST['registerbtn']))
{
    $internship_title = $_POST['internship_title'];
    $internship_details = $_POST['internship_details'];
    $internship_offered_by = $_POST['internship_offered_by'];
    $internship_deadline = $_POST['internship_deadline'];

        $query = "INSERT INTO internships (internship_title, internship_details, internship_offered_by, internship_deadline ) VALUES ('$internship_title', '$internship_details' , '$internship_offered_by', '$internship_deadline')";
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