
<!DOCTYPE HTML>
<html>
<head>
<title>About</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Freehold Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.1.min.js"></script>






<style>
.tuijian{
	font-size: 18px;
	margin-top: 100px;
	margin-left: auto;
	margin-right: auto;

}
#ipt{
	background-color:#ffcc00 ;
	width: 100px;
	margin-left: 200px;
}
#sousuo{
	margin-top: -20px;
}
p { 
padding: 12px 0; 
margin: 0; 
font-size: .8em; 
line-height: 1.5; 
} 
form { 
margin: 0; 
} 
#search_box { 
	float: right;
	margin-top: 15px;
	margin-right: 20px;
width: 201px; 
height: 31px; 
background: url(//files.jb51.net/demoimg/200912/bg_search_box.gif); 
} 
#search_box #s { 
float: left; 
padding: 0; 
margin: 6px 0 0 6px; 
border: 0; 
width: 159px; 
background: none; 
font-size: .8em; 
} 
#search_box #go { 
float: right; 
margin: 4px 4px 0 0; 
} 
	.main{
		width: 800px;
		margin:20px auto;
	}
	span{
		display: inline-block;
		width: 200px;
		height: 25px;
		line-height: 25px;
		vertical-align: center;
		text-align: left;
		margin-bottom: 10px;
	}
	.tag{
		font-size: 13px;
		margin-left: 370px;
		vertical-align: bottom;
		text-align: center;
		margin-bottom: 0;
	}
	.text{
		width: 750px;
		height: 180px;
		margin:0 auto;

		resize:none;
	}
	
	input{
		float: right;
		display: inline-block;
		width: 30px;
		height: 20px;
		background: #E2526F;
		border: 0;
		margin-left: 670px;
		margin-top: 10px;
	}
	.creatediv{
		width: 675px;
		height: 80px;
		border: 1px solid gray;
		position: relative;
		margin-top: 10px;
		padding-left: 75px;
	}
	.createinput{
		width: 80px;
		height: 30px;
		position:absolute;
		right: 5px;
		bottom:5px;
	}
	.createimg{
		width: 50px;
		height: 50px;
		position: absolute;
		top: 15px;
		left: 15px;
	}
	.createdivs{
		width:600px;
		height:50px;
		position: absolute;
		top: 15px;
		left: 85px;
	}
</style>
</head>
<body>
			<!--header-->
			<div class="header">

<div id="search_box"> 

<input type="text" id="s" placeholder="想去哪" class="swap_value" /> 
<input id = "sousuo" type="image" src="//files.jb51.net/demoimg/200912/btn_search_box.gif" width="27" height="24" /> 

</div> 
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
				<div class="header-banner ban1">
				</div>
				<!--bannerslider-->
		<div class="content">
		<!--about-->
			<div class="main">
	<span>我的游记</span>
	<span class="tag">你最多可以输入30个字符</span>
	<textarea id="text" cols="30" rows="10" maxlength="30" class="text"></textarea><br>
	<input  type="button" value="发 表" id="ipt">
	<div id="txt" >
		

	</div>
	<div class = "tuijian">
		<p id = "tuijian_word"></p>
	</div>
</div>
	<!--about-->
			<div class="agency-list">
				<div class="container">
					<h3>agent listing</h3>
					<div class="agent-grids">
						<div class="col-md-3 agent-grid">
							<img src="images/a1.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-3 agent-grid1">
							<h4>Lewis Tompson</h4>
							<p>欢迎您来我们的非洲游览，我是导游员Bradley Grosh，今天很荣幸能为大家服务。</p>
							<span class="agent-text"> +1 800 603 6035</span>
							<span class="agent-text" ><a href="mailto:info@example.com">mail@example.com</a></span>
						</div>
						<div class="col-md-3 agent-grid">
							<img src="images/a2.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-3 agent-grid1">
							<h4>Jessica Priston</h4>
							<p>欢迎您来我们的日本游览，我是导游员Jessica Priston，今天很荣幸能为大家服务。</p>
							<span class="agent-text"> +1 800 603 6035</span>
							<span class="agent-text" ><a href="mailto:info@example.com">mail@example.com</a></span>
						</div>
						<div class="clearfix"></div>
						</div>
						<div class="agent-grids1">
						<div class="col-md-3 agent-grid">
							<img src="images/a3.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-3 agent-grid1">
							<h4>Lewis Tompson</h4>
							<p>欢迎您来我们的欧洲游览，我是导游员Lewis Tompson，今天很荣幸能为大家服务。</p>
							<span class="agent-text"> +1 800 603 6035</span>
							<span class="agent-text" ><a href="mailto:info@example.com"> mail@example.com</a></span>
						</div>
						<div class="col-md-3 agent-grid">
							<img src="images/a4.jpg" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-3 agent-grid1">
							<h4>Jessica Priston</h4>
							<p>欢迎您来我们的美洲游览，我是导游员Jessica Priston，今天很荣幸能为大家服务。</p>
							<span class="agent-text"> +1 800 603 6035</span>
							<span class="agent-text" ><a href="mailto:info@example.com">mail@example.com</a></span>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
		</div>
				<!--detail-->
		<div class="details-section">
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
<script src="js2/xml.js"></script>
<script type="text/javascript">

	$("#sousuo").click(function(){
		var sousuo = $("#s").val();
		if (sousuo) {
			$.ajax({
				url: 'tuijian.php',
				type: 'post',
				dataType: 'json',
				data: {didian: sousuo},
			success:function(arr){
				// var jsonData = eval("("+arr+")"); 
				console.log(arr);
				$("#tuijian_word").html("<p>"+arr['jingdian']+"<p/>"+"<p>"+arr['xiaochi']+"<p/>"+"<p/>"+"<p>"+arr['luxian']+"<p/>");
			},
			error:function(){
             alert("1");
            }

		});

			
		};
	});

	$("#denglu").click(function(){
		if($("#test").html()!="登录"){

			window.location.href="main.php";

		}
		else{
			console.log($("#text").html())
			$.ajax({
				url: 'zhuxiao.php',
				success:function(){
					alert("注销成功");
					$("#text").html("登录");
				},	
		
			});	
		}
	});


var ipt = document.getElementById("ipt");
	var txt = document.getElementById('txt');
	var textarea = document.getElementById("text");
	ipt.onclick = function(){
		var textValue = textarea.value.LTrim();		
		textarea.value="";
		if(textValue.length>0 ){
			var divs = document.createElement("div");
			var imgs = document.createElement("img");
			var ps = document.createElement("p");
			var inputs = document.createElement("input");
			divs.setAttribute("class","creatediv");
			imgs.setAttribute('class',"createimg");
			ps.setAttribute("class","createdivs");
			inputs.setAttribute("class","createinput");
			imgs.src="pic/1.jpg";
			inputs.type="button";
			inputs.value="删除";
			ps.innerHTML=textValue;
			divs.appendChild(imgs);
			divs.appendChild(ps);
			divs.appendChild(inputs);
			if(txt.children.length==0){
				txt.appendChild(divs);

			}else{
				txt.insertBefore(divs,get_firstChild(txt))
			}
			inputs.onclick = function(){
				this.parentNode.parentNode.removeChild(this.parentNode)
			}
		}
		
		

	}

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
