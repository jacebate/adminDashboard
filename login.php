<?php
require_once('connection.php');

if(isset($_POST['login']))
{
  $username= $_POST['username'];
  $password=$_POST['password'];
  $newPass= md5($password);

  $sql= mysqli_query($conn,"SELECT * FROM account WHERE username= '$username' and password='$newPass'");
  $fetch= mysqli_fetch_array($sql);

  if($fetch > 0){

    $_SESSION['login'] =$username;

    header('location: index.php');
  }
  else{
    echo "error";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
<div class="container">
        <div class="card bg-danger text-white text-center">
            <div class="card-header">
                <span>Zalego Training| Admin Login</span>
            </div>
        </div>

        <div class="col-lg-6 offset-lg-3">
            <img src="zalego.jfif" width="100" height="100" alt="logo" class="mx-auto d-block rounded-circle">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" class="form-group" autocomplete="off">
                        <div class="justify-content-center align-items-center">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-group">Username:</label>
                                        <input type="text" name="username" class="form-control" placeholder="enter your username">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-group">Password:</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="enter your password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <input type="submit" name="login" class="btn btn-primary btn-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <p>Have an account <a class="text-decoration-none"href="register.php">sign up?</a></p>
                               
                            </div>    
                                
                               
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>