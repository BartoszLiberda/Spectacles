/*
StudentID: C00297672
StudentName: Ciaran o' Toole
Date: 03/25
Name of Screen: countersales.js
Purpose: The Javascript for stocksales page
*/

//function to check reorderqty is a valid number
// also submits form after confirmation
function Confirmsubmit() {
    var num = document.getElementById("addReorderQTY").value; //get value by id
    if(num <= 0) {
        alert("Please enter a positive number for Re-order Qty"); //error alert
        return false;
    } else {
        // confirms whether the user wants to add the stock item before submitting the form.
        return confirm("Are you sure you want to add this stock item?");
    }
}

//confirmation message
function added(){
    alert("The Stock Item has been added");
}

//populate the edit fields by getting their id and changing their values
function populate2(){
    var sel = document.getElementById("listbox2");
    var result;
    result = sel.options[sel.selectedIndex].value;
    var StockDetails = result.split('|');
    document.getElementById("1t").value = StockDetails[0];
    document.getElementById("2t").value = StockDetails[1];
    document.getElementById("3t").value = StockDetails[2];
    document.getElementById("4t").value = StockDetails[3];
    document.getElementById("5t").value = StockDetails[4];
    document.getElementById("6t").value = StockDetails[5];
    document.getElementById("7t").value = StockDetails[6];
}

//populate the delete fields by getting their id and changing their values
function populate(){
    var sel = document.getElementById("listbox");
    var result;
    result = sel.options[sel.selectedIndex].value;
    var StockDetails = result.split('|');
    document.getElementById("delStockNum").value = StockDetails[0];
    document.getElementById("delStocks").value = StockDetails[1];
    document.getElementById("delDescription").value = StockDetails[2];
    document.getElementById("delCost").value = StockDetails[3];
    document.getElementById("delSupplier").value = StockDetails[6];
}

//confirm delete function
function confirmCheck(){
    var response;
    response = confirm('Are you sure you want to delete this person?');
    if(response){
        document.getElementById("delStockNum").disabled = false;
        document.getElementById("listbox").disabled = false;
        document.getElementById("delDescription").disabled = false;
        document.getElementById("delCost").disabled = false;
        document.getElementById("delSupplier").disabled = false;
        return true;
    }
    else{
        populate();
        return false;
    }
}
function toggleLock(){
    if(document.getElementById("edits").value == "view")
        {
            //allow for editing of fields 2t-7t
            document.getElementById("2t").disabled = false;
            document.getElementById("3t").disabled = false;
            document.getElementById("4t").disabled = false;
            document.getElementById("5t").disabled = false;
            document.getElementById("6t").disabled = false;
            document.getElementById("7t").disabled = false;
            document.getElementById("confirm").disabled = false;
            document.getElementById("edits").value = "edit";
        }
        else{
            //only allow view of fields
            document.getElementById("2t").disabled = true;
            document.getElementById("3t").disabled = true;
            document.getElementById("4t").disabled = true;
            document.getElementById("5t").disabled = true;
            document.getElementById("6t").disabled = true;
            document.getElementById("7t").disabled = true;
            document.getElementById("confirm").disabled = true;
            document.getElementById("edits").value = "view";
        }
}
function ammendchecks(){
    var response;
    response = confirm("Are you sure you want to make these changes to the selected Stock?");
    if(response){
        //set all to enabled and return true to submit changes
        document.getElementById("1t").disabled = false;
        document.getElementById("2t").disabled = false;
        document.getElementById("3t").disabled = false;
        document.getElementById("4t").disabled = false;
        document.getElementById("5t").disabled = false;
        document.getElementById("6t").disabled = false;
        document.getElementById("7t").disabled = false;
        return true;
    }
    else{
        // run these functions
        populate2();
        toggleLock();
        return false;
    }
}
