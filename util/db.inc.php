<?php
	$hostname = "78.153.201.61:3306";
	$username = "optiDB";
	$password = "SuperSonicLegend";

	$dbname = "opticalcare_";
		
	$con = mysqli_connect($hostname,$username,$password,$dbname);

	if(!$con)
	{
		die("Failed to connect to MYSQL : " . mysqli_connect_error());
	}
?>