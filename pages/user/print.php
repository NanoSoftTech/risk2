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
body {
  background: rgb(204,204,204); 
}
img {
	width: 18cm;
	height: auto;
}
page[size="A4"] {
  background: white;
  width: 21cm;
  height: 29.7cm;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
@media print {
  body, page[size="A4"] {
    margin: 0;
    box-shadow: 0;
  }
}
</style>
<script language="javascript">
    window.print('');
</script>
</head>
<body>
<page size="A4">
<?php
        $sqls = " SELECT 	r.*,c.cat_name,ct.sub_name as csub_name,d.dep_name,ds.sub_name as dsub_name,
				l.lv_name,l.lv_code,u.user_fname,t.sta_name,g.group_name,rt.type_name,im.imp_name,
                                mt.type_name as man_type,u2.user_fname as man_fname
                    from tb_risk r
                    LEFT OUTER JOIN sys_category c ON c.cat_id = r.cat_id
                    LEFT OUTER JOIN sys_sub_category ct ON ct.sub_cat_id = r.sub_cat_id
                    LEFT OUTER JOIN sys_department d ON d.dep_id = r.dep_id
                    LEFT OUTER JOIN sys_sub_department ds ON ds.sub_dep_id = r.sub_dep_id
                    LEFT OUTER JOIN sys_level_risk l ON l.lv_id = r.lv_id
                    LEFT OUTER JOIN sys_status_risk t ON t.sta_id = r.risk_status
                    LEFT OUTER JOIN tb_user u ON u.user_id = r.user_id
                    LEFT OUTER JOIN sys_group_risk g ON g.group_id = r.group_id
                    LEFT OUTER JOIN sys_type_risk rt ON rt.type_id = r.type_id
                    LEFT OUTER JOIN sys_impact im ON im.imp_id = r.imp_id
                    LEFT OUTER JOIN sys_man_type mt ON mt.type_id = r.man_type
                    LEFT OUTER JOIN tb_user u2 ON u.user_id = r.man_id

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
        <td align="left" width="25%"><h3>วันที่ เวลา เกิดเหตุ :</h3></td>
        <td></td>
        <td align="left" ><?php echo $record['risk_datetime'] ;?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%"><h3>รายการความเสี่ยง :</h3></td>
        <td></td>
        <td align="left" ><?php echo $record['cat_name']." : ".$record['csub_name'] ; ?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%"><h3>สถานที่ :</h3></td>
        <td></td>
        <td align="left" ><?php echo $record['pl_name'];?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%"><h3>แจ้งความเสี่ยง ถึงฝ่าย :</h3></td>
        <td></td>
        <td align="left" ><?php echo $record['dep_name']." : ".$record['dsub_name'] ;?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%"><h3>ปัจัยความเสี่ยง : </h3></td>
        <td></td>
        <td align="left" ><?php echo $record['group_name'];?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%"><h3>ประเภทความรุนแรง : </h3></td>
        <td></td>
        <td align="left" ><?php echo $record['type_name'];?></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%"><h3>คาดการณ์ความเสี่ยง : </h3></td>
        <td></td>
        <td align="left" ><?php echo $record['imp_name'];?></td>
        <td width="10%"></td>
    </tr> 
    <tr>
        <td width="10%"></td>
        <td align="left" width="25%"><h3>ระดับความเสี่ยง : </h3></td>
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
    <table border="0" width="auto" style="max-height: 250px;" class="table table-striped"   >
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
<?php if($record['risk_status'] >= 2 ){ ?>
     <table border="0" width="auto" style="max-height: 250px;" class="table table-striped"   >
        <tr>
            <td width="10%"></td>
            <td align="left" colspan="3"><h2>บันทึกการจัดการความเสี่ยง</h2></td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td width="10%"></td>
            <td align="left" colspan="3"><?php echo $record['man_text'] ;?></td>
            <td width="10%"></td>
        </tr>
        <tr>
            <td align="left" colspan="5"></td>
        </tr>
        </table>
        <hr>   
<?php } ?>
    <table border="0" width="100%" class="table table-striped" style="font-size: 3;"   >
    <tr>
        <td align="left" ><?php echo $record['user_fname'] ;?></td>
        <td width="20%" align="left">ผู้ประเมิน : </td>
        <td align="left" ><?php echo $record['man_fname'] ;?></td>
    </tr>    
    <tr>
        <td align="left" colspan="5">วันที่ปรับปรุง :  <?php echo $record['d_update'] ;?></td>
    </tr>
        </table>
</page>
</body>
</html>