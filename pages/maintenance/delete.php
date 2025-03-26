<?php
session_start();
    ?><br><br>
<?php
include 'db.inc4.php';
$sql = "UPDATE Supplier SET Del_tag = true WHERE SupplierID = '$_POST[delsupid]'"; 
$sql1 = "SELECT SupplierID FROM Orders WHERE SupplierID= '$_POST[delid]'";
if (! mysqli_query($con, $sql))
{
echo "Error ".mysqli_error($con);
}
else if($sql1 != 0)
{
echo "<script>
	 alert('This cannot be deleted');
	 </script>" ;
	}


// Set session variables
$_SESSION["SupplierID"] = $_POST['delsupid'];
$_SESSION["CompanyName"] = $_POST['delsupname'];
$_SESSION["Address"] = $_POST['delsupaddress'];
$_SESSION["Eircode"] = $_POST['delsupeircode'];
$_SESSION["Email"] = $_POST['delsupemail'];
$_SESSION["PhoneNumber"] = $_POST['delsupphonenum'];
$_SESSION["Webpage"] = $_POST['delsupwebpage'];
mysqli_close($con);
header('Location: supplier.html.php' );
exit();
?>

