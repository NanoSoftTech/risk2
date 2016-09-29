<?php 
	$hostname="127.0.0.1"; 
	$user = "root"; 
	$pwd = "123456";  
	$db = "db_risk";  
//	$hostname="localhost"; 
//	$user="sopmoei"; 
//	$pwd ="sopmoei5811207";  
//	$db="db_jobs";  
	
	$link_db = mysql_connect ($hostname,$user,$pwd) or die ("ERROR_101!");
        mysql_select_db($db,$link_db) or die ("ERROR_102!") ;
	$charset = "SET NAMES UTF8";
	mysql_query($charset) or die('ERROR_103!'.mysql_error());
	if (!mysql_select_db ($db,$link_db)) die ("ERROR_104!");
        


?>