<?php
require_once('connection.php');

$sqlDeleteRecord= mysqli_query($conn, 
"DELETE  FROM contactus WHERE no='".$_GET['id']." '");
if($sqlDeleteRecord)
{
    echo "User deleted successfully";
    header('location:contactus.php');
}
else
{
    echo "Error occured. Please try again";
}


?>
