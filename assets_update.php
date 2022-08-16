<?php
include('inc/database.php');
$a=$_POST['title'];
$b=$_POST['note'];
$c=$_POST['amount'];
$d=$_POST['date'];
$e=$_POST['ac_type'];
$f=$_POST['state'];
$g=$_POST['id'];

$db->query("update assets set title='$a',note='$b',amount=$c,date='$d',type='$e',status='$f' where id=$g");
$db->close();

header("Location:assets_show.php");