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
            <div class="container">
                <div class="card bg-light">
                    <div class="card-header text-center bg-dark text-white">
                        <h4 class="card-title">Contact records</h4>
                    </div>
                    <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped table-responsiove{-sm|-md|-lg|-x1}" style="font-size:12px">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($fetchContactRecords= mysqli_fetch_array($sqlContactInfo) ) { ?>
                                <tr>
                                    <td><?php echo $fetchContactRecords['firstname']?></td>
                                    <td><?php echo $fetchContactRecords['lastname']?></td>
                                    <td><?php echo $fetchContactRecords['email']?></td>
                                    <td><?php echo $fetchContactRecords['phonenumber']?></td>
                                    <td><?php echo $fetchContactRecords['message']?></td>
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