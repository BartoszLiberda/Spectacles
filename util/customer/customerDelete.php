<?php
    session_start();
    include('../db.inc.php');

    $id = $_SESSION['customerIDDelete'];

    $sql = "UPDATE Customer SET Del_Tag = 1 WHERE CustomerID = $id";

    if(!mysqli_query($con,$sql))
    {
        die("An Error in the SQL Query : " . mysqli_error($con));
    }

    mysqli_close($con);
    header("Location: ../../pages/maintenance/customer.html.php");
    exit();
?>