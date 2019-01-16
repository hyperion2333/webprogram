<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  require_once 'pages/config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>electroBest</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/online_users_handler.js"></script>
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
          <a class="navbar-brand child" href="index.php"
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
              <a class="back" href="pages/ourstore.php">Our Store</a>
            </li>
            <li class="dropdown">
              <div class="line"></div>
              <a class="back" href="pages/orders.php">Your Orders</a>
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
                  <a href="#" style="color:black;"><span
                  class="glyphicon glyphicon-user"
                  style="color:black !important;"
                ></span><?php echo $_SESSION['User_name']?></a >
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
              <a href="pages/viewCart.php" class="no-back"
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
    <br />

    <div style="width:150px;height:40px;background:black;color:white;text-align:center;line-height: 40px;">
        <div>Users online:<span id="user_login_status">0</span></div>
    </div>

    <div class="first-page">
      <h3>Just <strike>here</strike> you can find the best option for you!</h3>
      <div class="container-fluid carousel" style="background:none !important;">
        <div
          class="row"
          style="width:80% !important;margin-left:10% !important;background:none !important;"
        >
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div
              class="carousel carousel-showmanymoveone slide"
              id="itemslider"
            >
              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="#"
                      ><img
                        src="css/images/acer_gami.jpeg"
                        class="img-responsive center-block"
                    /></a>
                    <span class="badge"
                      ><p style="line-height:35px !important;">25%</p></span
                    >
                    <h4 class="text-center">
                      Laptop Gaming Acer Nitro 5 AN515-52-58SQ
                    </h4>
                    <h5 class="text-center">
                      <strike>999,99&euro;</strike>759,69&euro;
                    </h5>
                  </div>
                </div>

                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="#"
                      ><img
                        src="css/images/asus_gami.png"
                        class="img-responsive center-block"
                    /></a>
                    <h4 class="text-center">
                      Laptop Gaming ASUS ROG GL753VE-GC016
                    </h4>
                    <h5 class="text-center">1150,99&euro;</h5>
                  </div>
                </div>

                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="#"
                      ><img
                        src="css/images/samsung_img.png"
                        class="img-responsive center-block"
                    /></a>
                    <span class="badge"
                      ><p style="line-height:35px !important;">35%</p></span
                    >
                    <h4 class="text-center">TV LED Smart Samsung</h4>
                    <h5 class="text-center">
                      <strike>3299,00&euro;</strike>2144,00&euro;
                    </h5>
                  </div>
                </div>

                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="#"
                      ><img
                        src="css/images/macbook.png"
                        class="img-responsive center-block"
                    /></a>
                    <span class="badge"
                      ><p style="line-height:35px !important;">14%</p></span
                    >
                    <h4 class="text-center">
                      Laptop Apple MacBook Pro 13, ecran Retina
                    </h4>
                    <h5 class="text-center">
                      <strike>1955,00&euro;</strike>1681,33&euro;
                    </h5>
                  </div>
                </div>

                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="#"
                      ><img
                        src="css/images/iphonex_img.png"
                        class="img-responsive center-block"
                    /></a>
                    <span class="badge"
                      ><p style="line-height:35px !important;">7%</p></span
                    >
                    <h4 class="text-center">Iphone X 256GB</h4>
                    <h5 class="text-center">
                      <strike>849,99&euro;</strike>790,49&euro;
                    </h5>
                  </div>
                </div>

                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="#"
                      ><img
                        src="css/images/msi_gam.png"
                        class="img-responsive center-block"
                    /></a>
                    <h4 class="text-center">Laptop Gaming MSI GL62M 7RDX</h4>
                    <h5 class="text-center">1455,55&euro;</h5>
                  </div>
                </div>
                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="#"
                      ><img
                        src="css/images/samsungs9_img.png"
                        class="img-responsive center-block"
                    /></a>
                    <span class="badge"
                      ><p style="line-height:35px !important;">25%</p></span
                    >
                    <h4 class="text-center">SAMSUNG Galaxy S9 256Gb</h4>
                    <h5 class="text-center">
                      <strike>839,99&euro;</strike>629,99&euro;
                    </h5>
                  </div>
                </div>
                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="#"
                      ><img
                        src="css/images/hp_lap.png"
                        class="img-responsive center-block"
                    /></a>
                    <h4 class="text-center">Laptop Gaming HP Pavilion</h4>
                    <h5 class="text-center">1099,99&euro;</h5>
                  </div>
                </div>
                <div class="item">
                  <div class="col-xs-12 col-sm-6 col-md-2">
                    <a href="#"
                      ><img
                        src="css/images/lenovo_gam.png"
                        class="img-responsive center-block"
                    /></a>
                    <span class="badge"
                      ><p style="line-height:35px !important;">15%</p></span
                    >
                    <h4 class="text-center">
                      Laptop Gaming Lenovo Legion Y720-15IKB
                    </h4>
                    <h5 class="text-center">
                      <strike>1349,00&euro;</strike>1011.75&euro;
                    </h5>
                  </div>
                </div>
              </div>

              <div id="slider-control">
                <a
                  class="left carousel-control pos-l"
                  href="#itemslider"
                  data-slide="prev"
                  style="background:none !important;"
                  ><span
                    class="glyphicon glyphicon-menu-left"
                    style="color:black !important;"
                  ></span
                ></a>
                <a
                  class="right carousel-control pos-r"
                  href="#itemslider"
                  data-slide="next"
                  style="background:none !important;"
                  ><span
                    class="glyphicon glyphicon-menu-right"
                    style="color:black !important;"
                  ></span
                ></a>
              </div>
            </div>
          </div>
        </div>
        <br /><br /><br /><br /><br />
      </div>
      <table class="table">
        <tr>
          <th>
            <img
              src="css/images/gama1.png"
              class="img-responsive center-block"
            />
          </th>
          <th>
            <img
              src="css/images/return.png"
              class="img-responsive center-block"
            />
          </th>
          <th>
            <img
              src="css/images/support.png"
              class="img-responsive center-block"
            />
          </th>
          <th>
            <img
              src="css/images/open-cart.png"
              class="img-responsive center-block"
            />
          </th>
        </tr>
        <tr>
          <td>
            <p>
              The most wide<br />
              product range
            </p>
          </td>
          <td><p>Return in 30 days</p></td>
          <td><p>Support 24h</p></td>
          <td><p>Return the products</p></td>
        </tr>
        <tr style="border-bottom:3px solid #000 !important;">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

      <br /><br /><br /><br /><br /><br /><br />
      <div class="apply">
        <div class="apply-content">
          <div class="container" style="position:relative;">
            <p>
              You want to buy a lot of stuffs but is too hard?<br /><br />Make
              it easier
            </p>
          </div>
          <br />
          <table class="foot-table">
            <tr>

            <?php if(!isset($_SESSION["user_id"])) {
              ?>
              <td>
                <a href="pages/register.php" class="bg-1"
                  ><div class="register">
                    <p class="lglg">Register</p>
                    <div class="back-backregin"></div></div
                ></a>
              </td>
              <td><p>&nbsp;&nbsp;<strike>or</strike>&nbsp;&nbsp;</p></td>
              <td>
                <a href="pages/login.php" class="bg-1"
                  ><div class="login">
                    <p class="lglg">Login</p>
                    <div class="back-backregin"></div></div
                ></a>
              </td>


              <?php 
            }else{
              ?>
              <td>
                <a href="pages/logout.php" class="bg-1"
                  ><div class="login">
                    <p class="lglg">Log out</p>
                    <div class="back-backregin"></div></div
                ></a>
              </td>
            <?php }?>
            </tr>
          </table>
        </div>
      </div>
      <div class="footer">
        <p style="color:white;">Copyright &copy; 2018-2019 electroBest</p>
      </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#itemslider").carousel({ interval: 3000 });

        $(".carousel-showmanymoveone .item").each(function() {
          var itemToClone = $(this);

          for (var i = 1; i < 6; i++) {
            itemToClone = itemToClone.next();

            if (!itemToClone.length) {
              itemToClone = $(this).siblings(":first");
            }

            itemToClone
              .children(":first-child")
              .clone()
              .addClass("cloneditem-" + i)
              .appendTo($(this));
          }
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
        <?php
        if($_SESSION["user_id"])
        {
        ?>
             //this function will update user last activity timestamp in the login_details database
            function update_user_activity() {
              var action = "update_time";
              $.ajax({
                url: "activity_details.php",
                method: "POST",
                data: { action: action },
                success: function(data) {
                  console.log("client updated its timestamp " + data)
                }
              });
            }

            setInterval(function() {
              update_user_activity();
            }, 1000);
        <?php
        }
        ?>
            fetch_user_login_data();
            setInterval(function (){
              fetch_user_login_data();  //every 3 seconds, display updated no. of online users 
            }, 1000);
           
            function fetch_user_login_data(){
              var action="fetch_data";
              $.ajax({
                url: "activity_details.php",
                method: "POST",
                data: { action: action },
                success: function(data) {
                    document.getElementById('user_login_status').innerHTML=data;//data is the response from the server
                    console.log("waiting data from server: "+data +" user(s)");
                }
              })
            }
  
      });
    </script>
    
  </body>
</html>
