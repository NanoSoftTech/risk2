<?php
$chk_row = $func->getRows("select dep_id from sys_department where dep_name = '$_POST[dep_name]' ");
if($chk_row < 1){
$StrSQL = "insert into  sys_department (dep_id,dep_name)
				values ('','$_POST[dep_name]') ";
//echo $StrSQL;
$result = mysql_query($StrSQL)or die(mysql_error());

echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('department')."'>";
}else{
echo "<script>alert('ชื่อแผนกซ้ำ กรุณาบันทึกใหม่')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('department')."'>";    
}
?> 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>