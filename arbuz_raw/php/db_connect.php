<?php

$link = mysqli_connect("localhost", "admin", "admin", "db-shop");
if (mysqli_connect_errno())
{echo "Failed to connect to MySQL database : " . mysqli_connect_error();}

?>

<?php
//session_start();
//function secure($string)
//{
//    $string = htmlspecialchars($string);
//    return ($string);
//}
//function connect() {
//    $server = "localhost";
//    $user = "admin";
//    $pass = "admin";
//    $con = mysqli_connect($server, $user, $pass);
//    if (!$con)
//        die("Connection failed");
//    else
//        return ($con);
//}
//?>