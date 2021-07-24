<?php include 'setting/system.php'; ?>
<?php

if(!$_GET['id'] OR empty($_GET['id']))
{
	header('location: driver.php');
}else
{
	$id = (int)$_GET['id'];
	$query = $db->query("DELETE FROM assign WHERE id = $id ");
	if($query){
		header('location: fill.php');
	}
}

