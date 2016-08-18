<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/main.css" rel="stylesheet">
</head>
<body class="main">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<main id="content" tabindex="-1">
		<div class="container">
			<div class="visual">
				<ul class="bxslider">
					<li><a href="#"><img src="/images/main/main_visual01.jpg" alt=""></a></li>
					<li><a href="#"><img src="/images/main/main_visual01.jpg" alt=""></a></li>
					<li><a href="#"><img src="/images/main/main_visual01.jpg" alt=""></a></li>
				</ul>
			</div>
			<div class="news-info">
				<div class="information">
					<h3>시헌 소개</h3>
					<p>고객과 함께 성장하며 발전하는 <br> 법무법인 시헌입니다.</p>
					<p><a href="#">바로가기</a></p>
				</div>
				<div id="shortcuts">
					<h3>업무분야<small>업무분야를 소개합니다.</small></h3>
					<ul class="slider">
						<li class="shortcut-1"><a href="#"><span></span>기업법무</a></li>
						<li class="shortcut-2"><a href="#"><span></span>Venture/IPO</a></li>
						<li class="shortcut-3"><a href="#"><span></span>M&amp;A</a></li>
						<li class="shortcut-1"><a href="#"><span></span>기업법무</a></li>
						<li class="shortcut-2"><a href="#"><span></span>Venture/IPO</a></li>
						<li class="shortcut-3"><a href="#"><span></span>M&amp;A</a></li>
					</ul>
				</div>
				<div class="notice">
					<ul class="nav nav-pills nav-justified" role="tablist">
						<li role="presentation" class="active">
							<a href="#notice-1" aria-controls="notice-1" role="tab" data-toggle="tab" aria-expanded="true">소식</a>
						</li>
						<li role="presentation">
							<a href="#notice-2" aria-controls="notice-2" role="tab" data-toggle="tab" aria-expanded="false">뉴스레터</a>
						</li>
						<li role="presentation">
							<a href="#notice-3" aria-controls="notice-3" role="tab" data-toggle="tab" aria-expanded="false">자료</a>
						</li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="notice-1">
							<ul>
								<li>
									<a href="#">
										<h4><i>세미나</i>유럽에서의 특허활동-의료기술을 중유럽에서의 특허활동-의료기술을 중</h4>
										<span>16.06.01</span>
									</a>
								</li>
								<li>
									<a href="#">
										<h4><i>세미나</i>시헌, 한국방위산업학회-미래국방포시헌, 한국방위산업학회-미래국방포</h4>
										<span>16.06.01</span>
									</a>
								</li>
								<li>
									<a href="#">
										<h4><i>세미나</i>기업활력법 시행에 따른 기업의 대응</h4>
										<span>16.06.01</span>
									</a>
								</li>
								<li>
									<a href="#">
										<h4><i>시헌소식</i>제23차 IAKL(세계한인변호사회)제23차 IAKL(세계한인변호사회)제23차 IAKL(세계한인변호사회)</h4>
										<span>16.06.01</span>
									</a>
								</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="notice-2">
							뉴스레터
						</div>
						<div role="tabpanel" class="tab-pane" id="notice-3">
							자료
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
</body>
</html>
