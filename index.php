<?php 
    session_start(); 
    date_default_timezone_set("UTC");
    $_SESSION['page'] = 'index';
    $_SESSION["customerSearchSQL"] = "SELECT CustomerID, FirstName, Surname, DateOfBirth, PhoneNumber, Address, Eircode FROM Customer WHERE Del_Tag = 0";
?>
<html>
    <head>
        <link rel="stylesheet" href="style/main.css">
    </head>
    <body>
        <div class="content">
            <?php 
                include("elements/menu.html.php"); 
            ?>
            <div class="display">
                <?php 
                    echo '<h1>'.date('l', time()).'</h1>'.'<br>'.date('d/m/Y', time());
                ?>
            </div>
        </div>
        <footer>
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
    </body>
</html>