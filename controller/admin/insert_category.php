<?php
$chk_row = $func->getRows("select cat_id from sys_category where cat_name = '$_POST[cat_name]' ");
if($chk_row < 1){
$StrSQL = "insert into  sys_category (cat_id,cat_name)
				values ('','$_POST[cat_name]') ";
//echo $StrSQL;
$result = mysql_query($StrSQL)or die(mysql_error());

echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('category')."'>";
}else{
echo "<script>alert('ชื่อหมวดซ้ำ กรุณาบันทึกใหม่')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('category')."'>";    
}
?> 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>