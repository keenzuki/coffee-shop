<?php

    session_start();
    $conn = mysqli_connect("localhost", "root", "", "mine");


        if (isset($_POST['submit'])){
            $reg_no=($_POST['reg_no']);
            $search="SELECT * FROM students WHERE reg_no='$reg_no'";
            $check=mysqli_query($conn, $search);
            $count=mysqli_fetch_array($check);
            if ($count){
                $reg_no=$count['reg_no'];
                $sname=$count['sname'];
                $email=$count['email'];
                $phone=$count['phone'];

                ?>
            <table>
                <tr>
                    <th>Reg No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
                <tr>
                    <td> <?php echo $reg_no ?> </td>
                    <td> <?php echo $sname ?> </td>
                    <td> <?php echo $email ?> </td>
                    <td> <?php echo $phone ?> </td>
                </tr>
            </table>

                <?php
            }
            else{
                 echo"<script>alert('Student does not exist. Please confirm the registration number and try again')</script>";
                 echo "<script>window.open('practice.html','_self')</script>";
            }
        }
        session_destroy();

?>