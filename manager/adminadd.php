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
<title>افزودن مدیر جدید</title>
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
    <td width="77%" align="center" bgcolor="#000099" class="ve">افزودن مدیر</td>
    <td width="23%" align="center" bgcolor="#000099" class="v">دسترسی های سریع </td>
  </tr>
  <tr>
    <td rowspan="16" align="center" valign="top"><p>&nbsp;</p>
     <?php
	$template->is_parametr("empty","لطفا فیلد های مورد نیاز را تکمیل کنید","red");
	$template->is_parametr("error","خطا : درج در سیستم","red");
	$template->is_parametr("insert","مدیر جدید افزوده شد","green");
	$template->is_parametr("exist","مدیری با این مشخصات از قبل در سیستم موجود می باشد","green");
	 ?>
   <form action="check/add_admin.php" method="post" name="frmadminadd" >
      <table width="521" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td align="right"><label for="name"></label>
            <input name="name" type="text" id="name"  dir="rtl" lang="fa" size="48" xml:lang="fa"/></td>
          <td align="right" class="blc">نام </td>
        </tr>
      <tr>
        <td width="425" align="right"><input name="family" type="text" id="family"  dir="rtl" lang="fa" size="48" xml:lang="fa"/></td>
        <td width="89" align="right" class="blc">نام خانوادگی</td>
      </tr>
      <tr>
        <td align="right"><label for="short">
          <input name="username" type="text" id="username"  dir="ltr" lang="fa" size="48" xml:lang="fa"/>
        </label></td>
        <td align="right" class="blc">نام کاربری </td>
      </tr>
      <tr>
        <td align="right"><input name="password" type="text" id="password"  dir="ltr" lang="fa" size="48" xml:lang="fa"/></td>
        <td align="right" class="blc">رمز عبور</td>
      </tr>
      <tr>
        <td align="right"><input name="email" type="text" id="email"  dir="ltr" lang="fa" size="48" xml:lang="fa"/></td>
        <td align="right" class="blc">ایمیل</td>
      </tr>
      <tr>
        <td align="right"><input type="submit" name="insert" id="insert" value="ثبت مدیر جدید" /></td>
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