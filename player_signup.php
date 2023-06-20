<?php
  $showAlert=false;
  $showUsernameExistError=false;
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    include 'connectdb.php';
    $ref=$_POST["referenceNo"];
    $pass=$_POST["password"];

    $sqlExist="SELECT * FROM `players` WHERE `Ref.No`='$ref';";
    $res=mysqli_query($connection,$sqlExist);
    $numRowsExist=mysqli_num_rows($res);
    if($numRowsExist>0)
    {
        $showUsernameExistError=true;
    }
    else
    {
        $sql="INSERT INTO `players` (`Ref.No`, `Password`) VALUES ('$ref', '$pass');
        ";
        $result=mysqli_query($connection,$sql);
        if($result)
        {
          $showAlert=true;
        }
        else
        {
          echo mysqli_error();
        }
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Player_Register Page</title>
  <link rel="stylesheet" href="player_login.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

  <link href="/Default/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="/Default/assets/css/icons.css"/>
</head>
<body>
<header>
  <nav>
    <a href="home_page.html" class="logo"> <img src="soag.png"> </a>
    <div class="container">
      <ul class="nav-links">
        <li><a href="demo.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="events.html">Events</a></li>
        <li><a href="games.html">Games</a></li>
        <li><a href="#contact"> Contact Us</a></li>
        <!-- <li class="dropdown">
          <button class="dropbtn"> KMK - Login / Register </button>
          <div class="dropdown-content">
              <a href="player_login.html"> Player Login</a>
              <a href="coach_login.html"> DSO / Senior Coach Login</a>
              <a href="receipt.html"> Generate Receipt from KMK id </a>
          </div>
        </li> -->
      </ul>  
      <div class="mobile-menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>
</header>
<?php
        if($showAlert)
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! </strong>Your account has been created successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            header("location: player_login.php");
            exit;
        }
        if($showUsernameExistError)
        { 
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error! </strong>Reference no already exist.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    ?>
<section class="login">
    <div class="container1">
      <div class="image-container">
          <img src="login.jpeg" alt="Image">
          <div class="centered"> <h2> Signup </h2>
            Enter your personal details and start journey with us
          </div>
      </div>

      <div class="form-container">
          <form action="player_signup.php" class="container1" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="frmlogin" name="frmlogin" data-bv-message="This value is not valid" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
            <div style="display:none;">
              <input type="hidden" name="_method" value="POST"/>
              <input type="hidden" name="_csrfToken" autocomplete="off" id="_csrfToken_1685868862.8848" value="PTI4uzunoUcXAyQhkYjTp1cvPvxHm+uL3x9m9zjid03Z+i68IiZRkDvpDF2OGg0kA4cizu+pFoWS5npP4Axknw=="/>
          </div>
            
            <div class="form-group">
                <label for="userType">User Type <span class="err">*</span> </label> <br>
                <input type="radio" id="player" name="userType" value="player" required>
                <label for="userType"> Player </label>
                <input type="radio" id="schl/clg" name="userType" value="schl/clg" required>
                <label for="userType"> School/College </label>
            </div> <br>
            
            <div class="form-group">
                <label for="referenceNo">Reference Number <span class="err">*</span> </label> <br>
                <input type="text" id="referenceNo" name="referenceNo" placeholder="Enter Reference Number" required>
            </div> <br>
            
            <div class="form-group">
                <label for="password">Password <span class="err">*</span> </label> <br>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
            </div> <br>
            
            <div class="form-group">
                <label for="captcha">Captcha <span class="err">*</span> </label> <br> 
                <img id="captcha" src="https://khelmahakumbh.gujarat.gov.in/admin/ajax/generateCaptcha" />
                <button onclick="refreshcaptcha();" name="btn-refresh" class="btn btn-success ml-2" type="button"><i class="glyphicon glyphicon-refresh"></i></button>
                <div style="width: 100px;" class="float-left ml-2">
                  <input type="text" id="captcha" name="captcha" maxlength="5" autocomplete="off" class="form-control" name="captchatext" placeholder="Captcha" id="captchatext" required>
                </div>
            </div> <br> 

            <div class="form-group5">
                <!-- <button type="submit" class="login-button">Login</button> -->
                <input type="submit" value="Register" class="login-button">
                <a href="frgt_psswd_plyr.html" class="forgot-password">Forgot Password?</a>
            </div>
            
        </form>
      </div>
  </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="cntct_bar">
        <h2>Contact Us:</h2>
        <p>Sports, Youth & Cultural Activities Department <br>
          Block No 14, 3rd Floor, Dr. Jivraj Mehta Bhavan Sector - 10, <br>
          Gandhinagar.
        </p>
      </div>
    </div>
  </section>
  
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

  <!-- Jquery js-->
        
   <script src="/Default/assets/plugins/jquery/jquery.min.js"></script>
   <script src="/Default/assets/plugins/bootstrap/js/popper.min.js"></script>
   <script src="/Default/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript">
      function refreshcaptcha()
        {
          time = Date.now();
          document.getElementById('captcha').src = '/admin/ajax/generateCaptcha?'+time;
        }
   </script>
</body>
</html>
