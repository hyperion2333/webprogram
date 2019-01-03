<?php
   session_start();
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

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="background:none;border:none;">
  <div class="container" style="background:white;width:95% !important;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="glyphicon glyphicon-align-right" style="color:black !important;"></span>                       
      </button>
      <a class="navbar-brand child" href="../index.php"><img src="css/images/logo7.png" class="child" width="174" height="34"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
        <li class="dropdown"><div class="line"></div>
          <a href="laptops.php" >Laptops</a>
        </li>
         <li class="dropdown"><div class="line"></div>
          <a href="smartphones.php">Smartphones</a>
        </li>
         <li class="dropdown"><div class="line"></div>
          <a href="photo_video.php">Photo/Video</a>
        </li>
         <li class="dropdown"><div class="line"></div>
          <a href="tv.php">TV</a>
        </li>
         <li class="dropdown"><div class="line"></div>
          <a class="dropdown-toggle" data-toggle="dropdown" href="software.php">Software<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="operating_systems.php">Operating Systems</a></li>
            <li><a href="office_app.php">Office Applications</a></li>
          </ul>
        </li>
         <li class="dropdown"><div class="line"></div>
          <a class="dropdown-toggle back" data-toggle="dropdown" href="audio.php">Audio<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="in_ear.php">Headphones - In ear</a></li>
            <li><a href="on_ear.php">Headphones - On ear</a></li>
            <li><a href="soundsystem.php">Soundsystems</a></li>
          </ul>
        </li>
        <li class="dropdown"><div class="line"></div><a class="back" href="games.php">Games</a></li>
        <li><form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group" style="color:white !important;">
        <input type="text" class="form-control search-bar" placeholder="What are you looking for?" name="search">
        <div class="input-group-btn" style="background:none !important;">
          <button class="btn btn but-ser" type="submit">
            <i class="glyphicon glyphicon-search asd"></i>
          </button>
        </div>
      </div>
    </form></li>
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
                  <a><i>Logged in as <?php echo $_SESSION['User_name']?></i></a >
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
      </ul>
    </div>
  </div>  
</nav><br>
<div class="page"><br>
  <img src="css/images/acer.png" class="img-responsive center-block"><br><br>
<div class="a-cont" id="acer">
  
  <ul>
   

    <li><a href="#acer" class="clr"><div class="items"><div class="badge">25%</div><div class="item-head"><img src="css/images/acer_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming Acer Nitro 5 AN515-52-58SQ</p><div class="description"><p><strike>999,99&euro;</strike>759,69&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>


    <li><a href="#acer" class="clr"><div class="items"><div class="item-head"><img src="css/images/acer_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming Acer Predator PH517-51-96CP</p><div class="description"><p>2000,00&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>

    <li><a href="#acer" class="clr"><div class="items"><div class="item-head"><img src="css/images/acer_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming Acer Aspire 7 A715-71G-541M </p><div class="description"><p>1099,99&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>
  </ul>

</div>
<br><br><br><br>
  <img src="css/images/apple.png" class="img-responsive center-block"><br><br>
<!--APPLE---------------------->

<div class="a-cont" id="apple">
  
  <ul>
    <li><a href="#apple" class="clr"><div class="items"><div class="item-head"><img src="css/images/macbook.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Apple MacBook Pro 15</p><div class="description"><p>3399,99&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>


    <li><a href="#apple" class="clr"><div class="items"><div class="item-head"><img src="css/images/macbook.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Apple MacBook 12</p><div class="description"><p>1399,69&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>

    <li><a href="#apple" class="clr"><div class="items"><div class="badge">14%</div><div class="item-head"><img src="css/images/macbook.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Apple MacBook Pro 13, ecran Retina</p><div class="description"><p><strike>1955,00&euro;</strike>1681,33&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>


    <li><a href="#apple" class="clr"><div class="items"><div class="item-head"><img src="css/images/macbook.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Apple MacBook Air 13</p><div class="description"><p>1500,00&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>
  </ul>

</div>


<!---------------------------------------------------------------------->

<!--ASUS---------------------->
<br><br><br><br>
  <img src="css/images/asus.png" class="img-responsive center-block"><br><br>
<div class="a-cont" id="asus">
  
  <ul>
    <li><a href="#asus" class="clr"><div class="items"><div class="item-head"><img src="css/images/asus_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming ASUS ROG GL503VD-FY064 </p><div class="description"><p>1199,99&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>


    <li><a href="#asus" class="clr"><div class="items"><div class="item-head"><img src="css/images/asus_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming ASUS ROG GL753VE-GC016</p><div class="description"><p><strike>999,99&euro;</strike>759,69&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>

    <li><a href="#asus" class="clr"><div class="items"><div class="badge">30%</div><div class="item-head"><img src="css/images/asus_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming ASUS ROG New ZEPHYRUS GX501GI-EI006T</p><div class="description"><p><strike>3299,00&euro;</strike>2309,00&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>


    <li><a href="#asus" class="clr"><div class="items"><div class="item-head"><img src="css/images/asus_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming ASUS Pro N580VD-FY679</p><div class="description"><p>800,00&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>

  </ul>

