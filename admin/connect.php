<?php
	$dbhost = "localhost"; 
		$dbuser = "root"; 
		$dbpassword = ""; 
		$db = "kienan";
		$tenmien="http://vietclan.net";
		$link = mysql_connect("$dbhost", "$dbuser", "$dbpassword") or die("Could not connect"); 
        mysql_select_db("$db") or die("Could not select database"); 
		mysql_query("SET NAMES 'UTF8'"); 
?>