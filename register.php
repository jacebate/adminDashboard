<?php
$msg='';
require_once('processRegister.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="icon" href="zalego.jfif">
    <title>registration</title>
</head>
<body>
    <div class="container">
        <div class="card bg-danger text-white text-center">
            <div class="card-header">
                <span>Zalego| Admin Register</span>
            </div>
        </div>

        <div class="col-lg-6 offset-lg-3">
            <img src="zalego.jfif" width="100" height="100" alt="logo" class="mx-auto d-block rounded-circle">
                <span><?php echo $msg ?></span>
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
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-group">Email:</label>
                                        <input type="email" name="email" class="form-control" placeholder="enter your email address">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-group">Password:</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="enter your password">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-group">Confirm Password:</label>
                                        <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="enter your password">
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <input type="submit" name="signUp" class="btn btn-primary btn-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <p>Already have an account <a class="text-decoration-none"href="login.php">sign in?</a></p>
                               
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>