<?php
include '../../object/main.php';
$security=new security;
$connect =new connect;
if(isset($_POST['insert']))
{
	if(empty($_POST['name']) || empty($_POST['family']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']))
	{
		$security->Redirect("../adminadd","empty=1020");
	}
	else{
		$name=$security->Check_Post($_POST['name']);
			$family=$security->Check_Post($_POST['family']);
			$username=$security->Check_Post($_POST['username']);
			$password=$security->Check_Post($_POST['password']);
			$pass_hash=$security->hash_value($password);
			$email=$security->Check_Post($_POST['email']);
		if(!preg_match("/[a-zA-Z0-9._-]+@[a-zA-Z0-9\.-]+\.[a-zA-Z\.]+/",$email))
		{
			$security->Redirect("../adminadd","email=2901");
		}
		else{
			$sql2="SELECT * FROM `tbl_user` WHERE username='".$username."' or 		            email='".$email."'";
			$check_user=$connect->query($sql2);
			if(mysql_num_rows($check_user)>=1)
			{
				$security->Redirect("../adminadd","exist=1010");
			}
			else{
			$sql="INSERT INTO `tbl_user` (`name`, `family`, `username`, `password`, `email`, `level`) VALUES ('".$name."', '".$family."', '".$username."', '".$pass_hash."', '".$email."', '1')";
			$result=$connect->query($sql);
			if($result)
			{
				$security->Redirect("../adminadd","insert=2020");
			}
			else{
				$security->Redirect("../adminadd","error=2020");
			}
		}
		}
	}
}
else{
	$security->Redirect("../adminadd");
}
?>