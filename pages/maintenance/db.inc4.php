<?php 
    $hostname = "localhost";
    $username = "C00298638";
    $password = "7tw1d7Z?9";

    $dbname = "MyDBC00298638";

    $con = mysqli_connect($hostname,$username,$password, $dbname);

	if (!$con)							//if connection fails throw up error
       {
           die ("Failed to connect to MySQL: ". mysqli_connect_error());
       }
?>


