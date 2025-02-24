<!--    Bartosz Liberda     -->
<!--       C00295791        -->

<?php 
    include('../db.inc.php');
    date_default_timezone_set("UTC");

   $dob = date_create($_POST('dob'));
    
    $sql = "Insert into Customer (FirstName,Surname,Eircode,Address,DateOfBirth,PhoneNumber,Del_Tag)
    VALUES ('$_POST[fname]','$_POST[sname]','$_POST[eircode]','$_POST[address]','$dob','$_POST[phone]','0')";

    if(!mysqli_query($con,$sql))
    {
        die("An Error in the SQL Query : " . mysqli_error($con));
    }

    mysqli_close($con);
    header("Location: ../../pages/maintenance/customer.html.php");
    echo "<script type='text/javascript'>alert('Customer Added')</script>";
    exit();
?>