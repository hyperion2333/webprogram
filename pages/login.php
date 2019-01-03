<?php

  session_start();
  require_once 'config.php';

  if (isset($_POST['login'])){
    $User_email = $_POST['email'];
    $User_password= $_POST['password'];

    $hashedPassword = hash('sha256', $User_password);

    $query = "select * from users where email = '$User_email' and password = '$hashedPassword'";

    $query_run =  mysqli_query($con, $query);
    if($row = mysqli_fetch_assoc($query_run)){
      //valid user
      $_SESSION['User_email']=$row['email'];
      $_SESSION['User_name'] = $row['username'];
      $user_id=$row['id'];
      $last_activity=date("Y-m-d H:i:s",STRTOTIME(date('h:i:sa')));

      $query_insert= "insert into login_details(user_id, last_activity) values('$user_id','$last_activity')";  
      if(mysqli_query($con, $query_insert)){
        // Obtain last inserted id
        $last_id=mysqli_insert_id($con);

        //After succesfully login, redirect user to home page (index.php)
        if(!empty($last_id)){
          $_SESSION['type']=100;
          $_SESSION["user_id"]=$user_id;
          header('location: ../index.php');
        }
      }

    }
    else{
      //invalid
      echo '<script type="text/javascript"> alert("Invalid credentials!") </script>';
    }



  }else{

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
            <li>
              <div class="line"></div>
              <a href="register.php" class="no-back"
                ><span
                  class="glyphicon glyphicon-user"
                  style="color:black !important;"
                ></span>
                Sign Up</a
              >
            </li>
            <li>
              <div class="line"></div>
              <a href="login.php" class="no-back"
                ><span
                  class="glyphicon glyphicon-log-in"
                  style="color:black !important;"
                ></span>
                Login</a
              >
            </li>
            <li>
              <div class="line"></div>
              <a href="#" class="no-back"
                ><span
                  class="glyphicon glyphicon-shopping-cart"
                  style="color:black !important;"
                ></span>
                Cart</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="page">
      <div class="container">
        <div class="row main">
          <div class="panel-heading"></div>
          <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="login.php">
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
                      autocomplete="off"
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
                      autocomplete="off"
                      required
                    />
                  </div>
                </div>
              </div>

              <div class="form-group ">
                <input
                  type="submit"
                  name="login"
                  value="Login"
                  class="btn btn-primary btn-lg btn-block login-button"
                />
              </div>
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
