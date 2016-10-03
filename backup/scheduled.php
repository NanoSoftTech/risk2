<?php
// This script was created by phpMyBackupPro 2.5 (http://www.phpMyBackupPro.net)
// In order to work probably, it must be saved in the directory D:/xampp/htdocs/risk2/backup/.
$_POST['db']=array("db_risk", );
$_POST['dirs']=array("../htdocs/risk2/backup/", );
$_POST['comments']="test backup";
$_POST['tables']="on";
$_POST['data']="on";
$_POST['drop']="on";
$_POST['man_dirs']="|";
$_POST['packed']="on";
$period=(3600*24)*0;
$security_key="303ea88c3a5df3a9259b9478fd8c7235";
// switch to the phpMyBackupPro 2.5 directory
@chdir("D:/xampp/htdocs");
@include("backup.php");
// switch back to the directory containing this script
@chdir("D:/xampp/htdocs/risk2/backup/");
?>