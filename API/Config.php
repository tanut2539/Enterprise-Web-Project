<?php
		$host = "localhost";
		$user = "nozeedco_uclass";
		$pw = "9t3o0e5y";
		$db = "nozeedco_uclass";
		$connect = mysql_connect($host,$user,$pw);
		if(!$connect)
		{
			echo "<h3>ไม่สามารถเชื่อมต่อฐานข้อมูลได้</h3>";
			exit();
		}
		mysql_db_query($db,'SET NAMES UTF8');
?>