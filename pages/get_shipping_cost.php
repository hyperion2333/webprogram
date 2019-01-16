<?php
session_start();

if(isset($_POST["action"])){

    if($_POST["action"] =="get_cost"){

        $_SESSION["shipping_cost"]=$_POST["cost"];
        echo $_POST["cost"];
      
    }
}

?>