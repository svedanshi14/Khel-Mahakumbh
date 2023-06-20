<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="KhelMahakumbh";

    $connection=mysqli_connect($servername,$username,$password,$database);
    if(!$connection)
    {
        die("Error".mysqli_connect_error());
    }
?>
