<?php
$connect=new connect;
?>
<td align="center"><a href="index.php">صفحه اصلی</a></td>
  </tr> 
  <tr><td align="center"><a href="news.php">مدیریت اخبار</a></td>
  </tr>
  <tr>
  <tr>
  <td align="center"><a href="newsadd.php">درج خبر</a></td>
  </tr>
  <tr>
  <td align="center">
  <?php
  $sql_msg="SELECT * FROM `tbl_contact`";
  $result_msg = $connect->query($sql_msg);
  $counter=0;
  while($rows_msg=mysql_fetch_assoc($result_msg))
  {
	  if($rows_msg['flag']==0)
  		$counter++;
  }
  if($counter!=0)
  	echo "<a href='massage_new.php'>($counter) پیام های دریافتی </a>";
  else 
  	echo "<a href='massage.php'>پیام های دریافتی</a>";
  ?>
  </a></td>
  </tr>
  <tr>
  <td align="center"><a href="massage.php">لیست کلیه پیام ها</a></td>
  </tr>
  <tr>
  <td align="center"><a href="logout.php">خروج از سامانه</a></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>