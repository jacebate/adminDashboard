<?php
require_once('connection.php');
$msg="";

$queryRecord= mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']." '");
while($fetchRecord= mysqli_fetch_array($queryRecord))
{
    $id = $fetchRecord['no'];
    $firstname=$fetchRecord['firstname'];
    $lastname=$fetchRecord['lastname'];
    $email=$fetchRecord['email'];
    $phonenumber=$fetchRecord['phonenumber'];
    $message=$fetchRecord['message'];
}

if(isset($_POST['update']))
{
    // fetch form data
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email= $_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $message=$_POST['message'];

    //perform sql query
    $updateRecords=mysqli_query($conn, 
    "UPDATE contactus set firstname='$firstname',lastname='$lastname',email='$email',phonenumber='$phonenumber',message='$message' 
    WHERE no='".$_GET['id']."'");

    if($updateRecords)
    {
        $msg="Records updated successfully";
    }
    else
    {
        $msg="Error occured";
    }
}


?>


<!DOCTYPE html>
<html>
    <head>
        <?php require_once('includes/links.php')?>
    </head>
    <body>
        <?php require_once('includes/header.php')?>
        <?php require_once('includes/sidebar.php')?>

        <div class="main-content">
            <div class="container">
                <div class="card">
                    <div class="card-header text-center bg-light text-danger">
                        <h4 class="card-title">
                            Edit Contact US Records
                        </h4>
                        <?php echo $msg?>
                    </div>
                    <div class="card-body">
                    <form action="edit-contactus.php?id=<?php echo $id?>" method="POST">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="firstname">First Name</label>
                                <input type="text" value=" <?php echo $firstname?>" class="form-control" name="firstname">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" value=" <?php echo $lastname?>" name="lastname" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="text" value=" <?php echo $email?>" name="email" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="phonenumber" class="form-label">Phone Number</label>
                                <input type="text" value=" <?php echo $phonenumber?>" name="phonenumber" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="message" class="form-label">Message</label>
                                <input type="text" value=" <?php echo $message?>" name="message" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <button type="update" name="update" class="btn btn-primary btn-sm">UpdateRecords</button>
                            </div>
                            
                        </div>
                    </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>