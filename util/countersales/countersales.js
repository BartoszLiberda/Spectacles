/*
StudentID: C00297672
StudentName: Ciaran o' Toole
Date: 03/25
Name of Screen: countersales.js
Purpose: The Javascript for countersales page
*/
    
    //updates the max that can be bought every new item selected
    function changemax(){
        var values = document.getElementById('listbox3').value; //gets the listbox value
        var maxammount = values.split('|')[5]; //gets the index 5 of it which is stockqty
        document.getElementById('ammount').setAttribute('max', maxammount); //sets the max value
    }
    //confirm function, this will decide if form submits or not
    function confirmsale(){
        var response = confirm('Are you sure you want to complete the sale?');
        if(response)
        {
            //if yes
            return true;
        }
        else{
            //if no
            return false;
        }       
    }
    //alert that the sale was processed successfully
    function salecomplete(){
        alert('Sale was successfully completed');
    }