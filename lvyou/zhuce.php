<?php
$conn=new mysqli("localhost","root","","lvyou");
if($conn->connect_error){
	die("连接失败".$conn->$connect_error);
}
$zh=$_POST['form-first-name'];
$mm=$_POST['form-last-name'];

mysqli_query($conn,"SET NAMES UTF8");
$sql = "SELECT * FROM youke WHERE (zhanghao='$zh')";
$result1 = $conn->query($sql);
$rs1=mysqli_fetch_array($result);
if (!$rs1) {	
	$sql1="INSERT INTO youke (zhanghao,mima) VALUES ('$zh','$mm')";
$result1 = $conn->query($sql1);
if ($result1 ) {
	setcookie("user", $zh, time()+36000);
	echo "注册成功";
	header('Refresh:1,Url=yonghu.php'); 
}

}
else{
	echo "账号已存在，3秒后自动跳转";
	header('Refresh:3,Url=denglu.html'); 
}

?>