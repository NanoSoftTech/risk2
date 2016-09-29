<?php
$chk_row = $func->getRows("select dep_id "
        . " from sys_sub_department "
        . " where sub_name = '$_POST[sub_name]' "
        . " AND dep_id = '$_POST[dep_id]' ");
if($chk_row < 1){
$StrSQL = "insert into  sys_sub_department (sub_dep_id,sub_name,dep_id)
				values ('','$_POST[sub_name]','$_POST[dep_id]') ";
//echo $StrSQL;
$result = mysql_query($StrSQL)or die(mysql_error());

echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('sub_department')."'>";
}else{
echo "<script>alert('ชื่อแผนกซ้ำ กรุณาบันทึกใหม่')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('sub_department')."'>";    
}
?> 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>