<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="hotel001";

    $mydb = mysqli_connect($server,$username,$password,$db);
    if($mydb){
        // echo "Success";
    }
    else{
        echo "Error";
    }
?>