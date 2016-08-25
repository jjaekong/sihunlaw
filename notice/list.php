<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/sub.css" rel="stylesheet">
<link href="/css/notice.css" rel="stylesheet">
</head>
<body class="sub">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<main id="content" tabindex="-1" class="notice list">
		<div class="container">
		    <div class="row">
                <div class="col-xs-3">
                    <aside id="aside">
                        <h2>소식 및 자료</h2>
                        <nav id="lnb">
                            <ul>
                                <li class="active"><a href="/notice/list.php">시헌소식</a></li>
                                <li><a href="#">뉴스레터</a></li>
                                <li><a href="#">자료</a></li>
                            </ul>
                        </nav>
                    </aside>
                </div>
                <div class="col-xs-9 sub-content"><!-- content Start -->
                    <div class="page-header">
                        <h3>시헌소식</h3>
                        <ol class="breadcrumb">
                            <li>
                                <a href="/index.php">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>
                            <li><a href="/notice/list.php">소식 및 자료</a></li>
                            <li class="active">시헌소식(자세히 보기)</li>
                        </ol>
                        <hr>
                    </div>
                    <article class="notice-list">
                        <div class="search-area">
                            <form>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="title">제목</option>
                                        <option value="content">내용</option>
                                        <option value="username">작성자</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="search-keyword" class="sr-only">검색어</label>
                                    <input id="search-keyword" type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </form>
                        </div>
                        <div class="table-wrap">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width: 78px;">
                                    <col style="width: 464px;">
                                    <col style="width: 90px;">
                                    <col style="width: 125px;">
                                    <col style="width: 90px;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>제목</th>
                                        <th>작성자</th>
                                        <th>등록일</th>
                                        <th>조회수</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ntc-txt">Notice</td>
                                        <td class="ntc-strong"><a href="#">지평 PEF 실무연구회, ‘PEF(경영참여형 사모펀드)의 이해’ 출간</a></td>
                                        <td>홍길동</td>
                                        <td>2016.08.08</td>
                                        <td>1,522</td>
                                    </tr>
                                    <tr>
                                        <td class="ntc-txt">Notice</td>
                                        <td class="ntc-strong"><a href="#">최승수 변호사, 연세대학교 공학대학원 공학경영전공 겸임교수로 위촉</a></td>
                                        <td>홍길동</td>
                                        <td>2016.08.08</td>
                                        <td>1,522</td>
                                    </tr>
                                    <tr>
                                        <td class="ntc-txt">Notice</td>
                                        <td class="ntc-strong"><a href="#">지평 건설부동산팀, ‘부동산PF개발사업법’ 출간</a></td>
                                        <td>홍길동</td>
                                        <td>2016.08.08</td>
                                        <td>1,522</td>
                                    </tr>
                                    <tr>
                                        <td>149</td>
                                        <td><a href="#">이공현 대표변호사, 대한변호사협회에서 공로상 수상</a></td>
                                        <td>김영만</td>
                                        <td>2015.06.08</td>
                                        <td>245</td>
                                    </tr>
                                    <tr>
                                        <td>149</td>
                                        <td><a href="#">이공현 대표변호사, 대한변호사협회에서 공로상 수상</a></td>
                                        <td>김영만</td>
                                        <td>2015.06.08</td>
                                        <td>245</td>
                                    </tr>
                                    <tr>
                                        <td>149</td>
                                        <td><a href="#">이공현 대표변호사, 대한변호사협회에서 공로상 수상</a></td>
                                        <td>김영만</td>
                                        <td>2015.06.08</td>
                                        <td>245</td>
                                    </tr>
                                    <tr>
                                        <td>149</td>
                                        <td><a href="#">이공현 대표변호사, 대한변호사협회에서 공로상 수상</a></td>
                                        <td>김영만</td>
                                        <td>2015.06.08</td>
                                        <td>245</td>
                                    </tr>
                                    <tr>
                                        <td>149</td>
                                        <td><a href="#">이공현 대표변호사, 대한변호사협회에서 공로상 수상</a></td>
                                        <td>김영만</td>
                                        <td>2015.06.08</td>
                                        <td>245</td>
                                    </tr>
                                    <tr>
                                        <td>149</td>
                                        <td><a href="#">이공현 대표변호사, 대한변호사협회에서 공로상 수상</a></td>
                                        <td>김영만</td>
                                        <td>2015.06.08</td>
                                        <td>245</td>
                                    </tr>
                                    <tr>
                                        <td>149</td>
                                        <td><a href="#">이공현 대표변호사, 대한변호사협회에서 공로상 수상</a></td>
                                        <td>김영만</td>
                                        <td>2015.06.08</td>
                                        <td>245</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="margin:30px 0;">
                            <nav class="paging">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="first-Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&lsaquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next" >
                                            <span aria-hidden="true">&rsaquo;</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="end-Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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
