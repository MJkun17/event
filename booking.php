<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Document</title>


  
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
    $request = $_POST['request'];





    $sql = "INSERT INTO eevent VALUES ('', '$name','$email','$mobile','$venue','$event','$guest','$request')";
    mysqli_query($con,$sql);

  
}
if (isset($_POST['booknow'])) 
{
//do somthing
header("Location: thank.html");
}

?>


   
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:wght@100;200;300&display=swap');

html, body{
    margin: 0;
    padding: 0;
    
  }

  /* for grid 100vh per section*/
  .main{
    display: grid;
    grid-auto-rows: minmax( 70vh, auto);
    margin: 0;
    padding: 0;

  }

  .section-1 {
    grid-row: 1/2;
}
.section-2 {
    grid-row: 2/3;
}
.row{
  margin: 0;
  padding: 0;
}


h6{
  font-family: 'Montserrat', sans-serif;
}

h1{
  font-family: 'Cormorant Garamond', serif;
  font-style: italic;
}


#myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: 	#B2BEB5;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}



.custom-toggler-icon span {
  display: block;
  float: right;
  width: 40px;
  height: 2px;
  background: #454545;
  margin: 8px 0;
}
.custom-toggler-icon::after {
  content: "";
  float: left;
  display: block;
  width: 40px;
  height: 2px;
  background: #454545;
}

.navbar{
  position:absolute;
  width:100%;
  z-index:10;
  max-width:100%;
}

.navbar-brand{
  color: #454545;
  font-family: 'Cormorant Garamond';
  font-style: italic;


}

.dropdown-toggle::after {
    content: none;
}

ul li .nav-link{
  color: #454545;
   font-family: 'Montserrat', sans-serif;
}


.navbar .navbar-nav .nav-item {
  position: relative;
}
.navbar .navbar-nav .nav-item::after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  background-color: #454545;
  width: 0%;
  content: "";
  height: 2px;
}
.navbar .navbar-nav .nav-item:hover::after {
  width: 80%;
  transition: all 0.5s;
}

.active-hover{
  border-bottom: 2.5px solid #454545;
}



.wrap-banner{
  display:flex;
  justify-content:center;
  align-items:center;
 background:url("./assets/aboutus/about.jpg");
 background-size:cover;
  background-position:center;
  box-shadow: inset 0 0 0 2000px rgb(0 0 0 / 42%);
  height: 40vh;
  margin-top: 6%;
}

section h1{
  font-family: 'Cormorant Garamond', serif;
  font-style: italic;
  font-size: 5rem;
  color: white;
}

/*end of section-1 css*/



footer{
    font-family: 'Montserrat', sans-serif;
  }


/*css for slide-in scroll*/
 
.scroll-container{
  overflow: hidden;
}
    .scroll-element{
      width: 100%;
     
    }

    /**Styling scrollable elements*/
    
    .js-scroll {
      opacity: 0;
      transition: opacity 500ms;
    }
    
    .js-scroll.scrolled {
      opacity: 1;
    }
    

    
    .scrolled.slide-left {
      animation: slide-in-left 1s ease-in-out both;
    }
    
    .scrolled.slide-right {
      animation: slide-in-right 1s ease-in-out both;
    }

    
    @keyframes slide-in-left {
      0% {
        -webkit-transform: translateX(-100px);
        transform: translateX(-100px);
        opacity: 0;
      }
      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
      }
    }
    
    @keyframes slide-in-right {
      0% {
        -webkit-transform: translateX(100px);
        transform: translateX(100px);
        opacity: 0;
      }
      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
      }
    }
    

/*start of media qurery*/

  @media (max-width: 991.98px) { 

    .main{
     display: grid;
     grid-auto-rows: minmax(90vh, auto);
     margin: 0;
     padding: 0;
 
   }
   
   .left-toggler{
    display: none;
  }


  .custom-toggler-icon span {
      background: white;
      }
      .custom-toggler-icon::after {
      background: white;
      }

      ul li .nav-link{
      color: white;
      }
      .navbar .navbar-nav .nav-item::after {
      background-color: white;
      }
      .active-hover{
      border-bottom: 2.5px solid white;
      }

      .navbar-brand{
      color: white;
      }





  .wrap-banner{
    margin: 0;
    height: 75vh;
  }



  }

  @media (max-width: 576px) { 

   .main{
     display: grid;
     grid-auto-rows: minmax(90vh, auto);
     margin: 0;
     padding: 0;
 
   }

        .custom-toggler-icon span {
      background: white;
      }
      .custom-toggler-icon::after {
      background: white;
      }

      .navbar-brand{
      color: white;
      }

      ul li .nav-link{
      color: white;
      }
      .navbar .navbar-nav .nav-item::after {
      background-color: white;
      }
      .active-hover{
      border-bottom: 2.5px solid white;
      }


   
   .wrap-banner{
     margin: 0;
     height: 70vh;
   }
   

    .wrap-banner h1{
     font-size: calc(1.525rem + 3.3vw);

    }

    form{
      width: 100%;
    }


    
   }







   form {
    background: #fff;
    padding: 15px 40px 40px;
    margin: 50px auto 0;
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
}











   
    </style>
 


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
    var request = document.contactForm.request.value;
    var hobbies = [];
    var checkboxes = document.getElementsByName("hobbies[]");
    for(var i=0; i < checkboxes.length; i++) {
        if(checkboxes[i].checked) {
            // Populate hobbies array with selected values
            hobbies.push(checkboxes[i].value);
        }
    }
    
	// Defining error variables with a default value
    var nameErr = emailErr = mobileErr = venueErr = requestErr = true;
    
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
        if(regex.test(venue) === false) {
            printError("venueErr", "Please enter a valid venue");
        } else {
            printError("venueErr", "");
            venueErr = false;
        }
    }


    
    // Validate venue
    if(request == "") {
        printError("requestErr", "Please enter request");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(request) === false) {
            printError("requestErr", "Please enter a valid request");
        } else {
            printError("requestErr", "");
            requestErr = false;
        }
    }

    
    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || mobileErr || venueErr || requestErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "Venue: " + venue + "\n" +
                          "Request: " + request + "\n";
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

