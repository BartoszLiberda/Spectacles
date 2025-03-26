<?php
include 'db.inc4.php'; 
date_default_timezone_set('UTC'); 

$sql = "SELECT SupplierID, CompanyName, Address, Eircode, Email, PhoneNumber, Webpage FROM Supplier WHERE Del_tag = 0"; 

if(!$result=mysqli_query($con,$sql)) 
{
    die('Error in SQL query: '. mysqli_error($con));
}

else{
    
    echo "<br><select name='listbox2' id='listbox2' onclick='populate2()'>";
    while($row=mysqli_fetch_array($result))
    {
       
        $ID = $row['SupplierID'];
        $CompanyName = $row['CompanyName'];
        $Address = $row['Address'];
        $Eircode = $row['Eircode'];
		$Email = $row['Email'];
		$PhNo = $row['PhoneNumber'];
		$Webpage = $row['Webpage'];
        $alltext = "$ID,$CompanyName,$Address,$Eircode,$Email,$PhNo,$Webpage";
        echo "<option value='$alltext'>$ID - $CompanyName</option>";
    }
    echo "</select>";
}
mysqli_close($con);
?>