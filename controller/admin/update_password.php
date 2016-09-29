<?php
$user_login = $_SESSION['username'];
$user_pass1 = sha1($_POST['password_1']) ;
$user_pass2 = sha1($_POST['password_2']) ;
$user_pass3 = sha1($_POST['password_3']) ;
$old_pass = $func->getTable('tb_user','user_password','user_username',$user_login);
if ($user_pass1 == $old_pass ) { 
    if($user_pass2 == $user_pass3 ){
            $sql = "update tb_user set  user_username = '$user_login',
                                        user_password = '$user_pass2'
                    where user_username = '$user_login' ";
            //echo $sql;
            $result = mysql_query($sql)or die(mysql_error());
            echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
            echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('main')."'>";
    }else{
        echo "<script>alert('รหัสผ่านใหม่ ไม่ตรงกัน')</script>";
        echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('main')."'>";
    }
}else{
echo "<script>alert('รหัสผ่านเก่า ไม่ถูกต้อง')</script>";
//echo " ".$user_pass1." == ".$old_pass." ";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('main')."'>";
}
?>

