<?php

session_start();
include ("connect.php");




if(isset($_POST['submit'])){
    $firstname=($_POST['firstname']);
    $lastname= ($_POST['lastname']);
    $phone=($_POST['phone']);
    $email=($_POST['email']);
    $password=md5($_POST['password']);
    $confirmpassword=md5($_POST['confirmpassword']);

    

    $confirm="SELECT email FROM registration WHERE email='$email'";
    $run_user=mysqli_query($conn, $confirm);
    $row_count=mysqli_num_rows($run_user);
    if ($row_count!=1) {
        if($password==$confirmpassword){
            $write="INSERT INTO registration(firstname, lastname, phone, email, password)
            VALUES ('$firstname', '$lastname', '$phone', '$email', '$password')";
            $check=mysqli_query($conn, $write);
            if($check){
            echo "<script>alert('Registered')</script>";
            header('location: login.html');
            }
            else {
                echo "<script>alert('There was an error please try again later')</script>";
                echo "<script>window.open('register.html','_self')</script>";
 
            }
        }
        else{
            echo "<script>alert('Password do not match confirm password')</script>";
            echo "<script>window.open('register.html','_self')</script>";

        }
    }
    else{
        echo "<script>alert('User exists')</script>";
        echo "<script>window.open('register.html','_self')</script>";

    }

}


?>