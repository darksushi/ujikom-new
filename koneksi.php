<?php 
	$sql = mysql_connect("127.0.0.1", "kometdafa", "kometotelo");
	mysql_select_db("db_dafa");


	if ($sql) {
		echo "success";
	}else{
		echo "failed";
	}
?>