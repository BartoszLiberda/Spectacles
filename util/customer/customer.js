//    Bartosz Liberda     //
//       C00295791        //

function addCustomer(){
    //Declare dates
    let dob = new Date(document.getElementById("dob").value);
    let today = new Date();

    //Declare Phone Number
    let phone = document.getElementById("phone").value;

    //Declare Eircode
    let eircode = document.getElementById("eircode").value;

    //Declate Phone Number Regex
    let phoneRegex = /08[3679]\d{7}/;

    //Declare Eircode Regex
    let eircodeRegex = /[A-Za-z0-9]{7}/;
    
    // Reset Time portions to compare date only
    dob.setHours(0, 0, 0, 0);
    today.setHours(0, 0, 0, 0);
    
    //Define error message 
    let messageElement = document.getElementById('customerAddError');
    let errorMsg = "";

    // Get timestamps and convert to integers for comparison
    let dobTimestamp = parseInt(dob.getTime());
    let todayTimestamp = parseInt(today.getTime());

    //Check if form is valid
    if(!document.getElementById("addCustomer").checkValidity()){

        // Defines forms as all form elements in the div add customer
        let forms = document.querySelectorAll('div.addCustomer > form');
        // Defines form as array of forms
        let form = forms[0];
        //Set Error Message To Nothing
        messageElement.textContent = ""

        //loops over form array
        Array.from(form.elements).forEach((input) => {
            //If input box is valid
            if(input.checkValidity()){
                //Remove Invalid Property
                input.classList.remove("invalid");
                //Add Valid Property
                input.classList.add("valid");
            }
            //If input box is invalid
            else{
                //Remove Valid Property
                input.classList.remove("valid");
                //Add Invalid Property
                input.classList.add("invalid");
            }
        });

        //Check if DOB is valid
        if(isNaN(dobTimestamp)) {
            //Change input to invalid
            document.getElementById("dob").classList.remove("valid");
            //Add Invalid Property
            document.getElementById("dob").classList.add("invalid");
            //Set Error Message
            messageElement.textContent = "Invalid Date Of Birth";
        }
        if(dobTimestamp > todayTimestamp){
            //Remove Valid Property
            document.getElementById("dob").classList.remove("valid");
            //Add Invalid Property
            document.getElementById("dob").classList.add("invalid");
            //Set Error Message
            messageElement.textContent = "Date of Birth Can't Be In The Future";
        }
        if(!phoneRegex.test(phone)){
            //Remove Valid Property
            document.getElementById("phone").classList.remove("valid");
            //Add Invalid Property
            document.getElementById("phone").classList.add("invalid");
            //Set Error Message
            messageElement.textContent = "Invalid Mobile Number (ie 08XXXXXXXX)";
        }
        if(!eircodeRegex.test(eircode)){
            //Remove Valid Property
            document.getElementById("eircode").classList.remove("valid");
            //Add Invalid Property
            document.getElementById("eircode").classList.add("invalid");
            //Set Error Message
            messageElement.textContent = "Invalid Eirode (ie Y43W3X7)"
        }
    }
    else{
        // Defines forms as all form elements in the div add customer
        let forms = document.querySelectorAll('div.addCustomer > form');
        // Defines form as array of forms
        let form = forms[0];
        //Set Error Message To Nothing
        messageElement.textContent = ""

        //loops over form array
        Array.from(form.elements).forEach((input) => {
            //If input box is valid
            if(input.checkValidity()){
                //Remove Invalid Property
                input.classList.remove("invalid");
                //Add Valid Property
                input.classList.add("valid");
            }
            //If input box is invalid
            else{
                //Remove Valid Property
                input.classList.remove("valid");
                //Add Invalid Property
                input.classList.add("invalid");
            }
        });

        //Prompt user to confirm
        if(confirm("Are You Sure You Want To Submit ? ")){
            //Submit form
            document.getElementById("addCustomer").submit();
        }else{
            return;
        }
    }
}

function deleteCustomer(){
    if(confirm("Are You Sure You Want To Delete ?")){
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
        element.disabled = true;
    }
    document.getElementById('ammend'+className).classList.remove('visible');
    document.getElementById('ammend'+className).classList.add('hidden');

    document.getElementById('cancel'+className).classList.remove('visible');
    document.getElementById('cancel'+className).classList.add('hidden');

    document.getElementById('edit'+className).classList.remove('hidden');
    document.getElementById('edit'+className).classList.add('visible');
}

function editCustomerAmmend(className){
    if(confirm("Are You Sure You Want To Submit ? ")){
        document.getElementById("ammendCustomer"+className).submit();
    }else{
        editCustomerCancel(className);
    }
}

function customerDelete(){
    document.getElementById("findButton").hidden = true;
    document.getElementById("deleteButton").removeAttribute('hidden');
    document.getElementById("findCustomer").submit();
    document.getElementById("findButton").hidden = true;
    document.getElementById("deleteButton").removeAttribute('hidden');
}