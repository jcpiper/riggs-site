<?php
//  include "db/db_creation.php";
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
    <link rel="stylesheet" type="text/css" href="foundation-6.3.1-complete/foundation.min.css"/>
    <link rel="stylesheet" type="text/css" href="public/stylesheets/app.css"/>
  </head>
  
  <body>
    <header>
      <!-- nav bar -->
      <div class="title-bar" data-responsive-toggle="dropdownMenu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="dropdownMenu"></button>
        <div class="title-bar-title">Menu</div>
      </div>
      
      <nav class="top-bar" id="dropdownMenu">
        <div class="top-bar-left">
          <ul class = "dropdown menu">
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>
            <li>
              <a href="#">Appointment</a>
            </li>
            <li>
              <a href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
      <!-- #Content-->
    <div id="mainDiv">
      <div class="row">
        <h2 class="small-8 large-6 columns">Welcome!</h2>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <!-- start slipsum code -->
  
          <p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>
  
          <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends. </p>
  
          <p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? </p>
  
          <!-- end slipsum code -->
        </div>
      </div>
    </div>
    <div class="row">
      <h2 class="small-6 large-4 columns">About Us</h2>
    </div>
    <div class="row">
      <div class="small-8 large-6 columns">
        <!-- start slipsum code -->
  
        <p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? </p>
  
        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
  
        <p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>
  
        <!-- end slipsum code -->
      </div>
    </div>
    <div class="row">
      <h2 class="small-6 large-centered columns">Make An Appointment</h2>
    </div>
    <?php
    // **************************************************
    // *                FORM CODE                       *
    // **************************************************
    ?>
    <div class="row">
      <p class="small-6 large-centered columns">
        Complete this form to request an appointment. We will be in touch regarding availability soon.
      </p>
    </div>
    <form name="AppointmentForm" action="db/appointmentRequest.php">
      <div class="row">
        <div class="small-12 large-8 columns">
          <label for="firstName">First Name</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-6 columns">
          <input type="text" id="firstName" name="firstName" placeholder="John" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label for="lastName">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-6 columns">
          <input type="text" id="lastName" name="lastName" placeholder="Smith" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-6 columns">
          <input type="email" id="email" name="email" placeholder="example@aol.com" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label for="phone">Phone Number</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-6 columns">
          <input type="number" id="phone" name="phone" placeholder="111-111-1111" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label for="firstDate">Preferred Appointment Date</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-6 columns">
          <input type="datetime-local" id="firstDate" name="firstDate" required/>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <label for="secondDate">Second Choice</label>
        </div>
      </div>
      <div class="row">
        <div class="small-12 large-6 columns">
          <input type="date" id="secondDate" name="secondDate"/>
        </div>
      </div>
      <div class="row">
        <div class="small-5">
          <button class="button" name="submit" value="submit" type="submit">Submit</button>
        </div>
      </div>
    </form>
    
    <?php
    // ********************************************
    // *             END FORM CODE                *
    // ********************************************
    ?>
    <div class="row">
      <h2 class="small-6 large-4 columns">Contact Us</h2>
    </div>
    <div class="row">
      <p class="small-8 large-6 columns">
        etc.
      </p>
    </div>
    <div class="scrollPic">
      <div class="row">
        <div class="small-10">
          <!-- start slipsum code -->
  
          <h2>Hold on to your butts</h2>
          <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
  
          <h2>I can do that</h2>
          <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends. </p>
  
          <h2>Are you ready for the truth?</h2>
          <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends. </p>
        </div>
      </div>
      <div class="row">
        <div class="small-6 small-centered columns grey-back">
          <h2>I can do that</h2>
          <p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>
  
          <h2>Are you ready for the truth?</h2>
          <p>Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. That's also clear. But for some reason, you and I react the exact same way to water. We swallow it too fast, we choke. We get some in our lungs, we drown. However unreal it may seem, we are connected, you and I. We're on the same curve, just on opposite ends. </p>
  
          <!-- end slipsum code -->
        </div>
      </div>
    </div>
    <footer class="row">
      <!-- footer stuff -->
      <p class="small-5 large-6 columns">
        Footer stuff ;)
      </p>
      <p class="small-7 large-6 columns">
        Some more footer stuff :')
      </p>
    </footer>
    <script src="foundation-6.3.1-complete/js/vendor/jquery.js"></script>
    <script src="foundation-6.3.1-complete/js/vendor/what-input.js"></script>
    <script src="foundation-6.3.1-complete/js/vendor/foundation.js"></script>
    <script src="public/javascript/app.js"></script>
  </body>
</html>
