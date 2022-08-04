<?php
require_once('connection.php');
$sql= mysqli_query($conn, "SELECT *FROM aboutus");


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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Subscibers</h4>
                    </div>
                    <div class="card-body">
                    <a href="addSubscribers.php">
                                <i class="fa fa-plus btn btn-dark"> Subscriber</i>
                            </a>
                        <table class="table table-hover table-bordered table-stripped table-responsiove{-sm|-md|-lg|-x1}" style="font-size:12px">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Created_at</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($fetchSubsciber= mysqli_fetch_array($sql) ) { ?>
                                    <tr>
                                        <td><?php echo $fetchSubsciber['id']?></td>
                                        <td><?php echo $fetchSubsciber['email']?></td>
                                        <td><?php echo $fetchSubsciber['created_at']?></td>
                                        <td>
                                            <a href="edit-enrollment.php?id=<?php echo $fetchSubsciber['no'] ?>" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            
                                            <a href="view-enrollment.php?id=<?php echo $fetchSubsciber['no'] ?>" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            
                                            <a href="delete-enrollment.php?id=<?php echo $fetchSubsciber['no'] ?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
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