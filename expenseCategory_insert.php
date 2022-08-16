<?php
include('inc/database.php');
$a=$_POST['category'];
$b=$_POST['status'];


$raw=$db->query("insert into expense_category values (null,'$a','$b')"); 
$db->close();
header("Location:expenseCategory_show.php");
?>
