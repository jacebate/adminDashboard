<?php
    require_once('connection.php');

    if(isset($_POST['signUp']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpass=$_POST['cpassword'];

        $passHash=md5($password);

        // username existence
        $sqlUsername= mysqli_query($conn,"SELECT * FROM account WHERE username = '$username'");
        $checkUsername=mysqli_num_rows($sqlUsername);
        // email existence
        $sqlEmail= mysqli_query($conn,"SELECT * FROM account WHERE email = '$email'");
        $checkEmail=mysqli_num_rows($sqlEmail);


        if($checkUsername !=0){
            $msg= "Username already exist";
        }
        elseif($checkEmail !=0){
            $msg="Email already in use. Please try a different email address";
        }
        elseif($password != $cpass){
            $msg ="Passwords do not match";
        }
        else{
            $sql = mysqli_query($conn, "INSERT INTO account(username,email,password)
            VALUES('$username','$email','$passHash')");

            if($sql)
            {
                $msg= "Data submitted successfully";
            }
            else{
                $msg= "Error";
            }
        }
    }

?>