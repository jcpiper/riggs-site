<?php
//  include "db/db_creation.php";
//  include "db/db_connect.php";
//  include "db/initialization.php";
?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Contact and appointment info for West Main Optometry"/>
    <meta name="keywords" content="Kim, Riggs, Pelger, Optometry, Eye, Doctor, Glasses, Spectacles, Appointment, Appointments,
        Eyes, Optometrist, Contacts, Contact, Lens, Lenses"/>
    <meta name="author" content="Justin Piper"/>
    <title>West Main Optometry</title>
    <link rel="stylesheet" type="text/css" href="resources/foundation-6.3.1-complete/foundation.min.css"/>
    <link rel="stylesheet" type="text/css" href="resources/zebra_datepicker/dist/css/bootstrap/zebra_datepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="public/stylesheets/app.css"/>
  </head>
  
  <body>
    <header id="head" class="sticky">
      <!-- nav bar -->
      <div class="title-bar" data-responsive-toggle="dropdownMenu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="dropdownMenu"></button>
        <div class="title-bar-title">Menu</div>
      </div>
      
      <nav class="top-bar" id="dropdownMenu">
        <div class="top-bar-left">
          <ul class = "dropdown menu">
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#appointment">Appointment</a>
            </li>
            <li>
              <a href="#brands">Brands</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- #Content-->
    <div id="scrollPic" class="hide-for-small-only">
      <div class="row overlay-center">
        <div class="grey-back">
          <p>
            Welcome to Dr. Kimberly Riggs Optometry. We have been serving the Ligonier area since 2008. Our office is located on West Main Street,
            just up the street from the Diamond.
          </p>
        </div>
      </div>
    </div>
    <div id="about" class="row">
      <div class="small-12 large-7 large-centered columns">
        <h2>About Us</h2>
      </div>
    </div>
    <div class="row">
      <div class="small-12 large-7 large-centered columns">
        <p>
          We are here for all of your vision-care needs.
        </p>
        <ul>
          <li>
            Vision Screening
          </li>
          <li>
            Eye-glasses
          </li>
          <li>
            Contact Lenses
          </li>
          <li>
            Glaucoma Screening
          </li>
        </ul>
      </div>
    </div>
    <div id="us" class="row">
      <div class="small-7 large-centered columns hide-for-small-only">
        <h2>Who we are</h2>
      </div>
    </div>
    <div class="row hide-for-small-only">
      <div class="small-4 columns">
        <div class="card my-card">
          <img src="public/images/kim.jpg">
          <div class="card-section">
            <h5>Kim Riggs, O.D.</h5>
          </div>
        </div>
      </div>
      <div class="small-4 columns">
        <div class="card my-card">
          <img src="public/images/nancy.jpg">
          <div class="card-section">
            <h5>Nancy Piper, Optician</h5>
          </div>
        </div>
      </div>
      <div class="small-4 columns">
        <div class="card my-card">
          <img src="public/images/pam.jpg">
          <div class="card-section">
            <h5>Pam Hardiman, Secretary</h5>
          </div>
        </div>
      </div>
    </div>
    <div id="brands" class="row ">
      <div class="small-12 large-7 large-centered columns">
        <h2>Brands we carry</h2>
      </div>
    </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <div class="card my-card">
            Rayban
          </div>
        </div>
        <div class="small-12 large-7 large-centered columns">
          <div class="card my-card">
            Oakley
          </div>
        </div>
        <div class="small-12 large-7 large-centered columns">
          <div class="card my-card">
            ETC.
          </div>
        </div>
      </div>
    
    <div id="appointment" class="row">
      <h2 class="small-7 large-centered columns">Make An Appointment</h2>
    </div>
    <?php
    // **************************************************
    // *                FORM CODE                       *
    // **************************************************
    ?>
    <div class="row">
      <p class="small-7 large-centered columns">
        Complete this form to request an appointment. We will be in touch regarding availability soon.
      </p>
    </div>
    <form name="AppointmentForm" action="db/appointmentRequest.php" method="post">
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="firstName">First Name</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <input type="text" id="firstName" name="firstName" placeholder="John" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="lastName">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <input type="text" id="lastName" name="lastName" placeholder="Smith" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <input type="email" id="email" name="email" placeholder="example@aol.com" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="phone">Phone Number</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <input type="number" id="phone" name="phone" placeholder="111-111-1111" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="firstDate">Preferred Appointment Date</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <div class="row">
            <div class="large-8 columns">
              <input type="text" id="firstDate" name="firstDate" class="date" required/>
            </div>
            <div class="large-4 columns">
              <select name="firstTime" form="appointmentForm" required>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="secondDate">Second Choice</label>
        </div>
      </div>
      <div class="row">
        <div class="large-7 large-centered columns">
          <div class="row">
            <div class="large-8 columns">
              <input type="text" id="secondDate" name="secondDate" class="date"/>
            </div>
            <div class="large-4 columns">
              <select name="secondTime" form="appointmentForm">
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="thirdDate">Third Choice</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <div class="row">
            <div class="large-8 columns">
              <input type="text" id="thirdDate" name="thirdDate" class="date"/>
            </div>
            <div class="large-4 columns">
              <select name="thirdTime" form="appointmentForm">
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="small-5 large-7 large-centered columns">
          <button class="button" name="submit" value="submit" type="submit">Submit</button>
        </div>
      </div>
    </form>
    
    <?php
    // ********************************************
    // *             END FORM CODE                *
    // ********************************************
    ?>
<!--    <div class="row">-->
<!--      <h2 class="small-6 large-4 columns">Contact Us</h2>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--      <p class="small-8 large-6 columns">-->
<!--        etc.-->
<!--      </p>-->
<!--    </div>-->
    <footer class="row">
      <!-- footer stuff -->
      <div class="small-5 large-6 columns">
        <p>
          Address goes here... 111 Main Street
        </p>
        <p>
          Ligonier, PA
        </p>
        <p>
          15658
        </p>
      </div>
      <p class="small-7 large-6 columns">
        724-238-8188
      </p>
    </footer>
    <script src="resources/foundation-6.3.1-complete/js/vendor/jquery.js"></script>
    <script src="resources/foundation-6.3.1-complete/js/vendor/what-input.js"></script>
    <script src="resources/foundation-6.3.1-complete/js/vendor/foundation.js"></script>
<!--    <script src="https://code.jquery.com/jquery-3.2.1.min.js"-->
<!--      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="-->
<!--      crossorigin="anonymous">-->
<!--    </script>-->
    <script src="resources/zebra_datepicker/dist/zebra_datepicker.min.js"></script>
    <script src="public/javascript/app.js"></script>
  </body>
</html>
