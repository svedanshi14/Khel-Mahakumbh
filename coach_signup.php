<?php
  $showAlert=false;
  $showUsernameExistError=false;
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    include 'connectdb.php';
    $email=$_POST["email"];
    $pass=$_POST["pwd"];

    $sqlExist="SELECT * FROM `coaches` WHERE `Email`='$email';";
    $res=mysqli_query($connection,$sqlExist);
    $numRowsExist=mysqli_num_rows($res);
    if($numRowsExist>0)
    {
        $showUsernameExistError=true;
    }
    else
    {
        $sql="INSERT INTO `coaches` (`Email`, `Password`) VALUES ('$email', '$pass');
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
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Sports Authority of Gujarat">
		<meta name="author" content="Sports Authority of Gujarat">
		<meta name="keywords" content="Sports Authority of Gujarat">
		<link rel="icon" href="/Default/assets/img/brand/favicon.ico?1685868862" type="image/x-icon"/>
		<title>Coach Registration</title>
		
        <link href="/Default/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/Default/assets/css/icons.css"/>
        <link rel="stylesheet" href="/Default/assets/css/style.css"/>
        <link rel="stylesheet" href="/Default/assets/css/dark-boxed.css"/>
        <link rel="stylesheet" href="/Default/assets/css/boxed.css"/>
        <link rel="stylesheet" href="/Default/assets/css/skins.css"/>
        <link rel="stylesheet" href="/Default/assets/css/dark-style.css"/>
        <link rel="stylesheet" href="/Default/assets/css/custom.css"/>
        <link rel="stylesheet" href="/Default/assets/css/colors/color.css"/> 
        <link rel="stylesheet" href="/Default/assets/plugins/perfect-scrollbar/perfect-scrollbar.css"/>	

        <style>
            body{
                background-color: rgb(33, 33, 96);
            }
        </style>        
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
                <a href="player_signup.php"> Player Register</a>
                <a href="player_login.php"> Player Login</a>
                <a href="coach_signup.php"> DSO / Senior Coach Register</a>
                <a href="coach_login.php"> DSO / Senior Coach Login</a>
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
            header("location: coach_login.php");
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
		<!-- Page -->
		<div class="page main-signin-wrapper">

            <!-- Row -->
            <div class="justify-content-center text-center sign-2">
                <div class="col-md-8 col-xl-4 col-sm-8" style="margin: 0px auto;">
                    <div class="sign1 col-md-12">
                        <div class="card">
                            <div class="card-body mt-2 mb-2 p-5">
                                <img src="https://khelmahakumbh.gujarat.gov.in/Default/assets/img/brand/logo.png" class="header-brand-img text-left mb-5 desktop-logo" alt="logo">
                                <img src="https://khelmahakumbh.gujarat.gov.in/Default/assets/img/brand/logo.png" class="header-brand-img desktop-logo text-left mb-5 theme-logo" alt="logo">
                                
                                <form action="coach_signup.php" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="frmlogin" name="frmlogin" data-bv-message="This value is not valid" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                    <div style="display:none;">
                                        <input type="hidden" name="_method" value="POST"/>
                                        <input type="hidden" name="_csrfToken" autocomplete="off" id="_csrfToken_1685868862.8848" value="PTI4uzunoUcXAyQhkYjTp1cvPvxHm+uL3x9m9zjid03Z+i68IiZRkDvpDF2OGg0kA4cizu+pFoWS5npP4Axknw=="/>
                                    </div>
                                    
                                    <!-- <form name="frmlogin" id="frmlogin" action="" method="post"
                                        class="form-horizontal"
                                        data-bv-message="This value is not valid"
                                        data-bv-feedbackicons-valid="fa fa-check-circle"
                                        data-bv-feedbackicons-invalid="fa fa-times-circle"
                                        data-bv-feedbackicons-validating="fa fa-sync"
                                        enctype="multipart/form-data">-->
                                        
                                        <h1 class="text-center mb-2">Coach Sign up</h1> <br>
                                        <div class="form-group text-left">
                                            <label class="mb-1" for="email">Email</label>
                                            <input required class="form-control rounded-11" id="email" name="email" type="email" placeholder="Enter Email address" data-bv-notempty-message="Email is required"  autocomplete="off">
                                        </div>

                                        <div class="form-group text-left">
                                            <label class="mb-1" for="pwd">Password</label>
                                            <input required class="form-control rounded-11" id="pwd" name="pwd" type="password" placeholder="Enter Password" data-bv-notempty-message="Password is required"  autocomplete="off">
                                        </div>

                                        <div class="form-group mb-0 text-left clearfix">
                                            <div class="float-left">
                                                <img id="captcha" src="https://khelmahakumbh.gujarat.gov.in/admin/ajax/generateCaptcha" />
                                                <button onclick="refreshcaptcha();" name="btn-refresh" class="btn btn-success ml-2" type="button"><i class="glyphicon glyphicon-refresh"></i></button>
                                            </div>
                                            <div style="width: 100px;" class="float-left ml-2"><input type="text" maxlength="5" autocomplete="off" class="form-control" name="captchatext" placeholder="Captcha" id="captchatext" required data-bv-notempty-message="Captcha is required"></div>
                                        </div>

                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a href="frgt_psswd_coach.html">Forgot Password?</a>
                                            <!-- <button class="btn btn-primary" type="submit">Login</button> -->
                                            <input type="submit" value="Register">
                                        </div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

        <!-- Jquery js-->
        
        <script src="/Default/assets/plugins/jquery/jquery.min.js"></script>
        <script src="/Default/assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="/Default/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/Default/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="/Default/assets/plugins/select2/js/select2.min.js"></script>
        <script src="/Default/assets/js/custom.js"></script>
        <script src="/Default/assets/plugins/bootstrapvalidator/bootstrapValidator.js"></script>
        <script src="/Default/assets/plugins/jsencrypt.min.js"></script>
        <script type="text/javascript">
        
            $(document).ready(function() {
				var publicKey = "";
				publicKey += "-----BEGIN PUBLIC KEY-----\r\n";
				publicKey += "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCn+gSMOvb+6oi2eWqmxlt/qoq4\r\n";
				publicKey += "3S2j7yXrLhIhtS02NPE+t14ZAQxMiJd5YPKps5ZcT2JhIdTv75ZPFmnj2+E0MhL2\r\n";
				publicKey += "XkCfkW6LEg4xVMr8TeV5cyVtRRjd8XkL+awA8niJKNYIJk8y/3112cT7TnrkB6Ct\r\n";
				publicKey += "4LHrrn2FG2Y9nVn8hQIDAQAB\r\n";
				publicKey += "-----END PUBLIC KEY-----\r\n";
				$(document).ready(function() {
					$('#frmlogin').bootstrapValidator().on('success.form.bv', function(e) {
						e.preventDefault();
						var content = $('#pwd').val()+'ZW6p10oOj9Sn4K2urQJFBLS';
						var encrypt = new JSEncrypt();
						encrypt.setKey(publicKey);
						var encoded = encrypt.encrypt(content);
						$('#pwd').val(encoded);
						document.getElementById('frmlogin').submit();
					});
				});
            });
            function refreshcaptcha()
            {
                time = Date.now();
                document.getElementById('captcha').src = '/admin/ajax/generateCaptcha?'+time;
            }
        </script>

	</body>
</html>