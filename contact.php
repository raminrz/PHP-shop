<?php
include 'object/main.php';
$security=new security;
$template=new template;
?>
<html>
	<head>
		<title>تماس با ما</title>
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
	</head>
	<body>
		<div id="themeyab-page" class="full">
			<div id="themeyab-page-center" class="middle">	
				<div id="themeyab-header" class="middle-center">
					<div id="themeyab-header-right">
						<img src="style/img/logo.png" alt=""/>
						<h1><a href="index.php">کانون بازنشستگان یزد</a><span>پرتال اطلاع رسانی کانون بازنشستگان کشور</span></h1>
					</div>
					<div id="themeyab-header-left">
						<ul>
							<li class="fb"><a href="#"></a></li>
							<li class="tw"><a href="#"></a></li>
						</ul>
					</div>
				</div>
				<div id="themeyab-menu-search" class="middle-center">
					<div id="themeyab-menu">
						<ul>
							<li><a href="index.php" id="case1">صفحه نخست</a></li>
							<li><a href="#">محصولات</a></li>
							<li><a href="contact.php">تماس با ما</a></li>
							<li><a href="#">درباره ما</a></li>
							<li><a href="#">گالری تصاویر</a></li>
							<li><a href="#">نقشه سایت</a></li>
						</ul>
					</div>
					<div id="themeyab-search">
						<?php
						$security->Covering("inc_temp/search");
						?>
					</div>
				</div>
				<div class="middle-center" id="themeyab-content">
					<div id="themeyab-content-right">
						<div id="themeyab-menu-right" class="style-content">
							<ul>
								<li><a href="index.php">صفحه نخست</a></li>
								<li><a href="#">محصولات</a></li>
								<li><a href="contact.php">تماس با ما</a></li>
								<li><a href="#">درباره ما</a></li>
								<li><a href="#">گالری تصاویر</a></li>
								<li><a href="#">نقشه سایت</a></li>
								<li><a href="#">خدمات</a></li>
							</ul>
						</div>
						<div class="page-contact">
							<div id="themeyab-newsletter" class="style-content newsletter-contact">
								<h3>عضویت در خبرنامه</h3>
								<span>با ثبت ایمیل خود در بخش خبرنامه ، مشترک آخرین اخبار و اطلاعات سازمان شوید:</span>
								<form action="">
									<input class="txt-register" type="text" onFocus="if(this.value=='Email Address') this.value='';" onBlur="if(this.value=='') this.value='Email Address';" value="Email Address"/>
									<input class="btn-register" type="button" value="ثبت"/>
								</form>
								<p><a href="#">یا میتوانید از طریق فید خبری اخبار ما را دنبال کنید.</a></p>
							</div>
						</div>	
					</div>
					<div id="themeyab-content-left" class="contact-left">
					  <h3>تماس با ما</h3>
                      <?php
 					if(isset($_GET['empty']))
					  {
						  $security->Check_Get($_GET['empty']);
				$template->massage("لطفا تمامی فیلد های موردنیاز را تکمیل نمایید","red");
					  }
					 if(isset($_GET['email']))
					  {
						  $security->Check_Get($_GET['email']);
				$template->massage("لطفا ایمیل را صحیح وارد نمایید","red");
					  }
					  	  else if(isset($_GET['error']))
					  {
						  $security->Check_Get($_GET['error']);
				$template->massage("با عرض پوزش پیام شما ثبت نشد","red");
					  }
					  
					    else if(isset($_GET['send']))
					  {
						  $security->Check_Get($_GET['send']);
				$template->massage("با تشکر به زودی پیام شما توسط مدیریت بررسی می شود","green");
					  }
					  
					  ?>
			<form action="check/contact.php" method="post" name="contact">
				<input name="name" type="text" id="name" placeholder="نام شما..." />
						  <input name="email" type="text" id="email" placeholder="email..." dir="ltr" />
				<textarea name="text" id="text" type="text"/></textarea>
  <input type="submit" name="btn-send" value="ارسال پیغام" id="btn-send"/>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="full" id="themeyab-footer">
			<div class="middle">	
				<div class="middle-center" id="themeyab-footer-center">
					<p>تمام حقوق این سایت محفوظ و متعلق به سازمان می باشد.</p>
				</div>
			</div>
		</div>				
	<script src="style/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="style/js/fs.js"></script>
	</body>
</html>	