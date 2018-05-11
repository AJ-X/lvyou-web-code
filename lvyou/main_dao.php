<?php 

$conn = new mysqli("localhost","root","","lvyou");
if($conn->connect_error){
	die(("连接失败".$conn->connect_error));
}
mysqli_query($conn,"SET NAMES UTF8");
	$zh = $_COOKIE['user_dao'];
	$sql = "SELECT * FROM daoyou WHERE (zhanghao='$zh')";
	$res = $conn->query($sql);

	
	$sql1 = "SELECT * FROM dingdan WHERE (daoyou='$zh')";
	$res1 = $conn->query($sql1);
	$sql2 = "SELECT * FROM dingdan WHERE (daoyou='$zh')";
	$res2 = $conn->query($sql2);


?>
<html>	
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="adminassets/css/mainstyle.css" />
		<link rel="stylesheet" href="adminassets/css/pintuer.css" />	
		<script type="text/javascript">
			function byebye()
			{
				alert("再见，亲爱的管理员！")
		 	}
		</script>
		<style type="text/css">
		#jiedan{
			margin-left: 170px;
			margin-top: 30px;
		}
		
		.xinxi_top{
			margin-top: 30px;
			list-style: none;
		}
		.xinxi_top li{
			box-shadow:10px 10px 5px #444;
			-moz-box-shadow:10px 10px 5px #444;
			-webkit-box-shadow:10px 10px 5px #444;
			border-radius: 5px;
			float: left;	
			margin-left: 50px;
			font-size: 18px;
			text-align: center;
			width: 300px;
			height:40px;
			line-height: 40px;
			border: 1px solid black;
		}
		.xinxi_wc{
			float: left;
			height: 700px;
			width: 720px;
			list-style: none;
		}
		.xinxi_wc li{
			box-shadow:10px 10px 5px #444;
			-moz-box-shadow:10px 10px 5px #444;
			-webkit-box-shadow:10px 10px 5px #444;
			border-radius: 5px;
			float: left;
			margin-top: 10px;	
			margin-left: 50px;
			font-size: 18px;
			text-align: center;
			width: 300px;
			height:40px;
			line-height: 40px;
			border: 1px solid black;
		}
		
		.xinxi_wcc{
			float: left;
			margin-left: -20px;
			height: 700px;
			width: 300px;
			list-style: none;
		}
		.xinxi_wcc li{
			box-shadow:10px 10px 5px #444;
			-moz-box-shadow:10px 10px 5px #444;
			-webkit-box-shadow:10px 10px 5px #444;
			border-radius: 5px;
			float: left;
			margin-top: 10px;	
			margin-left: 50px;
			font-size: 18px;
			text-align: center;
			width: 300px;
			height:40px;
			line-height: 40px;
			border: 1px solid black;
		}
		</style>
	</head>
	
	<body style="background-color: #F2F9FD;">
		
		<div class="header">
			
			<div class="logo margin-big-left fadein-top">
				<h1>
					向导后台管理中心
					<img src="adminassets/img/y.jpg" height="50px" class="radius-circle rotate-hover"/>
				</h1>
			</div>

			<div class="head-1 margin-big-top" style="float: left; margin-left: 17px;" >
				&nbsp;&nbsp;&nbsp;
				<a class="button button-little bg-red" href="index.php" onclick="byebye()">
					<span class="icon icon-power-off"></span>退出到首页</a>
			</div>
			
		</div>
		
		<!--左侧-->
		<div class="leftnav">
			<div class="leftnav-title">
				<strong><span class="icon-list"></span>菜单列表</strong>
			</div>
			
			<h2><span class="icon-user">
				<a id = "zh" href="#"><?php
					echo $_COOKIE['user_dao'];
				?></a>
				
			</span></h2>
			<!--无序列表-->
			<ul> 

				<li>
					<a href="appointment/appointment-manager.php" target="xiaoming"><span class="icon-caret-right"></span>订单查询</a>
				</li>
<!-- 				<li>
					<a href="" target="xiaoming"><span class="icon-caret-right"></span>删除反馈数据</a>
				</li> -->
				
			</ul>
		</div>
		
		<div class="admin">
			
			<div>
				<ul class = "xinxi_top">
					<li>
						已完成订单
					</li>
					<li>
						个人评分
					</li>
					<li>
						待接订单
					</li>
				</ul>

				<ul class = "xinxi_wc">
					
						<?php while ($rs=mysqli_fetch_assoc($res1)) { ?>
						<li>
				<?php 
				
					echo $rs['didian'];

			
				?>
						</li>
				<li>
					
				<?php
					echo $rs['pinfen'];
					?>
					</li>
			<?php } ?>
			</ul>
			
			<ul class = "xinxi_wcc">	
					<li id = "wwc">
						<?php
							$rs=mysqli_fetch_assoc($res); 
						foreach ($rs as $key => $value) {
							if ($key == "weiwancheng") {
								echo $value;
							}
						  	
						}
						?>
					
					</li>
					<button id ="jiedan">点击接单</button>
				</ul>
			</div>
			
			
		</div>
			
		
		
		
		
	</body>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		$("#jiedan").click(function(){
			var zh = $("#zh").html();
			window.location = "jiedan.php?zh="+zh;
		});

    </script>
</html>
