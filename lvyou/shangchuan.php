<?php 
var_dump($_FILES);
  move_uploaded_file($_FILES['upfile']['tmp_name'],"upload/".$_FILES['upfile']['name']);
  echo "上传成功，待审核，3秒后跳转";
  header('Refresh:3,Url=main.php');
?>