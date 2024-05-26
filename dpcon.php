<?php
$sname = "localhost";
$uname = "root";
$passowrd = "";
$db_name = "db-restaurant";

$conn = mysqli_connect( $sname , $uname , $passowrd , $db_name );

if(!$conn) {
    echo "Connection failed!";
}
?>