<?php 
include 'db.inc4.php'; 
date_default_timezone_set('UTC'); 

$sql = "UPDATE Supplier SET CompanyName = '$_POST[amendsupname]', Address = '$_POST[amendsupaddress]', Eircode = '$_POST[amendsupeircode]',Email = '$_POST[amendsupemail]', PhoneNumber= '$_POST[amendsupphonenum]', Webpage= '$_POST[amendsupwebpage]' WHERE SupplierID = '$_POST[amendsupid]'";

if(!mysqli_query($con, $sql)) { 
    echo "Error: ". mysqli_error($con);
}


mysqli_close($con); 
header('Location: supplier.html.php' );
exit();
?>
