<!--    Bartosz Liberda     -->
<!--       C00295791        -->

<?php
    session_start();

    $_SESSION["customerSearchSQL"] = "SELECT CustomerID, FirstName, Surname, DateOfBirth, PhoneNumber, Address, Eircode FROM Customer WHERE Del_Tag = 0";

    if($_POST['IDS'] != null){
        $_SESSION["customerSearchSQL"] = $_SESSION["customerSearchSQL"] .= " and CustomerID = $_POST[IDS]";
    }

    if($_POST['fNameS'] != null){
        $_SESSION["customerSearchSQL"] = $_SESSION["customerSearchSQL"] .= " and FirstName LIKE '$_POST[fNameS]%'";
    }

    if($_POST['sNameS'] != null){
        $_SESSION["customerSearchSQL"] = $_SESSION["customerSearchSQL"] .= " and Surname LIKE '$_POST[sNameS]%'";
    }

    if($_POST['dobS'] != null){
        $_SESSION["customerSearchSQL"] = $_SESSION["customerSearchSQL"] .= " and DateOfBirth = '$_POST[dobS]'";
    }

    if($_POST['pNumS'] != null){
        $_SESSION["customerSearchSQL"] = $_SESSION["customerSearchSQL"] .= " and PhoneNumber LIKE '$_POST[pNumS]%'";
    }

    if($_POST['AddressS'] != null){
        $_SESSION["customerSearchSQL"] = $_SESSION["customerSearchSQL"] .= " and Address LIKE '$_POST[AddressS]%'";
    }

    if($_POST['EircodeS'] != null){
        $_SESSION["customerSearchSQL"] = $_SESSION["customerSearchSQL"] .= " and Eircode LIKE '$_POST[EircodeS]%'";
    }

    header("Location: ../../pages/maintenance/customer.html.php");
    exit();
?>