<?php
 require_once('connection.php');
 
 if(isset($_POST['subcribe']))
 {
    $email=$_POST['email'];

    $addData= mysqli_query($conn, "INSERT INTO aboutus(email) VALUES('$email')");
 }
 if(isset($addData)){
    $msg="Data added successfully";
    
}
else{
    $msg="Error occured";
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
       <?php require_once('includes/links.php')?>
    </head>
    <body>
        <?php require_once('includes/header.php')?>
        <?php require_once('includes/sidebar.php')?>

        <div class="main-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <h4 class="card-title">Add Subscribers</h4>
                        <?php echo $msg?>
                    </div>
                    <div class="card-body">
                        <form action="addSubscribers.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <button type="submit" class="btn btn-primary" name="subcribe">Add subsciber</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>   
   