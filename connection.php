<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn= mysqli_connect($server,$username,$password,$database);

if($conn)
{
    echo "Data submitted successfully";
}
else{
    echo 'Error occured'. mysqli_error($conn);
}
?>