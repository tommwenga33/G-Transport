<?php 
include 'setting/system.php';

if(isset($_POST['removed'])){
	$id=$_POST['selector'];
    $N = count($id);
	for($i=0; $i < $N; $i++)
	{
		 $query = $db->query("DELETE FROM user_type where id ='$id[$i]'");
	}
    header("location: manageEmployeeType.php");
}
?>
