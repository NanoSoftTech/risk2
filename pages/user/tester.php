<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
<?php
$risk_datetime = $_POST['risk_date']." ".$_POST['risk_time'];
$cat_id = $func->getTable('sys_sub_category','cat_id','sub_cat_id',$_POST['sub_cat_id']);
$dep_id = $func->getTable('sys_sub_department','dep_id','sub_dep_id',$_POST['sub_dep_id']);
$lv_code = $func->getTable('sys_level_risk','lv_code','lv_id',$_POST['lv_id']);
$get_id = $func->getTable('tb_user','user_id','user_username',$_SESSION['username']);
$get_date = $func->getDatetimeNow();
$risk_status = "1";

$StrSQL = "insert into  tb_risk (risk_id,
                                    risk_datetime,
                                    risk_name, 
                                    cat_id, 
                                    sub_cat_id,
                                    dep_id, 
                                    sub_dep_id,
                                    pl_name, 
                                    lv_id,
                                    lv_code,
                                    type_id,
                                    group_id,
                                    im_id,
                                    user_id,
                                    risk_text,
                                    man_text,
                                    man_type,
                                    mam_id,
                                    risk_status,
                                    d_update) 
                                VALUES ('',
                                '$risk_datetime',
                                '$_POST[risk_name]', 
                                '$cat_id', 
                                '$_POST[sub_cat_id]', 
                                '$dep_id', 
                                '$_POST[sub_dep_id]', 
                                '$_POST[pl_name]', 
                                '$_POST[lv_id]', 
                                '$lv_code',
                                '$_POST[type_id]',
                                '$_POST[group_id]',
                                '$_POST[im_id]',
                                '$get_id',
                                '$_POST[risk_text]',
                                '',
                                '',
                                '',
                                '$risk_status', 
                                '$get_date' ) ";
echo $StrSQL;
?> 

    </div>
</div>



