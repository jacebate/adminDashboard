<?php
require_once('connection.php');

$sqlFetchContactRecord= mysqli_query($conn, 
"SELECT * FROM contactus WHERE no='".$_GET['id']." '");
while($fetchRecord= mysqli_fetch_array($sqlFetchContactRecord))
{
    $id = $fetchRecord['no'];
    $firstname=$fetchRecord['firstname'];
    $lastname=$fetchRecord['lastname'];
    $email=$fetchRecord['email'];
    $phonenumber=$fetchRecord['phonenumber'];
    $message=$fetchRecord['message'];
    $created_at=$fetchRecord['created_at'];
}

?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once('includes/links.php')?>    </head>
    <body>
        <?php require_once('includes/header.php')?>
        <?php require_once('includes/sidebar.php')?>

        <div class="main-content">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Contact Records</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                        <li class="list-group-item">Created_at:<span class="float-end"><?php echo $created_at?></span></li>
                            <li class="list-group-item">First Name:<span class="float-end"><?php echo $firstname?></span></li>
                            <li class="list-group-item">Last Name:<span class="float-end"><?php echo $lastname?></span></li>
                            <li class="list-group-item">Email Address:<span class="float-end"><?php echo $email?></span></li>
                            <li class="list-group-item">Phone Number:<span class="float-end"><?php echo $phonenumber?></span></li>
                            <li class="list-group-item">Message:<span class="float-end"><?php echo $message?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 