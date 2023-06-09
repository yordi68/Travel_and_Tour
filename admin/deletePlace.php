<?php
include('placesDB.php');

$db = new placesDB();

$toBeDeleted = $_GET['id'];


$db->delete($toBeDeleted);
header("Location: seePlaces.php");
exit();
?>
