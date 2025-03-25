<?php
    include('../db.inc.php');

    $id = $_SESSION['customerIDDelete'];

    $sqlLookUp = "SELECT * FROM EyeTest WHERE CustomerID = $id and Del_Tag = 0";
    $row = mysqli_fetch_array($result);

    if(!mysqli_query($con,$sqlLookUp))
    {
        die("An Error in the SQL Query : " . mysqli_error($con));
    }
    
    mysqli_close($con);
    header("Location: ../../pages/maintenance/customer.html.php");
    exit();
?>