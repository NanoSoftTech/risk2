        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ระบบบันทึกความเสี่ยง</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th class="center">หัวข้อ</th>
                                    <th class="center">หมวด</th>
                                    <th class="center">เรื่อง</th>
                                    <th class="center">แจ้งถึงฝ่าย</th>
                                    <th class="center">สถานะ</th>
                                    <th class="center">VIEW</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sqls = " SELECT 	r.*,c.cat_name,ct.sub_name as csub_name,d.dep_name,ds.sub_name as dsub_name,
                                l.lv_name,l.lv_code,t.sta_name
                                            from tb_risk r
                                            LEFT OUTER JOIN sys_sub_category ct ON ct.sub_cat_id = r.sub_cat_id
                                            LEFT OUTER JOIN sys_category c ON c.cat_id = ct.cat_id
                                            LEFT OUTER JOIN sys_sub_department ds ON ds.sub_dep_id = r.sub_dep_id
                                            LEFT OUTER JOIN sys_department d ON d.dep_id = ds.dep_id
                                            LEFT OUTER JOIN sys_level_risk l ON l.lv_id = r.lv_id
                                            LEFT OUTER JOIN sys_status_risk t ON t.sta_id = r.risk_status "
                                        . " where user_id = '$userid' "
                                        . " and r.risk_status < '3' "
                                        . " order by r.risk_datetime,r.lv_code ";
                                $results = mysql_query($sqls)or die($sqls);
                                while ($record = mysql_fetch_array($results)) {
                    echo "<tr class= 'odd gradeX'>
                            <td>$record[risk_name]</td>
                            <td>$record[cat_name]</td>
                            <td>$record[csub_name]</td>
                            <td>$record[dsub_name]</td>
                            <td>$record[sta_name]</td>
                            <td align='center'><a href='?page=".sha1('view_risk')."&getid=$record[risk_id] '><i class='fa fa-search fa-fw'></i></a></td>
                        </tr>";
                                }
                                ?>
                            </tbody>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                    <!-- /.table-responsive -->
    </div>

</div>
