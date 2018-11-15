<?php
include '../object/main.php';
$security=new security;
$template=new template;
if(!isset($_GET['code']))
{
	$security->Redirect("forgot");
}
$_SESSION['code_reset']=$_GET['code'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تعیین رمز عبور</title>
<style type="text/css">
.cent {
	text-align: center;
	font-weight: bold;
	color: #006;
}
.btn{
	border:1px solid #ccc;
	background-color:#999;
}
.ce {
	text-align: center;
}
</style>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p class="cent">تعیین یک رمز عبور جدید</p>
<center>
<?php
if(isset($_GET['empty']))
{
	$security->Check_Get($_GET['empty']);
	$template->massage("لطفا تمامی فیلد ها را تکمیل نمایید","red");
}
else if(isset($_GET['errorlog']))
{
	$security->Check_Get($_GET['errorlog']);
	$template->massage("مشخصات وارد شده صحیح نمی باشد","red");
}
else if(isset($_GET['email']))
{
	$security->Check_Get($_GET['email']);
	$template->massage("ایمیل را به شکل صحیح وارد نمایید","red");
}
else if(isset($_GET['captcha']))
{
	$security->Check_Get($_GET['captcha']);
	$template->massage("کد تصویر امنیتی را صحیح وارد نمایید","red");
}

?>
</center>
<p></p>
<form action="check_set.php" method="post" name="frmlogin">
<table width="400" border="0" align="center" cellpadding="1" cellspacing="1">
<tr>
  <td><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="304" align="right"><label for="password"></label>
        <input name="password" type="text" id="password" size="33" placeholder="username..."/></td>
      <td width="83" align="right">رمز عبور </td>
    </tr>
    <tr>
      <td align="right"><img src="../tools/captcha/Captcha.php" alt="captcha" /></td>
      <td align="right">تصویر امنیتی</td>
    </tr>
    <tr>
      <td align="right"><input name="captcha" type="text" id="captcha" size="17" maxlength="5" placeholder="Enter captcha..." /></td>
      <td align="right">کد امنیتی </td>
    </tr>
    <tr>
      <td align="right"><input name="login2" type="reset" class="btn" id="login2" value="پاک کردن فرم" />        <input name="set" type="submit" class="btn" id="set" value="ست کردن رمز عبور" /></td>
      <td align="right">&nbsp;</td>
    </tr>
  </table></td>
</tr>
</table>
</form>
<p class="ce">&nbsp;</p>
</body>
</html>