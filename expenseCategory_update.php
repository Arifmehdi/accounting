<?php
include('inc/database.php');
$a=$_POST['ac_type'];
$b=$_POST['ac_name'];
$c=$_POST['status'];
$f=$_POST['id'];

$db->query("update account_heads set type='$a',name='$b',status='$c' where id=$f");
$db->close();

header("Location:accountHead_show.php");