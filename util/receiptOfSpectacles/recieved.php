<!--    Bartosz Liberda     -->
<!--       C00295791        -->

<?php
    include('../db.inc.php');

    $date = date('Y-m-d');

    $id = $_POST['specSaleID'];
    
    $sql = "UPDATE SpectacleSales SET DateRecieved = $date
    WHERE SpecSalesID = $id";

    if(!mysqli_query($con,$sql))
    {
        die("An Error in the SQL Query : " . mysqli_error($con));
    }

    mysqli_close($con);
    header("Location: ../../pages/sales/receiptOfSpectacles.html.php");
    exit();
?>