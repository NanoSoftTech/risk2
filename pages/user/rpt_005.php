
  
<?php
 if(isset($_POST['date_start']) && isset($_POST['date_end'])){
$text_sql = " AND risk_datetime Between '$_POST[date_start] 00:00:00'  and  '$_POST[date_end] 23:59:59' ";
$date_show = "ระหว่างวันที่ ".$func->format_date($_POST['date_start'])." ถึง ".$func->format_date($_POST['date_end']);
}
?>

<?php
$sql_x = "select sta_name from sys_status_risk where sta_id != '4' ";
$res_x = mysql_query($sql_x);
$text_x =" ";
$num_x =1;
while ($rec_x = mysql_fetch_array($res_x)){
    if($rec_x['sta_name'] != ""){
$text_x .= "'";
$text_x .= $rec_x['sta_name'];
$text_x .= "',";
$text_name[$num_x] = $rec_x['sta_name'];
$num_x++;
    }
}

for($n=1;$n<$num_x;$n++){
    $sql[$n] = "select risk_status from tb_risk where risk_status = '$n' ";
    if(isset($_POST['date_start']) && isset($_POST['date_end'])){ $sql[$n] .= $text_sql;}
    $count[$n] = $func->getRows($sql[$n]);
    $text_y[$n] = "$count[$n]";
}
?>

<?php 
$text_data = "";
    for($y=1;$y<$num_x;$y++){
    $text_data .= "{";
    $text_data .= "X : ' ";
    $text_data .= $text_name[$y];
    $text_data .=" ' ,";
    $text_data .="Y : ".$text_y[$y]." },";
    }
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">กราฟรายงาน แยกสถานะ
            <?php  if(isset($_POST['date_start']) && isset($_POST['date_end'])){           
             echo "<h3>ระหว่างวันที่ ".$func->format_date($_POST['date_start'])." - ".$func->format_date($_POST['date_end']."</h3>");
             } ?> 
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
        <h3>กำหนดช่วงวันที่</h3>
    </div>
    <div class="panel-body">
        <form action="?page=<?php echo sha1('rpt_005') ?>" method="post" name="frm" id="frm" autocomplete="off">
        <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >ตั้งแต่วันที่</label>
                        <input type="date" name="date_start" id="date_start" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >ถึงวันที่</label>
                        <input type="date" name="date_end" id="date_end" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label >&zwj;</label>
                        <input type="hidden" id="report" name="report" value="1">
                        <input type="submit" name="submit" id="submit" class="form-control btn-success " value="ค้นหา">
                    </div>
                </div>
        </form>   
    </div>
</div>
<?php if(!isset($_POST['date_start']) && !isset($_POST['date_end'])){ ?>
    <div class="row">
        <div class="col-sm-4 col-md-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            แจ้งเตือน
                        </div>
                        <div class="panel-body">
                            <p style="font-size: 20;font-style: bold;">  กรุณาเลือกช่วงวันที่</p>
                        </div>
                    </div>
        </div>
    </div>
<?php } ?>    
<div class="row">
    <div class="col-lg-12"> 
        <div class="panel-body">    
            <div id="bar-example"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
Morris.Bar({
  element: 'bar-example',
  data: [
<?php echo $text_data; ?>
  ],
  xkey: 'X',
  ykeys: ['Y',],
  labels: ['สถานะ',]
});
</script>



