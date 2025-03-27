<!--
StudentID: C00297672
StudentName: Ciaran o' Toole
Date: 03/25
Name of Screen: listbox.php
Purpose: To provide a search field in the delete form to search for stock items to delete.
-->
<?php
include '../../util/db.inc.php'; // Include db.inc.php
//set up sql select query
$sql = "SELECT StockID, Name, Description, CostPrice, RetailPrice, 
STOCK_QTY, SupplierName FROM StockItems WHERE Del_Tag = 0 AND STOCK_QTY <= 0";
if(!$result=mysqli_query($con,$sql)) //run the query on the db
{
    die('Error in SQL query: '. mysqli_error($con)); //error handling
}
else{
    // set up the search dropdown bo, this fills with all the returned rows and grabs their data
    echo "<br><select name='listbox' onclick='populate()' id='listbox'>";
    echo "<option value=''></option>";
    while($row=mysqli_fetch_array($result))
    {
        // store each row in variables corresponding to the table fields
        // this is used to help populate the form
        $StockID = $row['StockID'];
        $Name = $row['Name'];
        $Description = $row['Description'];
        $CostPrice = $row['CostPrice'];
        $RetailPrice = $row['RetailPrice'];
        $STOCK_QTY = $row['STOCK_QTY'];
        $SupplierName = $row['SupplierName']; 
        //the all variable is for the value of the option, this is so the fields can populate
        $all = "$StockID|$Name|$Description|$CostPrice|$RetailPrice|$STOCK_QTY|$SupplierName";
        echo "<option value='$all'>$StockID - $Name</option>"; //what the options value is and its text
    }
    echo "</select>"; //close the select bo
}
 // Close database connection
mysqli_close($con);
?>