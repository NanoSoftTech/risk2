<?php
$user_login = sha1($_POST['user_username']);
$user_pass1 = sha1($_POST['user_password1']) ;
$user_pass2 = sha1($_POST['user_password2']) ;
$user_pass3 = sha1($_POST['user_password3']) ;
$old_pass = $func->getTable('tb_user','user_password','user_id',$_POST['user_id']);
if ($user_pass1 == $old_pass ) { 
    if($user_pass2 == $user_pass3 ){
            $sql = "update tb_user set  user_username = '$user_login',
                                        user_password = '$user_pass2',
                                        user_name = '$_POST[user_name]',
                                        dep_id = '$_POST[dep_id]',
                                        user_position = '$_POST[user_position]'
                    where user_id = '$_POST[user_id]' ";
            //echo $sql;
            $result = mysql_query($sql)or die(mysql_error());
            echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
            echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('showjobs')."'>";
    }else{
        echo "<script>alert('รหัสผ่านใหม่ ไม่ตรงกัน')</script>";
        echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('showjobs')."'>";
    }
}else{
echo "<script>alert('รหัสผ่านเก่า ไม่ถูกต้อง')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('showjobs')."'>";
}
?>
<img src="images/Loading.gif" alt=""/>
