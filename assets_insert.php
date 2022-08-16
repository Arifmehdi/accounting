<?php
include('inc/database.php');
$a=$_POST['title'];
$b=$_POST['note'];
$c=$_POST['amount'];
$d=$_POST['date'];
$e=$_POST['ac_type'];
$f=$_POST['state'];

$raw=$db->query("insert into assets values (null,'$a','$b',$c,'$d','$e','$f')"); 
$db->close();
header("Location:assets_show.php");
?>
