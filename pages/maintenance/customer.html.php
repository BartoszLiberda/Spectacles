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
                <div class="top">
                    <div class="addCustomer">
                        <form id="addCustomer" action="../../util/customer/customerInsert.php" method="Post">
                            <h1>Add Customer</h1>
                            <div class="formGroup">
                                <p class="fname">
                                    <label for="fname">First Name : </label>
                                    <input 
                                        type="text" 
                                        name="fname" 
                                        id="fname"
                                    />
                                </p>
                                <p class="lname">
                                    <label for="sname">Second Name : </label>
                                    <input 
                                        type="text" 
                                        name="sname" 
                                        id="sname"
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
                                    />
                                </p>
                                <p class="address">
                                    <label for="address">Address : </label>
                                    <input 
                                        type="text" 
                                        name="address" 
                                        id="address"
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
                                    />
                                </p>
                                <p class="phone">
                                    <label for="phone">Phone Number : </label>
                                    <input 
                                        type="text" 
                                        name="phone" 
                                        id="phone"
                                    />
                                </p>
                            </div>
                            <div class="buttonGroup">
                                <input class="clear" type="reset" value="Clear"/>
                                <input class="submit" type="button" onclick="addCustomer()" value="Submit"/>
                            </div>
                        </form>
                    </div>
                    <script src="../../util/customer/customer.js"></script>
                    <div class="divider"></div>
                    <div class="deleteCustomer">
                    </div>
                </div>
                <div class="divider"></div>
                <div class="bottom">
                    <h1>Amend / View</h1>
                    <form action="">
                    <input type="button" value="submit">

                        <table>
                            <tr>
                                <td><input type="text" name="ID" id="ID"></td>
                                <td><input type="text" name="fName" id="fName"></td>
                                <td><input type="text" name="sName" id="sName"></td>
                                <td><input type="text" name="dob" id="dob"></td>
                                <td><input type="text" name="pNum" id="pNum"></td>
                                <td><input type="text" name="Address" id="Address"></td>
                                <td><input type="text" name="Eircode "id="Eircode"></td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Surname</th>
                                <th>DOB</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Eircode</th>
                                <th>Select</th>
                            </tr>
                            <?php

                            ?>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <p>Spectacles.LTD &copy <?php $year=getdate(date('U')); echo "$year[year]" ?></p>
        </footer>
    </body>
</html>