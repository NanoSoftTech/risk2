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

<?php
        $sqls = " SELECT 	r.*,c.cat_name,ct.sub_name as csub_name,d.dep_name,ds.sub_name as dsub_name,
				p.pl_name,l.lv_name,l.lv_code,u.user_fname,t.sta_name
                    from tb_risk r
                    LEFT OUTER JOIN sys_category c ON c.cat_id = r.cat_id
                    LEFT OUTER JOIN sys_sub_category ct ON ct.sub_cat_id = r.sub_cat_id
                    LEFT OUTER JOIN sys_department d ON d.dep_id = r.dep_id
                    LEFT OUTER JOIN sys_sub_department ds ON ds.sub_dep_id = r.sub_dep_id
                    LEFT OUTER JOIN sys_place p ON p.pl_id = r.pl_id
                    LEFT OUTER JOIN sys_level_risk l ON l.lv_id = r.lv_id
                    LEFT OUTER JOIN sys_status_risk t ON t.sta_id = r.risk_status
                    LEFT OUTER JOIN tb_user u ON u.user_id = r.user_id

                    WHERE r.risk_id = '$_GET[getid]'  ";
                $results = mysql_query($sqls)or die($sqls);
                $record = mysql_fetch_array($results);
?>
<div class="container">
    <table border="0" width="100%" class="table table-striped"   >
    <tr>
        <td align="center" colspan="5" ><h2><i class="fa fa-files-o"></i>   ชื่อเรื่อง <?php echo $record['risk_name'] ;?></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%">วันที่ เวลา เกิดเหตุ :</td>
        <td></td>
        <td align="left" ><?php echo $record['risk_datetime'] ;?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%">รายการความเสี่ยง :</td>
        <td></td>
        <td align="left" ><?php echo $record['cat_name']." : ".$record['csub_name'] ; ?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%">สถานที่ :</td>
        <td></td>
        <td align="left" ><?php echo $record['pl_name'];?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%">แจ้งความเสี่ยง ถึงฝ่าย :</td>
        <td></td>
        <td align="left" ><?php echo $record['dep_name']." : ".$record['dsub_name'] ;?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%">ระดับความเสี่ยง :</td>
        <td></td>
        <td align="left" ><?php echo "[ ".$record['lv_code']." ] : ".$record['lv_name'] ;?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td align="left" colspan="5"></td>
    </tr>
    </table>
    <hr>
    <!--รายละเอียดงาน--->
    <table border="0" width="100%" style="max-height: 250px;" class="table table-striped"   >
    <tr>
        <td width="10%"></td>
        <td align="left" colspan="3"><h2>เหตุการณ์ / รายละเอียด</h2></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" colspan="3"><?php echo $record['risk_text'] ;?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td align="left" colspan="5"></td>
    </tr>
    </table>
    <hr>
    <table border="0" width="100%" class="table table-striped"   >
    <tr>
        <td width="10%"></td>
        <td align="left" >ผู้บันทึก : <?php echo $record['user_fname'] ;?></td>
        <td></td>
        <td align="left" >วันที่บันทึก : <?php echo $record['d_update'] ;?></td>
        <td width="10%"></td>
    </tr>    
    <tr>
        <td align="left" colspan="5"></td>
    </tr>
    </table>
