<?php

session_start();
$conn = mysqli_connect('localhost','root','','products');

if(!$conn){
    die(mysqli($conn));
}

?>