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
		<div id="myCarousel" class="row carousel slide">
			<!-- 轮播（Carousel）指标 -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
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

			<!-- 轮播（Carousel）导航 -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="row nav">
			<div class="col-xs-1 col-sm-1 col-md-1"></div>
		</div>
	</div>

	<div class="main">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9 content"></div>
			<div class="col-xs-12 col-sm-12 col-md-3 sidebar"></div>
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