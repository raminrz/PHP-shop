<?php
include '../object/main.php';
$security= new security;
$connect = new connect;
if(isset($_POST['forgot'])){
	if($_POST['username']=='' || $_POST['email']=='')
	{
		$security->Redirect("forgot","empty=1090");
	}
	else{
		$username = $security->Check_Post($_POST['username']);
		$email = $security->Check_Post($_POST['email']);
		if(!preg_match("/[a-zA-Z0-9._-]+@[a-zA-Z0-9\.-]+\.[a-zA-Z\.]+/",$email))
		{
			$security->Redirect("index","email=8020");
		}
		else{
        if($_SESSION['captcha']!=$_POST['captcha'])
		{
			$security->Redirect("index","captcha=9022");
		}
		else{
		$sql="SELECT * FROM `tbl_user` WHERE username='".$username."' &&  email='".$email."' ";
		$result = $connect->query($sql);
		if(mysql_num_rows($sql)==1)
		{
			$code=substr(md5(microtime()),-20,20);
			$sql_update="UPDATE  `tbl_user` SET  `code` =  '".$code."' WHERE  `tbl_user`.`id` ='".$username."' ";
			$query=mysql_query($sql_update);
			if($query)
			{
				$security->Covering("../tools/mail/mail");
			}
			else{
				$security->Redirect("forgot","error_query=2039");
			}
		}
		else{
			$security->Redirect("forgot","notexist");
		}
		
		}
}
}
}else{
$security->Redirect("index");
}
?>