<?php session_start() ?>
<html>
    <head>
        <link rel="stylesheet" href="../../main.css">
    </head>
    <body>
        <div class="content">
            <?php 
                $_SESSION['page'] = basename(__FILE__);
                include("../../elements/menu.html.php"); 
            ?>
            <div class="display">
                <form class="formadd">
                    <h1>Add A Supplier</h1>
                <div>
                    <label for="SupplierName">Supplier Name:</label>
                    <br>
                    <input type="text" name="SupplierName" id="SupplierName" placeholder="Company Name:" required />
                </div>
                <div>
                    <label for="address">Address:</label>
                    <br>
                    <input type="text" name="address" id="address" placeholder="Null" required/>
                </div>
                <div>
                    <label for="Eircode">Eircode:</label>
                    <br>
                    <input type="text" name="Eircode" id="Eircode" placeholder="Null" pattern="[A-Z0-9]{7}"/>
                </div>
                </form>
            </div>
        </div>
        <footer>
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
    </body>
</html>