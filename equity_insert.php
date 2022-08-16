<?php
include('inc/database.php');
$a=$_POST['title'];
$b=$_POST['note'];
$c=$_POST['amount'];
$d=$_POST['date'];
$e=$_POST['state'];

$raw=$db->query("insert into equity values (null,'$a','$b',$c,'$d','$e')"); 
$db->close();
header("Location:equity_show.php");
?>
