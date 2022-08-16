<?php
include('inc/database.php');
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['password'];
$d=$_POST['status'];
$f=$_POST['id'];

$db->query("update admin set name='$a',email='$b',password=$c,status='$d' where id=$f");
$db->close();

header("Location:index.php");