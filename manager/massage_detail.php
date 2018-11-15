<?php
include '../object/main.php';
$security=new security;
$connect = new connect;
$security->check_manage();
if(!isset($_GET['id']))
{
	$security->Redirect("massage");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>جزئیات پیام</title>
<style type="text/css">
body p {
	color: #FFF;
}
manager_fm {
	color: #FFF;
}
.v {
	color: #FFF;
	font-weight: bold;
}
.ve {
	color: #FFF;
	font-weight: bold;
}
body p {
	font-weight: bold;
	color: #009;
}
veww {
	font-weight: bold;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.font_news {
	color: #FFF;
}
</style>
</head>

<body>

<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td height="33" colspan="2" align="center"><p>
	<?php echo $_SESSION['manage_name']; ?> به پنل مدیریت خود خوش آمدید</p></td>
  </tr>
  <tr>
    <td width="77%" align="center" bgcolor="#000099" class="ve">جزئیات پیام خوانده نشده</td>
    <td width="23%" align="center" bgcolor="#000099" class="v">دسترسی های سریع </td>
  </tr>
  <tr>
    <td rowspan="16" align="center" valign="top"><p>&nbsp;</p>
     
     <?php
	 	$id=$security->Check_Get($_GET['id']);
		$sql="SELECT *  FROM `tbl_contact` WHERE `id`='".$id."'";
		$result=$connect->query($sql);
		while($rows=mysql_fetch_assoc($result))
		{
	 ?>
      <table width="400" height="168" border="0" align="right" cellpadding="1" cellspacing="1">
        <tr>
          <td width="338" height="23" align="right"><?php echo $security->read($rows['name']); ?></td>
          <td width="55" align="right">نام </td>
        </tr>
        <tr>
          <td height="24" align="right"><?php echo $security->read($rows['email']); ?></td>
          <td align="right">ایمیل</td>
        </tr>
        <tr>
          <td align="right"><?php echo $security->read($rows['text']); ?></td>
          <td align="right">متن</td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>
        </tr>
      </table>
      <?php
		}
	  ?>
      <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <?php
	$security->Covering("inc_temp/menu");
	?>
  </tr>
</table>
</body>
</html>