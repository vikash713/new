<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="join";

    $db=mysqli_connect($servername,$username,$password,$database);
    if($db)
    {
        // echo "connected";
    }
    else
    {
         echo "not connected";
    }
?>