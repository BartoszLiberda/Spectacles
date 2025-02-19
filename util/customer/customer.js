function addCustomer(){
    if(confirm("Are You Sure You Want To Proceed ?")){
        document.getElementById("addCustomer").onsubmit();
    }else{
        return;
    }
}