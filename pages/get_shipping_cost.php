<?php
session_start();

if(isset($_POST["action"])){

    if($_POST["action"] =="get_cost"){

        $_SESSION["shipping_cost"]=$_POST["cost"];
        if($_SESSION["shipping_cost"]==10){
            $_SESSION["modality"]="Normal";
        }else if ($_SESSION["shipping_cost"]==16){
            $_SESSION["modality"]="Express";
        }
        echo $_POST["cost"];
      
    }
}

?>