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
    document.getElementById('edit'+className).classList.remove('visible');
    document.getElementById('edit'+className).classList.add('hidden');

    document.getElementById('cancel'+className).classList.remove('hidden');
    document.getElementById('cancel'+className).classList.add('visible');

    document.getElementById('ammend'+className).classList.remove('hidden');
    document.getElementById('ammend'+className).classList.add('visible');
}

function editCustomerCancel(className){
    let elements = document.getElementsByClassName(className);
    for (let element of elements){
        element.setAttribute('disabled');
    }
    document.getElementById('ammend'+className).classList.remove('visible');
    document.getElementById('ammend'+className).classList.add('hidden');

    document.getElementById('cancel'+className).classList.remove('visible');
    document.getElementById('cancel'+className).classList.add('hidden');

    document.getElementById('edit'+className).classList.remove('hidden');
    document.getElementById('edit'+className).classList.add('visible');
}