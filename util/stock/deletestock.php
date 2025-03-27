<!--
StudentID: C00297672
StudentName: Ciaran o' Toole
Date: 03/25
Name of Screen: deletestock.php
Purpose: To mark the selected item as a deleted item.
-->
<?php
// include the DB connection file
include '../../util/db.inc.php';

// create the sql to check if the item is on order currently
$ordersql = "SELECT OrderID FROM Orders_StockItems WHERE StockID = '$_POST[delStockNum]'";

// execute the query and check if the item is on order
if(!$check = mysqli_query($con,$ordersql)){
    die ("An error has occured in the SQL Query: ". mysqli_error($con)); //output error if it fails
}

// if the item is on order, display an error message and redirect to the stockItem.html.php page
if(mysqli_num_rows($check) > 0) { // this if statement basically means that since theres a row found it must be on order
    echo "<script>alert('This stock item is currently in use in an order. It cannot be deleted.')</script>";
    echo "<script>window.location = '../../pages/maintenance/stockItem.html.php'</script>";
    mysqli_close($con);
}
//otherwise
else{   
    // create the sql to delete the item from the StockItems table
    $sql = "UPDATE StockItems SET Del_Tag = 1 WHERE StockID = '$_POST[delStockNum]'";
    // run the query and if it fails output an error message
    if(!mysqli_query($con,$sql))
    {
        echo "Error: ".mysqli_error($con);
    }
    // otherwise inform the user the item was deleted (del tag got updated to 1)
    echo "<script>alert('The stock item was deleted.')</script>";
}

// close the database connection
mysqli_close($con);
?>

<!-- Redirect the user back to the stockItem.html.php -->
<script>window.location = "../../pages/maintenance/stockItem.html.php"</script>