<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('includes/links.php')?>
</head>
<body>
    <?php
        require_once('includes/header.php');
        require_once('includes/sidebar.php');
        
        
        require_once('connection.php');
        $sql= mysqli_query($conn, "SELECT *FROM accounts");
    ?>
</body>
</html>