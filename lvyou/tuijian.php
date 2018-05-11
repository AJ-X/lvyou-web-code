<?php

$conn = new mysqli("localhost", "root", "", "lvyou");
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
mysqli_query($conn,"SET NAMES UTF8");

$didian = $_POST['didian'];


$sql = "SELECT * FROM tuijian WHERE didian ='$didian'";
echo $sql;
$res = $conn->query($sql); 
$rs = mysqli_fetch_array($res);

// $arr['xiaochi'] = $rs['xiaochi'];
// $arr['jingdian'] = $rs['jingdian'];
$results = array();
$results = $rs;
$json = json_encode($results);
echo $json;


?>