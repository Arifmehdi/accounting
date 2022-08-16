<?php
include('inc/database.php');
$a=$_POST['name'];
$b=$_POST['email'];
$c=hash('md5',$_POST['password']);
$d=$_POST['status'];


$raw=$db->query("insert into admin values (null,'$a','$b','$c','$d')"); 
$db->close();
header("Location:index.php");
?>
