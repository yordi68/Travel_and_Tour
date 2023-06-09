<?php
include('BookDB.php');

$db = new BookDB();

$toBeDeleted = $_GET['id'];


$db->delete($toBeDeleted);
header("Location: admin_page.php");
exit();
?>
