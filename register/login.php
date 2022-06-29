<?php

session_start();
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <section id="register">
        <div class="d-flex justify-content-center">
            <form action="login.php" method="post" enctype="multipart/form-data" id="reg-form">
                <div class="form-row my-4">
                    <div class="col">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-row my-4">
                    <div class="col">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                </div>

                <div class="submit-btn text-center my-5">
                    <input type="submit" value="submit" name="submit">
                </div>


            </form>

        </div>
    </section>





    <footer>
        <div class="text-center">
            <p>All copyright reserved</p>
    </footer>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>

</html>
<?php 
	//Login Script Start
  if (isset($_POST['submit'])){
    $email= ($_POST['email']);
    $password= ($_POST['password']);
    $select_user="SELECT * FROM registration WHERE email='$email' AND password='$password'";
    $run_user=mysqli_query($conn, $select_user);
    $row_count=mysqli_num_rows($run_user);
    if ($row_count==1) {
      $_SESSION['user_email']=$user_email; //create session variable
      header('location: ../index.html');
      echo "loged in successfully";
    }
    else{
      echo "<script>alert('Invalid Email or Password')</script>";
    }
  }  //Login Script End
?>