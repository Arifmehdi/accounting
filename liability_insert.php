<?php
include('inc/database.php');
$a=$_POST['title'];
$b=$_POST['note'];
$c=$_POST['people'];
$d=$_POST['amount'];
$e=$_POST['date'];
$f=$_POST['state'];
$gg=$_POST['acc_head'];
$hh=$_POST['type'];
// print_r($_POST);
$raw=$db->query("insert into liability values (null,'$a','$b','$c',$d,'$e','$f')"); 
$raww=$db->query("insert into transactions values (null,$gg,'$b','$hh',$c,$d,'$e')");
$db->close();
header("Location:liability_show.php");
?>
