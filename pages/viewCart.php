<?php
  session_start();
  include 'Cart.php';
$cart = new Cart;
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
<script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
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
    <h1><strike>Your Cart</strike></h1><br><br><br><br><br>
    <table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '€'.$item["price"].' EUR'; ?></td>
            <td><input type="number" class="form-control text-center"  value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo '€'.$item["subtotal"].' EUR'; ?></td>
            <td>
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure for this action?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Your cart is empty!</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td>
              <a href="ourstore.php" class="bg-1"><div class="backwards"><p class="lglg1">Back</p><div class="back-backregin"></div></div></a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td><strong>Total <?php echo '€'.$cart->total().' EUR'; ?></strong></td>
            <td>
               <a href="checkout.php" class="bg-1"><div class="placeorder"><p class="lglg2">Place order</p><div class="back-backregin"></div></div></a>
            </td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
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