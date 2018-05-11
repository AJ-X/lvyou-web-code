<?php

$conn = new mysqli("localhost", "root", "", "lvyou");
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$daoyou = $_POST["daoyou"];



$sql = "SELECT * FROM daoyou WHERE (didian='$daoyou')";
	$result = $conn->query($sql);
	$rs=mysqli_fetch_array($result);
	//循环输出数组
	
	if ($rs) {

	}
	else {

	}

mysqli_close($conn);
?>