<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>JavaScript Form validation</title>
<link rel="stylesheet" href="/examples/css/form-style.css">


<?php

include ('connect.php');
if (isset($_POST['booknow']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $venue = $_POST['venue'];
    $event = $_POST['event'];
    $guest = $_POST['guest'];

    $sql = "INSERT INTO eevent VALUES ('', '$name','$email','$mobile','$venue','$event','$guest')";
    mysqli_query($con,$sql);

   
}

if (isset($_POST['booknow'])){
 

    header ('location: http://127.0.0.1:5502/thank.html');
    exit ();

}

?>


<style>body {
    font-size: 16px;
    background: #f9f9f9;
    font-family: "Segoe UI", "Helvetica Neue", Arial, sans-serif;
}
h2 {
    text-align: center;
    text-decoration: underline;
}
form {
    width: 300px;
    background: #fff;
    padding: 15px 40px 40px;
    border: 1px solid #ccc;
    margin: 50px auto 0;
    border-radius: 5px;
}
label {
    display: block;
    margin-bottom: 5px
}
label i {
    color: #999;
    font-size: 80%;
}
input, select {
    border: 1px solid #ccc;
    padding: 10px;
    display: block;
    width: 100%;
    box-sizing: border-box;
    border-radius: 2px;
}
.row {
    padding-bottom: 10px;
}
.form-inline {
    border: 1px solid #ccc;
    padding: 8px 10px 4px;
    border-radius: 2px;
}
.form-inline label, .form-inline input {
    display: inline-block;
    width: auto;
    padding-right: 15px;
}
.error {
    color: red;
    font-size: 90%;
}
input[type="submit"] {
    font-size: 110%;
    font-weight: 100;
    background: #006dcc;
    border-color: #016BC1;
    box-shadow: 0 3px 0 #0165b6;
    color: #fff;
    margin-top: 10px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background: #0165b6;
}</style>
<script>
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var name = document.contactForm.name.value;
    var email = document.contactForm.email.value;
    var mobile = document.contactForm.mobile.value;
    var venue = document.contactForm.venue.value;
    var event = document.contactForm.event.value;
    var guest = document.contactForm.guest.value;
    var hobbies = [];
    var checkboxes = document.getElementsByName("hobbies[]");
    for(var i=0; i < checkboxes.length; i++) {
        if(checkboxes[i].checked) {
            // Populate hobbies array with selected values
            hobbies.push(checkboxes[i].value);
        }
    }
    
	// Defining error variables with a default value
    var nameErr = emailErr = mobileErr = venueErr = eventErr = guestErr = true;
    
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    // Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 11 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }

    // Validate venue
    if(venue == "") {
        printError("venueErr", "Please enter Venue");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(nvenue) === false) {
            printError("venueErr", "Please enter a valid venue");
        } else {
            printError("venueErr", "");
            venueErr = false;
        }
    }
    
    // Validate event
    if(event == "Select") {
        printError("eventErr", "Please select your Event");
    } else {
        printError("eventErr", "");
        eventErr = false;
    }
    // Validate guest
    if(guest == "Select") {
        printError("guestErr", "Please select your Guest");
    } else {
        printError("guestErr", "");
        guestErr = false;
    }
    

    
    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || mobileErr || venueErr || eventErr || guestErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "Venue: " + venue + "\n" +
                          "Event: " + event + "\n" +
                          "Guest: " + Guest + "\n" +
                          "Gender: " + gender + "\n";
        if(hobbies.length) {
            dataPreview += "Hobbies: " + hobbies.join(", ");
        }
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};
</script>





</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" action="index.php" method="POST">
    <h2>Application Form</h2>
    <div class="row">
        <label>Full Name</label>
        <input type="text" name="name">
        <div class="error" id="nameErr"></div>
    </div>

    <div class="row">
        <label>Email Address</label>
        <input type="text" name="email">
        <div class="error" id="emailErr"></div>
    </div>

    <div class="row">
        <label>Mobile Number</label>
        <input type="text" name="mobile" maxlength="11">
        <div class="error" id="mobileErr"></div>
    </div>

    <div class="row">
        <label>Venue</label>
        <input type="text" name="venue">
        <div class="error" id="venueErr"></div>
    </div>

    <div class="row">
        <label>Event</label>
        <select name="event">
            <option value="0">Select</option>
            <option>Birthday</option>
            <option>Wedding</option>
            <option>Conference</option>
            <option>Anniversary</option>
        </select>
        <div class="error" id="eventErr"></div>
    </div>

    <div class="row">
        <label>Guests</label>
        <select name="guest">
        <option value="0">Select</option>
            <option>1-50</option>
            <option>50-70</option>
            <option>70-80</option>
            <option>80-90</option>
            <option>100-150</option>
        </select>
        <div class="error" id="guestErr"></div>
    </div>


    
    <div class="row">
        <input type="submit" value="Submit" name="booknow">
    </div>
</form>
</body>
</html>