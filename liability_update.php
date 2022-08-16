<?php
include('inc/database.php');
$a=$_POST['title'];
$b=$_POST['note'];
$c=$_POST['people'];
$d=$_POST['amount'];
$e=$_POST['date'];
$f=$_POST['id'];
$g=$_POST['state'];

$db->query("update liability set title='$a',note='$b',people_id=$c,amount=$d,date='$e',status='$g' where id=$f");
$db->close();

header("Location:liability_show.php");