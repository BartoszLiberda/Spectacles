<!--
StudentID: C00297672
StudentName: Ciaran o' Toole
Date: 03/25
Name of Screen: completesale.php
Purpose: To Submit the sale to the CounterSales DB while also destroying the session variable so a new session
         can begin.
-->
<?php
// initiate a session so that session variables can carry over
session_start();

//include the DB connection file
include '../../util/db.inc.php';

// get the current date for the sale DB
$date = date('Y-m-d');

// Get the total cost of the stock from the session variable and store it in a variable called $costtotals
$costtotals = $_SESSION['totalcoststock'];

// Set up the SQL statement
$salesquery = "INSERT INTO CounterSales (Date,Cost) VALUES ('$date', '$costtotals')"; 

// Execute the Sql statement on the DB
if (!mysqli_query($con, $salesquery)) {
    die('Error: '. mysqli_error($con));
}

// Destroy the session variable so the cost does not carry over to the net sale
UNSET($_SESSION['totalcoststock']);

// Destroy the session so a new one is made once redirected
session_destroy();

// redirect to counterSales.html.php page
header("Location: ../../pages/sales/counterSales.html.php");

?>