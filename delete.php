<?php
include('connectToDb.php');

$db = new connectToDb();

$toBeDeleted = $_GET['id'];


$db->delete($toBeDeleted);
header("Location: admin_page.php");
exit();
?>
