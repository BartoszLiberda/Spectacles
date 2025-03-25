<?php
    session_start();
    include('../db.inc.php');

    $id = $_SESSION['customerIDDelete'];

    $sql = "UPDATE Customer SET Del_Tag = 1 WHERE CustomerID = $id";

    if(!mysqli_query($con,$sql))
    {
        die("An Error in the SQL Query : " . mysqli_error($con));
    }
    
    unset($_SESSION['customerIDDelete']); // clears the session variable 
    unset($_SESSION['customerFirstNameDelete']); // clears the session variable
    unset($_SESSION['customerSurnameDelete']); // clears the session variable
    unset($_SESSION['customerEircodeDelete']); // clears the session variable
    unset($_SESSION['customerAddressDelete']); // clears the session variable
    unset($_SESSION['customerDOBDelete']); // clears the session variable
    unset($_SESSION['customerPhoneDelete']); // clears the session variable

    mysqli_close($con);
    header("Location: ../../pages/maintenance/customer.html.php");
    exit();
?>