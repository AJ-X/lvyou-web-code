<?php
header("Content-type: text/html;charset=utf-8");
$conn = new mysqli("localhost", "root", "", "lvyou");
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$conn->query("SET NAMES 'UTF8'");  
$zh = $_REQUEST['zh'];
$sql0 = "select weiwancheng from daoyou where zhanghao = '$zh'";
$res0 = $conn->query($sql0);
$rs = mysqli_fetch_assoc($res0);
$wwc = $rs['weiwancheng'];

$sql = "update daoyou set weiwancheng = '暂无'  where zhanghao = '$zh'";
$res = $conn->query($sql);
$sql1 = "INSERT INTO `dingdan`(`daoyou`, `didian`, `pinfen`) VALUES ('$zh','$wwc','0')";
$res1 = $conn->query($sql1);
var_dump($res1);
if ($res) {
	if ($res1) {
		echo "接单成功，1秒后跳转";
		header('Refresh:1,Url=main_dao.php'); 
	}
	
}
?>