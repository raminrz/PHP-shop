<?php
include '../object/main.php';
$security=new security;
$template=new template;
$security->check_manage();

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
	$template->is_parametr("empty","لطفا فیلد های مورد نیاز را تکمیل کنید","red");
	$template->is_parametr("uploaderror","خطایی در فایل مورد نظر وجود دارد","red");
	$template->is_parametr("typeerror","پسوند فایل مورد نظر شما صحیح نمی باشد","red");
	 ?>
   <form action="check/add_news.php" method="post" name="frmnewsadd" enctype="multipart/form-data">
      <table width="521" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td align="right"><label for="title"></label>
            <input name="title" type="text" id="title"  dir="rtl" lang="fa" size="48" xml:lang="fa"/></td>
          <td align="right" class="blc">عنوان خبر</td>
        </tr>
      <tr>
        <td width="425" align="right">
        <input type="file" name="file"  />
        </td>
        <td width="89" align="right" class="blc">تصویر</td>
      </tr>
      <tr>
        <td align="right"><label for="short"></label>
          <textarea name="short" id="short" cols="60" rows="5"  dir="rtl" lang="fa" ></textarea></td>
        <td align="right" class="blc">متن کوتاه</td>
      </tr>
      <tr>
        <td align="right"><textarea name="long" id="long" cols="60" rows="5"  dir="rtl" lang="fa" ></textarea></td>
        <td align="right" class="blc">متن خبر</td>
      </tr>
      <tr>
        <td align="right"><input type="submit" name="send" id="send" value="ثبت خبر جدید" /></td>
        <td align="right">&nbsp;</td>
      </tr>
    </table>
    </form>
  
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