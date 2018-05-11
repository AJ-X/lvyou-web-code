<?php 

$conn = new mysqli("localhost","root","","lvyou");
if($conn->connect_error){
	die(("连接失败".$conn->connect_error));
}
mysqli_query($conn,"SET NAMES UTF8");
	$zh = $_COOKIE['user'];
	$sql = "SELECT didian FROM finish WHERE (youke='$zh')";
	$res = $conn->query($sql);


	$sql1 = "SELECT didian FROM wait WHERE (youke='$zh')";
	$res1 = $conn->query($sql1);

	$sql2 = "SELECT * FROM moving WHERE (youke='$zh')";
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
		.done{
			position: absolute;
			z-index: 1002;
			top: 500px;
			left: 900px;

		}
		.list{
			text-align: center;
			z-index: 101;
			position: absolute;
			left: 80px;
			top: 120px;
			width: 1000px;
		}
		.list td{
			border-radius: 3px;
			border: 1px solid black;
			height: 40px;
			line-height: 40px;
		}
		.tag{

		font-size: 13px;
		margin-left: 240px;
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
		.liuyan{
			width: 750px;
			position: absolute;
			z-index: 1;
			margin-top: 500px;
			padding-left: 280px;
		}
		#fenshu{
			z-index: 1003;
			position: absolute;
			top: 40px;
			width: 120px;
			margin-left: 0px;
		}
		#wancheng {

			margin-top: 80px;
    		width: 130px;
    		height: 38px;
    		font-size: 18px;
    		font-family: 微软雅黑;
    		letter-spacing: 8px;
    		padding-left: 12px;
    		border-radius: 5px;
    		background: -webkit-linear-gradient(top, #66B5E6, #2e88c0);
    		background: -moz-linear-gradient(top,#66B5E6, #2e88c0);
    		background: linear-gradient(top, #66B5E6, #2e88c0);
    		background: -ms-linear-gradient(top, #66B5E6, #2e88c0);
    		border: 1px solid #2576A8;
    		box-shadow: 0 1px 2px #B8DCF1 inset, 0 -1px 0 #316F96 inset;
    		color: #fff;
    		text-shadow: 1px 1px 0.5px #22629B;
		}		
	.shangchuan{
			position: absolute;
			top: -5%;
			right: 10%;
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
			width: 210px;
			height:40px;
			line-height: 40px;
			border: 1px solid black;
		}
		.xinxi{
			list-style: none;
		}
		.xinxi li{
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
					游客后台管理中心
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
			
			<h2><span class="icon-user"><a id = "zh" href="#"><?php
					echo $_COOKIE['user'];
				?></a></span></h2>
			<!--无序列表-->
			<ul> 

				<li>
					<a href="appointment/appointment-manager.php" target="xiaoming"><span class="icon-caret-right"></span>订单查询</a>
				</li>

				
			</ul>
		</div>
		
		<div class="admin">
			
			<div>
				<ul class = "xinxi_top">
					<li>
						已完成
					</li>
					<li>
						未支付
					</li>
					<li>
						行程中
					</li>
					<li>导游</li>
				</ul>

				<div>
				<table class = "list">
 					 <tr>
 					   <?php
 					   if ($rs = mysqli_fetch_assoc($res)) {
							
						foreach ($rs as $key => $value) {
							if ($key == "didian") {?>
								<td>
								<?php	echo $value;?>
								</td>
							<?php }
						  	
						}
					}
						?>
 					   <?php
 					     if ($rs = mysqli_fetch_assoc($res1)) {
							
						foreach ($rs as $key => $value) {
							if ($key == "didian") {?>
								<td>
								<?php	echo $value;?>
								</td>
							<?php }
						  	
						}
					}
						?>
 					   <?php
 					   if ($rs = mysqli_fetch_assoc($res2)) {
 					   	
 					  
						foreach ($rs as $key => $value) {
							if ($key == "didian" || $key == "daoyou") {?>
							<td>
								<?php if ( $key == "daoyou") {?>
									
									<span id = "daoyou"><?php	echo $value;?></span>
								<?php } 
								else{ ?>
									<span id = "didian"><?php	echo $value;?></span>
								<?php }?>
								
								</td>

								
							<?php }?>
							
						  	
						<?php }
					}
					else{
						?>
						<td>暂无</td>
						<td>暂无</td>
				<?php 	}
						?>
 					 </tr>
 					
				</table>
			</div>

				
			</div>
			
			
		
		
		<div class = "shangchuan">
			<form action="shangchuan.php" method="post" enctype="multipart/form-data">
				想成为向导吗，提交资料，审核完毕即可：
    			<input type="file" name="upfile">
    			<input type="submit" value="提交">
			</form>
		</div>
		<div class = "done">
			
			 <input placeholder="评分" id = "fenshu">
			<button id = "wancheng">完成行程</button>
			

		</div>
		</div>	

		<div class="liuyan">
			<span>我的留言</span>
			<span class="tag">你最多可以输入30个字符</span>
			<textarea id="text" cols="30" rows="10" maxlength="30" class="text"></textarea><br>
		</div>

	</body>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		$("#wancheng").click(function(){
			var fenshu = $("#fenshu").val();
			var zh = $("#zh").html();
			var liuyan = $("#text").val();
			var daoyou = $("#daoyou").html();
			var didian = $("#didian").html();
			if(fenshu === "" || fenshu ==null){
        		alert("请输入数字");
    		}
			else if(!isNumber(fenshu)){
				alert("请输入数字");
			}
			else{
				window.location = "wancheng.php?fenshu="+fenshu+"&zh="+zh+"&didian="+didian+"&liuyan="+liuyan+"&daoyou="+daoyou;
			}
		});

		function isNumber(val){

    var regPos = /^\d+(\.\d+)?$/; //非负浮点数
    var regNeg = /^(-(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*)))$/; //负浮点数
    if(regPos.test(val) || regNeg.test(val)){
        return true;
    }else{
        return false;
    }

}
  	</script>
</html>
