<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Document</title>

<!-- for date picker-->

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  
<?php



include ('connect.php');

if (isset($_POST['booknow']))
{
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $venue = $_POST['venue'];
    $event = $_POST['event'];
    $guest = $_POST['guest'];
    $date = $_POST['date'];
    $request = $_POST['request'];



    $sql = "INSERT INTO eevent VALUES ('', '$name','$mobile','$venue','$event','$guest','$date','$request')";
    mysqli_query($con,$sql);

  
}
if (isset($_POST['booknow'])) 
{
//do somthing
header("Location: http://127.0.0.1:5502/thank.html");
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

  a:link, a:visited,  a:hover, a:active
  {
      color: #454545;
      text-decoration: none;
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

.navbar-brand img{
      -webkit-filter: grayscale(5) invert(1);
       filter: grayscale(5) invert(1);
       height: 90px; width: 150px;
      }

      .navbar-brand{
    margin-left: 20px;
  }
  .navbar-nav li{
    margin: 20px;
  }
  .navbar-nav{
    margin-right: 20px;
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


.dropdown-menu{
  font-family: 'Montserrat', sans-serif;
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
  font-size: 5rem;
  color: white;
}

/*end of section-1 css*/



footer{
    font-family: 'Montserrat', sans-serif;
    
  }


 

/*start of media qurery*/
@media (max-width: 1399.98px) { 
  nav{
  padding-bottom: 10px;
background-color: #ffffff;
}

 }
  @media (max-width: 991.98px) { 

    .main{
     display: grid;
     grid-auto-rows: minmax(90vh, auto);
     margin: 0;
     padding: 0;
 
   }
   


  .custom-toggler-icon span {
background: #454545;
}
.custom-toggler-icon::after {
background: #454545;
}

ul li .nav-link{
color: #454545;
}

.navbar .navbar-nav .nav-item::after {
background-color: white;
}

.navbar-brand{
color: #454545;
}


.navbar .navbar-nav .nav-item {
  position: relative;
}
nav{
  text-align: center;
background-color: #ffffff;
opacity: 0.9;
}

ul li .nav-link{
  color: #000000;
   font-family: 'Montserrat', sans-serif;
}

.dropdown-item{
  text-align: center;
}



  .wrap-banner{
    margin: 0;
    height: 75vh;
  }



  }
/*end of media qurery 991px*/

@media (max-width: 767.98px) { footer{
  text-align: center;
} }

/*end of media 767.98px*/
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


/*end of media qurery 576px*/




   form {
    background: #fff;
    padding: 15px 40px 40px;
    margin: 50px auto 0;
}

input, select {
    border: 1px solid #454545;
    padding: 10px;
    display: block;
    width: 100%;
    box-sizing: border-box;
    border-radius: 2px;
}
.row {
    padding-bottom: 10px;
} 
.error {
    color: red;
    font-size: 90%;
}

#submit{
  border: 2px solid #454545;
    color: #454545;
    margin-top: 10px;
    cursor: pointer;
    background-color:white;
    font-family: 'Montserrat', sans-serif;
    font-weight : bold ;
}


::placeholder{
  font-family: 'Montserrat', sans-serif;
}

#dropdown{
  font-family: 'Montserrat', sans-serif;
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
    var mobile = document.contactForm.mobile.value;
    var venue = document.contactForm.venue.value;
    var guest = document.contactForm.guest.value;
    var event = document.contactForm.event.value;
    var date = document.contactForm.date.value;
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
    var nameErr = mobileErr = venueErr = eventErr = guestErr = dateErr = requestErr = true;
    
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s\.]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    
    
    // Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-10]\d{10}$/;
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
        var regex = /^[a-zA-Z\s,\s\.\s\1-9]+$/;                
        if(regex.test(venue) === false) {
            printError("venueErr", "Please enter a valid venue");
        } else {
            printError("venueErr", "");
            venueErr = false;
        }
    }


  // Validate event
  if(event == "none") {
        printError("eventErr", "Please enter your event");
    }
    if(event == "Birthday" || event == "Wedding" || event == "Conference" || event == "Anniversary" || event == "Dedication" || event == "Proposal" || event == "Gender reveal" || event == "Car surprise"  ){
      printError("eventErr", "");
    }
    

          // Validate guest
          if(guest == "0") {
        printError("guestErr", "Please enter your guest");
    } 
    if(guest == "1-50" || guest == "50-70" || guest == "70-80" || guest == "80-90" || guest == "100-150"  ){
      printError("guestErr", "");
    }
    

  // Validate date
  if(date == "") {
        printError("dateErr", "Please enter your date");
    } else {
        var regex = /^[0-9]+(\/[0-9]+)*$/;
        if(regex.test(date) === false) {
            printError("dateErr", "Please enter a valid date");
        } else{
            printError("dateErr", "");
            dateErr = false;
        }
    }

    

    
    // Validate request
    if(request == "") {
        printError("requestErr", "Please enter request");
    } else {
        var regex = /^[a-zA-Z\s\,\s\.\s\1-9]+$/;                
        if(regex.test(request) === false) {
            printError("requestErr", "Please enter a valid request");
        } else {
            printError("requestErr", "");
            requestErr = false;
        }
    }

    
    // Prevent the form from being submitted if there are any errors
    if((nameErr || mobileErr || venueErr || dateErr || requestErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "Venue: " + venue + "\n" +
                          "Event: " + event + "\n" +
                          "Guest: " + guest + "\n" +
                          "Requested Date: " + date + "\n" +
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
<nav class="navbar navbar-expand-lg m-0 p-0" aria-label="Tenth navbar example">

    <div class="container-fluid p-0 m-0">

      <a class="navbar-brand" style="color:#454545" href="http://127.0.0.1:5502/homepage.html">
      <?php 
                              if (file_exists ('./assets/homelogo.png')) {
                                  echo '<img src="./assets/homelogo.png" title="contrast" class="contrast">'; 
                              } 
                                  else 
                              { 
                                  echo ''; 
                              }
                          ?></a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <i class="custom-toggler-icon">
              <span></span>
            </i>
          </button>

          <div class="collapse navbar-collapse justify-content-lg-end" id="navbarsExample08">
            
            <ul class="navbar-nav">
              <li class="nav-item ">
                  <a class="nav-link" style="color:#454545" href="http://127.0.0.1:5502/homepage.html">HOME</a>
              </li>

              <li class="nav-item ">
                  <a class="nav-link" style="color:#454545" href="http://127.0.0.1:5502/homepage.html">PACKAGE</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color:#454545" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  GALLERY
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" style="color:#454545" href="http://127.0.0.1:5502/picture.html">PICTURE</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" style="color:#454545" href="http://127.0.0.1:5502/video.html">VIDEOS</a></li>
                  
              
                </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link" style="color:#454545" href="http://127.0.0.1:5502/services.html">SERVICES</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " style="color:#454545" href="http://localhost/eevent-ver2.0/booking.php">BOOKING</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " style="color:#454545" href="http://127.0.0.1:5502/aboutus.html">ABOUT US</a>
              </li>
      
          </ul>
              
          </div>

    </div>
    
</nav>
<div class="main">  

      <div class="section-1">

    
                 

                        
                        <section class="wrap-banner">
                              
                                <h1>Booking</h1>
                            
                        </section>


      </div>

      <!--end 0f section-1 -->

      <div class="section-2"> 

                  <h6 class="text-center">READY TO GET IN TOUCH?</h6>
                <h1 class="text-center">Make an Event Request</h1>

<div class="container">
                <form name="contactForm" onsubmit="return validateForm()" action="booking.php" method="POST" autocomplete="off"> 
                     
                <div class="row">

                                  <div class="col-md-6 mb-3">
                                      <input type="text" placeholder="Full Name" name="name">
                                      <div class="error" id="nameErr"></div>
                                  </div>

                  
                                    <div class="col-md-6 mb-3">
                                        <input type="text" placeholder="Mobile Number" name="mobile" maxlength="11">
                                        <div class="error" id="mobileErr"></div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <input type="text" placeholder="Venue" name="venue">
                                        <div class="error" id="venueErr"></div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <select name="event" id="dropdown">
                                        <option value="none">Type of Event</option>
                                            <option value="Birthday">Birthday</option>
                                            <option value="Wedding">Wedding</option>
                                            <option value="Conference">Conference</option>
                                            <option value="Anniversary">Anniversary</option>
                                            <option value="Dedication">Dedication</option>
                                            <option value="Proposal">Proposal</option>
                                            <option value="Gender reveal">Gender reveal</option>
                                            <option value="Car surprise">Car surprise</option>
                                        </select>
                                        <div class="error" id="eventErr"></div>
                                    </div>

                                  <div class="col-md-6 mb-3">
                                      <select name="guest" id="dropdown">
                                      <option value="0">Guests Count</option>
                                          <option value="1-50">1-50</option>
                                          <option value="50-70">50-70</option>
                                          <option value="70-80">70-80</option>
                                          <option value="80-90">80-90</option>
                                          <option value="100-150">100-150</option>
                                      </select>
                                      <div class="error" id="guestErr"></div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                      <input type="text" placeholder="Set a Date" name="date" class="datepicker" autocomplete="off">
                                      <div class="error" id="dateErr"></div>
                                      </div>
                                  
                      

                                    <div class="row mb-3 mb-3">
                                          <textarea placeholder="Any special request in mind?" type="text" name="request" ></textarea>
                                          <div class="error" id="requestErr"></div>
                                        </div>

                                  <div class="row justify-content-center">
                                          <div class="col-lg-3">
                                              <input type="submit" value="Submit" name="booknow" id="submit">
                                          </div>
                                  </div>

                  </div>
                  <!--end of row-->
                  </form>

               </div>
               <!--end of container-->
      </div>
      <!--end of section-2-->
      
</div>

<!--end of main-->

<div class="container-fluid p-0 m-0">
  <!-- Footer -->
  <footer class="text-lg-start text-dark text-md-center" style="background-color: #ECEFF1">


    <!-- Section: Links  -->
    <section class="pt-1">
      <div class="container  text-md-start mt-5">
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



<script type="text/javascript">
   
    $('.datepicker').datepicker({ 
        startDate: '+9d',
        changeMonth: true,
        todayHighlight : true
    });
  
  
</script>

</html>