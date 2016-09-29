<?php
$chk_row = $func->getRows("select lv_id from sys_level_risk "
        . " where lv_name = '$_POST[lv_name]' "
        . " AND lv_code = '$_POST[lv_code]' "
        . " AND lv_score = '$_POST[lv_score]' ");
if($chk_row < 1){
$StrSQL = "insert into  sys_level_risk (lv_id,lv_code,lv_name,lv_score)
				values ('','$_POST[lv_code]','$_POST[lv_name]','$_POST[lv_score]') ";
//echo $StrSQL;
$result = mysql_query($StrSQL)or die(mysql_error());

echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('level')."'>";
}else{
echo "<script>alert('ชื่อความเสี่ยงซ้ำ กรุณาบันทึกใหม่')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('level')."'>";    
}
?> 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>