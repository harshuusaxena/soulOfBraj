$("#foodButton").click(function(e){
    var firstName = $("#firstName").val();
    var lastName = $("#lastName").val();
    var dob =$("#dob").val();
    var gender = $("#gender").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var panNumber = $("#panNumber").val();
    var aadharNumber = $("#aadharNumber").val();
    var pinNumber = $("#pinNumber").val();
    var state = $("#state").val();
    var city = $("#city").val();
    var x = $("#email").val();
    var atposition = x.indexOf("@");
    var dotposition = x.lastIndexOf(".");
    
    if(firstName != ""){
        $("#foodButton").removeClass("btn-vibrate");
        $("#firstName").css("border", "1px solid #ececec");
        $("#firstName-error").hide();
    }
    
    if(lastName != ""){
        $("#foodButton").removeClass("btn-vibrate");
        $("#lastName").css("border", "1px solid #ececec");
        $("#lastName-error").hide();
    }
    
    if(dob != ""){
        $("#foodButton").removeClass("btn-vibrate");
        $("#dob").css("border", "1px solid #ececec");
        $("#dob-error").hide();
    }
    
    if(gender != ""){
        $("#foodButton").removeClass("btn-vibrate");
        $("#gender").css("border", "1px solid #ececec");
        $("#gender-error").hide();
    }
    
    if(email != ""){
        $("#foodButton").removeClass("btn-vibrate");
        $("#email").css("border", "1px solid #ececec");
        $("#email-error").hide();
    }
    
     if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        $("#foodButton").removeClass("btn-vibrate");
        $("#email").css("border", "1px solid #ececec");
        $("#email-error").hide();
    }
    
    if(phone != ""){
        $("#foodButton").removeClass("btn-vibrate");
        $("#phone").css("border", "1px solid #ececec");
        $("#phone-error").hide();
    }
    
    if(panNumber != ""){
        $("#foodButton").removeClass("btn-vibrate");
        $("#panNumber").css("border", "1px solid #ececec");
        $("#panNumber-error").hide();
    }
    
    if(aadharNumber != ""){
        $("#foodButton").removeClass("btn-vibrate");
        $("#aadharNumber").css("border", "1px solid #ececec");
        $("#aadharNumber-error").hide();
    }
    
    if(pinNumber != ""){
        $("#foodButton").removeClass("btn-vibrate");
        $("#pinNumber").css("border", "1px solid #ececec");
        $("#pinNumber-error").hide();
    }
    
    if(state != ""){
        $("#foodButton").removeClass("btn-vibrate");
        $("#state").css("border", "1px solid #ececec");
        $("#state-error").hide();
    }
    
    if(city != ""){
        $("#foodButton").removeClass("btn-vibrate");
        $("#city").css("border", "1px solid #ececec");
        $("#city-error").hide();
    }
    
    if(firstName == ""){
        $("#foodButton").addClass("btn-vibrate");
        $("#firstName").css("border", "1px solid #ff8080");
        $("#firstName-error").text("First name required").css("color", "#ff8080").show();
    }
    
    else if(lastName == ""){
        $("#foodButton").addClass("btn-vibrate");
        $("#lastName").css("border", "1px solid #ff8080");
        $("#lastName-error").text("Last name required").css("color", "#ff8080").show();
    }
    
    else if(dob == ""){
        $("#foodButton").addClass("btn-vibrate");
        $("#dob").css("border", "1px solid #ff8080");
        $("#dob-error").text("DOB required").css("color", "#ff8080").show();
    }
    
    else if(gender == "Select Gender"){
        $("#foodButton").addClass("btn-vibrate");
        $("#gender").css("border", "1px solid #ff8080");
        $("#gender-error").text("Required").css("color", "#ff8080").show();
    }
    
    else if(email == ""){
        $("#foodButton").addClass("btn-vibrate");
        $("#email").css("border", "1px solid #ff8080");
        $("#email-error").text("Email id required").css("color","#ff8080").show();
    }
    
    else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        $("#foodButton").addClass("btn-vibrate");
        $("#email").css("border", "1px solid #ff8080");
        $("#email-error").text("Enter valid email id").css("color", "#ff8080").show();
    }
    
    else if(phone == ""){
        $("#foodButton").addClass("btn-vibrate");
        $("#phone").css("border", "1px solid #ff8080");
        $("#phone-error").text("Phone number required").css("color","#ff8080").show();
    }
    
    else if (!phone.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)) {
        $("#foodButton").addClass("btn-vibrate");
        $("#phone").css("border", "1px solid #ff8080");
        $("#phone-error").text("Enter valid phone no.").css("color", "#ff8080").show();
    }
    
    else if(panNumber == ""){
        $("#foodButton").addClass("btn-vibrate");
        $("#panNumber").css("border", "1px solid #ff8080");
        $("#panNumber-error").text("Required").css("color", "#ff8080").show();
    }
    
    else if(aadharNumber == ""){
        $("#foodButton").addClass("btn-vibrate");
        $("#aadharNumber").css("border", "1px solid #ff8080");
        $("#aadharNumber-error").text("Required").css("color", "#ff8080").show();
    }
    
    else if(pinNumber == ""){
        $("#foodButton").addClass("btn-vibrate");
        $("#pinNumber").css("border", "1px solid #ff8080");
        $("#pinNumber-error").text("Required").css("color", "#ff8080").show();
    }
    
    else if(state == "Select State"){
        $("#foodButton").addClass("btn-vibrate");
        $("#state").css("border", "1px solid #ff8080");
        $("#state-error").text("Required").css("color", "#ff8080").show();
    }
    
    else if(city == ""){
        $("#foodButton").addClass("btn-vibrate");
        $("#city").css("border", "1px solid #ff8080");
        $("#city-error").text("Required").css("color", "#ff8080").show();
    }
    
    else{
        $(".spinner-border").show();    
        $("#foodButton").attr("disabled", true); 
        signInUser(firstName, lastName, dob, gender, email, phone, panNumber, aadharNumber, pinNumber, state, city);
    }
});


