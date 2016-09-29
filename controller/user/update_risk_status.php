<?php
$get_date = $func->getDatetimeNow();
$StrSQL = "update  tb_risk set "
        . " risk_status = '$_POST[risk_status]', "
        . " man_text = '$_POST[man_text]', "
        . " man_type = '$_POST[man_type]', "
        . " d_update = '$get_date', "
        . " man_id = '$userid' "
        . " where  risk_id = '$_POST[risk_id]' ";
//echo $StrSQL;
$result = mysql_query($StrSQL) or die(mysql_error());
echo "<script>alert('อัพเดทข้อมูลเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('show_risk')."'>";

?> 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <?php //echo $StrSQL."<br>"; ?>
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>