</div>


<!---------------------------------------------------------------------->

<!--LENOVO---------------------->
<br><br><br><br>
  <img src="css/images/lenovo.png" class="img-responsive center-block"><br><br>
<div class="a-cont" id="lenovo">
  
  <ul>
    <li><a href="#lenovo" class="clr"><div class="items"><div class="item-head"><img src="css/images/lenovo_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming Lenovo Legion Y720-15IKB</p><div class="description"><p>1399,99&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>


    <li><a href="#lenovo" class="clr"><div class="items"><div class="badge">15%</div><div class="item-head"><img src="css/images/lenovo_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming Lenovo Legion Y720-15IKB</p><div class="description"><p><strike>1349,00&euro;</strike>1011.75&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>

    <li><a href="#lenovo" class="clr"><div class="items"><div class="item-head"><img src="css/images/lenovo_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming Lenovo Legion Y520-15IKBN</p><div class="description"><p>749,99&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>

  </ul>

</div>


<!---------------------------------------------------------------------->
<!--HP---------------------->
<br><br><br><br>
  <img src="css/images/hp.png" class="img-responsive center-block"><br><br>
<div class="a-cont" id="hp">
  
  <ul>
    <li><a href="#hp" class="clr"><div class="items"><div class="item-head"><img src="css/images/hp_lap.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming HP Pavilion</p><div class="description"><p>1099,99&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>


    <li><a href="#hp" class="clr"><div class="items"><div class="item-head"><img src="css/images/hp_lap.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop HP ProBook 450 G5</p><div class="description"><p>459,69&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>

    <li><a href="#hp" class="clr"><div class="items"><div class="item-head"><img src="css/images/hp_lap.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop HP 250 G6</p><div class="description"><p>349,99&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>

  </ul>

</div>


<!---------------------------------------------------------------------->
<!--MSI---------------------->
<br><br><br><br>
  <img src="css/images/msi.png" class="img-responsive center-block"><br><br>
<div class="a-cont" id="msi">
  
  <ul>
    <li><a href="#msi" class="clr"><div class="items"><div class="item-head"><img src="css/images/msi_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming MSI GL62M 7RDX</p><div class="description"><p>1455,55&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>


    <li><a href="#msi" class="clr"><div class="items"><div class="item-head"><img src="css/images/msi_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming MSI GT75 Titan 8RG</p><div class="description"><p>5300,00&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>

    <li><a href="#msi" class="clr"><div class="items"><div class="item-head"><img src="css/images/msi_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop Gaming MSI GL63 8RC-288XRO</p><div class="description"><p>1749,99&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>


    <li><a href="#" class="clr"><div class="items"><div class="item-head"><img src="css/images/msi_gam.png" class="img-responsive center-block"></div><div class="item-footer"><p>Laptop ultraportabil MSI PS42 8RB</p><div class="description"><p>1400,00&euro;</p></div><button type="button" title="Buy Now" class="button btn-cart add-cart" onclick="setcheckoutLocation('<?php echo $this->getAddToCartUrl($_product) ?>'')"><div class="back-addc"><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></div><p><span class="glyphicon glyphicon-shopping-cart" style="color:white !important;"></span>add</p></button><a href="#" target="_blank"><div class="description-2"><p>&gt;&nbsp;See description</p></div></a></div></div></a></li>
  </ul>

</div>


<!---------------------------------------------------------------------->



<br><br><br><br><br><br><br>
<div class="apply">
  <div class="apply-content">
    <div class="container" style="position:relative;"><p>You want to buy a lot of stuffs but is too hard?<br><br>Make it easier</p></div><br>
    <table class="foot-table">
      <tr>
        <td>
          <a href="register.php" class="bg-1"><div class="register"><p class="lglg">Register</p><div class="back-backregin"></div></div></a>
        </td>
        <td>
          <p>&nbsp;&nbsp;<strike>or</strike>&nbsp;&nbsp;</p>
        </td>
        <td>
          <a href="login.php" class="bg-1"><div class="login"><p class="lglg">Login</p><div class="back-backregin"></div></div></a>
        </td>
      </tr>
      </table>
  </div>
  
</div>
<div class="footer"><p style="color:white;">Copyright &copy; 2018-2019 electroBest</p></div>
</div>
</div>
<script type="text/javascript">
/*--------Fixed navigation---------*
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        document.getElementById("navigation").style.position = "relative";
    } else {
        document.getElementById("navigation").style.position = "fixed";
    }
}*/
  /*-----Carousel--------*/
  $(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});


</script>
</body>
</html>