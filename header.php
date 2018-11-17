<?php
	require_once('manage/conn.php');
	$sql="select * from config";
	$result=mysql_query($sql);
	$config=mysql_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="css/top.css"/>
<link rel="stylesheet" type="text/css" href="css/container.css"/>
<link rel="stylesheet" type="text/css" href="css/aboutus.css"/>
<link rel="stylesheet" type="text/css" href="css/news.css"/>
<link rel="stylesheet" type="text/css" href="css/produce.css"/>
<link rel="stylesheet" type="text/css" href="css/message.css"/>
<link rel="stylesheet" type="text/css" href="css/footer.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery.jslides.css" media="screen" />

<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/jquery.jslides.js"></script>
<title><?=$config['site_title']?></title>
</head>
<body>
<div class='top'> 
	<div class='center'>
		<div class='logo'><img src='images/logo.png' width='141' height='42'/></div>
		<div class='menu'>
			<a href='index.php'>home</a>
			<a href='aboutus.php'>about us</a>
			<a href='news.php'>news</a>
			<a href='produce.php'>produce</a>
			<a href='message.php'>message us</a>
			<a href='contact.php'>contact us</a>
		</div>
	</div>
</div>
<div id='full-screen-slider'>
	<ul id='slides'>
		<li style="background: url(images/banner1.jpg) center top no-repeat">
			<a href='' target='_blank'>first pic</a>
		</li>
		<li style="background: url(images/banner2.jpg) center top no-repeat">
			<a href='' target='_blank'>second pic</a>
		</li>
	</ul>
</div>