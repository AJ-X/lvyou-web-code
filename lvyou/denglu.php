<?php

$conn = new mysqli("localhost", "root", "", "lvyou");
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 


$zh=$_POST["form-first-name"];
$mm=$_POST["form-last-name"];



$sql = "SELECT * FROM youke WHERE (zhanghao='$zh') AND (mima='$mm')";
	$result = $conn->query($sql);
	$rs=mysqli_fetch_array($result);
	//循环输出数组
	
	if ($rs) {
	setcookie("user", $zh, time()+36000);
		$arr["user"]=$rs['zhanghao'];
		echo "登录成功，1秒后跳转";
		header('Refresh:1,Url=yonghu.php'); 
	}
	else {	
		$sql1 = "SELECT * FROM daoyou WHERE (zhanghao='$zh') AND (mima='$mm')";
		$result1 = $conn->query($sql1);
		$rs1=mysqli_fetch_array($result1);
		if ($rs1) {
			setcookie("user_dao", $zh, time()+36000);
			$arr["user"]=$rs['zhanghao'];
			echo "登录成功，1秒后跳转";
			header('Refresh:1,Url=main_dao.php'); 

		}
		else{
			echo "string";
		}
	}

mysqli_close($conn);
?>