<?php

   include 'db.inc4.php';					
   date_default_timezone_set("UTC");

   $sql = "Insert into Supplier (CompanyName,Address,Eircode,Email,PhoneNumber,Webpage)		
   VALUES ('$_POST[Name]','$_POST[Address]','$_POST[Eircode]','$_POST[Email]','$_POST[PhoneNumber]','$_POST[Webpage]')";	

   if (!mysqli_query($con,$sql))			
   {
    die ("An Error in the SQL query: " . mysqli_error($con));
   }

   

   mysqli_close($con);

   header('Location: https://c00298638.candept.com/Spectacles/pages/maintenance/supplier.html.php');
   exit();
	
?>