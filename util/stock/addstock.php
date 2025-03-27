<!--
StudentID: C00297672
StudentName: Ciaran o' Toole
Date: 03/25
Name of Screen: addstock.php
Purpose: To Submit the data retrieved from the add form in stockItem.html.php file to the StockItems DB.
-->
<?php 
// Include the database connection file.
include "../../util/db.inc.php";

// Create and run the query on the database
// This Retrieves the Supplier ID to use it in the update query. 
$findSUPID = "SELECT SupplierID FROM Suppliers WHERE Name = '$_POST[addSupplier]'";
if(!$result = mysqli_query($con,$findSUPID)) // error checking, kills the program and returns an error message
{
    die ("An error has occured in the SQL Query: ". mysqli_error($con));
}

// Get the Supplier ID from the result to use it in the INSERT query. 
$row = mysqli_fetch_assoc($result);
$supplierID = $row['SupplierID'];


// Create and run the INSERT query on the database
$sql = "INSERT INTO StockItems (Name, Description, CostPrice, RetailPrice, STOCK_QTY, SUP_Stock_Code, SupplierID, Del_Tag) 
            VALUES ('$_POST[addStockName]', '$_POST[addDescription]', '$_POST[addCost]', '$_POST[addRetail]', '$_POST[addReorderQTY]', '$_POST[addCode]', $supplierID, '0')";
if(!mysqli_query($con,$sql)) // error checking, kills the program and returns an error message
{
    die ("An error has occured in the SQL Query: " . mysqli_error($con));
}

// Close the database connection
mysqli_close($con);
// Return back to stockItem.html.php
header("Location: ../../pages/maintenance/stockItem.html.php");   
?>
