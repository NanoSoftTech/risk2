<?php
ob_start();
session_start();
include_once "../../models/config.inc.php"; 
include_once "../../models/func_class.php";
if(!isset($_SESSION['username'])){
    $_SESSION['username'] = $_GET['us'];
    $user_fname = $func->getTable('tb_user','user_fname','user_username',$_SESSION['username']);
    $user_sta = $func->getTable('tb_user','user_sta','user_username',$_SESSION['username']);
    $userid = $func->getTable('tb_user','user_id','user_username',$_SESSION['username']);
    $username = $func->getTable('tb_user','username','user_username',$_SESSION['username']);
}
    $user_fname = $func->getTable('tb_user','user_fname','user_username',$_SESSION['username']);
    $user_sta = $func->getTable('tb_user','user_sta','user_username',$_SESSION['username']);
    $userid = $func->getTable('tb_user','user_id','user_username',$_SESSION['username']);
    $username = $func->getTable('tb_user','username','user_username',$_SESSION['username']);
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบบันทึกความเสี่ยง <?php echo $func->getLast('sys_hospital','hos_name','1');?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<link href="../vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>-->
    <link href="../../vendor/datatables/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <script src="../../vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="../../vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="../../vendor/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
<link href="../../vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<link href="../../vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
<script src="../../vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?page=<?php echo sha1('main')?>">ระบบบันทึกความเสี่ยง ADMIN [ <?php echo $user_fname; ?>] <?php echo $func->getLast('sys_hospital','hos_name','1');?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="?page=<?php echo sha1('profile')?>"><i class="fa fa-user fa-fw"></i> แก้ไขโปรไฟล์</a>
                        </li>
                        <li><a href="?page=<?php echo sha1('password')?>"><i class="fa fa-gear fa-fw"></i> แก้ไขรหัสผ่าน</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="?page=<?php echo sha1('logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->


