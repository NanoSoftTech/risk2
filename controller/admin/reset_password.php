<?php
$StrSQL = "update  tb_user set user_password = '".sha1('123456')."' "
        . " where user_id = '$_GET[getid]' ";
//echo $StrSQL;
$result = mysql_query($StrSQL) or die(mysql_error());
echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('member')."'>";

?> 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <?php //echo $StrSQL."<br>"; ?>
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>