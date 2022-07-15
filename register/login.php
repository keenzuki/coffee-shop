<?php

session_start();
include_once 'connect.php';

	//Login Script Start
  if (isset($_POST['submit'])){
    $email= ($_POST['email']);
    $password= md5($_POST['password']);
    $select_user="SELECT * FROM registration WHERE email='$email' AND password='$password'";
    $run_user=mysqli_query($conn, $select_user);
    $row_count=mysqli_num_rows($run_user);
    if ($row_count==1) {
      $_SESSION['email']=$email; //create session variable
      
      echo "<script>window.open('home.html','_self')</script>";
    }
    else{
      echo "<script>alert('Invalid Email or Password')</script>";
      echo "<script>window.open('login.html','_self')</script>";
      // header ('location: login.html');
    }
  }  //Login Script End
  session_destroy();
?>