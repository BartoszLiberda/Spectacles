<!--    Bartosz Liberda     -->
<!--       C00295791        -->

<?php
    session_start();

    if($_POST['IDS'] != null){
        $_SESSION["searchSQL"] = $_SESSION["searchSQL"] . " and CustomerID = $_POST[IDS]";
    }

    if($_POST['fNameS'] != null){
        $_SESSION["searchSQL"] = $_SESSION["searchSQL"] . " and FirstName = $_POST[fNameS]";
    }

    if($_POST['sNameS'] != null){
        $_SESSION["searchSQL"] = $_SESSION["searchSQL"] . " and Surname = $_POST[sNameS]";
    }

    if($_POST['dobS'] != null){
        $_SESSION["searchSQL"] = $_SESSION["searchSQL"] . " and DateOfBirth = $_POST[dobS]";
    }

    if($_POST['pNumS'] != null){
        $_SESSION["searchSQL"] = $_SESSION["searchSQL"] . " and PhoneNumber = $_POST[pNumS]";
    }

    if($_POST['AddressS'] != null){
        $_SESSION["searchSQL"] = $_SESSION["searchSQL"] . " and Address = $_POST[AddressS]";
    }

    if($_POST['EircodeS'] != null){
        $_SESSION["searchSQL"] = $_SESSION["searchSQL"] . " and Eircode = $_POST[EircodeS]";
    }
?>