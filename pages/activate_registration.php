<?php
  session_start();
  require_once 'config.php';

  if(isset($_GET["token"])){
    $token=$_GET["token"];

    $query = "select * from users where token = '{$token}'";
    $query_run = mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0){
      echo "You were successfully registered.";
    }
  }
  else{
    echo "Sorry, couldn't finish the registration process. Please click on the link in the email.";
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
    <!-- ------------------------------ -->

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
            <li class="dropdown">
              <div class="line"></div>
              <a href="laptops.php">Laptops</a>
            </li>
            <li class="dropdown">
              <div class="line"></div>
              <a href="smartphones.php">Smartphones</a>
            </li>
            <li class="dropdown">
              <div class="line"></div>
              <a href="photo_video.php">Photo/Video</a>
            </li>
            <li class="dropdown">
              <div class="line"></div>
              <a href="tv.php">TV</a>
            </li>
            <li class="dropdown">
              <div class="line"></div>
              <a
                class="dropdown-toggle"
                data-toggle="dropdown"
                href="software.php"
                >Software<span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <li><a href="operating_systems.php">Operating Systems</a></li>
                <li><a href="office_app.php">Office Applications</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <div class="line"></div>
              <a
                class="dropdown-toggle back"
                data-toggle="dropdown"
                href="audio.php"
                >Audio<span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <li><a href="in_ear.php">Headphones - In ear</a></li>
                <li><a href="on_ear.php">Headphones - On ear</a></li>
                <li><a href="sounsystem.php">Soundsystems</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <div class="line"></div>
              <a class="back" href="games.php">Games</a>
            </li>
            <li>
              <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group" style="color:white !important;">
                  <input
                    type="text"
                    class="form-control search-bar"
                    placeholder="What are you looking for?"
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
          </ul>
          <ul class="nav navbar-nav navbar-right" style="background:none;">
                        <!-- if no user is logged in -->
                        <?php if(!isset($_SESSION["user_id"])) {
              ?>
            <li>
              <div class="line"></div>
              <a href="pages/register.php" class="no-back"
                ><span
                  class="glyphicon glyphicon-user"
                  style="color:black !important;"
                ></span>
                Sign Up</a>
            </li>
            <li>
              <div class="line"></div>
              <a href="pages/login.php" class="no-back"
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
                  <a><i>Welcome, <?php echo $_SESSION['User_name']?></i></a >
             </li>

              <li>
                <div class="line"></div>
                <a href="pages/logout.php" class="no-back"
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
              <a href="#" class="no-back"
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
          <div class="panel-heading"></div>
          
              <span>Your registration has been successfully completed!</span>

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
