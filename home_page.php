<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false)
  {
    header("location: login.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Khel Mahakumbh</title>
  <link rel="stylesheet" href="home_page.css">
  <script src="home_page.js"></script>
  <link rel="shortcut icon" href="itachi.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Dialog Box -->
 <div id="dialog" class="dialog">
  <div class="dialog-content">
      <span class="close" onclick="closeDialog()">&times;</span>
      <img src="Dialog box.png" alt="Image" class="dialog-image"/>
  </div>
</div>

  <header>
    <nav>
      <a href="home_page.html" class="logo" onclick="openDialog()"> <img src="soag.png"> </a>
      <div class="container">
        <ul class="nav-links">
          <li><a href="home_page.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="games.html">Games</a></li>
          <li><a href="#contact"> Contact Us</a></li>
          <li class="dropdown">
            <button class="dropbtn"> KMK - Logout </button>
            <div class="dropdown-content">
                <!-- <a href="player_signup.html"> Player Register</a>
                <a href="player_login.html"> Player Login</a>
                <a href="coach_signup.html"> DSO / Senior Coach Register</a>
                <a href="coach_login.html"> DSO / Senior Coach Login</a> -->
                <a href="receipt.html"> Generate Receipt from KMK id </a>
                <a href="logout.php"> Logout </a>
            </div>
          </li>
        </ul>
    
        <div class="mobile-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>
  </header>
 
  <section>
    <div class="slideshow">
      <img src="s1.png" alt="Image 1">
      <img src="s2.png" alt="Image 2">
    </div>
  </section>

  <section id="hero">
      <div class="container">
        <div class="not-box"> <h2> Notifications </h2> </div>
        <div class="phone-box"> <h2> Toll free (10:30 AM to 6:10 PM) </h2>
          <h1> <i class="fas fa-phone"></i> <a href = "tel:1800 274 6151"> 1800 274 6151 </h1> </a>
        </div>

        <div class="n1">  
          <div class="image-container">
            <img src="not_box.jpeg">
            <div class="overlay">
              <div class="info">
                <h1> <b> Welcome to Sports Authority of Gujarat </b> </h1>
                <p> Sports Authority of Gujarat was established to facilitate implementation of state and national policies with respect to sports and to encourage and spread awareness about sports.</p>
                <a href = "about.html"> <button class="btn_explore"> <b> Explore </b> </button> </a>
              </div>
            </div>
          </div>    
        </div>

        <div class="t1"> <img src="toll_list.png"> </div>
      </div>
  </section>        

  <!-- About -->
  <section id="about">  </section> 

  

  <!-- Events 
  <section id="events">
    <div class="container">
      <h2>Upcoming Events</h2>
      <div class="event-card">
        <img src="event1.jpg" alt="Event 1">
        <div class="event-details">
          <h3>Event 1</h3>
          <p>Date: September 1, 2023</p>
          <p>Venue: Stadium 1</p>
          <a href="#" class="btn">Register</a>
        </div>
      </div>
      <div class="event-card">
        <img src="event2.jpg" alt="Event 2">
        <div class="event-details">
          <h3>Event 2</h3>
          <p>Date: September 15, 2023</p>
          <p>Venue: Stadium 2</p>
          <a href="#" class="btn">Register</a>
        </div>
      </div>
    </div>
  </section> 

  <section id="registration">
    <div class="container">
      <h2>Registration Information</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam malesuada faucibus mauris, at eleifend elit cursus sit amet. Vivamus laoreet felis a diam tincidunt, non lobortis erat luctus.</p>
      <a href="#" class="btn">Register Now</a>
    </div>
  </section> -->

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="cntct_bar"> 
        <h2>Contact Us:</h2>
        <p>Sports, Youth & Cultural Activities Department <br>
        Block No 14, 3rd Floor, Dr. Jivraj Mehta Bhavan Sector - 10, <br>
        Gandhinagar. </p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <ul class ="ftr">
        <li> <a href = 'tou'> Terms of Use </a></li>
        <li> | </li>
        <li> <a href = 'pp'> Privacy Policy </a></li>
        <li> | </li>
        <li> <a href = 'cp'> Copyright Policy </a></li>
        <li> | </li>
        <li> <a href = 'hp'> Hyperlinking Policy </a></li>
        <li> | </li>
        <li> <a href = 'dm'> Disclaimer </a></li>
        <li> | </li>
        <li> <a href = 'as'> Accessibility Statement </a></li>
        <li> | </li>
        <li> <a href = 'help'> Help </a></li>
      </ul>
    </div>
  </footer>

</body>
</html>