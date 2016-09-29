        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">รายงานความเสี่ยงประจำเดือน
            <?php if(isset($_POST['date_start']) && isset($_POST['date_end'])){?>           
              <a href="rpt_001-print.php?date_start=<?php echo $_POST['date_start'];?>&date_end=<?php echo $_POST['date_end'];?>" 
                 target="_bank" ><i class="fa fa-print"></i></a>
            <?php } ?> 
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
<form action="?page=<?php echo sha1('rpt_001') ?>" method="post" name="frm" id="frm" autocomplete="off" enctype='multipart/form-data' >
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
                        <input type="submit" name="submit" id="submit" class="form-control btn-success " value="ค้นหา">
                    </div>
                </div>
</form>
    </div>
</div>
            <?php if(isset($_POST['date_start']) && isset($_POST['date_end'])){?>
<div class="row">
    <div class="col-lg-12"> 
        <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th class="center">หัวข้อ</th>
                                    <th class="center">หมวด</th>
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
                                        . " WHERE r.risk_datetime between '$_POST[date_start]' AND '$_POST[date_end]' "
                                        . " order by r.risk_status asc ";
                                $results = mysql_query($sqls)or die($sqls);
                                while ($record = mysql_fetch_array($results)) {
                    echo "<tr class= 'odd gradeX'>
                            <td>$record[risk_name]</td>
                            <td>$record[cat_name]</td>
                            <td>$record[csub_name]</td>
                            <td>$record[lv_code]</td>
                            <td>$record[sta_name]</td>
                         </tr>";
                                }
                                ?>
                            </tbody>
                    </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
    </div>
</div>
            <?php } ?>