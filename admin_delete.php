<?php 
include('inc/database.php');
$aa=$_GET['id'];
$db->query("delete from admin where id=$aa");
header('Location:index.php');
?>

