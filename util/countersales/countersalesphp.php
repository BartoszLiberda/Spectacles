<!--
StudentID: C00297672
StudentName: Ciaran o' Toole
Date: 03/25
Name of Screen: countersalesphp.php
Purpose: To update the total cost and to send the item being chosen and its amount to the stockitemcountersales table.
-->
<?php session_start(); // start session here to allow for updating the current total cost
include 'db.inc.php'; // include the db connection file
date_default_timezone_set("UTC"); // set the default timezone to UTC
//initialize the totalcost variable
if (!isset($_SESSION['totalcoststock'])) {
    $_SESSION['totalcoststock'] = 0; //if it doesnt exist set its value to 0 so maths doesnt break below
}
$selectedstock = $_POST['listbox3']; //get the selected stock from the dropdown box
$selectedid = explode(' - ', $selectedstock); // split the tet via the seperator
$selectedid0 = $selectedid[0]; //the array position of the id
$nextsql = "SELECT RetailPrice, Name FROM StockItems WHERE StockID = '$selectedid0'";  //sql query to get the cost price of the item
if(!$result=mysqli_query($con,$nextsql)) //run the query and store result in result
{
    die('Error in SQL query'); //error if fails
}


while($row = mysqli_fetch_assoc($result)){ //if a row eists (which it should)
    $retailprice = $row['RetailPrice']; //set the retail price to a variable
    $selectedstockname = $row['Name']; //get the name of the stock
}

$cost = floatval($retailprice); //set up a cost variable

$quantity = intval($_POST['ammount']); //quantity pulled from form submission
$total = $cost * $quantity; //calculate the total cost

//to retrieve the item quantity check if its gonna become less than zero if yes cancel the update if no do update
$ammountsql = "SELECT STOCK_QTY FROM StockItems WHERE StockID = '$selectedid0'";
if(!$result=mysqli_query($con,$ammountsql)) //run query, die if fails
{
    die('Error in SQL query');
}
while($row=mysqli_fetch_assoc($result)){ //checks that a row eists then retrievs the row data
    $currentquantity = $row['STOCK_QTY']; //gets the available stock
}
if(($currentquantity-$quantity)<0) //if the requested buy price will bring the stock to 0 then stop the order
{
    echo "<script>alert('Not enough stock to complete the order.')</script>"; //echo an alert to notify them
    mysqli_close($con); //close db connection
    header("Location: counterSales.html.php");  //go back to countersales.html.php
}
else{ //otherwise
    $newquantity = $currentquantity-$quantity; //create a new quantity var by decreasing it by the bought ammount
    $updatesql = "UPDATE StockItems SET STOCK_QTY = '$newquantity' WHERE StockID = '$selectedid0'"; //decrease the quantity in the db by updating its value
    $_SESSION['totalcoststock'] = $_SESSION['totalcoststock'] + $total; //update the total cost
    if(!mysqli_query($con,$updatesql)) //run query die if fail
    {
        die('Error in SQL query'); //output error
    }
}

mysqli_close($con); //close connection
header("Location: counterSales.html.php"); //return to checkout page 
?>