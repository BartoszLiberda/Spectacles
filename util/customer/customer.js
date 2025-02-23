function addCustomer(){
    if(confirm("Are You Sure You Want To Proceed ?")){
        document.getElementById("addCustomer").submit();
    }else{
        return;
    }
}

function deleteCustomer(){
    if(confirm("Are You Sure You Want To Proceed ?")){
        document.getElementById("deleteCustomer").submit();
    }else{
        return;
    }
}

function searchCustomer(){
    document.getElementById("searchCustomer").submit();
}

function editCustomer(className){
    let elements = document.getElementsByClassName(className);
    for (let element of elements){
        element.removeAttribute('disabled');
    }
}