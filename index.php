
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
                <div class="col-sm-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Students</span>
                    </div>
                    <div class="card-body">
                        <div class="table table-striped-columns table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Course</th>
                                    <th>Enrolled On</th>
                                    <th></th>

                                </tr>
                            </thead>

                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            
        

    </div>
    



    <script src="jquery.min.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>