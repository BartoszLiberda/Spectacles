<!--    Bartosz Liberda     -->
<!--       C00295791        -->

<?php session_start() ?>
<html>
    <head>
        <link rel="stylesheet" href="../../style/main.css">
        <link rel="stylesheet" href="../../style/customer.css">
    </head>
    <body>
        <div class="content">
            <?php 
                $_SESSION['page'] = basename(__FILE__);
                include("../../elements/menu.html.php"); 
            ?>
            <div class="display">
                <div class="top">
                    <div class="addCustomer">
                        <form id="addCustomer" action="../../util/customer/customerInsert.php" method="Post">
                            <div class="title">
                                <img src="../../assets/addCustomer.svg" width="32px" height="32px">
                                <h1>New Customer</h1>
                            </div>
                            <div class="formGroup">
                                <p class="fname">
                                    <label for="fname">Name : </label>
                                    <input 
                                        type="text" 
                                        name="fname" 
                                        id="fname"
                                        required
                                    />
                                </p>
                                <p class="lname">
                                    <label for="sname">Surname : </label>
                                    <input 
                                        type="text" 
                                        name="sname" 
                                        id="sname"
                                        required
                                    />
                                </p>
                            </div>
                            <div class="formGroup">
                                <p class="eircode">
                                    <label for="eircode">Eircode : </label>
                                    <input 
                                        type="text"
                                        name="eircode" 
                                        id="eircode"
                                        required
                                    />
                                </p>
                                <p class="address">
                                    <label for="address">Address : </label>
                                    <input 
                                        type="text" 
                                        name="address" 
                                        id="address"
                                        required
                                    />
                                </p>
                            </div>
                            <div class="formGroup">
                                <p>
                                    <label for="dob">Date Of Birth : </label>
                                    <input 
                                        type="date" 
                                        name="dob" 
                                        id="dob"
                                        required
                                    />
                                </p>
                                <p class="phone">
                                    <label for="phone">Mobile Number : </label>
                                    <input 
                                        type="text" 
                                        name="phone" 
                                        id="phone"
                                        required
                                    />
                                </p>
                            </div>
                            <p class="error" id='customerAddError'></p>
                            <div class="buttonGroup">
                                <input class="clear" type="reset" onclick="" value="Clear"/>
                                <input class="submit" type="button" onclick="addCustomer()" value="Add"/>
                            </div>
                        </form>
                    </div>
                    <div class="divider"></div>
                    <script>
                        window.onload = function () {
                            const urlParams = new URLSearchParams(window.location.search);
                            if (urlParams.has("found")) {
                                document.getElementById("findButton").hidden = true;
                                document.getElementById("deleteButton").removeAttribute("hidden");
                            }
                        };
                    </script>
                    <div class="deleteCustomer">
                        <form id="deleteCustomer" action="../../util/customer/customerFind.php" method="Post">
                            <div class="title">
                                <img src="../../assets/removeCustomer.svg" width="32px" height="32px">
                                <h1>Delete Customer</h1>
                            </div>
                            <div class="formGroup">
                                <p class="customerID">
                                    <label for="customerID">ID : </label>
                                    <input 
                                        type="text"
                                        name="customerID"
                                        id="customerID"
                                        value="<?php if(ISSET($_SESSION['customerIDDelete']))echo $_SESSION['customerIDDelete'] ?>"
                                    />
                                </p>
                                <p class="nameDelete">
                                    <label for="fnameD">Name : </label>
                                    <input 
                                        type="text"
                                        name="fnameD"
                                        id="fnameD"
                                        value="<?php if(ISSET($_SESSION['customerFirstNameDelete']))echo $_SESSION['customerFirstNameDelete'] ?>"
                                        disabled
                                    />
                                </p>
                                <p class="surnameDelete">
                                    <label for="lnameD">Surname : </label>
                                    <input 
                                        type="text"
                                        name="lnameD"
                                        id="lnameD"
                                        value="<?php if(ISSET($_SESSION['customerSurnameDelete']))echo $_SESSION['customerSurnameDelete'] ?>"
                                        disabled
                                    />
                                </p>
                            </div>
                            <div class="formGroup">
                                <p class="eircode">
                                    <label for="eircodeD">Eircode : </label>
                                    <input 
                                        type="text"
                                        name="eircodeD"
                                        id="eircodeD"
                                        value="<?php if(ISSET($_SESSION['customerEircodeDelete']))echo $_SESSION['customerEircodeDelete'] ?>"
                                        disabled
                                    />
                                </p>
                                <p class="address">
                                    <label for="addressD">Address : </label>
                                    <input 
                                        type="text"
                                        name="addressD"
                                        id="addressD"
                                        value="<?php if(ISSET($_SESSION['customerAddressDelete']))echo $_SESSION['customerAddressDelete'] ?>"
                                        disabled
                                    />
                                </p>
                            </div>
                            <div class="formGroup">
                                <p>
                                    <label for="dobD">Date Of Birth : </label>
                                    <input 
                                        type="date"
                                        name="dobD"
                                        id="dobD"
                                        value="<?php if(ISSET($_SESSION['customerDOBDelete']))echo $_SESSION['customerDOBDelete'] ?>"
                                        disabled
                                    />
                                </p>
                                <p class="phone">
                                    <label for="phoneD">Mobile Number : </label>
                                    <input 
                                        type="text"
                                        name="phoneD"
                                        id="phoneD"
                                        value="<?php if(ISSET($_SESSION['customerPhoneDelete']))echo $_SESSION['customerPhoneDelete'] ?>"
                                        disabled
                                    />
                                </p>
                            </div>
                            <p class="error" id="deleteCustomerError"></p>
                            <div class="buttonGroup">
                                <input class="clear" type="button" value="Clear"/>
                                <input hidden class="submit" id="deleteButton" type="button" onclick="deleteCustomer()" value="Delete"/>
                                <input class="submit" id="findButton" type="button" onclick="customerDelete()" value="Find">
                            </div>
                        </form>
                        <form id="customerDelete" action="../../util/customer/customerDelete.php"></form>
                    </div>
                </div>
                <script src="../../util/customer/customer.js"></script>
                <div class="divider"></div>
                <div class="bottom">
                    <div class="titleB">
                        <img src="../../assets/editCustomer.svg" width="32px" height="32px">
                        <h1>Edit Customer</h1>
                    </div>
                    <table>
                        <tr>
                            <form id="searchCustomer" action="../../util/customer/customerSearch.php" method="Post">
                                <td>
                                    <input 
                                        type="text" 
                                        name="IDS" 
                                        id="IDS"
                                        placeholder="Enter ID"
                                    />
                                </td>
                                <td>
                                    <input 
                                        type="text" 
                                        name="fNameS" 
                                        id="fNameS"
                                        placeholder="Enter Name"
                                    />
                                </td>
                                <td>
                                    <input 
                                        type="text" 
                                        name="sNameS" 
                                        id="sNameS"
                                        placeholder="Enter Surname"
                                    />
                                </td>
                                <td>
                                    <input 
                                        type="text" 
                                        name="dobS" 
                                        id="dobS"
                                        placeholder="Enter Date Of Birth"
                                    />
                                </td>
                                <td>
                                    <input 
                                        type="text" 
                                        name="pNumS" 
                                        id="pNumS"
                                        placeholder="Enter Phone Number"
                                    />
                                </td>
                                <td>
                                    <input 
                                        type="text" 
                                        name="AddressS" 
                                        id="AddressS"
                                        placeholder="Enter Address"
                                    />
                                </td>
                                <td>
                                    <input 
                                        type="text" 
                                        name="EircodeS"
                                        id="EircodeS"
                                        placeholder="Enter Eircode"
                                    />
                                </td>
                                <td>
                                    <img src="../../assets/searchCustomer.svg" onclick=(searchCustomer())>
                                </td>
                            </form>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>DOB</th>
                            <th>Mobile Number</th>
                            <th>Address</th>
                            <th>Eircode</th>
                        </tr>
                        <?php 
                            if (!isset($_SESSION["customerSearchSQL"])) {
                                $_SESSION["customerSearchSQL"] = "SELECT CustomerID, FirstName, Surname, DateOfBirth, PhoneNumber, Address, Eircode FROM Customer WHERE Del_Tag = 0";
                            }
                            include "../../util/db.inc.php";
                            if(!$result = mysqli_query($con,$_SESSION["customerSearchSQL"])){
                                die('Error in querying the database : ' . mysqli_error($con));
                            }
                        
                            while($row = mysqli_fetch_array($result))
                            {
                                $id = $row['CustomerID'];
                                $name = $row['FirstName'];
                                $surname = $row['Surname'];
                                $dob = $row['DateOfBirth'];
                                $phone = $row['PhoneNumber'];
                                $address = $row['Address'];
                                $eircode = $row['Eircode'];
                                echo "
                                    <tr>
                                        <form id='ammendCustomer$id' action='../../util/customer/customerAmmend.php' method='Post'>
                                            <input type='hidden' name='idA' id='idA' value='$id'>
                                            <td><input type='text' value='$id' disabled></td>
                                            <td><input class='$id' name='nameA' id='nameA' type='text' value='$name' disabled></td>
                                            <td><input class='$id' name='sNameA' id='sNameA' type='text' value='$surname' disabled></td>
                                            <td><input class='$id' name='dobA' id='dobA' type='date' value='$dob' disabled></td>
                                            <td><input class='$id' name='phoneA' id='phoneA' type='text' value='$phone' disabled></td>
                                            <td><input class='$id' name='addressA' id='addressA' type='text' value='$address' disabled></td>
                                            <td><input class='$id' name='eircodeA' id='eircodeA' type='text' value='$eircode' disabled></td>
                                            <td>
                                                <img src='../../assets/ammendCustomer.svg' id='edit$id' class='visible' onclick='editCustomer($id)'>
                                            </td>
                                            <td><img src='../../assets/no.svg' id='cancel$id' class='hidden' onclick='editCustomerCancel($id)'></td>
                                            <td><img src='../../assets/yes.svg' id='ammend$id' class='hidden' onclick='editCustomerAmmend($id)'></td>
                                        </form>
                                    </tr>
                                ";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <footer>
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
    </body>
</html>