<?php
include('inc/database.php');
echo $a=$_POST['name'];
$b=$_POST['email'];
echo $c=hash('md5',$_POST['password']);
$d=$_POST['status'];


$raw=$db->query("insert into admin values (null,'$a','$b','$c','$d')"); 
$db->close();
header("Location:login.php");
?>
