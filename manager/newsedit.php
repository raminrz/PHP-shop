<?php
include '../object/main.php';
$security=new security;
$connect = new connect;
$template=new template;
$security->check_manage();
if(!isset($_GET['id']))
{
   $security->Redirect("news");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>پنل مدیریت سایت</title>
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
.blc {
	font-weight: bold;
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
    <td width="77%" align="center" bgcolor="#000099" class="ve">امکانات</td>
    <td width="23%" align="center" bgcolor="#000099" class="v">دسترسی های سریع </td>
  </tr>
  <tr>
    <td rowspan="16" align="center" valign="top"><p>&nbsp;</p>
     <?php
	 	if(isset($_GET['empty']))
		{
			$security->Check_Get($_GET['empty']);
			$template->massage("لطفا تمامی فیلد ها را تکمیل نمایید","red");
		}
	 	$id=$security->Check_Get($_GET['id']);
	 	$result = $connect->query("SELECT * FROM `tbl_news` WHERE id='".$id."'");
		while($rows=mysql_fetch_assoc($result))
		{
			$_SESSION['newsid']=$rows['id'];
			$_SESSION['newspic']=$rows['pic'];
	 ?>
     <form action="check/edit_news.php" method="post" name="frmnewsedit" 
     enctype="multipart/form-data">
      <table width="502" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td width="417" align="right"><label for="id"></label>
          <input name="id" type="text" id="id" size="5" readonly="readonly" 
          value="<?php echo $security->read($rows['id']); ?>"/></td>
        <td width="78" align="right" class="blc">شماره خبر</td>
      </tr>
      <tr>
        <td align="right"><label for="name"></label>
        <input name="name" type="text" id="name" size="40" dir="rtl" lang="fa" value="<?php echo $security->read($rows['name']); ?>"/></td>
        <td align="right" class="blc">نام نویسنده</td>
      </tr>
      <tr>
        <td align="right"><label for="title"></label>
          <input name="title" type="text" id="title" size="48"  dir="rtl" lang="fa"  value="<?php echo $security->read($rows['title']); ?>"/></td>
        <td align="right" class="blc">عنوان خبر</td>
      </tr>
      <tr>
        <td align="right"><label for="short"></label>
          <textarea name="short" id="short" cols="45" rows="5"  dir="rtl" lang="fa" ><?php echo $security->read($rows['short_text']); ?>
          </textarea></td>
        <td align="right" class="blc">متن کوتاه</td>
      </tr>
      <tr>
        <td align="right"><textarea name="long" id="long" cols="45" rows="5"  dir="rtl" lang="fa" ><?php echo $security->read($rows['long_text']); ?></textarea></td>
        <td align="right" class="blc">متن خبر</td>
      </tr>
      <tr>
        <td align="right"><label for="date4"></label>
          <input name="date" type="text" id="date4"  value="<?php echo $security->read($rows['date']); ?>" size="20" readonly="readonly"/></td>
        <td align="right" class="blc">تاریخ انتشار</td>
      </tr>
      <tr>
        <td align="right"><input type="file" name="file"  /></td>
        <td align="right" class="blc">عکس</td>
      </tr>
      <tr>
        <td align="right"><input type="submit" name="edit" id="edit" value="ویرایش اطلاعات" /></td>
        <td align="right">&nbsp;</td>
      </tr>
    </table>
    </form>
    <?php
		}
	?>
      <p>&nbsp;</p>
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