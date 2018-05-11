<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Freehold Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
			<!--header-->
			<div class="header">
				<div class="container">
					<div class="top-header">
						<div class="logo">
							<h1><a href="index.php">MoveNow</a></h1>
						</div>
						<div class="top-menu">
						 <span class="menu"><img src="images/nav.png" alt=""/></span>
							<ul>
								<li><a href="#lianjie4" class="active">倾情推荐
                                </a></li>
								<li><a href="#lianjie2">导游</a></li>
								<li id = "denglu" style="margin-right:450px;"><a id = "test" href="#"><?php if (isset($_COOKIE["user"])){
										echo $_COOKIE['user'];
									}
									else{
										echo "登录";
									}
					?> </a></li>
								<li id = "zhuce"><a id = "test_zhuce" href="#"><?php if (isset($_COOKIE["user"])){
										echo "注销";
									}
									else{
										echo "注册";
									}
					?></a></li>
								<li><a href="#lianjie1">主打风情</a></li>
								<li><a href="#lianjie3">联系我们</a></li>
							</ul>
							 <!--script-nav-->
							 <script>
								 $("span.menu").click(function(){
								 $(".top-menu ul").slideToggle("slow" , function(){
								 });
								 });
							 </script>
						</div>
					</div>
				</div>	
			</div>	
			<!--header-->
				<!--bannerslider-->
				<div class="header-banner">
					<div class="slider">
						<div class="container">
							<div class="callbacks_container">
								<ul class="rslides" id="slider">
									<li>	
										<div class="caption">
											   
										</div>
									</li>
									<li>
										<div class="caption">
											       
										</div>
									</li>
									<li>	
										<div class="caption">
										        
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--bannerslider-->
				<!--welcome-->
				<div class="content">
					<div class="welcome">
						<div class="container">
							<h2 id="lianjie1">welcome to Freehold agency</h2>
							<div class="wel-grids">
								<div  class="col-md-4 wel-grid">
									<img src="images/p1.jpg" class="img-responsive" alt=""/>
									<h4>缤纷松林</h4>
									
								</div>
								<div class="col-md-4 wel-grid">
									<img src="images/p2.jpg" class="img-responsive" alt=""/>
									<h4>绵延群山</h4>
								
								</div>
								<div class="col-md-4 wel-grid">
									<img src="images/p3.jpg" class="img-responsive" alt=""/>
									<h4>宁静林间</h4>
									
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				<!--welcome-->
				<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
				<!--feature-->
					<div class="feature">
						<div class="container">
							<h3 id = "lianjie4">feature project</h3>
								<div class="feature-grids">
									<div class="col-md-3 feature-grid">
									<a href="#" class="mask">
									<img src="images/p4.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="col-md-3 feature-grid1">
										<h4>最美的自然</h4>
										<p>黄昏，一缕轻烟从烟囱里轻盈的飘出来，地面还留一丝余热，黄昏不像正午那样闷热，而是清爽的风中略带一丝暖意。抬头望着天空，只见红彤彤的晚霞已经染红大半片天空了，形状更是千姿百态：你看！一只凶猛的老虎正在追赶一只小兔子，跑着跑着，不见了，天空的颜色也变化着：深红粉红橘红……仿佛是魔术大师的精彩魔术</p>
										
									</div>
									<div class="col-md-3 feature-grid">
										<a href="#" class="mask">
									<img src="images/p5.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="col-md-3 feature-grid">
										<a href="#" class="mask">
									<img src="images/p6.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="feature-grids1">
									<div class="col-md-6 feat-grid">
										<a href="#" class="mask">
									<img src="images/p7.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="col-md-6 feat-grid">
										<div class="feat-grids">
											<div class="featu-grid">
												<a href="#" class="mask">
												<img src="images/p8.jpg" class="img-responsive zoom-img" alt=""></a>	
											</div>
											<div class="featu-grid1">
												<h4>大山的kui zhen</h4>
												<p>见到满天的细雨，你只要无愧地做雨中飘落的一滴，虽是一滴，却能滋润大地；见到延伸的道路，你只需无愧地做石子中平凡的一枚，虽是一枚，却能支撑前进的步伐。见到美丽的花园，你只需无愧地做花朵中平凡的一朵，虽是一朵，却能增添色彩。见到宽广的大海，你只要无愧地做鱼儿中欢快的一只，虽是一只，却能演绎生机</p>
											
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="feature-grids2">
									<div class="col-md-3 feature-grid">
										<a href="#" class="mask">
									<img src="images/p9.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="col-md-3 feature-grid">
										<a href="#" class="mask">
									<img src="images/p10.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="col-md-3 feature-grid1">
										<h4>Latest land for sale:</h4>
										<p>六角形的雪花一片一片落下来，在空中划着优美的曲线，像一个个顽皮的玉蝴蝶，轻轻地舞着，一会儿直线飞翔，一会儿盘旋着打转，忽而飘飘悠悠地从窗子外飘进来，忽而飘到人们的头上、脸上，还钻到树上，晃晃悠悠地挂在树枝上 </p>
									
									</div>
									<div class="col-md-3 feature-grid">
										<a href="#" class="mask">
									<img src="images/p11.jpg" class="img-responsive zoom-img" alt=""></a>	
									</div>
									<div class="clearfix"></div>
								</div>
						</div>
					</div>
				<!--feature-->
				<div id = "lianjie2" class="testimonials">
					<div class="container">
						<h3>testimonials</h3>
						<div class="test-grids">
							<div class="col-md-4 test-grid">
								<img src="images/te1.png" class="img-responsive" alt=""/>
								<h4>Bradley Grosh</h4>
								<p>欢迎您来我们的奥林匹克大道公园游览，我是导游员Bradley Grosh，今天很荣幸能为大家服务。</p>
							</div>
							<div class="col-md-4 test-grid">
							<img src="images/te2.png" class="img-responsive" alt=""/>
								<h4>David Austin</h4>
								<p>欢迎您来我们的法国巴黎，我是导游员小李，今天很荣幸能为大家服务。/p>
							</div>
							<div class="col-md-4 test-grid">
								<img src="images/te3.png" class="img-responsive" alt=""/>
								<h4>Patrick Pool</h4>
								<p>欢迎您来我们的英国伦敦，我是导游员Patrick Pool，今天很荣幸能为大家服务。</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="test-grids1">
							<div class="col-md-6 test-grid1">
								<img src="images/te4.png" class="img-responsive" alt=""/>
								<h4>Bradley Grosh</h4>
								<p>欢迎您来我们的德国慕尼黑，我是导游员Bradley Grosh，今天很荣幸能为大家服务。</p>
							</div>
							<div class="col-md-6 test-grid2">
							<img src="images/te5.png" class="img-responsive" alt=""/>
								<h4>David Austin</h4>
								<p>欢迎您来我们的日本东京，我是导游员David Austin，今天很荣幸能为大家服务</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!--agency-->
					
				<!--detail-->
		<div id = "lianjie3" class="details-section">
			<div class="container">
				<div class="details-grids">
					<div class="col-md-3 detail-grid">
						<h3>about</h3>
						<p>Cum sociis natoque penatibus et magnis. dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio.</p>
					</div>
					<div class="col-md-3 detail-grid">
						<h3>support</h3>
						<ul>
							<li><a href="#">New Listing Sign-Up</a></li>
							<li><a href="#">Consectetur adipiscing</a></li>
							<li><a href="#">Integer molestie lorem</a></li>
							<li><a href="#">Facilisis in pretium nisl</a></li>
						</ul>

					</div>
					<div class="col-md-3 detail-grid">
						<h3>Social</h3>
						<ul>
							<li><a href="#">facebook</a></li>
							<li><a href="#">twitter</a></li>
							<li><a href="#">google +</a></li>
							<li><a href="#">vimeo</a></li>
						</ul>
					</div>
					<div class="col-md-3 detail-grid">
						<form>
							<h3>Newsletter</h3>
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="submit" value=" ">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!--detail-->
			
			<!--footer-->

</body>
<script type="text/javascript">
	$("#denglu").click(function(){
		if($("#test").html()=="登录 "){

			window.location.href="denglu.html";

		}
		else{
			window.location.href = "yonghu.php";	
		}
	});
	$("#zhuce").click(function(){
		if($("#test_zhuce").html()=="注册"){

			window.location.href="zhuce.html";

		}
		else{	
			alert('注销成功');		
			window.location.href="zhuxiao.php";
		
		}
	});

</script>
</html>
