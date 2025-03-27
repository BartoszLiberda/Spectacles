<!--
    Name: Ciaran O Toole
    StudentID: C00297672
    Date:   26/02/25
    Purpose: to get all data for the stock item so we can populate the ammend/view sector
-->
<?php
include 'db.inc.php'; // Include db.inc.php
//set up sql select query
$sql = "SELECT StockID, Name, Description, CostPrice, RetailPrice, STOCK_QTY, SupplierName FROM StockItems WHERE Del_Tag = 0";
if(!$result=mysqli_query($con,$sql)) //run the query on the db
{
    die('Error in SQL query: '. mysqli_error($con)); //error handling
}
//otherwise
else{
    echo "<br><select name='listbox2' onclick='populate2()' id='listbox2'>"; //set up the select dropdown box
    echo "<option value=''></option>"; //null value for cleanliness
    while($row=mysqli_fetch_array($result)) //fills up all the option boxes with their data
    {
        // store each row in variables corresponding to the table fields
        $StockID = $row['StockID'];
        $Name = $row['Name'];
        $Description = $row['Description'];
        $CostPrice = $row['CostPrice'];
        $RetailPrice = $row['RetailPrice'];
        $STOCK_QTY = $row['STOCK_QTY'];
        $SupplierName = $row['SupplierName']; 
        $all = "$StockID|$Name|$Description|$CostPrice|$RetailPrice|$STOCK_QTY|$SupplierName"; //store all here so populate can split it to fill the boxes
        echo "<option value='$all'>$Name</option>"; // set up the option
    }
    echo "</select>"; //close the dropdown box
}
 // Close database connection
mysqli_close($con);
?>