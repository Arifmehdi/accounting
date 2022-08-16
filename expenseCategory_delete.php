<?php 
include('inc/database.php');
$aa=$_GET['id'];
$db->query("delete from expense_category where id=$aa");
header('Location:expenseCategory_show.php');
$db->close();
?>

