<?php
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
?>
