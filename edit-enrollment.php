<?php
require_once('connection.php');

$queryStudent= mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']." '");
while($fetchStudent= mysqli_fetch_array($queryStudent))
{
    $fullname=$fetchStudent['fullname'];
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Edit student <?php echo $fullname?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("includes/scripts.php")?>
</body>
</html>