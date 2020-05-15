$("#submitButton").click(function(e){
    
    var firstName = $("#firstName").val();
    var lastName = $("#lastName").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var message = $("#message").val();
    var x = $("#email").val();
    var atposition = x.indexOf("@");
    var dotposition = x.lastIndexOf(".");
    
    
    if(firstName != ""){
        $("#submitButton").removeClass("btn-vibrate");
        $("#firstName").css("border", "1px solid #ececec");
        $("#firstName-error").hide();
    }
    
    if(lastName != ""){
        $("#submitButton").removeClass("btn-vibrate");
        $("lastName").css("border", "1px solid #ececec");
        $("#lastName-error").hide();
    }
    
    if(email != ""){
        $("#submitButton").removeClass("btn-vibrate");
        $("#email").css("border", "1px solid #ececec");
        $("#email-error").hide();
    }
    
    if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        $("#submitButton").removeClass("btn-vibrate");
        $("#email").css("border", "1px solid #ececec");
        $("#email-error").hide();
    }
    
    if(phone != ""){
        $("#submitButton").removeClass("btn-vibrate");
        $("#phone").css("border", "1px solid #ececec");
        $("#phone-error").hide(); 
    }
    
    if(message != ""){
        $("#submitButton").removeClass("btn-vibrate");
        $("#message").css("border", "1px solid #ececec");
        $("#message-error").hide();
    }
    
    if(firstName == ""){
        $("#submitButton").addClass("btn-vibrate");
        $("#firstName").css("border", "1px solid #ff8080");
        $("#firstName-error").text("First name required").css("color", "#ff8080").show();
    }
    
    else if(lastName == ""){
        $("#submitButton").addClass("btn-vibrate");
        $("#lastName").css("border", "1px solid #ff8080");
        $("#lastName-error").text("Last name required").css("color","#ff8080").show();
    }
    
    else if(email == ""){
        $("#submitButton").addClass("btn-vibrate");
        $("#email").css("border", "1px solid #ff8080");
        $("#email-error").text("Email id required").css("color","#ff8080").show();
    }
    
    else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        $("#submitButton").addClass("btn-vibrate");
        $("#email").css("border", "1px solid #ff8080");
        $("#email-error").text("Enter valid email id").css("color", "#ff8080").show();
    }
    
    else if(phone == ""){
        $("#submitButton").addClass("btn-vibrate");
        $("#phone").css("border", "1px solid #ff8080");
        $("#phone-error").text("Phone number required").css("color","#ff8080").show();
    }
    
    else if (!phone.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)) {
        $("#submitButton").addClass("btn-vibrate");
        $("#phone").css("border", "1px solid #ff8080");
        $("#phone-error").text("Enter valid phone no.").css("color", "#ff8080").show();
    }
    
     else if(message == ""){
        $("#submitButton").addClass("btn-vibrate");
        $("#message").css("border", "1px solid #ff8080");
        $("#message-error").text("Enter your message").css("color","#ff8080").show();
    }
    
    else{
       
      $(".spinner-border").show();    
      $("#submitButton").attr("disabled", true);    
      signInUser(firstName, lastName, email, phone, message);
        
    }
    
});

function signInUser(firstName, lastName, email, phone, message){
    firebase.auth().signInAnonymously().catch(function(error){
       // Handle Errors here.
       var errorCode = error.code;
       console.log("errorCode", errorCode)
       var errorMessage = error.message;
       console.log("errorMessage", errorMessage);
    }); 
    
    firebase.auth().onAuthStateChanged(function (user){
        if(user){
            
            contactFormData(firstName, lastName, email, phone, message);
        }
        else{
            
        }
    });
    
}

function contactFormData(firstName, lastName, email, phone, message){
    var URef = firebase.database().ref().child("Contact_Form").push();
    
    URef.set({
        First_Name: firstName,
        Last_Name: lastName,
        Email_Id: email,
        Phone_No: phone,
        Message: message
        
    }).then(function (){
        
        swal("Great!", "Successfully submitted", "success");
        
        document.getElementById("firstName").value = "";
        document.getElementById("lastName").value = "";
        document.getElementById("email").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("message").value = "";
        
        $("#submitButton").attr("disabled", false);
        $(".spinner-border").hide();
        
    }).catch(function (error) {
        var errorMessage = error.message;
        $("#submitButton").attr("disabled", false);
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