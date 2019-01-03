<?php
session_start();
require_once './pages/config.php';

if(isset($_POST["action"])){

    if($_POST["action"] =="update_time"){

        $user_id=$_SESSION["user_id"];
        $last_activity=date("Y-m-d H:i:s",STRTOTIME(date('h:i:sa')));

        $query="update login_details set last_activity='$last_activity' where user_id='$user_id'";
        $query_run =  mysqli_query($con, $query);
        // echo $query_run;
    }

    if($_POST["action"] == "fetch_data"){
        $query_select="select distinct login_details.user_id, users.email from users inner join login_details 
                on login_details.user_id=users.id where last_activity > DATE_SUB(NOW(), INTERVAL 5 SECOND)";
       
        if($result =  mysqli_query($con, $query_select)){
            echo mysqli_num_rows($result);;
        }
        
    }
}

?>