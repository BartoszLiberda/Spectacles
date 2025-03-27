<?php session_start() ?>
<html>
    <head>
        <link rel="stylesheet" href="../../style/main.css">
        <link rel="stylesheet" href="../../style/receiptOfSpectacles.css">
    </head>
    <script>
        function submit(id){
            document.getElementById('spectacleReceipt'+id).submit();
        }
    </script>
    <body>
        <div class="content">
            <?php 
                $_SESSION['page'] = basename(__FILE__);
                include("../../elements/menu.html.php"); 
            ?>
            <div class="display">
                <div class="title">
                    <img src="../../assets/receipt.svg" width="32px" height="32px">
                    <h1>Reciept Of Spectacles</h1>
                </div>
                <table class="receipt">
                    <tr>
                        <th>Spectacle Sales ID</th>
                        <th>Eye Test ID</th>
                        <th>Frames</th>
                        <th>Lenses</th>
                        <th>Coating</th>
                        <th>Date Recieved</th>
                    </tr>
                    <?php
                        include "../../util/db.inc.php";
                        $sqlSpecSale = "SELECT * FROM SpectacleSales";

                        if(!$resultSales = mysqli_query($con,$sqlSpecSale)){
                            die('Error in querying the database : ' . mysqli_error($con));
                        }

                        while($rowSales = mysqli_fetch_array($resultSales))
                        {
                            $specSalesID = $rowSales['SpecSalesID'];
                            $eyeTestID = $rowSales['EyeTestID'];
                            $stockID = $rowSales['StockID'];
                            $lenses = $rowSales['Lenses'];
                            $coating = $rowSales['Coating'];
                            $dateRecieved = $rowSales['DateRecieved'];

                            echo "
                            <tr>
                                <form id='spectacleReceipt$specSalesID' action='../../util/receiptOfSpectacles/recieved.php' method='Post'>
                                    <input type='hidden' name='specSaleID' id='specSaleID' value='$specSalesID'>
                                    <td><input type='text' value='$specSalesID' disabled></td>
                                    <td><input type='text' value='$eyeTestID' disabled></td>
                                    <td><input type='text' value='$stockID' disabled></td>
                                    <td><input type='text' value='$lenses' disabled></td>
                                    <td><input type='text' value='$coating' disabled></td>
                                    <td><input type='date' value='$dateRecieved' disabled></td>
                                    <td class='buttonGroup'>
                                        <input class='submit' type='button' onclick='submit($specSalesID)' value='Recieved'/>
                                    </td>
                                </form>
                            </tr>
                            ";
                        }
                    ?>
                </table>
            </div>
        </div>
        <footer>
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
    </body>
</html>