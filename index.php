<?php

require_once('connection.php');
// counting total no of students
$queryEnrolledStudents = mysqli_query($conn, "SELECT * FROM enrollment");
$countAllStudents = mysqli_num_rows($queryEnrolledStudents);
// count by gender
$queryEnrolledFemale = mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='female'");
$countAllFemales= mysqli_num_rows($queryEnrolledFemale);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php require_once('includes/links.php')?> 
</head>
<body>
    <!-- header start -->
    <?php require_once('includes/header.php')?>
    <!-- header end -->
    
    <!-- sidebar -->
    <?php require_once('includes/sidebar.php')?>
    <!-- sidebar -->

    <div class="main-content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Top Content</span>
                    </div>
                    <div class="card-body">
                        
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Students</span>
                    </div>
                    <div class="card-body">
                        <span><i class="fa fa-group fa-3x"></i></span>
                        <span class="float-end badge bg-danger rounded-pill"><?php echo $countAllStudents?></span>
                    </div>
                    <div class="card-footer"></div>
                </div>
                <div class="col-lg-3">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Available Courses</span>
                    </div>
                    <div class="card-body"></div>
                    <span><i class="fa fa-group fa-3x"></i></span>
                        <span class="float-end badge bg-primary rounded-pill"><?php echo $countAllFemales?></span>
                    <div class="card-footer"></div>
                </div>
                <div class="col-lg-3">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Campuses</span>
                    </div>
                    <div class="card-body"></div>
                    <span><i class="fa fa-group fa-3x"></i></span>
                        <span class="float-end">00</span>
                    <div class="card-footer"></div>
                </div>
                <div class="col-lg-3">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Users</span>
                    </div>
                    <div class="card-body"></div>
                    <span><i class="fa fa-group fa-3x"></i></span>
                        <span class="float-end">00</span>
                    <div class="card-footer"></div>
                 </div>
            
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Student Analysis</span>
                    </div>
                </div>
            </div>  
            
        

    </div>
    

<?php require_once("includes/scripts.php")?>

</body>
</html>