$("#submitButtons").click(function(e){
    var transaction = $("#transaction").val();
    var amount = $("#amount").val();
    var lastNames = $("#lastNames").val();
    var dob =$("#dob").val();
    var gender = $("#gender").val();
    var emails = $("#emails").val();
    var phones = $("#phones").val();
    var panNumber = $("#panNumber").val();
    var aadharNumber = $("#aadharNumber").val();
    var pinNumber = $("#pinNumber").val();
    var state = $("#state").val();
    var city = $("#city").val();
    var donation = $("#donation").val();
    var x = $("#emails").val();
    var atposition = x.indexOf("@");
    var dotposition = x.lastIndexOf(".");
    
    
    if(transaction !=""){
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#transaction").css("border", "1px solid #ececec");
        $("#transaction-error").hide();
    }
    
    if(amount !=""){
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#amount").css("border", "1px solid #ececec");
        $("#amount-error").hide();
    }
    
    if(lastNames != ""){
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#lastNames").css("border", "1px solid #ececec");
        $("#lastNames-error").hide();
    }
    
    if(dob != ""){
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#dob").css("border", "1px solid #ececec");
        $("#dob-error").hide();
    }
    
    if(gender != ""){
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#gender").css("border", "1px solid #ececec");
        $("#gender-error").hide();
    }
    
    if(emails != ""){
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#emails").css("border", "1px solid #ececec");
        $("#emails-error").hide();
    }
    
     if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#emails").css("border", "1px solid #ececec");
        $("#emails-error").hide();
    }
    
    if(phones != ""){
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#phones").css("border", "1px solid #ececec");
        $("#phones-error").hide();
    }
    
    if(pinNumber != ""){
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#pinNumber").css("border", "1px solid #ececec");
        $("#pinNumber-error").hide();
    }
    
    if(state != ""){
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#state").css("border", "1px solid #ececec");
        $("#state-error").hide();
    }
    
    if(city != ""){
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#city").css("border", "1px solid #ececec");
        $("#city-error").hide();
    }
    
    if(donation !=""){
        $("#submitButtonss").removeClass("btn-vibrate");
        $("#donation").css("border", "1px solid #ececec");
        $("#donation-error").hide();
    }
    
    if(transaction == ""){
        $("#submitButtonss").addClass("btn-vibrate");
        $("#transaction").css("border", "1px solid #ff8080");
        $("#transaction-error").text("Transaction Id required").css("color", "#ff8080").show();
    }
    
    else if(amount == ""){
        $("#submitButtons").addClass("btn-vibrate");
        $("#amount").css("border", "1px solid #ff8080");
        $("#amount-error").text("Donation amount required").css("color", "#ff8080").show();
    }
    else if(lastNames == ""){
        $("#submitButtons").addClass("btn-vibrate");
        $("#lastNames").css("border", "1px solid #ff8080");
        $("#lastNames-error").text("Full name required").css("color", "#ff8080").show();
    }
    
    else if(dob == ""){
        $("#submitButtons").addClass("btn-vibrate");
        $("#dob").css("border", "1px solid #ff8080");
        $("#dob-error").text("DOB required").css("color", "#ff8080").show();
    }
    
    else if(gender == ""){
        $("#submitButtons").addClass("btn-vibrate");
        $("#gender").css("border", "1px solid #ff8080");
        $("#gender-error").text("Select gender").css("color", "#ff8080").show();
    }
    
    else if(emails == ""){
        $("#submitButtons").addClass("btn-vibrate");
        $("#emails").css("border", "1px solid #ff8080");
        $("#emails-error").text("Email id required").css("color","#ff8080").show();
    }
    
    else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        $("#submitButtons").addClass("btn-vibrate");
        $("#emails").css("border", "1px solid #ff8080");
        $("#emails-error").text("Enter valid email id").css("color", "#ff8080").show();
    }
    
    else if(phones == ""){
        $("#submitButtons").addClass("btn-vibrate");
        $("#phones").css("border", "1px solid #ff8080");
        $("#phones-error").text("Mobile number required").css("color","#ff8080").show();
    }
    
    else if (!phones.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)) {
        $("#submitButtons").addClass("btn-vibrate");
        $("#phones").css("border", "1px solid #ff8080");
        $("#phones-error").text("Enter valid mobile no.").css("color", "#ff8080").show();
    }
    
    else if(pinNumber == ""){
        $("#submitButtons").addClass("btn-vibrate");
        $("#pinNumber").css("border", "1px solid #ff8080");
        $("#pinNumber-error").text("Pin number required").css("color", "#ff8080").show();
    }
    
    else if(state == ""){
        $("#submitButtons").addClass("btn-vibrate");
        $("#state").css("border", "1px solid #ff8080");
        $("#state-error").text("Select state").css("color", "#ff8080").show();
    }
    
    else if(city == ""){
        $("#submitButtons").addClass("btn-vibrate");
        $("#city").css("border", "1px solid #ff8080");
        $("#city-error").text("City required").css("color", "#ff8080").show();
    }
    
    else if(donation == ""){
        $("#submitButtons").addClass("btn-vibrate");
        $("#donation").css("border", "1px solid #ff8080");
        $("#donation-error").text("Required").css("color", "#ff8080").show();
    }
    
    else{
        $(".spinner-border").show();    
        $("#submitButtons").attr("disabled", true); 
        signInUser(transaction, amount, lastNames, dob, gender, emails, phones, panNumber, aadharNumber, pinNumber, state, city, donation);
    }
});


