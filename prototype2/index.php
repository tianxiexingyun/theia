<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<meta content="width=device-width" name="viewport">
	<meta charset="utf-8">
	<title>Theia</title>
	<link rel="stylesheet" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" href="static/css/style.css">
	<script src="static/js/jquery-3.6.1.min.js"></script>
	<script src="static/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="header">
		<div class="row banner">
			<div class="col-xs-1 col-sm-1 col-md-1"></div>
		</div>
		<div id="siteCarousel" class="row carousel slide">
			<!-- 轮播（Carousel）指标 -->
			<ol class="carousel-indicators">
				<li data-target="#siteCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#siteCarousel" data-slide-to="1"></li>
				<li data-target="#siteCarousel" data-slide-to="2"></li>
			</ol>
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="static/imgs/carousel.jpg" alt="First slide">
				</div>
				<div class="item">
					<img src="static/imgs/carousel.jpg" alt="Second slide">
				</div>
				<div class="item">
					<img src="static/imgs/carousel.jpg" alt="Third slide">
				</div>
			</div>
		</div>
		<div class="row nav">
			<ul>
				<li id="mn_portal">
					<a href="#">文章</a>
				</li>
				<li id="mn_portal">
					<a href="#">动画</a>
				</li>
				<li class="a" id="mn_portal">
					<a href="#">漫画</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="row main">
		<div class="col-xs-12 col-sm-12 col-md-9 content">
			<div class="post-seg">
				<div class="post-seg-header">
					<div class="post-seg-title">这是标题</div>
					<div class="post-seg-author">
						<div class="post-seg-author-avatar">
						</div>
						<div class="post-seg-author-name">
							张三
						</div>
					</div>
					<div class="post-seg-time">2022-10-23</div>
				</div>

				<div class="post-seg-content">
					千里江陵一日还
				</div>

				<div class="post-seg-tags">
					<div class="post-seg-view">0</div>
					<div class="post-seg-reply">0</div>
					<div class="post-seg-fav">0</div>
				</div>
			</div>

		</div>
		<div class="col-xs-0 col-sm-0 col-md-3 sidebar">

		</div>
	</div>

	<div class="footer">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 copyright"></div>
		</div>
	</div>
</div>

</body>
</html>