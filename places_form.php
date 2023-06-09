<?php
include ('./placesDB.php');

$db = new placesDB();

$place_name = $_POST['place_name'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_POST['image'];


$db->insert($place_name, $price, $description, $image);
header("Location: addPlaces.php");
exit();
?>
