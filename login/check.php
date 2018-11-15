<?php
include '../object/main.php';
$security= new security;
$connect = new connect;
if(isset($_POST['login'])){
	if($_POST['username']=='' || $_POST['password']=='' || $_POST['email']=='')
	{
		$security->Redirect("index","empty=1090");
	}
	else{
		$username = $security->Check_Post($_POST['username']);
		$password = $security->Check_Post($_POST['password']);
		$pass_hash = $security->hash_value($password);
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
		$sql="SELECT * FROM `tbl_user` WHERE username='".$username."' && password='".$pass_hash."' && email='".$email."' ";
		$result = $connect->query($sql);
		$rows=mysql_fetch_assoc($result);
		if($rows["level"]==1)
		{
			if(mysql_num_rows($result)==1)
			{
				$_SESSION['manage_name']= $rows['name']." ".$rows['family'];
				$_SESSION['manage_log'] = true;
				$security->Redirect("../manager/index","welcome=1010");
			}
			else{
				$security->Redirect("index","errorlog=9020");
			}
		}
		else if($rows["level"]==2)
		{
			if(mysql_num_rows($result)==1)
			{
				$_SESSION['user_name']= $rows['name']." ".$rows['family'];
				$_SESSION['user_log'] = true;
				$security->Redirect("../user/index","welcome=1010");
			}
			else{
				$security->Redirect("index","errorlog=9020");
			}
		}
		else{
			$security->Redirect("index","errorlog=9020");
		}
	}
}
}
}else{
$security->Redirect("index");
}
?>