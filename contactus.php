<?php
require_once('connection.php');
$sqlContactInfo= mysqli_query($conn, "SELECT *FROM contactus");
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
            <div class="container-fluid">
                <div class="card bg-light">
                    <div class="card-header text-center bg-dark text-white">
                        <h4 class="card-title">Contact records</h4>
                    </div>
                    <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped table-responsiove{-sm|-md|-lg|-x1}" style="font-size:12px">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($fetchContactRecords= mysqli_fetch_array($sqlContactInfo) ) { ?>
                                <tr>
                                    <td><?php echo $fetchContactRecords['no']?></td>
                                    <td><?php echo $fetchContactRecords['firstname']?></td>
                                    <td><?php echo $fetchContactRecords['lastname']?></td>
                                    <td><?php echo $fetchContactRecords['email']?></td>
                                    <td><?php echo $fetchContactRecords['phonenumber']?></td>
                                    <td><?php echo $fetchContactRecords['message']?></td>
                                    <td>
                                        <a href="edit-contactus.php?id=<?php echo $fetchContactRecords['no']?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="view-contactus.php?id=<?php echo $fetchContactRecords['no']?>" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="delete-contactus.php?id=<?php echo $fetchContactRecords['no']?>" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash "></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                    </table> 
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html> 