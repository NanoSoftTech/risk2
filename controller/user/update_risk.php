<?php
$risk_datetime = $_POST['risk_date']." ".$_POST['risk_time'];
$cat_id = $func->getTable('sys_sub_category','cat_id','sub_cat_id',$_POST['sub_cat_id']);
$dep_id = $func->getTable('sys_sub_department','dep_id','sub_dep_id',$_POST['sub_dep_id']);
$lv_code = $func->getTable('sys_level_risk','lv_code','lv_id',$_POST['lv_id']);
$get_id = $func->getTable('tb_user','user_id','user_username',$_SESSION['username']);
$get_date = $func->getDatetimeNow();
$risk_status = "1";
 
$StrSQL = "update tb_risk set  risk_datetime =  '$risk_datetime',
                       risk_name     =  '$_POST[risk_name]', 
                       cat_id        =  '$cat_id', 
                       sub_cat_id    =  '$_POST[sub_cat_id]', 
                       dep_id        =  '$dep_id', 
                       sub_dep_id    =  '$_POST[sub_dep_id]', 
                       pl_name       =  '$_POST[pl_name]', 
                       lv_id         =  '$_POST[lv_id]', 
                       lv_code       =  '$lv_code', 
                       user_id       =  '$get_id',
                       type_id       = '$_POST[type_id]',
                       group_id      = '$_POST[group_id]' ,  
                       imp_id        = '$_POST[imp_id]',
                       risk_text     =  '$_POST[risk_text]',
                       risk_status   =  '$risk_status', 
                       d_update      =  '$get_date'  "
        . " where risk_id = '$_POST[risk_id]' ";
//echo $StrSQL;
$result = mysql_query($StrSQL)or die(mysql_error());

echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('list_risk')."'>";

?> 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <?php // echo $StrSQL."<br>";?>
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>