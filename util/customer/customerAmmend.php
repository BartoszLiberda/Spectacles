<?php
    include('../db.inc.php');
    date_default_timezone_set("UTC");
    
    $sql = "UPDATE Customer SET FirstName = '$_POST[nameA]', Surname = '$_POST[sNameA]', Eircode = '$_POST[eircodeA]', Address = '$_POST[addressA]', DateOfBirth = '$_POST[dobA]', PhoneNumber = '$_POST[phoneA]'
    WHERE CustomerID = $_POST[idA]";

    if(!mysqli_query($con,$sql))
    {
        die("An Error in the SQL Query : " . mysqli_error($con));
    }

    mysqli_close($con);
    header("Location: ../../pages/maintenance/customer.html.php");
    echo "<script type='text/javascript'>alert('Customer Added')</script>";
    exit();

?>