function signInUser(firstName, lastName, dob, gender, email, phone, panNumber, aadharNumber, pinNumber, state, city){
    firebase.auth().signInAnonymously().catch(function(error){
       // Handle Errors here.
       var errorCode = error.code;
       console.log("errorCode", errorCode)
       var errorMessage = error.message;
       console.log("errorMessage", errorMessage);
    }); 
    
    firebase.auth().onAuthStateChanged(function (user){
        if(user){
            
            donateFormData(firstName, lastName, dob, gender, email, phone, panNumber, aadharNumber, pinNumber, state, city);
        }
        else{
            
        }
    });
    
}

function donateFormData(firstName, lastName, dob, gender, email, phone, panNumber, aadharNumber, pinNumber, state, city){
    var URef = firebase.database().ref().child("Food_Distribution_Program_Form").push();
    
    URef.set({
        First_Name: firstName,
        Last_Name: lastName,
        Date_Of_Birth: dob,
        Gender: gender,
        Email_Id: email,
        Phone_No: phone,
        PAN_Number: panNumber,
        Aadhar_Number: aadharNumber,
        PIN_Number: pinNumber,
        State: state,
        City: city
        
    }).then(function (){
        
        window.alert("Thanks, Your data has been submitted...");
        
        document.getElementById("firstName").value = "";
        document.getElementById("lastName").value = "";
        document.getElementById("dob").value = "";
        document.getElementById("gender").value = "";
        document.getElementById("email").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("panNumber").value = "";
        document.getElementById("aadharNumber").value = "";
        document.getElementById("pinNumber").value = "";
        document.getElementById("state").value = "";
        document.getElementById("city").value = "";
        
        $("#foodButton").attr("disabled", false);
        $(".spinner-border").hide();
        
    }).catch(function (error) {
        var errorMessage = error.message;
        $("#foodButton").attr("disabled", false);
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
