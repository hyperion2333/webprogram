<?php
if(!isset($_REQUEST['id'])){
	
 $DatabaseHost = "localhost";
 $DatabaseUser = "dbusers";
 $Database = "dbusers";
 }

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require "PHPMailer/PHPMailer.php";
 require "PHPMailer/Exception.php";
 require "PHPMailer/SMTP.php";
 
 session_start();
 include_once 'config.php';

 //send email confirmation with purchased items

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
     $mail->isHTML(true);
 
     //Recipients
     $mail->setFrom('webProgr.test.41@gmail.com', "ElectroBest");
     $mail->addAddress($_SESSION['User_email'], $_SESSION['User_name']);     // Add a recipient
 
     //Content
     $mail->Subject = 'Order placed';
     $mail->Body= '<h2>Order placed succesfully!</h2>
     <p>Thank you for buying from us! Below you will find an overview with the purchased items.</p>
     <p>'.$_SESSION["myCart"].'</p>
     <h3>Total: '.$_SESSION["myTotal"].' EURO </h3></p>
     <p>Have a wonderful day,<br>ElectroBest Team</p>
     ';            
     $mail->send();

 } catch (Exception $e) {
     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
 }

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>electroBest</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/style1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

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
    <br>

<div class="page">
  <br><br><br><br><br><br>
<div class="container">
    <h1 style="color:green;"><strike>Successful!</strike></h1>
    <p>Your order has been successfully submitted. <!--Der Nummer der Bestellung ist #<?php echo $_GET['id']; ?>--></p>
    <p>You will receive a confirmation of the order by e-mail in the next moment.</p>
    <p style="color:green;">Thank you that you have chosen electroBest!</p><br><br>
    <a href="../index.php" class="bg-1">Main menu</a>
</div>

    
    </div>
  </body>
</html>
