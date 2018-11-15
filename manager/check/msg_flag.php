<?php
include '../../object/main.php';
$security=new security;
$connect=new connect;
if(isset($_GET['id']))
{
	$id=$security->Check_Get($_GET['id']);
	$sql="UPDATE `tbl_contact` SET `flag` = '1' WHERE `id` ='".$id."'";
	$result=$connect->query($sql);
	if($result)
	{
		$security->Redirect("../massage_new","success=1010");
	}
	else{
		$security->Redirect("../massage_new","error=1020");
	}
}
else{
$security->Redirect("../massage_new");
}
?>