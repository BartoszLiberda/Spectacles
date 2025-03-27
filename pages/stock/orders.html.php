<!--Orders HTML-->
<!--Code to take orders-->
<!--C00298638-->
<!--Samuel Geraghty-->
<!--March 2025-->

<?php session_start() ?>
<html>
    <head>
        <link rel="stylesheet" href="../../main.css">
		<link rel="stylesheet" href="Orders.css">
    </head>
    <body>
        <div class="content">
            <?php 
                $_SESSION['page'] = basename(__FILE__);
                include("../../elements/menu.html.php"); 
            ?>
            <div class="display">
				<h2 style="text-align : center;"><u> Orders </u></h2>
       

	
				<div class="orders">
					<script> 
						function populate()
						{
							var sel = document.getElementById("listbox"); 
							var result;
							result = sel.options[sel.selectedIndex].value; 
							var personDetails = result.split(","); 

							document.getElementById("StockNum").value = personDetails[0];
							document.getElementById("Name").value = personDetails[1];
							document.getElementById("Desc").value = personDetails[2];
							document.getElementById("QtyinStock").value = personDetails[5];
							document.getElementById("SuppStockCode").value = personDetails[7];
							document.getElementById("SuppName").value = personDetails[8];

						}
				        
				
					</script>
				
        			<form class="form">										
                       	<h4 style="text-align: center;">View/Order Stock Items:</h4>
							<p style="text-align: center;"><?php include 'listbox.php'; ?> </p>
						<div class="direction">
							<div class="padding">
								<div class="form-row">
									<div class="form-group">
												<label for="stocknum">Stock Number:</label>
												<input type="text" name="StockNum" id="StockNum" autocomplete=off required />
									</div>
									<div class="form-group">
											<label for="name">Stock Item Name:</label>
											<input type="text" name="Name" id="Name" required />
									</div>	
								</div>

								<div class="form-row">
										<div class="desc">	
											<label for="description">Description of Item:</label>
											<input type="text" name="Desc" id="Desc" required/>
										</div>
								</div>
							  <div class="form-row">
									<div class ="form-group">
											<label for="qtyinstock">Quantity in Stock:</label>
											<input type="text" name="QtyinStock" id="QtyinStock" required  />
									</div>
									<div class="form-group">
										<label for="ReordQty">Reorder Quantity:</label>
										<input type="text" name="ReOrdQTY" id="ReOrdQTY"	required />
									</div>
								</div>
								<div class="form-row">
									<div class ="form-group">
										<label for="SuppStockCode">Supp Stock Code:</label>
										<input type="text" name="SuppStockCode" id="SuppStockCode"	required/>
									</div>
									<div class="form-group">
										<label for="SuppName">Supplier Name:</label>
										<input type="text" name="SuppName" id="SuppName" required />
									</div>
								</div>
								<br>
								
							</div>
						</div>
						
							<h4 style="text-align: center;">Please select a supplier to get stock from.</h4>
							<p style="text-align: center;"><?php include 'listbox2.php'; ?> </p>
						
					</form>
			</div>
			
        <footer>
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
			</div>
			</div>
    </body>
</html>
