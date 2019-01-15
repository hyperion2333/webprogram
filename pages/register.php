<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require "PHPMailer/PHPMailer.php";
  require "PHPMailer/Exception.php";
  require "PHPMailer/SMTP.php";
  if(isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
  }

  require_once 'config.php';

  $error = false;
  $error_message=null;

  if(isset($_POST['signup'])){
      $User_name = mysqli_real_escape_string($con, $_POST['name']);
      $User_email = mysqli_real_escape_string($con, $_POST['email']);
      $User_password = mysqli_real_escape_string($con, $_POST['password']);
      $User_confirm = mysqli_real_escape_string($con, $_POST['confirm']);
      $User_adress = mysqli_real_escape_string($con, $_POST['adress']);
      $User_city = mysqli_real_escape_string($con, $_POST['city']);
      $User_postalcode = mysqli_real_escape_string($con, $_POST['postal-code']);

      if (!preg_match("/^[a-zA-Z ]+$/",$User_name)) {
          $error = true;
          $error_message = "No special characters are allowed.";
      }

      if(!filter_var($User_email,FILTER_VALIDATE_EMAIL)) {
          $error = true;
          $error_message = "Please insert a valid email address.";
      }

      if(strlen($User_password) <= 8) {
          $error = true;
          $error_message = "Please insert a password longer than 8 characters.";
      }
      if($User_password != $User_confirm) {
          $error = true;
          $error_message = "The passwords do not match";
      }
      if(strlen($User_adress) <= 4) {
          $error = true;
          $error_message = "Please insert an adress!";
      }
      if(strlen($User_city) <= 2) {
          $error = true;
          $error_message = "Please insert a correct city!";
      }
      if(strlen($User_postalcode) < 6 || strlen($User_postalcode) > 6) {
          $error = true;
          $error_message = "Postal Code should have 6 characters!";
      }


      if(!$error){
        //prevent user register with the same email
        $query = "select * from users where email = '$User_email'";
        $query_run = mysqli_query($con,$query);

        $hashedPassword = hash('sha256', $User_password);

        if(mysqli_num_rows($query_run)>0){
          //there is already a user with the same email
          echo '<script type="text/javascript"> alert("Email already exists. Try another one") </script>';
        }
        else{
          //create a unique random token to be sent to the email
          $token = 'qwertyuiopasdfghjklzxcvbnm1234567890!@#$%^&*()';
          $token=str_shuffle($token);
          $token = substr($token,0,10);

          $query = "insert into users(username, email, password, token,adress,city,postalcode) values('$User_name','$User_email', '$hashedPassword', '$token','$User_adress','$User_city','$User_postalcode')";
          $query_run = mysqli_query($con, $query);

          if($query_run){

            //send email verification

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings           
                $mail->isSMTP();                                      // Set mailer to use SMTP  
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'webProgr.test.41@gmail.com';       // SMTP username
                $mail->Password = 'webProgr.test.41AA';               // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable ssl encryption
                $mail->Port = 465;                                    // TCP port to connect to
                $mail->Host = "smtp.gmail.com"; 
            
                //Recipients
                $mail->setFrom('webProgr.test.41@gmail.com', "ElectroBest");
                $mail->addAddress($User_email, $User_name);     // Add a recipient
            
                //Content
                $mail->Subject = 'Finalize registration';
                $mail->Body    = 'Thank you for joining ElectroBest! Please click on the link below to
                finish registration: http://localhost/webprogram/pages/activate_registration.php?token=$token';           
                $mail->send();
               
               echo 'Email sent. Please Check your email and activate your account.';
                // echo '<script type="text/javascript"> console.log("message has been sent")</script>';

            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
          }else{
            echo '<script type="text/javascript"> alert("Error!") </script>';
          }
        
        }

      }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>electroBest</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/style1.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Play"
      rel="stylesheet"
    />
  </head>
  <body>
    <!---------------------------------->

    <nav
      class="navbar navbar-default navbar-static-top"
      role="navigation"
      style="background:none;border:none;"
    >
      <div class="container" style="background:white;width:95% !important;">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#myNavbar"
          >
            <span
              class="glyphicon glyphicon-align-right"
              style="color:black !important;"
            ></span>
          </button>
          <a class="navbar-brand child" href="../index.php"
            ><img
              src="css/images/logo7.png"
              class="child"
              width="174"
              height="34"
          /></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">

            
            
            <li>
              <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group" style="color:white !important;">
                  <input
                    type="text"
                    class="form-control search-bar"
                    placeholder="Search for something?"
                    name="search"
                  />
                  <div
                    class="input-group-btn"
                    style="background:none !important;"
                  >
                    <button class="btn btn but-ser" type="submit">
                      <i class="glyphicon glyphicon-search asd"></i>
                    </button>
                  </div>
                </div>
              </form>
            </li>
            <li class="dropdown">
              <div class="line"></div>
              <a class="back" href="ourstore.php">Our Store</a>
            </li>
            <li class="dropdown">
              <div class="line"></div>
              <a class="back" href="orders.php">Your Orders</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right" style="background:none;">

            <!-- if no user is logged in -->
            <?php if(!isset($_SESSION["user_id"])) {
              ?>
            <li>
              <div class="line"></div>
              <a href="register.php" class="no-back"
                ><span
                  class="glyphicon glyphicon-user"
                  style="color:black !important;"
                ></span>
                Sign Up</a>
            </li>
            <li>
              <div class="line"></div>
              <a href="login.php" class="no-back"
                ><span
                  class="glyphicon glyphicon-log-in"
                  style="color:black !important;"
                ></span>
                Login</a>
            </li>

            <?php
              //this means that if the user is already logged in, show Logout option
            }else {
                ?>
             <li>
                <div class="line"></div>
                  <a href="#" style="color:black;"><span
                  class="glyphicon glyphicon-user"
                  style="color:black !important;"
                ></span><?php echo $_SESSION['User_name']?></a >
             </li>

              <li>
                <div class="line"></div>
                <a href="logout.php" class="no-back"
                  ><span
                    class="glyphicon glyphicon-log-out"
                    style="color:black !important;"
                  ></span>
                  Log out</a >
             </li>
                
            <?php

              }
            ?>


            <li>
              <div class="line"></div>
              <a href="viewCart.php" class="no-back"
                ><span
                  class="glyphicon glyphicon-shopping-cart"
                  style="color:black !important;"
                ></span>
                Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="page">
      <div class="container">
        <div class="row main">
          <div class="panel-heading">
            <div class="panel-title text-center">
              <h1 class="title">electroBest</h1>
            </div>
          </div>
          <div class="main-login main-center">
            <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
            <form
              class="form-horizontal"
              method="post"
              action="register.php"
              name="signupform"
            >
              <div class="form-group">
                <label for="name" class="cols-sm-2 control-label"
                  >Your Name</label
                >
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span
                      class="input-group-addon"
                      style="border-radius:0px !important;"
                      ><i class="fa fa-user fa" aria-hidden="true"></i
                    ></span>
                    <input
                      type="text"
                      class="form-control"
                      name="name"
                      id="name"
                      placeholder="Enter your Name"
                      required
                    />
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="cols-sm-2 control-label"
                  >Your Email</label
                >
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span
                      class="input-group-addon"
                      style="border-radius:0px !important;"
                      ><i class="fa fa-envelope fa" aria-hidden="true"></i
                    ></span>
                    <input
                      type="text"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Enter your Email"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="cols-sm-2 control-label"
                  >Password</label
                >
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span
                      class="input-group-addon"
                      style="border-radius:0px !important;"
                      ><i class="fa fa-lock fa-lg" aria-hidden="true"></i
                    ></span>
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      id="password"
                      placeholder="Enter your Password"
                      required
                    />
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="confirm" class="cols-sm-2 control-label"
                  >Confirm Password</label
                >
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span
                      class="input-group-addon"
                      style="border-radius:0px !important;"
                      ><i class="fa fa-lock fa-lg" aria-hidden="true"></i
                    ></span>
                    <input
                      type="password"
                      class="form-control"
                      name="confirm"
                      id="confirm"
                      placeholder="Confirm your Password"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="adress" class="cols-sm-2 control-label"
                  >Adress</label
                >
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span
                      class="input-group-addon"
                      style="border-radius:0px !important;"
                      ><i class="fa fa-envelope fa" aria-hidden="true"></i
                    ></span>
                    <input
                      type="text"
                      class="form-control"
                      name="adress"
                      id="adress"
                      placeholder="Enter your Adress"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="city" class="cols-sm-2 control-label"
                  >City</label
                >
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span
                      class="input-group-addon"
                      style="border-radius:0px !important;"
                      ><i class="fa fa-envelope fa" aria-hidden="true"></i
                    ></span>
                    <input
                      type="text"
                      class="form-control"
                      name="city"
                      id="city"
                      placeholder="Enter your Adress"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="postal-code" class="cols-sm-2 control-label"
                  >Postal Code</label
                >
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span
                      class="input-group-addon"
                      style="border-radius:0px !important;"
                      ><i class="fa fa-envelope fa" aria-hidden="true"></i
                    ></span>
                    <input
                      type="text"
                      class="form-control"
                      name="postal-code"
                      id="postal-code"
                      placeholder="Enter your Adress"
                      required
                    />
                  </div>
                </div>
              </div>

              <div class="form-group ">
                <input
                  type="submit"
                  name="signup"
                  value="Register"
                  class="btn btn-primary btn-lg btn-block login-button"
                />
              </div>
              <div class="login-register"><a href="login.php">Login</a></div>
            </form>
          </div>
        </div>
      </div>
      <br /><br /><br />

      <br /><br /><br />

      <br /><br /><br />

      <div class="footer">
        <p style="color:white;">Copyright &copy; 2018-2019 electroBest</p>
      </div>
    </div>
  </body>
</html>
