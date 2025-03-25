<?php
    session_start();
    include('../db.inc.php');

    $id = $_SESSION['customerIDDelete'];

    $sqlLookUp = "UPDATE Customer SET Del_Tag = 1 WHERE CustomerID = $id";
    $row = mysqli_fetch_array($result);

    if(!mysqli_query($con,$sqlLookUp))
    {
        die("An Error in the SQL Query : " . mysqli_error($con));
    }
    
    mysqli_close($con);
    header("Location: ../../pages/maintenance/customer.html.php");
    exit();
?>