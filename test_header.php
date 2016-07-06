<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>법무법인시헌</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script src="/js/common.js"></script>

</head>
<body class="main">
	<a href="#gnb" class="skip-nav sr-only sr-only-focusable">주메뉴로 건너뛰기</a>
	<a href="#content" class="skip-nav sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
	<header id="header">
		<div class="container">
			<h1><a href="#"><img src="/images/logo.jpg" alt="로고"></a></h1>
			<nav id="gnb" tabindex="-1">
				<div class="wrapper">
					<ul>
						<li>
							<a href="#">시헌소개</a>
							<ul>
								<li><a href="#">메뉴1</a></li>
								<li><a href="#">메뉴2</a></li>
								<li><a href="#">메뉴3</a></li>
								<li><a href="#">메뉴4</a></li>
							</ul>
						</li>
						<li>
							<a href="#">업무분야</a>
							<ul>
								<li><a href="#">메뉴1</a></li>
								<li><a href="#">메뉴2</a></li>
								<li><a href="#">메뉴3</a></li>
								<li><a href="#">메뉴4</a></li>
							</ul>
						</li>
						<li>
							<a href="#">구성원</a>
							<ul>
								<li><a href="#">메뉴1</a></li>
								<li><a href="#">메뉴2</a></li>
								<li><a href="#">메뉴3</a></li>
								<li><a href="#">메뉴4</a></li>
							</ul>
						</li>
						<li>
							<a href="#">소식 및 자료</a>
							<ul>
								<li><a href="#">메뉴1</a></li>
								<li><a href="#">메뉴2</a></li>
								<li><a href="#">메뉴3</a></li>
								<li><a href="#">메뉴4</a></li>
							</ul>
						</li>
						<li>
							<a href="#">관련사이트</a>
							<ul>
								<li><a href="#">메뉴1</a></li>
								<li><a href="#">메뉴2</a></li>
								<li><a href="#">메뉴3</a></li>
								<li><a href="#">메뉴4</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<ul class="lang">
				<li>CONTACT US</li>
				<li>
					<ul>
						<li><a href="#"><img src="/images/ico_flag_us.png" alt="" /></a></li>
						<li><a href="#"><img src="/images/ico_flag_cn.png" alt="" /></a></li>
					</ul>
				</li>
			</ul>
		</div>
	</header>
	
</body>
<style type="text/css">
ul,ol {
	list-style:none;
	padding:0;
	margin:0;
}
body {
	overflow-y: scroll;
	min-width:1200px;
	margin:0 auto;
	background-color:#edf2f8;
}
#header {
	border-bottom:3px solid #283b73;
	background-color:#fff;
	height:88px;
}
#header .container {
	position:relative;
	width:1200px;
	background-color:#fff;
}
#header .container h1 {
	position:absolute;
	top:19px;
	left:15px;
	margin:0;
}

#gnb {
	position:absolute;
	top:0;
	left:250px;
	z-index:9100;
	height:86px;
	overflow:hidden;
	margin:0 auto;
	background-color:#edf2f8;
}
#gnb.opened {
	height:auto; 
	background-color:#edf2f8;
}
#gnb.opened .wrapper > ul > li > ul {
	display:block; 
}
#gnb .wrapper {
	height:88px;
	background-color:#fff; 
	border-bottom:3px solid #283b73;
}
#gnb .wrapper > ul > li {
	float:left;
}
#gnb .wrapper > ul > li > a {
	width:145px;
	display:block;
	font-size:17px;
	color:#333;
	text-align:center;
	line-height:85px;
	text-decoration:none; 
	font-weight:600;
}
#gnb .wrapper > ul > li > ul {
	display:none;
	position:relative;
	padding:10px 0;
	height:100%; 
}
#gnb .wrapper > ul > li > ul > li > a {
	display:block;
	text-align:center;
	font-size:14px;
	color:#666;
	line-height:30px;
}
#gnb .wrapper > ul > li > ul > li > a:hover {
	text-decoration:underline !important;
}

#gnb .wrapper > ul > li.active, #gnb .wrapper > ul > li:hover {
	background-color:#283b73;
}
#gnb .wrapper > ul > li.active > a, #gnb .wrapper > ul > li:hover > a {
	color:#fff; 
}
#gnb .wrapper > ul > li.active > ul > li > a, #gnb .wrapper > ul > li:hover > ul > li > a {
	color:#fff; 
}

#header .container .lang {
	position:absolute;
	top:0;
	right:15px;
	z-index:9200;
}
#header .container .lang > li {
	display:inline-block;
	font-size:12px;
	color:#999;
	line-height: 85px;
}
#header .container .lang > li:first-child:after {
	content:"|";
	padding:0 10px;
}
#header .container .lang > li ul li {
	display:inline-block;
}

</style>
</html>