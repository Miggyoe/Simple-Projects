<?php

$conn = mysqli_connect("localhost", "root", "", "travel");

if (!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>

