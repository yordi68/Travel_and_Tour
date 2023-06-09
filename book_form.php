<?php
include('BookDB.php');

$db = new BookDB();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$guests = $_POST['guests'];
$arrivals = $_POST['arrivals'];
$leaving = $_POST['leaving'];

$db->insert($name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);
header("Location: book.php");
exit();
?>