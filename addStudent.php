<?php
require_once('connection.php');

if(isset($_POST['addStudent']))
{
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];

    $addData= mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,email,gender,course)
    VALUES('$fullname','$phonenumber','$email','$gender','$course')");
}
if(isset($addData)){
    $msg="Data added successfully";
    
}
else{
    $msg="Error occured";
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
            <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-dark text-center text-white">
                    <h4 class="card-title">Add Enrolled Student</h4>
                        <span><?php echo $msg?></span>
                </div>
                <div class="card-body">
                    <form action="addStudent.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" name="fullname" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="phonenumber" class="form-label">Phone Number</label>
                                <input type="tell" name="phonenumber" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="gender" class="form-label">What is your gender?</label>
                                <select name="gender" class="form-control">
                                    <option selected>--select your gender--</option>
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="course" class="form-label">What is your preffered course?</label>
                                <select name="course"class="form-control">
                                    <option selected>--select your course--</option>
                                    <option value="Web Design">Web Design</option>
                                    <option value="Cyber Security">Cyber Security</option>
                                    <option value="Data Analysis">Data Analysis</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <button type="submit" name="addStudent" class="btn btn-primary btn-sm">Add Student</button>
                            </div>
                        </div>
                    </form>
                    <a href="students.php">
                        <i class="fa fa-arrow-left btn btn-info btn-sm">back</i> 
                    </a>
                    
                </div>
            </div>
            </div>
            
        </div>
    </body>
</html>