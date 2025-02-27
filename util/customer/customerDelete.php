<?php
    include('../db.inc.php');

    $id = $_POST['customerID'];

    $sqlLookUp = "SELECT * FROM EyeTest WHERE CustomerID = $id and Del_Tag = 0";
    $row = mysqli_fetch_array($result);

    if(!mysqli_query($con,$sqlLookUp))
    {
        die("An Error in the SQL Query : " . mysqli_error($con));
    }
    
    if($row = 0){
        $sqlDelete = "UPDATE Customer SET Del_Flag = 1 WHERE CustomerID = $id";
        if(!mysqli_query($con,$sqlDelete))
        {
            die("An Error in the SQL Query : " . mysqli_error($con));
        }
    }else{
        //handle error
    }

    mysqli_close($con);
    header("Location: ../../pages/maintenance/customer.html.php");
    exit();
?>