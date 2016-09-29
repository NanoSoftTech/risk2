<?php
ob_start();
session_start();
include_once "../models/config.inc.php"; 
include_once "../models/func_class.php";

$user_login = sha1($_POST['username']);
$user_pass = sha1($_POST['password']) ;
if ($login = sha1('login')) {
    $sql_a = "select *  from tb_user "
			." where user_username = '$user_login' " 
			." and user_password   = '$user_pass' "
                        ." and user_sta        in ('0') ";
    $admin_check = $func->getRows($sql_a);
        if ($admin_check == 1) {
            $res_a = mysql_query($sql_a);
            $rec_a = mysql_fetch_array($res_a);
            $StrSQLA = "INSERT INTO sys_log_table (log_id,log_user,log_ip,log_datetime,log_status) "
                    . "VALUES('','".$rec_a['username']."','".$func->getIP()."','".$func->getDatetimeNow()."','Y');";
            $result = mysql_query($StrSQLA);  
            echo "<meta http-equiv='refresh' content='1; url=../pages/admin/index.php?us=".$rec_a['user_username']."'>";
        } else {
            $sql_u = "select *  from tb_user "
			." where user_username = '$user_login' " 
			." and user_password   = '$user_pass' "
                        ." and user_sta  in ('1','2') ";
    $user_check = $func->getRows($sql_u);
        if ($user_check == 1) {
            $res_u = mysql_query($sql_u);
            $rec_u = mysql_fetch_array($res_u);
            $StrSQLB = "INSERT INTO sys_log_table (log_id,log_user,log_ip,log_datetime,log_status) "
                    . "VALUES('','".$rec_u['username']."','".$func->getIP()."','".$func->getDatetimeNow()."','Y');";
            $result = mysql_query($StrSQLB);
            echo "<meta http-equiv='refresh' content='1; url=../pages/user/index.php?us=".$rec_u['user_username']."'>";
        }else{    
                    echo "<script>alert('ไม่พบข้อมูลในฐานข้อมูล')</script>";
                    echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
        }
    }
}
//end if

?>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <?php //echo $StrSQL."<br>"; ?>
        <img src="../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>