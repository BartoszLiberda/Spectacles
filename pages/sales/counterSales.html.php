<!--
StudentID: C00297672
StudentName: Ciaran o' Toole
Date: 03/25
Name of Screen: countersales.html.php
Purpose: To allow the user to complete a counter sale transaction.
         how it works is they select the item (only available ones for counter sale show)
         and then key in its ammount
        then adds it to cart via a button, these submits a form
        so the session variable can be updated
        they then click the complete purchase button when ready
-->
<?php session_start() ?> <!-- begin session here so we can update the total cost -->
<html>
    <head>
        <link rel="stylesheet" href="../../style/countersales/counter.css"> <!-- link to style sheet -->
        <script src="../../util/countersales/countersales.js"></script> <!-- link to js file -->
    </head>
    <body>
        <div class="content"> <!-- whole page container -->
            <?php 
                $_SESSION['page'] = basename(__FILE__);
                include("../../elements/menu.html.php"); 
            ?>
            <div class="display"> <!-- everything but the nav bar container -->
                <div class="countercontainer">
                    <div class="form-row">
                        <div class="topdesc">
                            <h2 style="text-align : center;">Counter Sales Menu</h2>
                            <br>
                            <p style="text-align: center;">Select from the drop down box the item being purchased,
                                once done key in the count to be bought.<br>Once both steps are complete click Add.</p>
                        </div>
                    </div>
                        <form method="POST" action="../../util/countersales/countersalesphp.php" class="c1c">
                            <div class="countercolumn">
                                <?php include '../../util/stock/listboxes/listbox3.php';?>
                            </div>
                            <div class="countercolumn">
                                <input type="number" id="ammount" name="ammount" placeholder="0" max="" min="1" required>
                            </div>
                            <div class="countercolumn">
                                <input type="submit" id="cartbutton" name="cartbutton" value="Add to Cart">
                            </div>
                        </form>
                    
                        <div class="counterrow">
                            <div class="countercolumn">
                                <label for="cartcost">Checkout total</label>
                                <input type="text" id="cartcost" name="cartcost" disabled placeholder="$0.00" value="<?php if(ISSET($_SESSION['totalcoststock'])){echo $_SESSION['totalcoststock'];}?>">
                            </div>
                        </div>
                        <div>
                            <form class="c1c" method="post" action="../../util/countersales/completesale.php" onsubmit="salecomplete()">
                                <div class="countercolumn">
                                    <input type="submit" id="checkout" name="checkout" value="Checkout" onclick="return confirmsale()">
                                </div>
                                
                            </form>
                        </div>
                </div>
            </div>
        </div>
        <footer>
            <!-- footer, gets the current yeaar to display it beside the text -->
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
    </body>
</html>