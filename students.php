<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('includes/links.php')?> 
</head>
<body>
<?php require_once('includes/header.php')?>
<?php require_once('includes/sidebar.php')?>
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-center text-white">
                        <span>Students</span>
                    </div>
                    <div class="card-body">
                        <div class="table table-hover table-stripped table-responsiove{-sm|-md|-lg|-x1}">
                           <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Full name</th>
                                <th scope="col">Phone number</th>
                                <th scope="col">Email</th>
                                <th scope="col">Course</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Enrolled on</th>
                                <th scope="col">Action</th>
                            </tr>
                           </thead> 
                           <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Mark</td>
                                <td>+254788459612</td>
                                <td>@mdo</td>
                                <td>Web design</td>
                                <td>Male</td>
                                <td>22/1/2022</td>
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
                           </tbody>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>