<?php
ob_start();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 include_once 'config.php';
if( !isset($_SESSION['user_id']) ) {
  header("Location: ../index.php");

  exit;

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

  <div class="content">
  <div class="col-md-4 col-md-offset-4 text-center">
    <meta charset="utf-8">
        <h3><strike>Previous orders:</strike></h3>
        <br>

        <?php
          $user = $_SESSION["user_id"];
          $result1 = mysqli_query($con, "SELECT * from orders
            inner join order_items ON orders.id=order_items.order_id
            inner join article ON order_items.product_id = article.id
            where customer_id= ".$user);

          if($result1) {
            while($obj = $result1->fetch_object()) {

              echo '<p><h4>Order number <u>#'.$obj->order_id.'</u></h4></p>';
              echo '<p><strong>Date of acquisition</strong>: '.$obj->created.' Uhr</p>';
              echo '<p><strong>Name of the product</strong>: '.$obj->name.'</p>';
              echo '<p><strong>Price</strong>: '.$obj->price.'€</p>';
              echo '<p><strong>Quantity</strong>: '.$obj->quantity.'</p>';
              echo '<p><strong>Total price</strong>: '.$obj->total_price.'€</p>';
              echo '<p><strong>Method shipping</strong>: '.$obj->shipping.'</p>';

              echo '<p><br></p>';

            }
            echo '<br><br><br><br><br><br>';
          }
        ?>
        
      </div>
      

    
    </div>
  </body>
</html>
