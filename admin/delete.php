<?php
include('./BookDB.php');

$db = new BookDB();

$toBeDeleted = $_GET['id'];


$db->delete($toBeDeleted);
header("Location: see_users.php");
exit();
?>
