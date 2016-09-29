<style type="text/css"> img { width: 1000px;height: auto;} </style>
<?php
        $sqls = " SELECT 	r.*,c.cat_name,ct.sub_name as csub_name,d.dep_name,ds.sub_name as dsub_name,
				l.lv_name,l.lv_code,u.user_fname,t.sta_name,g.group_name,rt.type_name,im.imp_name,
                                mt.type_name as man_type_name,u2.user_fname as man_fname
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
                    LEFT OUTER JOIN tb_user u2 ON u2.user_id = r.man_id
                    
                    WHERE r.risk_id = '$_GET[getid]'  ";
                $results = mysql_query($sqls)or die($sqls);
                $record = mysql_fetch_array($results);
?>
<font size="3">
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">บันทึกความเสี่ยง 
                        <a href="print.php?getid=<?php echo $record['risk_id'];?>" target="_bank" ><i class="fa fa-print"></i></a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
<div class="row">
    <div class="col-lg-12"> 
                <div class="col-sm-8 ">
                    <div class="form-group">
                        <label >ชื่อเรื่อง</label>
                        <?php echo $record['risk_name'];?>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >วันที่ เวลา เกิดเหตุ</label>
                        <?php echo $record['risk_datetime'];?>
                    </div>
                </div>
                <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >รายการความเสี่ยง</label>
                        <?php echo $record['cat_name']." : ".$record['csub_name'] ; ?>
                    </div>
                </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >สถานที่</label>
                    <?php echo $record['pl_name'];?>
                    </div>
            </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >แจ้งความเสี่ยง ถึงฝ่าย</label>
                <?php echo $record['dep_name']." : ".$record['dsub_name'] ;?>
                    </div>
            </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >ปัจจัยความเสี่ยง</label>
                        <?php echo $record['type_name'] ;?>
                    </div>
            </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >ประเภทความรุนแรง</label>
                        <?php echo $record['group_name'] ;?>
                    </div>
            </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >คาดการณ์ความเสี่ยง</label>
                        <?php echo $record['imp_name'] ;?>
                    </div>
            </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >ระดับความเสี่ยง</label>
                        <?php echo "[ ".$record['lv_code']." ] : ".$record['lv_name'] ;?>
                    </div>
            </div>
    
                 <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >เหตุการณ์ / รายละเอียด </label>
                        <div class="form-group">
                            <?php echo $record['risk_text'];?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >ผู้บันทึก</label>
                        <div class="form-group">
                            <?php echo $record['user_fname'] ;?>
                        </div>     
                    </div>
                </div>
<?php if($record['risk_status'] >= 2 ){ ?>
                 <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >บันทึกการจัดการความเสี่ยง</label>
                        <div class="form-group">
                            <?php echo $record['man_text'];?>
                        </div>
                    </div>
                </div> 
                 <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >ประเภทการจัดการความเสี่ยง</label>
                        <div class="form-group">
                            <?php echo $record['man_type_name'];?>
                        </div>
                    </div>
                </div>  
                <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >ผู้ตรวจสอบ</label>
                        <div class="form-group">
                            <?php echo $record['man_fname'];?>
                        </div>
                    </div>
                </div> 
<?php } ?>
                <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >วันที่บันทึก</label>
                        <div class="form-group">
                            <?php echo $record['d_update'] ;?>
                        </div>     
                    </div>
                </div>
        </font>        

    </div>
</div>
        </div>
