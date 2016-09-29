<?php
$chk_row = $func->getRows("select pl_id from sys_place where pl_name = '$_POST[pl_name]' ");
if($chk_row < 1){
$StrSQL = "update  sys_place set pl_name = '$_POST[pl_name]' "
        . " where pl_id = '$_POST[pl_id]' ";
//echo $StrSQL;
$result = mysql_query($StrSQL)or die(mysql_error());

echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('place')."'>";
}else{
echo "<script>alert('ชื่อสถานที่ซ้ำ กรุณาบันทึกใหม่')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('place')."'>";    
}
?> 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>