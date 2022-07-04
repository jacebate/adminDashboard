<?php
require_once('connection.php');
$sql= mysqli_query($conn, "SELECT *FROM enrollment");
while($fetchRecords = mysqli_fetch_array($sql)){
    echo $fetchRecords['fullname'].$fetchRecords['phonenumber'].$fetchRecords['email'].$fetchRecords['gender'].$fetchRecords['course'].'<br>';
}


?>
