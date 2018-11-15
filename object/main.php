<?php
session_start();
class security{
	
	//HASH
	function hash_value($value){
	 	return md5($value)."speiw#sb^&ewiq";
	}
	//check post data
	function Check_Post($value){
		$Return1 = mysql_real_escape_string($value);
		$Return2 = htmlspecialchars($Return1);
		return $Return2;
	}
	
	//check get data
	function Check_Get($value){
		$Return1 = mysql_real_escape_string($value);
		$Return2 = htmlspecialchars($Return1);
		$Return3 = intval($Return2);
		return $Return3;
	}
	
	//check get search
	function Check_Get_Search($value){
		$Return1 = mysql_real_escape_string($value);
		$Return2 = htmlspecialchars($Return1);
		return $Return2;
	}
	
	//redirect function
	function Redirect($page,$parametr)
	{	
		if(isset($page) && isset($parametr))
		{
		$page_filter = $page.".php?".$parametr;
		header("location:$page_filter");
		exit;
		}
		else if(isset($page)){
			$page_filter = $page.".php";
		header("location:$page_filter");
		exit;
		}
		
	}
	
	//covering function ---->include()
	function Covering($page){
		$page_filter = $page.".php";
		include "$page_filter";
	}
	
	//check manager log
	function check_manage()
	{
		if($_SESSION['manage_log']!=true)
		{
			$this->Redirect("../login/index");
		}
		
	}
	
	//check user log
	function check_user()
	{
		if($_SESSION['user_log']!=true)
		{
			$this->Redirect("../login/index");
		}
		
	}
	function read($value){
		 $return1=strip_tags($value);
		 $return2=stripslashes($return1);
		 return $return2;
	}
	
}

class template{
	
	//check get parametr
	 function is_parametr($parametr,$text,$color)
	 {
		 $security=new security;
		 $template=new template;
		 if(isset($_GET[$parametr]))
		 {
			 $security->Check_Get($_GET[$parametr]);
			 $template->massage($text,$color);
	 	}
	 }
		
	//error or success massage
	function massage($text,$color){
		echo "<b><font color=$color size='2'>$text</font></b>";
	}
	
	
	
	
}

class connect{
//connect to server and database and create security query
function query($sql)
{
	$Server_name = "localhost";
	$Server_username = "root";
	$Server_password = "";
	$Dbname = "daneshjoonews";
	$link=mysql_connect($Server_name,$Server_username,$Server_password) or
	 exit("Error in connect to server");
	if($link)
	{
		if(mysql_select_db($Dbname))
		{
			mysql_query("set names utf8");
			mysql_query("set charset utf8");
			$result = mysql_query($sql);
			if(!$result)
			{
				echo "Error in query";
			}
			return $result;
			
		}
		else{
			echo "Erron in connect to database";
		}
	}
	else{
	   echo "Error in connect to server";
	}
}
}
?>