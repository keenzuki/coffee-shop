<?php

session_start();
include ("connect.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <section id="register">

        <div class="upload-profile-image d-flex justify-content-center pb-5">
            <div class="text-center ">

                <input type="file" class="form-control-file" name="profileupload" id="upload-profile" accept="png/*, jpg/*">
                <img src="../images/image-avatar.png" class="img rounded-circle" alt="default photo" width="100px">
                <small class="form-text text-black-50">Choose Image</small>

            </div>
        </div>
        <div class="d-flex justify-content-center">
            <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" autofocus="autofocus">
                    </div>
                    <div class="col">
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
                    </div>

                </div>
                <div class="form-row my-4">
                    <div class="col">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-row my-4">
                    <div class="col">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password*" required>
                    </div>
                </div>
                <div class="form-row my-4">
                    <div class="col">
                        <input type="password" name="confirmpassword" class="form-control" id="confirm-password" placeholder="Confirm Password*" required>
                        <small id="confirm-error" class="text-danger"></small>
                    </div>
                </div>

                <div class="form-check form-check-inline">
                    <input type="checkbox" name="agreement" class="form-check-input" required="required">
                    <label for="agreement" class="form-check-label text-black-50">I agree to <a href="#">terms and conditions</a></label>
                </div>
                <div class="submit-btn text-center my-5">
                <input type="submit" value="Submit" name="submit">
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
            header('location: login.php');
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