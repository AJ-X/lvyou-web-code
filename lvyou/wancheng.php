<?php 
header("Content-type: text/html;charset=utf-8");

$conn = new mysqli("localhost","root","","lvyou");
if($conn->connect_error){
	die(("连接失败".$conn->connect_error));
}
$zh = $_REQUEST['zh'];
$fenshu = $_REQUEST['fenshu'];
$liuyan = $_REQUEST['liuyan'];
$daoyou = $_REQUEST['daoyou'];
$didian = $_REQUEST['didian'];
$conn->query("SET NAMES 'UTF8'"); 
var_dump($daoyou);
$sql = "delete from moving where youke = $zh";
$sql1 = "INSERT INTO `dingdan`(`daoyou`, `didian`, `pinfen`) VALUES ('$daoyou','$didian','$liuyan')";

$res = $conn->query($sql);
if ($res) {
	$res1 = $conn->query($sql1);
	echo "确认完成，1秒后跳转";
	header('Refresh:1,Url=main.php');
}


?>