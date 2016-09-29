<?php
include_once "../../models/config.inc.php"; 
include_once "../../models/func_class.php";
?>

<html lang="th">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบบันทึกความเสี่ยง <?php echo $func->getLast('sys_hospital','hos_name','1');?></title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/simple-sidebar.css" rel="stylesheet">
    <link href="../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style type="text/css"> 
body{
        display: block ;
        margin: 0px 0px 0px 0px;
        width: 21.0cm;
        height: 29.7cm;
        max-height: 29.7cm;
        max-width: 21.0cm;
}
table{
        font-family: myFirstFont;
        src: url(../../fonts/glyphicons-halflings-regular.woff);
        font-size: 12px;
}
</style>
<script language="javascript">
    window.print('');
</script>
</head>
<body>
<center><h2>
    รายงานความเสี่ยงประจำเดือน แยกหมวด<br>
    ระหว่างวันที่ <?php echo $func->format_date($_GET['date_start'])." ถึง ".$func->format_date($_GET['date_end']) ?></h2>
</center>

            <?php 
            $sqlA = "select cat_id,cat_name from sys_category";
            $resA = mysql_query($sqlA)or die($sqlA);
            while ($recA = mysql_fetch_array($resA)){
            if($func->getRows("select cat_id from tb_risk where cat_id = '$recA[cat_id]' ") >0){
            ?>
                <table width="100%" class="table table-striped table-bordered table-hover" border="1" >
                            <thead>
                                <tr><th align="center" colspan="5"><?php echo $recA['cat_name']; ?></th></tr>
                                <tr>
                                    <th class="center">วันที่</th>
                                    <th class="center">หัวข้อ</th>
                                    <th class="center">เรื่อง</th>
                                    <th class="center">ระดับ</th>
                                    <th class="center">สถานะ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $sqls = " SELECT 	r.*,c.cat_name,ct.sub_name as csub_name,d.dep_name,ds.sub_name as dsub_name,
                            p.pl_name,l.lv_name,l.lv_code,u.user_fname,t.sta_name
                                        from tb_risk r
                                        LEFT OUTER JOIN sys_sub_category ct ON ct.sub_cat_id = r.sub_cat_id
                                        LEFT OUTER JOIN sys_category c ON c.cat_id = ct.cat_id
                                        LEFT OUTER JOIN sys_sub_department ds ON ds.sub_dep_id = r.sub_dep_id
                                        LEFT OUTER JOIN sys_department d ON d.dep_id = ds.dep_id
                                        LEFT OUTER JOIN sys_place p ON p.pl_id = r.pl_id
                                        LEFT OUTER JOIN sys_level_risk l ON l.lv_id = r.lv_id
                                        LEFT OUTER JOIN sys_status_risk t ON t.sta_id = r.risk_status
                                        LEFT OUTER JOIN tb_user u ON u.user_id = r.user_id "
                                        . " WHERE r.risk_datetime between '$_GET[date_start]' AND '$_GET[date_end]' "
                                        . " AND r.cat_id = '$recA[cat_id]' "
                                        . " order by r.risk_status asc ";
                                $results = mysql_query($sqls)or die($sqls);
                                while ($record = mysql_fetch_array($results)) {
                    echo "<tr class= 'odd gradeX'>
                        <td>".$func->format_date($record['risk_datetime'])."</td>
                            <td>$record[risk_name]</td>
                            <td>$record[csub_name]</td>
                            <td>$record[lv_code]</td>
                            <td>$record[sta_name]</td>
                         </tr>";
                                }
                                ?>
                            </tbody>
                    </table>
<br><hr><br>
            <?php } }?>

    <p again="left">พิมพ์วันที่ <?php echo $func->getDatetimeNow() ;?></p>
