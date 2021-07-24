<?php include 'setting/system.php'; ?>
<?php

if(!$_GET['id'] OR empty($_GET['id']))
{
	header('location: manageEmployee.php');
}else
{
	$id = (int)$_GET['id'];
	$query = $db->query("DELETE FROM users WHERE id = $id ");
	if($query){
		header('location: manageEmployee.php');
	}
}

