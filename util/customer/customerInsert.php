<?php 
    include('../db.inc.php');
    date_default_timezone_set("UTC");
    
    $dob = date_create($_POST['dob']);
    $id = "TEST";
    
    $sql = "Insert into Customer (CustomerID,FirstName,Surname,Eircode,Address,DateOfBirth,PhoneNumber,Del_Tag)
    VALUES ('$id','$_POST[fname]','$_POST[sname]','$_POST[eircode]','$_POST[address]','$dob','$_POST[phone]','0')";

    if(!mysqli_query($con,$sql))
    {
        die("An Error in the SQL Query : " . myslqi_error($con));
    }

    echo "<script type='text/javascript'>alert('Customer Added')</script>";

    mysqli_close($con);
?>