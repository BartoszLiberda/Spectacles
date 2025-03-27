<!--
StudentID: C00297672
StudentName: Ciaran o' Toole
Date: 03/25
Name of Screen: ammendstock.php
Purpose: To Submit the updated information back to the StockItems DB.
-->
<?php
// Include db connection file
include '../../util/db.inc.php';

// Set up the sql statement and store it in the variable $sql to then run it on the database
$sql = "UPDATE StockItems SET Name = '$_POST[ammendname]', Description = '$_POST[ammenddesc]', 
CostPrice = '$_POST[ammendcost]', RetailPrice = '$_POST[ammendretail]', STOCK_QTY = '$_POST[ammendqty]', 
SupplierName = '$_POST[ammendsupplier]' WHERE StockID = '$_POST[ammendnum]'";

// Run the SQL on the database
if(!$result = mysqli_query($con, $sql)) { //if error output error message 
    echo "Error: ". mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
// Return back to the form page stockItem.html.php
header("Location: ../../pages/maintenance/stockItem.html.php"); 
?>
