<!--    Bartosz Liberda     -->
<!--       C00295791        -->

<?php
    session_start();
    include('../db.inc.php');

    $id = $_SESSION['customerIDDelete'];

    $sql = "SELECT * FROM EyeTest WHERE Del_Tag = 0 AND CustomerID = $id";


    if(!$result = mysqli_query($con,$sql))
    {
        die("An Error in the SQL Query : " . mysqli_error($con));
    }
    
    $rowcount = mysqli_affected_rows($con); // number of rows that were returned 1 if something was returned 0 if not

    if($rowcount == 0) // if something was found in the db
    {
        
        $sql2 = "UPDATE Customer SET Del_Tag = 1 WHERE CustomerID = $id";

        if(!mysqli_query($con,$sql2))
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
        unset($_SESSION['customerDeleteError']);
    }
    else{
        $_SESSION['customerDeleteError'] = "Customer Has Existing Eye Tests";
    }

    mysqli_close($con);
    header("Location: ../../pages/maintenance/customer.html.php");
    exit();
?>