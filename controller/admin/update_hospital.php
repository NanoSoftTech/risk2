<?php

$StrSQL = "update  sys_hospital set hos_name = '$_POST[hos_name]', "
        . " hos_code = '$_POST[hos_code]' "
        . " where hos_id = '$_POST[hos_id]' ";
//echo $StrSQL;
$result = mysql_query($StrSQL)or die(mysql_error());

echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('edit_hospital')."'>";
?> 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>