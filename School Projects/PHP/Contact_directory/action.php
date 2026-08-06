<?php

include "config.php";

if (isset($_POST['create'])){
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $address = $_POST['address'];
    $phonenumber = $_POST['phonenumber'];
    $photourl = $_POST['photourl'];

    mysqli_query($conn, "INSERT INTO contact (lastname, firstname, address, phonenumber, photourl)
                        VALUES ('$lastname', '$firstname', '$address', '$phonenumber', '$photourl')");
    header("Location: index.php");
    exit;   
}

if (isset($_POST['update'])){
    $id = $_GET['id'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $address = $_POST['address'];
    $phonenumber = $_POST['phonenumber'];
    $photourl = $_POST['photourl'];

    mysqli_query($conn, "UPDATE contact
                        SET lastname='$lastname', firstname='$firstname', address='$address', phonenumber='$phonenumber', photourl='$photourl'
                        WHERE id=$id");
    header("Location: index.php");
    exit;   
}

if (isset($_GET['id'])){
    $id = $_GET['id'];

    mysqli_query($conn, "DELETE FROM contact WHERE id=$id");
    header("Location: index.php");
    exit;   
}