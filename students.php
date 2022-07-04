<?php
require_once('connection.php');
$sql= mysqli_query($conn, "SELECT *FROM enrollment");


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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-header bg-dark text-center text-white">
                            <span>Students</span>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-stripped table-responsiove{-sm|-md|-lg|-x1}">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Full name</th>
                                    <th scope="col">Phone number</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Enrolled on</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql) ) { ?>
                                    <tr>
                                        <td><?php echo $fetchEnrollmentRecord['no']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['fullname']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['phonenumber']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['email']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['gender']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['course']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['created_at']?></td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            
                                            <a href="#" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            
                                            <a href="#" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>