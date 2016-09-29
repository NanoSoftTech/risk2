<?php
$sql = "OPTIMIZE TABLE `sys_category`, `sys_department`,"
        . " `sys_hospital`, `sys_level_risk`, `sys_log_table`, `sys_place`,"
        . " `sys_status_risk`, `sys_sub_category`, `sys_sub_department`,"
        . " `sys_user_status`, `tb_risk`, `tb_user`; "
        . " "
        . " REPAIR TABLE `sys_category`, `sys_department`, `sys_hospital`,"
        . " `sys_level_risk`, `sys_log_table`, `sys_place`, `sys_status_risk`,"
        . " `sys_sub_category`, `sys_sub_department`, `sys_user_status`,"
        . " `tb_risk`, `tb_user`; ";	
	$result = mysql_query($sql);
	echo "<script>alert('ปรับปรุงตาราง เรียบร้อยแล้ว')</script>"; 
	echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('main')."'>";
?>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>
