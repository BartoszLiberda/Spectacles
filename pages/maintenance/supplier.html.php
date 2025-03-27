<!--Supplier HTML-->
<!--Code to add,delete and amend suppliers-->
<!--C00298638-->
<!--Samuel Geraghty-->
<!--February 2025-->

<?php include '../../util/db.inc.php';?>

<html>
    <head>
        <link rel="stylesheet" href="../../style/main.css">
		<link rel="stylesheet" href="../../style/supplier.css">
		
		<script>								
			function submitForm() {
  			return confirm('Do you really want to submit the form?');
				}
		</script>
		
    </head>
    <body>
        <div class="content">
            <?php 
                $_SESSION['page'] = basename(__FILE__);
                include("../../elements/menu.html.php"); 
            ?>
            <div class="display" >
                <div class="top">
                    <div class="addSupplier">
                            <form action="../../util/supplier/supplier.php" class="Myform1" onsubmit ="return submitForm(this);" method="POST">
                        <h3><u>Add a Supplier</u></h3>
                        <div class="form-row">
                            <div class="form-group input">
                                
                                <label for="Name">Supplier Name:</label>
                                <input type="text" name="Name" id="Name" autocomplete=off required />
                                
                            </div>
                            <div class="form-group input" >
                                <div class="input1">
                                
                                <label for="Eircode">Eircode:</label>
                                <input type="text" name="Eircode" id="Eircode" required pattern="[a-zA-Z0-9]{7}" />
                                
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="form-group">
                                <div class="input2">
                                
                                <label for="Address">Address:</label>
                                <input type="text" name="Address" id="Address" size="50" required  />
                                
                                </div>
                            </div>
						</div>
                        <div class="form-row">
                            <div class="form-group" >
                               
                                <label for="Email">Email Address:</label>
                                <input type="email" name="Email" id="Email"	required />
                                
                            </div>
                            <div class="form-group">
                                <div class="input1">
                                
                                <label for="PhoneNumber">Phone No.:</label>
                                <input type="text" name="PhoneNumber" id="PhoneNumber"	required pattern="[0-9]{3}[0-9]{7}" />
                                
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input2">
                            
                            <label for="Webpage">Webpage</label>
                            <input type="text" name="Webpage" id="Webpage" required pattern="[Ww]{3}[.]{1}[A-Za-z]{1,}[.]{1}[a-zA-Z]{1,}" /><br><br>
                            
                            </div>
                        </div>
                        
                                <input type="reset" 	value="Clear"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit"  value="Sumbit"/>
                            
                        </form>
                    </div>
<!------------------------------------------------------------------------------------------------------------------------------------------>
                    <div class="spacer"></div>
                    <div class="deletesup">
	


<script> 
            function populate()
            {
                var sel = document.getElementById("listbox"); 
                var result;
                result = sel.options[sel.selectedIndex].value; 
                var personDetails = result.split(","); 
                
                document.getElementById("delsupid").value = personDetails[0];
                document.getElementById("delsupname").value = personDetails[1];
                document.getElementById("delsupaddress").value = personDetails[2];
                document.getElementById("delsupeircode").value = personDetails[3];
				document.getElementById("delsupemail").value = personDetails[4];
				document.getElementById("delsupphonenum").value = personDetails[5];
				document.getElementById("delsupwebpage").value = personDetails[6];
            }


			function confirmCheck()
			{
				var response;
				response = confirm ('Are you sure you want to delete this person?');
				if (response)
				{

					document.getElementById("delsupid") .disabled = false;
					document.getElementById("delsupname").disabled = false;
					document.getElementById("delsupaddress").disabled = false;
					document.getElementById("delsupeircode") .disabled = false;
					document.getElementById("delsupemail") .disabled = false;
					document.getElementById("delsupphonenum") .disabled = false;
					document.getElementById("delsupwebpage") .disabled = false;
					return true;

			}
			else
			{
				populate();
				return false;
			}
		}
</script>

	<p id="display"> </p>

	 	
		<form name="deleteForm" action="../../util/supplier/delete.php" onsubmit="return confirmCheck()" method="post">
		<h3><u> Delete a Supplier</u></h3>
			<?php include '../../util/supplier/listbox.php'; ?><br><br>
				<div class="id">
					
						<label for= "delid">Supplier ID </label>
						<input type="text" name="delsupid" id="delsupid" disabled ><br>
					
				</div>
		 	<div class="form-row">
				<div class="form-group input">
					
						<label for ="delname">Company Name </label>
						<input type="text" name="delsupname" id="delsupname" disabled><br>
					
				</div>
				<div class="form-group input">
					<div class="input1">
						
							<label for ="deleircode">Eircode</label>
							<input type="text" name= "delsupeircode" id="delsupeircode" disabled><br>
						
					</div>
				</div>
			</div>
		    <div class="form-group">
                <div class="input2">
					
						<label for ="deladdress">Address</label>
						<input type="text" name="delsupaddress" id="delsupaddress" disabled ><br> 
					
				</div>
			</div>
			<div class="form-row">
                <div class="form-group" >
					
						<label for= "delemail">Email</label>
						<input type="email" name= "delsupemail" id="delsupemail" disabled>
					
				</div>
             	<div class="form-group">
                     <div class="input1"> 
						 
							<label for= "delphonenum">Phone Number</label>
							<input type="text" name= "delsupphonenum" id="delsupphonenum" disabled><br>
						 
					</div>
				</div>
			</div>	
			<div class="form-group">
            	<div class="input2">
					
						<label for= "delwebpage">Webpage </label>
						<input type="text" name= "delsupwebpage" id="delsupwebpage" disabled> <br><br>
					
				</div>
			</div>
		<?php if(ISSET($_SESSION['SupplierError']))echo $_SESSION['SupplierError'] ?>
		<input type="submit" value="Delete the record" >
						</form>
			</div>
                </div>
