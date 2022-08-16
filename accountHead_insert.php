<?php
include('inc/database.php');
$a=$_POST['ac_type'];
$b=$_POST['ac_name'];
$d=$_POST['status'];


$raw=$db->query("insert into account_heads values (null,'$a','$b','$d')"); 
$db->close();
header("Location:accountHead_show.php");
?>
