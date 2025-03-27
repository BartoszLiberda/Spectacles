<!--
StudentID: C00297672
StudentName: Ciaran o' Toole
Date: 03/25
Name of Screen: listbox3.php
Purpose: To provide the items they can choose from on the countersales page
-->
<?php
include 'db.inc.php'; // Include db.inc.php
date_default_timezone_set('UTC'); // Set default timezone
//set up sql select query
$sql = "SELECT StockID, Name, Description, CostPrice, RetailPrice, STOCK_QTY, SupplierName FROM StockItems WHERE Del_Tag = 0 AND STOCK_QTY > 0 AND Name NOT LIKE '%Lenses%' AND Name NOT LIKE '%Spectacles%'";
if(!$result=mysqli_query($con,$sql)) //run the query on the db
{
    die('Error in SQL query: '. mysqli_error($con)); //error handling
}
else{
    //set up the select box
    echo "<br><select name='listbox3' id='listbox3' onchange='changemax()'>";
    echo "<option value='' disabled></option>";
    while($row=mysqli_fetch_array($result))
    {
        // store each row in variables corresponding to the table fields
        $StockID = $row['StockID'];
        $Name = $row['Name'];
        $_SESSION['StockIDstock'] = $StockID; 
        $Description = $row['Description'];
        $CostPrice = $row['CostPrice'];
        $RetailPrice = $row['RetailPrice'];
        $STOCK_QTY = $row['STOCK_QTY'];
        $SupplierName = $row['SupplierName']; 
        $all = "$StockID|$Name|$Description|$CostPrice|$RetailPrice|$STOCK_QTY|$SupplierName";
        echo "<option value='$all'>$StockID - $Name</option>";
    }
    echo "</select>"; //close select box
}
 // Close database connection
mysqli_close($con);
?>