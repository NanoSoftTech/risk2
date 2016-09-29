<?php
ob_start();
session_start();
include_once "models/config.inc.php"; 
include_once "models/func_class.php";
?>
<html>
<head>
<meta http-equiv="refresh" content="0;url=pages/index.html">
<title>ระบบบันทึกความเสี่ยง <?php echo $func->getTable(hospital,hos_name,hos_id,"1")?></title>
<script language="javascript">
    window.location.href = "pages/index.php"
</script>
</head>
<body>
Go to <a href="pages/index.php">เข้าสู่ระบบความเสี่ยง</a>
</body>
</html>
