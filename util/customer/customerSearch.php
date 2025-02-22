<?php
    include "../db.inc.php";
    $searchSQL = "SELECT CustomerID, FirstName, Surname, DateOfBirth, PhoneNumber, Address, Eircode FROM Customer WHERE Del_Tag = 0";

    if($_POST['IDS'] != null){
        $searchSQL = $searchSQL . " and CustomerID = $_POST[IDS]";
    }

    if($_POST['fNameS'] != null){
        $searchSQL = $searchSQL . " and FirstName = $_POST[fNameS]";
    }

    if($_POST['sNameS'] != null){
        $searchSQL = $searchSQL . " and Surname = $_POST[sNameS]";
    }

    if($_POST['dobS'] != null){
        $searchSQL = $searchSQL . " and DateOfBirth = $_POST[dobS]";
    }

    if($_POST['pNumS'] != null){
        $searchSQL = $searchSQL . " and PhoneNumber = $_POST[pNumS]";
    }

    if($_POST['AddressS'] != null){
        $searchSQL = $searchSQL . " and Address = $_POST[AddressS]";
    }

    if($_POST['EircodeS'] != null){
        $searchSQL = $searchSQL . " and Eircode = $_POST[EircodeS]";
    }

    if(!$result = mysqli_query($con,$searchSQL)){
        die('Error in querying the database : ' . mysqli_error($con));
    }

    while($row = mysqli_fetch_array($result))
    {
        $id = $row['CustomerID'];
        $name = $row['FirstName'];
        $surname = $row['Surname'];
        $dob = date_create($row['DateOfBirth']);
        $dob = date_format($dob,"d-m-Y");
        $phone = $row['PhoneNumber'];
        $address = $row['Address'];
        $eircode = $row['Eircode'];
        echo "
            <tr>
                <td><input type='text' value='$id'></td>
                <td><input type='text' value='$name'></td>
                <td><input type='text' value='$surname'></td>
                <td><input type='text' value='$dob'></td>
                <td><input type='text' value='$phone'></td>
                <td><input type='text' value='$address'></td>
                <td><input type='text' value='$eircode'></td>
            </tr>
        ";
    }
?>