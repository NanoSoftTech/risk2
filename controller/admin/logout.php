<?php

$StrSQLB = "INSERT INTO sys_log_table (log_id,log_user,log_ip,log_datetime,log_status) "
                    . "VALUES('','$username','".$func->getIP()."','".$func->getDatetimeNow()."','N');";
            $result = mysql_query($StrSQLB)or die(mysql_error());
session_destroy();
$_SESSION['username'] ="";
echo "<meta http-equiv='refresh' content='1; url=../../index.php'>"
?>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <?php //echo $StrSQL."<br>"; ?>
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>