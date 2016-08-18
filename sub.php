<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/sub.css" rel="stylesheet">
</head>
<body class="sub">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<main id="content" tabindex="-1" class="sub">
		<div class="container">
		    <div class="row">
                <div class="col-xs-3">
                    <aside id="aside">
                        <h2>시헌소개</h2>
                        <nav id="lnb">
                            <ul>
                                <li class="active"><a href="#">법인 소개</a></li>
                                <li><a href="#">비전과 가치</a></li>
                                <li><a href="#">찾아오시는길</a></li>
                            </ul>
                        </nav>
                    </aside>
                </div>
                <div class="col-xs-9">
                    <div class="page-header">
                        <h3>법인 소개</h3>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>
                            <li><a href="#">시헌소개</a></li>
                            <li class="active">법인 소개</li>
                        </ol>
                        <hr>
                    </div>

                    <article>


                        <div class="search-area" style="margin:30px 0;">
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

                        <ul class="dot-list">
                            <li>content</li>
                            <li>content</li>
                            <li>content</li>
                            <li>content</li>
                            <li>content</li>
                        </ul>

                        <div class="table-wrap" style="margin: 30px 0;">
                            <table class="table table-bordered">
                                <colgroup>
                                    <col style="width: 80px;">
                                    <col style="width: 484px;">
                                    <col style="width: 73px;">
                                    <col style="width: 133px;">
                                    <col style="width: 100px;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>subject</th>
                                        <th>subject</th>
                                        <th>subject</th>
                                        <th>subject</th>
                                        <th>subject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>content</td>
                                        <td>content</td>
                                        <td>content</td>
                                        <td>content</td>
                                        <td>content</td>
                                    </tr>
                                    <tr>
                                        <td>content</td>
                                        <td>content</td>
                                        <td>content</td>
                                        <td>content</td>
                                        <td>content</td>
                                    </tr>
                                    <tr>
                                        <td>content</td>
                                        <td>content</td>
                                        <td>content</td>
                                        <td>content</td>
                                        <td>content</td>
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

                        <div class="btn-area" style="margin: 30px 0;">
                            <p>
                                <a href="#" class="btn btn-blue" role="button">목록보기</a>
                                <a href="#" class="btn btn-gray" role="button">수정하기</a>
                            </p>
                        </div>
                    </section>
                </div>
            </div>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
</body>
</html>