<nav class="navbar navbar-expand-lg" aria-label="Tenth navbar example">

    <div class="container-fluid">

      <a class="navbar-brand" href="#"><h1>E-event</h1></a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <i class="custom-toggler-icon">
              <span></span>
            </i>
          </button>

          <div class="collapse navbar-collapse justify-content-md-center " id="navbarsExample08">
            
            <ul class="navbar-nav">
              <li class="nav-item ">
                  <a class="nav-link  active-hover" href="homepage.html">HOME</a>
              </li>
              <!--
              <li class="nav-item">
                  <a class="nav-link " href="package.html">PACKAGE</a>
              </li>-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  GALLERY
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="picture.html">PICTURE</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="video.html">VIDEOS</a></li>
                  
              
                </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="services.html">SERVICES</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="booking.html">BOOKING</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="aboutus.html">ABOUT US</a>
              </li>
      
          </ul>
              
          </div>

          <i class="custom-toggler-icon left-toggler">
            <span></span>
          </i>

    </div>
    
</nav>


<div class="main">  

      <div class="section-1">

          <button   onclick="topFunction()" id="myBtn" title="Go to top"><img src="/assets/arrow-t.png"  style="height: 20px; width: 20px;" alt=""></button>
  
                      
                 

                        
                        <section class="wrap-banner">
                                <div> 
                                <h1>Booking</h>
                                </div>
                        </section>


      </div>

      <!--end 0f section-1 -->

      <div class="section-2"> 

                  <h6 class="text-center">READY TO GET IN TOUCH?</h6>
                <h1 class="text-center">Make an Event Request</h1>

<div class="container">
                <form name="contactForm" onsubmit="return validateForm()" action="booking.php" method="POST">
                      <div class="row">

                            <div class="col-md-6">
                                <label>Full Name</label>
                                <input type="text" name="name">
                                <div class="error" id="nameErr"></div>
                            </div>

                              <div class="col-md-6">
                                  <label>Email Address</label>
                                  <input type="text" name="email">
                                  <div class="error" id="emailErr"></div>
                              </div>
                  
                      <div class="col-md-6">
                          <label>Mobile Number</label>
                          <input type="text" name="mobile" maxlength="11">
                          <div class="error" id="mobileErr"></div>
                      </div>

                      <div class="col-md-6">
                          <label>Venue</label>
                          <input type="text" name="venue">
                          <div class="error" id="venueErr"></div>
                      </div>

                      <div class="col-md-6">
                          <label>Event</label>
                          <select name="event">
                              <option>Select</option>
                              <option>Birthday</option>
                              <option>Wedding</option>
                              <option>Conference</option>
                              <option>Anniversary</option>
                          </select>
                     
                      </div>

                      <div class="col-md-6">
                          <label>Guests</label>
                          <select name="guest">
                          <option>Select</option>
                              <option>1-50</option>
                              <option>50-70</option>
                              <option>70-80</option>
                              <option>80-90</option>
                              <option>100-150</option>
                          </select>
                         
                      </div>

                      <div class="row mb-3">
                            <label >Textarea</label>
                            <input type="text" name="request">
                            <div class="error" id="requestErr"></div>
                          </div>

                      
                      <div class="row">
                          <input type="submit" value="Submit" name="booknow">
                      </div>

                      </div>
                  </form>
                  </div>
      </div>
      
</div>

<!--end of main-->

<div class="container-fluid p-0 m-0">
  <!-- Footer -->
  <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">


    <!-- Section: Links  -->
    <section class="pt-1">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">E-event</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px;  height: 2px"
                />
            <p>
              Our ceremony styling  knows no boundaries Like the elegance of simplicity of this ceremony set-up. 
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Social Media</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px;  height: 2px;"
                />
            <p>
              <a href="https://www.facebook.com/eevents30" class="text-dark text-decoration-none">Facebook</a>
            </p>
            <p>
              <a href="https://www.tiktok.com/@itsmeelmer33" class="text-dark text-decoration-none">Tiktok</a>
            </p>
        
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">PARTNERS</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark text-decoration-none">InMotion Studio</a>
            </p>
            <p>
              <a href="#!" class="text-dark text-decoration-none">Don Aloysius Atelier</a>
            </p>
            <p>
              <a href="#!" class="text-dark text-decoration-none">Biancrafts</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px;  height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i>Pan-Philippine Hwy, Daet, Camarines Norte</p>
            <p><i class="fas fa-envelope mr-3"></i> cool_djluis@yahoo.com</p>
            <p><i class="fas fa-phone mr-3"></i>0908 102 8011</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: #E3E3E3"
         >
         © 2022 E-EVENTS, ALL RIGHTS RESERVED

    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


 
</body>

<script src="/js-file/js-code.js"></script>

</html>