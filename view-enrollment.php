<?php
require_once('connection.php');

$sqlFetchEnrolledStudent= mysqli_query($conn, 
"SELECT * FROM enrollment WHERE no='".$_GET['id']." '");
while($fetchStudent= mysqli_fetch_array($sqlFetchEnrolledStudent))
{
    $id = $fetchStudent['no'];
    $fullname=$fetchStudent['fullname'];
    $phonenumber=$fetchStudent['phonenumber'];
    $email=$fetchStudent['email'];
    $gender=$fetchStudent['gender'];
    $course=$fetchStudent['course'];
    $created_at=$fetchStudent['created_at'];
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
            <div class="main-content pt-5">
                <div class="container-fluid">
                    <div class="row">
                       <div class="col-lg-6">
                            <div class="card">
                                    <div class="card-header text-white text-center bg-dark">
                                        <h4 class="card-title">Personal information</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item">Full Name: <span class="float-end badge bg-primary"><?php echo $fullname?></span></li>
                                            <li class="list-group-item">Email: <span class="float-end badge bg-warning"><?php echo $email?></span></li>
                                            <li class="list-group-item">Phone Number: <span class="float-end badge bg-success"><?php echo $phonenumber?></span></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer"></div>
                                </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                    <div class="card-header text-white text-center bg-dark">
                                        <h4 class="card-title">Personal information</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                        <li class="list-group-item">Gender: <span class="float-end badge bg-secondary"><?php echo $gender?></span></li>
                                        <li class="list-group-item">Course: <span class="float-end badge bg-info"><?php echo $course?></span></li>
                                        <li class="list-group-item">Enrolled on: <span class="float-end badge bg-danger"><?php echo $created_at?></span></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer">
                                        <a href="students.php">
                                            <i class="fa fa-arrow-left btn btn-info btn-sm">back</i> 
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once("includes/scripts.php")?>
    </body>
</html>