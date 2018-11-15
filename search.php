<?php
include 'object/main.php';
$security = new security;
$connect = new connect;
$template=new template;
if(!isset($_GET['key']))
{
	$security->Redirect("index");
}
?>
<html>
	<head>
		<title>جستجوی شما</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style/css/bootstrap-responsive.css">
		<!-- HTML5 Shim for IE Backward Compatibility -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="style/css/style.css">
		<!--[if IE 8]>
			<link rel="stylesheet" type="text/css" href="css/style-ie8.css">
		<![endif]-->
		<script type="text/javascript" src="style/js/jquery-1.8.3.min.js"></script>
    <style type="text/css">
    #themeyab-page #themeyab-page-center #themeyab-content #themeyab-content-left #themeyab-content-main #themeyab-news #news table {
	font-weight: bold;
}
    #themeyab-page #themeyab-page-center #themeyab-content #themeyab-content-left #themeyab-content-main #themeyab-news #news table {
	font-size: 14px;
}
    #themeyab-page #themeyab-page-center #themeyab-content #themeyab-content-left #themeyab-content-main #themeyab-news #news table {
	color: #FFF;
}
    #themeyab-page #themeyab-page-center #themeyab-content #themeyab-content-left #themeyab-content-main #themeyab-news #news table {
	font-family: "Arial Black", Gadget, sans-serif;
}
    #themeyab-page #themeyab-page-center #themeyab-content #themeyab-content-left #themeyab-content-main #themeyab-news #news table {
	font-size: 16px;
}
    #themeyab-page #themeyab-page-center #themeyab-content #themeyab-content-left #themeyab-content-main #themeyab-news #news table {
	font-family: Arial, Helvetica, sans-serif;
}
    #themeyab-page #themeyab-page-center #themeyab-content #themeyab-content-left #themeyab-content-main #themeyab-news #news table {
	color: #000;
}
    #themeyab-page #themeyab-page-center #themeyab-content #themeyab-content-left #themeyab-content-main #themeyab-news #news table tr td {
	font-size: 14px;
}
    </style>
	</head>
<body>
		<div id="themeyab-page" class="full">
			<div id="themeyab-page-center" class="middle">	
				<?php
					$security->Covering("inc_temp/header");
				?>
				<div id="themeyab-menu-search" class="middle-center">
					<div id="themeyab-menu">
						<ul>
					<?php
					$security->Covering("inc_temp/menu_top");
					?>
						</ul>
					</div>
					<div id="themeyab-search">
					<?php
					$security->Covering("inc_temp/search");
					?>
					</div>
				</div>
				<div class="middle-center" id="themeyab-slide">
					<div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
							<?php 
							$security->Covering("inc_temp/slider");
							?>
						</div>
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
					</div>
				</div>
				<div class="middle-center" id="themeyab-content">
					<div id="themeyab-content-right">
						<div id="themeyab-menu-right" class="style-content">
							<ul>
								<?php
								$security->Covering("inc_temp/menu_right");
								?>
							</ul>
						</div>
						<?php
						$security->Covering("inc_temp/news");
						?>
					</div>
					<div id="themeyab-content-left">
					  <div id="themeyab-content-main">
					  <div id="themeyab-news" class="style-content">
								<h3>نتایج جستجوی مورد نظر</h3>
								<div id="news">
						
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                 <?php
								 $counter=15;
								$page =$security->Check_Get(@$_GET['page']);
								if($page=='') $page=1;
								$start=($page-1)*$counter;
								 $keyword=$security->Check_Get_Search($_GET['key']);
	 $sql="SELECT * FROM `tbl_news` WHERE `title` LIKE
		 '%".$keyword."%' ORDER BY `id` DESC LIMIT ".$start.",".$counter." ";
								 $result = $connect->query($sql);
								 if($result)
								 {	
									 if(mysql_num_rows($result)>0)
									 {
		 echo " <table width='677' border='1' cellspacing='2' cellpadding='2'>
		   <tr>
          <td width='360' height='24' align='center' bgcolor='#0099FF'>عنوان خبر</td>
          <td width='310' align='center' bgcolor='#0099FF'>تاریخ انتشار</td>
                                    </tr>";
		 							while($rows=mysql_fetch_assoc($result))
									{
										echo " <tr>
                              <td align='center'>
	<a href=newsdetail.php?id=$rows[id]>".$security->read($rows['title'])."</a>
			   					</td>
                               <td align='center'>
		<a href=newsdetail.php?id=$rows[id]>".$rows['date']."</a>
								</td>
                                    </tr>";
									}
		 
		 echo "</table>";
									 }
									 else{
							$template->massage("جستجوی مورد نظر نتیجه نداشت","red");
									 }
								 }
								 else{
								 	$template->massage("خطا در جستجو","red");
								 }
								 ?> 
                                 
                                  
                                  <p>&nbsp;</p>
                                    <?php
	 $sql="SELECT * FROM `tbl_news`";
	 $query=$connect->query($sql);
	 $number=mysql_num_rows($query);
	 $number=ceil($number/$counter);
	 if($page>0 && $page<$number) 
	 {
		 echo " <a href=?page=".($page+1)."> بعدی </a> ";
	 }
	 if($page>1 && $page<=$number)
	 {
		 echo " <a href=?page=".($page-1)."> قبلی </a> ";
	 }
	 echo "<br/>صفحه فعلی:".$page;
     ?>
                                  <p><br/>
                                    <br/>
                                  </p>
                        </div>
                                
							</div>
						</div>
					</div>
                    
				</div>
			</div>
           
		</div>
		<div class="full" id="themeyab-footer">
			<?php
			$security->Covering("inc_temp/footer");
			?>
		</div>			
	<script src="style/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="style/js/fs.js"></script>
	</body>
</html>	