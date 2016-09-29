<?php
ob_start();
session_start();
//session_destroy();
$_SESSION['username'] ="";
$StrSQLB = "INSERT INTO sys_log_table (log_id,log_user,log_ip,log_datetime,log_status) "
                    . "VALUES('','".$rec_a['user_username']."','".$func->getIP()."','".$func->getDatetimeNow()."','N');";
            $result = mysql_query($StrSQLB)or die(mysql_error());
echo "<meta http-equiv='refresh' content='1; url=index.php'>"
?>
<img src="../images/loading.gif" alt=""/>