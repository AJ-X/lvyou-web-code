<?php
	setcookie("user","", time()-36000);
	setcookie("user_dao","", time()-36000);

	header('Refresh:1,Url=index.php'); 
?>