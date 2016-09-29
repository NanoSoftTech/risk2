<?php
$sql = "delete from sys_place where  pl_id='$_GET[getid]' ";	
	$result = mysql_query($sql);
	echo "<script>alert('ลบข้อมูลเรียบร้อยแล้ว')</script>"; 
	echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('place')."'>" 
?>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>