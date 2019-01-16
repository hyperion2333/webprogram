<?php
	ob_start();
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	include 'config.php';



$query = $con->query("SELECT * FROM users WHERE id = ".$_SESSION['user_id']);
$custRow = $query->fetch_assoc();
?>
<?php
//

//
include 'Cart.php';
$cart = new Cart;

//
if($cart->total_items() <= 0){
    header("Location: ../index.php");
}

//
//$_SESSION['sessCustomerID'] = 1;





 $DatabaseHost = "localhost";
 $DatabaseUser = "dbusers";

 $Database = "dbusers";



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
    </nav><br>

<div class="page">
<div class="container">
  <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">


          </ul>
        </div>
    <h1><strike>Order overview</strike></h1><br><br><br><br>
    <table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $myItems='';
        if($cart->total_items() > 0){
            //
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
            $myItems.=nl2br("\r\n");
            $myItems.=$item["name"] . "&nbsp;&nbsp; &nbsp;| &nbsp;&nbsp;&nbsp;" . $item["price"] . " EUR". "&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;X " . $item["qty"] . '&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;' . $item["subtotal"] . ' EUR';
            
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '€'.$item["price"].' EUR'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '€'.$item["subtotal"].' EUR'; ?></td><br>
      
        </tr>
      
        <?php 
      }$myItems.=nl2br("\r\n\r\n");}else{ ?>
        <tr><td colspan="4"><p>The shopping cart is empty!</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
    
      </tr>
            <th>Shipping cost</th>
            <th></th>
            <th></th>
            <th><span id="show_ship_cost_cell"></span></th>
        <tr>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ 
                $totalPrice=$cart->total();
                $_SESSION["myTotal"]=$totalPrice;
              ?>
            <td class="text-center"><strong>Total <span id="show_total_cost"><?php echo $totalPrice ?></span></strong></td>
            <?php }
             ?>
        </tr>
    </tfoot>
    </table>
    <?php $_SESSION["myCart"]=$myItems;?>





    <div id="shipping_mode">
        <h4><u>Select a shipping mode:</u></h4><br>
          <input type="radio"  name="shipping" value="10" /> Normal - 10 euros<br>
          <span id="ship1" style="font-style: italic; color:green" ></span><br>

          <input type="radio" name="shipping" value="16"/> Express - 16 euros<br>
          <span  id="ship2"  style="font-style: italic; color:green" ></span><br>

    </div>


    <div class="shipAddr">
        <h4><u>Address:</u></h4><br>
        <p><?php echo $custRow['username']; ?></p>
        <p><?php echo $custRow['email']; ?></p>
        <p><?php echo $custRow['adress']; ?></p>
        <p><?php echo $custRow['city']; ?></p>
        <p><?php echo $custRow['postalcode']; ?></p>
    </div>

    <div class="footbtn">
        <a href="viewCart.php" class="bg-1"><div class="backwards"><p class="lglg1">Back</p><div class="back-backregin"></div></div></a>
        <a href="cartAction.php?action=placeOrder" class="bg-1" id="order" style="right:0px !important; position: absolute;"><div class="placeorder" style="right:0px !important; position: absolute;"><p class="lglg2">Place order</p><div class="back-backregin"></div></div></a>
		
    </div>


<script language="javascript" type="text/javascript">

  var cost;

  $('input[type=radio][name=shipping]').change(function() {
    if (this.value == '10') {
      console.log(this.value);
      document.getElementById("ship1").style.display = "visible";
      document.getElementById("ship1").innerHTML="Delivery time: 8 days";
      document.getElementById("ship2").innerHTML="";
      document.getElementById("ship2").style.display = "hidden";
      cost = this.value;
     
     
      $.ajax({
      url: "get_shipping_cost.php",
      method: "POST",
      data: { 
        action:"get_cost",
        cost: cost },
      success: function(data) {
        console.log("From server: " + data);
        var c= parseFloat(data)+<?php echo $totalPrice?>;
        document.getElementById("show_total_cost").innerHTML=c.toFixed(2);
        document.getElementById("show_ship_cost_cell").innerHTML=data+" EUR";
      }
  })


    }
    else if (this.value == '16') {
      console.log(this.value);
      document.getElementById("ship2").style.display = "visible";
      document.getElementById("ship2").innerHTML="Delivery time: 2 days"
      document.getElementById("ship1").style.display = "hidden";
      document.getElementById("ship1").innerHTML=""
      cost = this.value;

      $.ajax({
      url: "get_shipping_cost.php",
      method: "POST",
      data: { 
        action:"get_cost",
        cost: cost },
      success: function(data) {
        console.log("From server: " + data);
        var c=parseFloat(data)+<?php echo $totalPrice?>;
        document.getElementById("show_total_cost").innerHTML=c.toFixed(2);
        document.getElementById("show_ship_cost_cell").innerHTML=data+" EUR";
      }
  })
  
    }
  });

</script>


</div>
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
</body>
</html>
