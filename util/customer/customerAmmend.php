<!--    Bartosz Liberda     -->
<!--       C00295791        -->

<?php
    include('../db.inc.php');

    $id = $_POST['idA'];
    
    $sql = "UPDATE Customer SET FirstName = '$_POST[nameA]', Surname = '$_POST[sNameA]', Eircode = '$_POST[eircodeA]', Address = '$_POST[addressA]', DateOfBirth = '$_POST[dobA]', PhoneNumber = '$_POST[phoneA]'
    WHERE CustomerID = $id";

    if(!mysqli_query($con,$sql))
    {
        die("An Error in the SQL Query : " . mysqli_error($con));
    }

    mysqli_close($con);
    header("Location: ../../pages/maintenance/customer.html.php");
    exit();
?>