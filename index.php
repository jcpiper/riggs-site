<?php
include 'db/initialization.php';
?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="description" content="Kimberly Riggs Optometry, located on East Main Street in Ligonier, PA, offers all essential
    vision services. We provide eye exams, glaucoma screening, diabetes screening, eye glasses, and contact lenses.">
    <meta name="keywords" content="Kim, Riggs, Pelger, Optometry, Eye, Doctor, Glasses, Spectacles, Appointment, Appointments,
        Eyes, Optometrist, Contacts, Contact, Lens, Lenses">
    <meta name="ROBOTS" content="INDEX, NOFOLLOW">
    <meta name="author" content="Justin Piper">
    <title>Kimberly Riggs Optometry</title>
    <link rel="apple-touch-icon" sizes="57x57" href="public/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="public/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="public/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="public/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="public/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="public/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="public/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="public/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon/favicon-16x16.png">
    <link rel="manifest" href="public/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="resources/foundation-6.3.1-complete/foundation.min.css">
    <link rel="stylesheet" type="text/css" href="resources/zebra_datepicker/dist/css/bootstrap/zebra_datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="public/stylesheets/app.css">
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
            Welcome to Dr. Kimberly Riggs Optometry. We have been serving the Ligonier area since 2008. Our office is located on East Main
            Street, just up the street from the Diamond.
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
          We are here for all of your vision-care needs. We are open Monday, Thursday, and Friday every week. Our Monday and Friday
          hours are 9-5, and our Thursday hours are 12-7:30.
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
          <li>
            Diabetes Screening
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
      <div class="large-7 large-centered columns">
        <div class="row">
          <div class="small-5 columns">
            <div class="card my-card">
              <img src="public/images/kim.jpg">
              <div class="card-section">
                <h5>Kim Riggs, O.D.</h5>
              </div>
            </div>
          </div>
          <div class="small-5 columns">
            <div class="card my-card">
              <img src="public/images/nancy.jpg">
              <div class="card-section">
                <h5>Nancy Piper, Optical Manager</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row hide-for-small-only"">
      <div class="large-7 large-centered columns">
        <div class="row">
          <div class="small-5 columns">
            <div class="card my-card">
              <img src="public/images/pam.jpg">
              <div class="card-section">
                <h5>Pam Hardiman, Office Manager</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="brands" class="row ">
      <div class="small-12 large-7 large-centered columns">
        <h2>Brands we carry</h2>
      </div>
    </div>
    <div class="row hide-for-small-only">
      <div class="large-7 large-centered columns">
        <div class="row">
          <div class="small-5 columns">
            <div class="card my-card">
              <img src="public/images/rayban.jpg" alt="RayBan"/>
              <div class="card-section">
                <h5>RayBan</h5>
              </div>
            </div>
          </div>
          <div class="small-5 columns">
            <div class="card my-card">
              <img src="public/images/oakley.jpg" alt="Oakley"/>
              <div class="card-section">
                <h5>Oakley</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row hide-for-small-only">
      <div class="large-7 large-centered columns">
        <div class="row">
          <div class="small-5 columns">
            <div class="card my-card">
              <img src="public/images/colehaan.jpg" alt="Cole Haan"/>
              <div class="card-section">
                <h5>Cole Haan</h5>
              </div>
            </div>
          </div>
          <div class="small-5 columns">
            <div class="card my-card">
              <img src="public/images/coach.jpg" alt="Coach"/>
              <div class="card-section">
                <h5>Coach</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row hide-for-small-only">
      <div class="large-7 large-centered columns">
        <div class="row">
          <div class="small-5 columns">
            <div class="card my-card">
              <img src="public/images/serengeti.jpg" alt="Serengeti"/>
              <div class="card-section">
                <h5>Serengeti</h5>
              </div>
            </div>
          </div>
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
    <form name="appointmentForm" id="appointmentForm" action="db/appointmentRequest.php" method="post">
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="firstName">First Name <small>required</small></label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <input type="text" id="firstName" name="firstName" placeholder="John" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="lastName">Last Name <small>required</small></label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <input type="text" id="lastName" name="lastName" placeholder="Smith" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="email">Email <small>required</small></label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <input type="email" id="email" name="email" placeholder="example@aol.com" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="phone">Phone Number <small>required</small></label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <input type="number" id="phone" name="phone" placeholder="111-111-1111" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <label for="firstDate">Preferred Appointment Date <small>required</small></label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-7 large-centered columns">
          <div class="row">
            <div class="large-8 columns">
              <input type="text" id="firstDate" name="firstDate" class="date" required/>
            </div>
            <div class="large-4 columns">
              <select name="firstTime" id="firstTime" form="appointmentForm" required>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
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
              <select name="secondTime" id="secondTime" form="appointmentForm">
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
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
              <select name="thirdTime" id="thirdTime" form="appointmentForm">
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
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
      <div class="row" id="hiddenSuccessMessage">
        <div class="large-7 large-centered columns">
          <div class="callout small success"  data-closable="slide-out-right">
            <h4>Form submitted successfully!</h4>
          </div>
        </div>
      </div>
      <div class="row" id="hiddenErrorMessage">
        <div class="large-7 large-centered columns">
          <div class="callout error small" data-closable="slide-out-right">
            <h4>Failed to submit form!</h4>
          </div>
        </div>
      </div>
    </form>
    
    <?php
    // ********************************************
    // *             END FORM CODE                *
    // ********************************************
    ?>
    <footer class="row collapse expanded">
      <!-- footer stuff -->
      <div class="small-5 large-6 large-offset-1 columns">
        <p>
          207 East Main Street
          <br>
          Ligonier, PA
          <br>
          15658
        </p>
      </div>
      <p class="large-2 align-right columns">
        724-238-8188
      </p>
    </footer>
    <script src="resources/foundation-6.3.1-complete/js/vendor/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="resources/foundation-6.3.1-complete/js/vendor/what-input.js"></script>
    <script src="resources/foundation-6.3.1-complete/js/vendor/foundation.js"></script>
    <script src="resources/zebra_datepicker/dist/zebra_datepicker.min.js"></script>
    <script src="public/javascript/app.js"></script>
  </body>
</html>
