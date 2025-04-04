<?php

$server = "localhost";
$username = "bluebird_user";
$password = "";
$database = "bluebirdhotel";

$conn = mysqli_connect("localhost", "root", "", "bluebirdhotel");


if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
//else{
  //   echo "<script>alert('connection successfully.')</script>";
//}
?>
