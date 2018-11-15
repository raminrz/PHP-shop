<?php
include '../object/main.php';
$security= new security;
$connect = new connect;
if(isset($_POST['set'])){
	if($_POST['password']=='')
	{
		$security->Redirect("index","empty=1090");
	}
	else{
		$password = $security->Check_Post($_POST['password']);
		$pass_hash = $security->hash_value($password);
        if($_SESSION['captcha']!=$_POST['captcha'])
		{
			$security->Redirect("index","captcha=9022");
		}
		else{
		$code=$_SESSION['code_reset'];
		$sql="SELECT * FROM `tbl_user` WHERE `code`='".$code."' ";
		$result = $connect->query($sql);
		if(mysql_num_rows($result)==1)
		{
			$sql_update="UPDATE  `tbl_user` SET  `password` =  '".$pass_hash."' WHERE  `tbl_user`.`code` ='".$code."' ";
			$query=mysql_query($sql);
			if($query)
			{
				$security->Redirect("index","passwordset=1010");
			}
			else{
				$security->Redirect("forgot","error_way=1039");
			}
			
		}
		else{
			$security->Redirect("forgot");
		}
		
	}

}
}else{
$security->Redirect("index");
}
?>