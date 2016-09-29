<?php
$user_login = sha1($_POST['user_username']);
$user_pass1 = sha1($_POST['password_1']) ;
$user_pass2 = sha1($_POST['password_2']) ;
$sql = "select *  from tb_user where user_username = '$user_login' ";
$check = $func->getRows($sql);
if ($check >= 1) {
    echo "<script>alert('มีผู้ใช้ username นี้แล้ว')</script>";
    echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('register')."'>";   
}else{
    if($user_pass1 != $user_pass2){
            echo "<script>alert('Password ไม่ตรงกัน')</script>";
            echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('register')."'>";  
    }else{
$StrSQL = "insert into  tb_user (user_id,
                                            dep_id,
                                            username,
                                            user_username,
                                            user_password,
                                            user_fname,
                                            user_sta,
                                            date_login)
				values ('',
                                            '$_POST[dep_id]',
                                            '$_POST[user_username]',
                                            '$user_login',
                                            '$user_pass1',
                                            '$_POST[user_fname]',
                                            '$_POST[sta_id]',
                                            '".$func->getDatetimeNow()."') ";
//echo $StrSQL;
$result = mysql_query($StrSQL)or die(mysql_error());

echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('member')."'>";
    }
}

?> 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>