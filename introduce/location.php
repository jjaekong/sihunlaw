<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/sub.css" rel="stylesheet">
<link href="/css/introduce.css" rel="stylesheet">
</head>
<body class="sub">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<main id="content" tabindex="-1" class="introduce location">
		<div class="container">
		    <div class="row">
                <div class="col-xs-3">
                    <aside id="aside">
                        <h2>시헌소개</h2>
                        <nav id="lnb">
                            <ul>
                                <li><a href="/introduce/introduce.php">법인 소개</a></li>
                                <li><a href="/introduce/vision.php">비전과 가치</a></li>
                                <li class="active"><a href="/introduce/location.php">찾아오시는길</a></li>
                            </ul>
                        </nav>
                    </aside>
                </div>
                <div class="col-xs-9 sub-content"><!-- content Start -->
                    <div class="page-header">
                        <h3>찾아 오시는 길</h3>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/index.php">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>
                            <li><a href="/introduce/introduce.php">시헌소개</a></li>
                            <li class="active">찾아 오시는 길</li>
                        </ol>
                        <hr>
                    </div>
                    <article class="location">
                        <div class="map">
                            <p>
                                <img src="/images/introduce/map_img.jpg" alt="오시는길 지도">
                            </p>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 115px;">
                                        <col style="width: 325px;">
                                        <col style="width: 115px;">
                                        <col style="width: 315px;">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>주소</th>
                                            <td colspan="3">
                                                서울 서초구 강남대로 331 광일빌딩 19층 법무법인 시헌
                                                <dl>
                                                    <dt>우</dt>
                                                    <dd>06627</dd>
                                                </dl><br>
                                                <dl>
                                                    <dt>지번 주소</dt>
                                                    <dd>서울 강남구 서초동 1337-32 광일빌딩 19층 법무법인 시헌</dd>
                                                </dl>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>전화</th>
                                            <td>02-598-3200</td>
                                            <th>팩스</th>
                                            <td>02-598-3203</td>
                                        </tr>
                                        <tr>
                                            <th>E-mail</th>
                                            <td>sihun@sihunlaw.com</td>
                                            <th>홈페이지</th>
                                            <td>www.sihunlaw.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="traffic-info">
                            <h3>교통안내<small>편리한 교통수단으로 방문해 주세요</small></h3>
                            <h4>지하철 이용시</h4>
                            <p class="subway">
                                <img src="/images/introduce/subway.gif" alt="2호선"><i class="gangnam">호선</i> ( 또는 <span>신분당</span> <i class="bundang">신분당선</i> ) <i class="gangnam">강남역 5번 출구</i>에서 양재역 방향으로 도보 5분
                            </p>
                            <p class="attention">우성아파트 사거리에서 1층에 “파스쿠찌“ 카페가 있는 빌딩 19층</p>
                            <h4>자가용 이용시 주차장 입구 안내</h4>
                            <p>
                                <img src="/images/introduce/map_img02.jpg" alt="자가용 이용 입구 약도">
                            </p>
                            <p class="attention">광일빌딩 건물 사이에 지하로 내려가는 주차장 입구가 위치해 있습니다</p>
                        </div>
                    </article>
                </div><!-- content End -->
            </div>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
</body>
</html>