<!------------------------------------------------------------------------------------------------------------------------------------------>
				<div class="spacer"></div>
                <div class="bottom">
					<div class="ammend">
			<script>
            function populate2()
            {
                var sel = document.getElementById("listbox2"); 
                var result;
                result = sel.options[sel.selectedIndex].value; 
                var personDetails = result.split(","); 
                
                document.getElementById("amendsupid").value = personDetails[0];
                document.getElementById("amendsupname").value = personDetails[1];
                document.getElementById("amendsupaddress").value = personDetails[2];
                document.getElementById("amendsupeircode").value = personDetails[3];
				document.getElementById("amendsupemail").value = personDetails[4];
				document.getElementById("amendsupphonenum").value = personDetails[5];
				document.getElementById("amendsupwebpage").value = personDetails[6];
            }
            function toggleLock(){
            if(document.getElementById("amendViewbutton").value == "Amend Details")
                {
                    
                    document.getElementById("amendsupname").disabled = false;
                    document.getElementById("amendsupaddress").disabled = false;
                    document.getElementById("amendsupeircode").disabled = false;
                    document.getElementById("amendsupemail").disabled = false;
                    document.getElementById("amendsupphonenum").disabled = false;
					document.getElementById("amendsupwebpage").disabled = false;
                    document.getElementById("amendViewbutton").value = "View Details";
                }
                else{
                    
                    document.getElementById("amendsupname").disabled = true;
                    document.getElementById("amendsupaddress").disabled = true;
                    document.getElementById("amendsupeircode").disabled = true;
                    document.getElementById("amendsupemail").disabled = true;
                    document.getElementById("amendsupphonenum").disabled = true;
					document.getElementById("amendsupwebpage").disabled = true;
                    document.getElementById("amendViewbutton").value = "Amend Details";
                }
            }
            function confirmCheck2()
				{
                var response2;
                response2 = confirm("Are you sure you want to make these changes to the selected person?");
                if(response2){
                   	document.getElementById("amendsupid").disabled = false;
                    document.getElementById("amendsupname").disabled = false;
                    document.getElementById("amendsupaddress").disabled = false;
                    document.getElementById("amendsupeircode").disabled = false;
                    document.getElementById("amendsupemail").disabled = false;
                    document.getElementById("amendsupphonenum").disabled = false;
					document.getElementById("amendsupwebpage").disabled = false;
                    return true;
                }
                else{
                   
                    populate2();
                    toggleLock();
                    return false;
                }
            }
        </script>
						
        <p id="display"></p>
		

        <form action="../../util/supplier/Amendview.php" method="post" onsubmit="return confirmCheck2()">
			<h3><u>Amend/view a Supplier</u></h3>
			<?php include '../../util/supplier/listbox2.php';?><br><br>
			 <input type="button" value="Amend Details"  id="amendViewbutton" onclick="toggleLock()" > 
				<div class="id2">
            		<label for="amendid">Supplier ID:</label>
            		<input type="text" id="amendsupid" name="amendsupid" disabled><br>
				</div>
				<div class = "form-row">
					<div class="form-group input">
						
            				<label for="amendname">Company Name:</label>
            				<input type="text" id="amendsupname" name="amendsupname" disabled><br>
						
					</div>
					<div class="form-group input">
						<div class="input1">
							
            					<label for="amendeircode">Eircode:</label>
            					<input type="text" id="amendsupeircode" name="amendsupeircode" disabled pattern="[a-zA-Z0-9]{7}"><br>
							
						</div>
					</div>
				</div>
				<div class="form-group">
               	 	<div class="input2">
							<label for="amendaddress">Address:</label>
							<input type="text" id="amendsupaddress" name="amendsupaddress" disabled><br>
					</div>
				</div>
				<div class="form-row">
                	<div class="form-group" >
						
							<label for="amendemail">Email:</label>
							<input type="Email" id="amendsupemail" name="amendsupemail" disabled><br>
						
					</div>
					<div class="form-group">
                  		<div class="input1"> 
							
								<label for="amendphonenum">Phone Number:</label>
								<input type="text" id="amendsupphonenum" name="amendsupphonenum" disabled pattern="[0-9]{3}[0-9]{7}"><br>
							
						</div>
					</div>
				</div>	
				<div class="form-group">
            		<div class="input2">
						
							<label for="ammendwebpage">Webpage:</label>
							<input type="text" id="amendsupwebpage" name="amendsupwebpage" disabled  pattern="[Ww]{3}[.]{1}[A-Za-z]{1,}[.]{1}[a-zA-Z]{1,}"><br><br>
						
					</div>
				</div>
			<input type="submit" value="Save Changes">
        </form>
					</div>
                </div>
            </div>
		</div>
        <footer>
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
    </body>
</html>
