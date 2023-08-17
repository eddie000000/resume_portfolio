<?php
    $servername="localhost";
    $dbusername="root";
    $dbpassword="1234";
    $dbname="login system";
    $connect=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
    if(!$connect){
        die("connection failed! ".mysqli_connect_error());
    }
?>