function signInUser(transaction, amount, lastNames, dob, gender, emails, phones, panNumber, aadharNumber, pinNumber, state, city, donation){
    firebase.auth().signInAnonymously().catch(function(error){
       // Handle Errors here.
       var errorCode = error.code;
       console.log("errorCode", errorCode)
       var errorMessage = error.message;
       console.log("errorMessage", errorMessage);
    }); 
    
    firebase.auth().onAuthStateChanged(function (user){
        if(user){
            
            donateFormData(transaction, amount, lastNames, dob, gender, emails, phones, panNumber, aadharNumber, pinNumber, state, city, donation);
        }
        else{
            
        }
    });
    
}

function donateFormData(transaction, amount, lastNames, dob, gender, emails, phones, panNumber, aadharNumber, pinNumber, state, city,donation){
    var URef = firebase.database().ref().child("Donation_by_QR_Code").push();
    
    URef.set({
        Transaction_Id:transaction,
        Donation_Amount:amount,
        Full_Name: lastNames,
        Date_Of_Birth: dob,
        Gender: gender,
        emails_Id: emails,
        phones_No: phones,
        PAN_Number: panNumber,
        Aadhar_Number: aadharNumber,
        PIN_Number: pinNumber,
        State: state,
        City: city,
        Donation_For:donation,
        
    }).then(function (){
        
        swal("Thank you!", "For your valueable donation", "success");
        
        document.getElementById("transaction").value="";
        document.getElementById("amount").value = "";
        document.getElementById("lastNames").value = "";
        document.getElementById("dob").value = "";
        document.getElementById("gender").value = "";
        document.getElementById("emails").value = "";
        document.getElementById("phones").value = "";
        document.getElementById("panNumber").value = "";
        document.getElementById("aadharNumber").value = "";
        document.getElementById("pinNumber").value = "";
        document.getElementById("state").value = "";
        document.getElementById("city").value = "";
        document.getElementById("donation").value = "";
        
        sendMail('info@soulofbrajfederation.org','Regarding Donation Info','<h4>Hare Krishna Admin,</h4><h4>We have got a new donation from '+lastNames+'. The details are as following:-<br></h4><table><tr><td>Transcation Id</td><td>:</td><td>'+transaction+'</td></tr><tr><td>Donation Amount</td><td>:</td><td>'+amount+'</td></tr><tr><td>Name</td><td>:</td><td>'+lastNames+'</td></tr><tr><td>DOB</td><td>:</td><td>'+dob+'</td></tr><tr><td>Gender</td><td>:</td><td>'+gender+'</td></tr><tr><td>Email Id</td><td>:</td><td>'+emails+'</td></tr><td>Mobile No.</td><td>:</td><td>'+phones+'</td></tr> <tr><td>PAN Number</td><td>:</td><td>'+panNumber+'</td></tr><tr><td>Aadhaar Number</td><td>:</td><td>'+aadharNumber+'</td></tr><tr><td>PIN Number</td><td>:</td><td>'+pinNumber+'</td></tr><tr><td>State</td><td>:</td><td>'+state+'</td></tr><tr><td>City</td><td>:</td><td>'+city+'</td></tr><tr><td>Donation For</td><td>:</td><td>'+donation+'</td></tr></table>');
        
        sendMail(emails,'Donation Receipt','<h4>Hare Krishna '+lastNames+',</h4><br><h4>Thanks for donating to Soul Of Braj Federation. Your details are as following:-<br></h4><table><tr><td>Transcation Id</td><td>:</td><td>'+transaction+'</td></tr><tr><td>Donation Amount</td><td>:</td><td>'+amount+'</td></tr><tr><td>Name</td><td>:</td><td>'+lastNames+'</td></tr><tr><td>DOB</td><td>:</td><td>'+dob+'</td></tr><tr><td>Gender</td><td>:</td><td>'+gender+'</td></tr><tr><td>Email Id</td><td>:</td><td>'+emails+'</td></tr><td>Mobile No.</td><td>:</td><td>'+phones+'</td></tr> <tr><td>PAN Number</td><td>:</td><td>'+panNumber+'</td></tr><tr><td>Aadhaar Number</td><td>:</td><td>'+aadharNumber+'</td></tr><tr><td>PIN Number</td><td>:</td><td>'+pinNumber+'</td></tr><tr><td>State</td><td>:</td><td>'+state+'</td></tr><tr><td>City</td><td>:</td><td>'+city+'</td></tr><tr><td>Donation For</td><td>:</td><td>'+donation+'</td></tr></table><br><h4>Please revert back to info@soulofbrajfederation.org in case of any query.</h4>');
        
       
        
        $("#submitButtons").attr("disabled", false);
        $(".spinner-border").hide();
        
    }).catch(function (error) {
        var errorMessage = error.message;
        $("#submitButtons").attr("disabled", false);
        $(".spinner-border").hide();
        console.log(errorMessage);
    });
    
    
   /* firebase.auth().signOut().then(function() {
        // Sign-out successful.
        
    }).catch(function(error) {
           var errorCode = error.code;
           console.log("errorCode", errorCode)
           var errorMessage = error.message;
           console.log("errorMessage", errorMessage);
});*/
    
}

function sendMail(to, subject, body) {
    var xhr = new XMLHttpRequest();

    xhr.addEventListener("readystatechange", function () {
        if (this.readyState === 4) {
            console.log(this.responseText);
        }
    });
    xhr.open("GET", "https://us-central1-soulofbraj-80ea9.cloudfunctions.net/sendMail?dest=" + to + "&subject=" + subject + "&body=" + body, true);
    xhr.send();

}
