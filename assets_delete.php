<?php 
include('inc/database.php');
$aa=$_GET['id'];
$db->query("delete from assets where id=$aa");
$db->close();
header('Location:assets_show.php');
?>

