<?php 
include('inc/database.php');
$aa=$_GET['id'];
$db->query("delete from account_heads where id=$aa");
header('Location:accountHead_show.php');
$db->close();
?>

