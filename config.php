<?php 
session_start();
$connection = mysqli_connect("localhost", "root", "", "sound");
if(!$connection){
    die(mysqli_connect_error());
}
?>