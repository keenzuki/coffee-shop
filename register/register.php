<?php

session_start();
include ("connect.php");




if(isset($_POST['submit'])){
    $firstname=($_POST['firstname']);
    $lastname= ($_POST['lastname']);
    $email=($_POST['email']);
    $password=($_POST['password']);
    $confirmpassword=($_POST['confirmpassword']);

    

    $confirm="SELECT email FROM registration WHERE email='$email'";
    $run_user=mysqli_query($conn, $confirm);
    $row_count=mysqli_num_rows($run_user);
    if ($row_count!=1) {
        if($password==$confirmpassword){
            $write="INSERT INTO registration(firstname, lastname, email, password)
            VALUES ('$firstname', '$lastname', '$email', '$password')";
            $check=mysqli_query($conn, $write);
            if($check){
            echo "<script>alert('Registered')</script>";
            header('location: login.html');
            }
            else {
                echo "<script>alert('There was an error please try again later')</script>";   
            }
        }
        else{
            echo "<script>alert('Password do not match confirm password')</script>";

        }
    }
    else{
        echo "<script>alert('User exists')</script>";

    }
}


?>