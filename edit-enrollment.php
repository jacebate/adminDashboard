<?php
require_once('connection.php');

$queryStudent= mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']." '");
while($fetchStudent= mysqli_fetch_array($queryStudent))
{
    $fullname=$fetchStudent['fullname'];
    $phonenumber=$fetchStudent['phonenumber'];
    $email=$fetchStudent['email'];
    $gender=$fetchStudent['gender'];
    $course=$fetchStudent['course'];
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
                            <h4>Edit student</h4>
                        </div>
                        <div class="card-body">
                        <form action="students.php" method="POST">
                            <div class="row">
                                <div class="mb-3 col-lg-6">
                                    <label for="fullname" class="form-label">Full Name</label>
                                    <input type="text"value=" <?php echo $fullname?>" name="fullname" class="form-control" placeholder="Enter you full name">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="phonenumber" class="form-label">Phone Number</label>
                                    <input type="tell"value=" <?php echo $phonenumber?>" name="phonenumber" class="form-control" placeholder="+2547...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-lg-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email"value=" <?php echo $email?>" name="email" class="form-control" placeholder="Please enter your email">
                                </div>
                                <div class="mb-3 col-lg-6">
                                    <label for="gender" class="form-label">What's your gender</label>
                                    <select name="gender" class="form-select" aria-label="What's your gender" >
                                        <option selected><?php echo $gender?></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>In order to complete your registration to the bootcamp, you are required to select one course you will be<br>
                                    undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="course" class="form-label">What's your preferred course?</label>
                                    <select name="course" class="form-select" aria-label="courses">
                                        <option selected> <?php echo $course?></option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="Cyber Security">Cyber Security</option>
                                        <option value="Data Analysis">Data Analysis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>
                                        You agree by providing your information you understand all our
                                        data privacy and protection policy<br> outlined in our Terms & conditon
                                        and the Privacy Policy statements
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-check">
                                    <label for="invalidCheck" class="form-check-label">
                                        Agree to terms and conditions
                                    </label>
                                    <input type="checkbox" class="form-check-input" id="invalidCheck" required>
                                    <div class="invalid-feedback">
                                        You must agree before submitting
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <button type="submit" name="submit" class="btn btn-primary">submit application</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("includes/scripts.php")?>
</body>
</html>