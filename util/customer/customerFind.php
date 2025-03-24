<?php
    session_start();
    include('../db.inc.php');

    $id = $_POST['customerID'];

    $sqlLookUp = "SELECT * FROM Customer WHERE CustomerID = $id and Del_Tag = 0";

    if(!$result = mysqli_query($con,$sqlLookUp))
    {
        die("An Error in the SQL Query : " . mysqli_error($con));
    }
    
    $rowcount = mysqli_affected_rows($con); // number of rows that were returned 1 if something was returned 0 if not

    if($rowcount == 1) // if something was found in the db
    {
        $row = mysqli_fetch_array($result); // gets the rows from the table that was returned from the db

        $_SESSION['customerIDDelete'] = $row['CustomerID']; // sets the session variable to variable fetched from db
        $_SESSION['customerFirstNameDelete'] = $row['FirstName']; // sets the session variable to variable fetched from db
        $_SESSION['customerSurnameDelete'] = $row['Surname']; // sets the session variable to variable fetched from db
        $_SESSION['customerEircodeDelete'] = $row['Eircode']; // sets the session variable to variable fetched from db
        $_SESSION['customerAddressDelete'] = $row['Address']; // sets the session variable to variable fetched from db
        $_SESSION['customerDOBDelete'] = $row['DateOfBirth']; // sets the session variable to variable fetched from db
        $_SESSION['customerPhoneDelete'] = $row['PhoneNumber']; // sets the session variable to variable fetched from db
    }
    else if ($rowcount == 0) // if nothing was found
    {
        unset($_SESSION['customerIDDelete']); // clears the session variable 
        unset($_SESSION['customerFirstNameDelete']); // clears the session variable
        unset($_SESSION['customerSurnameDelete']); // clears the session variable
        unset($_SESSION['customerEircodeDelete']); // clears the session variable
        unset($_SESSION['customerAddressDelete']); // clears the session variable
        unset($_SESSION['customerDOBDelete']); // clears the session variable
        unset($_SESSION['customerPhoneDelete']); // clears the session variable
    }

    mysqli_close($con);
    header("Location: ../../pages/maintenance/customer.html.php");
    exit();
?>