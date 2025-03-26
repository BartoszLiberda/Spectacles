<?php 
    session_start();
    unset($_SESSION['customerIDDelete']); // clears the session variable 
    unset($_SESSION['customerFirstNameDelete']); // clears the session variable
    unset($_SESSION['customerSurnameDelete']); // clears the session variable
    unset($_SESSION['customerEircodeDelete']); // clears the session variable
    unset($_SESSION['customerAddressDelete']); // clears the session variable
    unset($_SESSION['customerDOBDelete']); // clears the session variable
    unset($_SESSION['customerPhoneDelete']); // clears the session variable
    unset($_SESSION['customerDeleteError']);

    header("Location: ../../pages/maintenance/customer.html.php");
    exit();
?>