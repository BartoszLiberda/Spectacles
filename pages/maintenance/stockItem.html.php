<!--
StudentID: C00297672
StudentName: Ciaran o' Toole
Date: 03/25
Name of Screen: stockItem.html.php
Purpose: To Stock screen to add delete ammend and view.
-->
<?php session_start(); //start a session ?>
<html>
    <head>
        <link rel="stylesheet" href="../../style/stockitems/main.css"> <!-- link to styles -->
        <script src="../../util/stock/stockitemscripts.js"></script>

    </head>
    <body>
        <div class="content">
            <?php 
                $_SESSION['page'] = basename(__FILE__);
                include("../../elements/menu.html.php"); 
            ?>
            <div class="display">
                <div class="top">
                    <div class="container"> <!-- Add Form -->
                    <div class="form-row"><img src="../../assets/addstock.png" alt="../../assets/addstock.png"><h1>Add New Stock Item</h1></div>
                        <form method="POST" action="../../util/stock/addstock.php" onsubmit="added()">
                            <div class="form-row">
                                <div class="Stock">
                                    <label for="addStockName">Stock Name *</label>
                                    <input type="text" id="addStockName" name="addStockName" placeholder="Stock Item.." required>
                                </div>
                                <div class="Supplier">
                                    <label for="addSupplier">Supplier *</label>
                                        <?php
                                            include '../../util/db.inc.php'; // Include db.inc.php
                                            $sql = "SELECT Name FROM Suppliers WHERE Del_Tag = 0"; //set up the sql query to get supplier names from Suppliers table
                                            if(!$result = mysqli_query($con, $sql)){ // if not it dies, else just return the result set
                                                die('Error retrieving data '.mysqli_error($con));
                                            }
                                            else{
                                                echo "<select name='addSupplier' id='addSupplier' required>"; // set up dropdown menu
                                                while($row = mysqli_fetch_array($result)){ //while it is still cycling through the result set
                                                    $Suppliers = $row['Name']; //set variable suppliers with the current row value held at SupplierName
                                                    echo "<option value='$Suppliers'>$Suppliers</option>"; //compile all this info into an options box
                                                }
                                                echo "</select>";
                                            }
                                        ?>
                                </div>
                                <div class="Code">
                                    <label for="addCode">Stock Code *</label>
                                    <input type="text" id="addCode" name="addCode" placeholder="_" pattern="[0-9]{1,5}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="Cost">
                                    <label for="addCost">Cost Price *</label>
                                    <input type="text" id="addCost" name="addCost" placeholder="00.00" pattern="[0-9]{1,4}\.[0-9]{2}" required>
                                </div>
                                <div class="Retail">
                                    <label for="addRetail">Retail Price *</label>
                                    <input type="text" id="addRetail" name="addRetail" placeholder="00.00" pattern="[0-9]{1,4}\.[0-9]{2}" required>
                                </div>
                                <div class="Reorderqty">
                                    <label for="addReorderQTY">Re-Order QTY *</label>
                                    <input type="text" id="addReorderQTY" name="addReorderQTY" placeholder="0" pattern="[0-9]{1,4}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="Description">
                                    <label for="addDescription">Description *</label>
                                    <textarea id="addDescription" name="addDescription" rows="4" cols="50" placeholder="This item is..." pattern=".*" required></textarea>
                                </div>
                            </div>
                            <div class="button-row">
                                <button type="reset">Reset</button>
                                <button type="submit" onclick="return Confirmsubmit()">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!--Delete Form -->
                    <div class="container">
                    <div class="form-row"><img src="../../assets/deletestock.png" alt="../../assets/deletestock.png"><h1>Delete A Stock Item</h1></div>
                        <form method="POST" action="../../util/stock/deletestock.php">
                            <div class="form-row">
                                <div class="StockNum">
                                    <label for="delStockNum">ID: </label>
                                    <input type="text" id="delStockNum" name="delStockNum" placeholder="_" readonly>
                                </div>
                                <div class="DelStock">
                                    <label for="delStocks">Stock Name: </label>
                                    <input type="text" id="delStocks" name="delStocks" placeholder="StockName" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="delSup">
                                    <label for="delSupplier">Supplier: </label>
                                    <input type="text" id="delSupplier" name="delSupplier" placeholder="Supplier" readonly>
                                </div>
                                <div class="delCosts">
                                    <label for="delCost">Cost Price: </label>
                                    <input type="text" id="delCost" name="delCost" placeholder="00.00" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="Description">
                                    <label for="delDescription">Description: </label>
                                    <textarea id="delDescription" name="delDescription" rows="4" cols="50" readonly placeholder="This item is..."></textarea>
                                </div>
                            </div>
                            <div class="button-row">
                                <div class="searchbar"><p>Search:</p><?php include '../../util/stock/listboxes/listbox.php';?></div>
                                <div class="deletesubmission"><button type="submit" onclick="return confirmCheck()" name="delete">Delete</button></div>
                            </div>
                        </form>
                    </div>
                </div> <!--top-->
                <div class="bottom"> <!-- ammend view stock form -->
                    <div class="ammendview">
                    <h1>Amend/View Stock Item</h1>
                        <div class="form-row">
                            <div class="searchbarammend"><p>Search:</p><?php include '../../util/stock/listboxes/listbox2.php';?></div>                               
                        </div>
                        <form action="../../util/stock/ammendstock.php" method="POST" onsubmit="return ammendchecks()">
                        <div class="form-row">
                            <div class="form-row">
                            <div class="form-group">
                                <label for="1t">Stock Number</label>
                                <input type="text" id="1t" name="ammendnum" placeholder="NULL" disabled >
                            </div>
                            <div class="form-group">
                                <label for="2t">Stock Name</label>
                                <input type="text" id="2t" name="ammendname" placeholder="NULL" disabled required>
                            </div>
                            <div class="form-group">
                                <label for="3t">Description</label>
                                <input type="text" id="3t" name="ammenddesc" placeholder="NULL" disabled pattern=".*" required>
                            </div>
                            <div class="form-group">
                                <label for="4t">Cost Price</label>
                                <input type="text" id="4t" name="ammendcost" placeholder="NULL" disabled pattern="[0-9]{1,4}\.[0-9]{2}" required>
                            </div>
                            <div class="form-group">
                                <label for="5t">Retail Price</label>
                                <input type="text" id="5t" name="ammendretail" placeholder="NULL" disabled pattern="[0-9]{1,4}\.[0-9]{2}" required>
                            </div>
                            <div class="form-group">
                                <label for="6t">Quantity</label>
                                <input type="text" id="6t" name="ammendqty" placeholder="NULL" disabled pattern="[0-9]{1,5}" required>
                            </div>
                            <div class="form-group">
                                <label for="7t">Supplier Name</label>
                                <input type="text" id="7t" name="ammendsupplier" placeholder="NULL" disabled required>
                            </div>
                            </div>
                        </div>
                                <div class="buttons">
                                <button type="button" class="edit" id="edits" value="view" onclick="toggleLock()">
                                    <img src="../../assets/edit.png" alt="Edit">
                                </button>
                                    <button type="submit" class="confirm" id="confirm" disabled>
                                        <img src="../../assets/confirm.png" alt="Confirm">
                                    </button>
                                </div>
                        </form>
                    </div> <!-- ammend view -->
                </div> <!-- bottom -->
                
            </div> <!--Display-->

        </div> <!--content-->
        <footer>
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
    </body>
</html>

